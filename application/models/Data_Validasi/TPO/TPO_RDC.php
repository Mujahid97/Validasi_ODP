<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TPO_RDC extends CI_Model {
  public function filter($search, $limit, $start, $order_field, $order_ascdesc){
    $this->db->like('id', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('tgl_validasi', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('sto', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('odp', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('kapasitas', $search);
    $this->db->or_like('ip_gpon', $search);
    $this->db->or_like('slot_port', $search);
    $this->db->or_like('port_odp', $search);
    $this->db->or_like('onu_id', $search);
    $this->db->or_like('pots_internet', $search);
    $this->db->or_like('status', $search);
    $this->db->or_like('qr_dc', $search);
    $this->db->or_like('qr_port', $search);
    $this->db->or_like('qr_odp', $search);
    $this->db->or_like('tagging_odp', $search);
    $this->db->or_like('keterangan', $search);
    $this->db->or_like('estetika', $search);
    $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
    $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT

    return $this->db->get('SHEET_TPO')->result_array(); // Eksekusi query sql sesuai kondisi diatas
  }

  public function count_all(){
    return $this->db->count_all('SHEET_TPO'); // Untuk menghitung semua data siswa
  }

  public function count_filter($search){
    $this->db->like('id', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('tgl_validasi', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('sto', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('odp', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('kapasitas', $search);
    $this->db->or_like('ip_gpon', $search);
    $this->db->or_like('slot_port', $search);
    $this->db->or_like('port_odp', $search);
    $this->db->or_like('onu_id', $search);
    $this->db->or_like('pots_internet', $search);
    $this->db->or_like('status', $search);
    $this->db->or_like('qr_dc', $search);
    $this->db->or_like('qr_port', $search);
    $this->db->or_like('qr_odp', $search);
    $this->db->or_like('tagging_odp', $search);
    $this->db->or_like('keterangan', $search);
    $this->db->or_like('estetika', $search);

    return $this->db->get('SHEET_TPO')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
  }
}