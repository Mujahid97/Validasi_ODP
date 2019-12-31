import MySQLdb as sql
import sys
import gspread
from oauth2client.service_account import ServiceAccountCredentials

scope = ['https://spreadsheets.google.com/feeds', 'https://www.googleapis.com/auth/drive']
creds = ServiceAccountCredentials.from_json_keyfile_name('client_secret.json', scope)
client = gspread.authorize(creds)

spreadsheets_name = [
    "DMO", 
    "GBG", 
    #"IJK",  # Dropped
    #"JGR",  # Dropped
    "MYR", 
    "RKT", 
    "TPO", 
    "WRU"
]

def regenerate_db():
    for name in spreadsheets_name:
        drop_stmt = f"DROP TABLE IF EXISTS SHEET_{name}"
        ddl_stmt = f"""
            CREATE TABLE `SHEET_{name}` (
            `id` int(11) NOT NULL,
            `tgl_validasi` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
            `sto` varchar(24) COLLATE utf8mb4_general_ci NOT NULL,
            `odp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
            `kapasitas` int(11) NOT NULL,
            `ip_gpon` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `slot_port` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `port_odp` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `onu_id` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `pots_internet` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `status` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
            `qr_dc` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `qr_port` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `qr_odp` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `tagging_odp` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `keterangan` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
            `estetika` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
            ALTER TABLE `{name}` ADD PRIMARY KEY (`id`);
            ALTER TABLE `{name}` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
        """

        print(f'---------REGENERATE {name}---------')
        try:
            con = sql.connect('localhost', 'kovid', 'akmalsukakovidgoyal', 'validasi_dc', charset='utf8')
            cur = con.cursor()
            
            cur.execute(drop_stmt)
            cur.execute(ddl_stmt)

            con.close()

        except sql._exceptions.Error as e:
            print(e)
            sys.exit(-1)


def refill_db(): 
    for name in spreadsheets_name:
        sheet = client.open(name).get_worksheet(0)
        data = sheet.get_all_records()
        print(f'---------REFILL {name}---------')
        try:
            con = sql.connect('localhost', 'kovid', 'akmalsukakovidgoyal', 'validasi_dc', charset='utf8')
            cur = con.cursor()

            j = 1
            for row in data:
                #print(f"({j}, {row['TGL VALIDASI']}, {row['STO']}, {row['ODP']}, {row['KAPASITAS']}, {row['IP GPON (OLT)']}, {row['SLOT / PORT']}, {row['PORT (ODP)']}, {row['ONU ID']}, {row['POTS / INTERNET']}, {row['STATUS']}, {row['QR DC']}, {row['QR PORT']}, {row['QR ODP']}, {row['TAGGING ODP']}, {row['KETERANGAN']}, {row['ESTETIKA']})")
                cur.execute("INSERT INTO SHEET_" + name + u" VALUES ('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')" % (j, row['TGL VALIDASI'], row['STO'], row['ODP'], row['KAPASITAS'], row['IP GPON (OLT)'], row['SLOT / PORT'], row['PORT (ODP)'], row['ONU ID'], row['POTS / INTERNET'], row['STATUS'], row['QR DC'], row['QR PORT'], row['QR ODP'], row['TAGGING ODP'].replace('\'', '\\\''), row['KETERANGAN'], row['ESTETIKA']))
                j = j + 1

            con.commit()
            con.close()

        except sql._exceptions.Error as e:
            print(e)
            sys.exit(-1)


def gen_details_view():
    for name in spreadsheets_name:
        drop_stmt = f"DROP TABLE IF EXISTS DETAIL_{name}"
        ddl_stmt = f"""
        CREATE TABLE DETAIL_{name} AS
        SELECT SHEET_{name}.tgl_validasi, SHEET_{name}.odp, 
                SIIS_{name}.IS_TOTAL AS CAP_PREV, 
                SIIS_{name}.USED AS USED_PREV, 
                SUM(CASE WHEN SHEET_{name}.status='ODP KOSONG' THEN 0 ELSE 1 END) AS CAP_NOW, 
                SUM(CASE WHEN SHEET_{name}.status='USED' THEN 1 ELSE 0 END) AS USED_NOW,
                SUM(CASE WHEN SHEET_{name}.status='IDLE' THEN 1 ELSE 0 END) AS IDLE,
                SUM(CASE WHEN SHEET_{name}.status='OFFLINE' THEN 1 ELSE 0 END) AS `OFFLINE`,
                SUM(CASE WHEN SHEET_{name}.status='LOSS' THEN 1 ELSE 0 END) AS `LOSS`,
                SHEET_{name}.keterangan AS COMMENT
        FROM SIIS_{name}, SHEET_{name} 
        WHERE SIIS_{name}.ODP_NAME=SHEET_{name}.odp 
        GROUP BY SHEET_{name}.odp;
        """
        print(f'---------DETAILS TABLE FOR {name}---------')
        try:
            con = sql.connect('localhost', 'kovid', 'akmalsukakovidgoyal', 'validasi_dc', charset='utf8')
            cur = con.cursor()

            cur.execute(drop_stmt)
            cur.execute(ddl_stmt)

            con.commit()
            con.close()

        except sql._exceptions.Error as e:
            print(e)
            sys.exit(-1)


def gen_tmp_view():
    for name in spreadsheets_name:
        ddl_stmt = f"""
            CREATE OR REPLACE VIEW TEMP_{name} AS 
            SELECT SUBSTRING_INDEX(SIIS_{name}.ODP_NAME, '/', 1) AS odc, COUNT(SIIS_{name}.ODP_NAME) as CNT 
            FROM `SIIS_{name}` GROUP BY odc
        """
        try:
            con = sql.connect('localhost', 'kovid', 'akmalsukakovidgoyal', 'validasi_dc', charset='utf8')
            cur = con.cursor()

            cur.execute(ddl_stmt)

            con.commit()
            con.close()

        except sql._exceptions.Error as e:
            print(e)
            sys.exit(-1)


def gen_validation_view():
    for name in spreadsheets_name:
        drop_stmt = f"DROP TABLE IF EXISTS VALIDASI_{name}"
        ddl_stmt = f"""
        CREATE TABLE VALIDASI_{name} AS
        SELECT SUBSTRING_INDEX(DETAIL_{name}.odp, '/', 1) AS odc,
            TEMP_{name}.CNT AS jml_odp,
            COUNT(DETAIL_{name}.odp) AS validated,
            SUM(DETAIL_{name}.CAP_PREV) AS cap_prev, 
            SUM(DETAIL_{name}.USED_PREV) AS used_prev,
            SUM(SIIS_{name}.AVAI) AS idle_prev,
            SUM(SIIS_{name}.RSK) AS loss_prev,
            SUM(DETAIL_{name}.CAP_NOW) AS cap_now, 
            SUM(DETAIL_{name}.USED_NOW) AS used_now, 
            SUM(DETAIL_{name}.IDLE) AS idle_now, 
            SUM(DETAIL_{name}.`OFFLINE`) AS offline, 
            SUM(DETAIL_{name}.LOSS) AS loss_now
        FROM `DETAIL_{name}`, `SIIS_{name}`, `TEMP_{name}`
        WHERE DETAIL_{name}.odp=SIIS_{name}.ODP_NAME
        AND SUBSTRING_INDEX(DETAIL_{name}.odp, '/', 1)=TEMP_{name}.odc
        GROUP BY odc;
        """
        print(f'---------VALIDATION TABLE FOR {name}---------')
        try:
            con = sql.connect('localhost', 'kovid', 'akmalsukakovidgoyal', 'validasi_dc', charset='utf8')
            cur = con.cursor()

            cur.execute(drop_stmt)
            cur.execute(ddl_stmt)

            con.commit()
            con.close()

        except sql._exceptions.Error as e:
            print(e)
            sys.exit(-1)

if __name__ == "__main__":
    regenerate_db()
    refill_db()
    gen_details_view()
    gen_tmp_view()
    gen_validation_view()

