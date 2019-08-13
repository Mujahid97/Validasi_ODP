<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JGR_MODEL extends CI_Model {
  public function filter($search, $limit, $start, $order_field, $order_ascdesc){
    $this->db->like('REGIONAL', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('WITEL', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('DATEL', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('STO', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('STO_DESC', $search);
    $this->db->or_like('NOSS_ID', $search);
    $this->db->or_like('ODP_INDEX', $search);
    $this->db->or_like('ODP_NAME', $search);
    $this->db->or_like('LATITUDE', $search);
    $this->db->or_like('LONGITUDE', $search);
    $this->db->or_like('CLUSNAME', $search);
    $this->db->or_like('CLUSTERSTATUS', $search);
    $this->db->or_like('AVAI', $search);
    $this->db->or_like('USED', $search);
    $this->db->or_like('RSV', $search);
    $this->db->or_like('RSK', $search);
    $this->db->or_like('IS_TOTAL', $search);
    $this->db->or_like('ODP_INFO', $search);
    $this->db->or_like('UPDATE_DATE', $search);
    $this->db->or_like('PERIODE', $search);
    $this->db->or_like('STATUS', $search);
    $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
    $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT

    return $this->db->get('SIIS_JGR')->result_array(); // Eksekusi query sql sesuai kondisi diatas
  }

  public function count_all(){
    return $this->db->count_all('SIIS_JGR'); // Untuk menghitung semua data siswa
  }

  public function count_filter($search){
    $this->db->like('REGIONAL', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('WITEL', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('DATEL', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('STO', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('STO_DESC', $search);
    $this->db->or_like('NOSS_ID', $search);
    $this->db->or_like('ODP_INDEX', $search);
    $this->db->or_like('ODP_NAME', $search);
    $this->db->or_like('LATITUDE', $search);
    $this->db->or_like('LONGITUDE', $search);
    $this->db->or_like('CLUSNAME', $search);
    $this->db->or_like('CLUSTERSTATUS', $search);
    $this->db->or_like('AVAI', $search);
    $this->db->or_like('USED', $search);
    $this->db->or_like('RSV', $search);
    $this->db->or_like('RSK', $search);
    $this->db->or_like('IS_TOTAL', $search);
    $this->db->or_like('ODP_INFO', $search);
    $this->db->or_like('UPDATE_DATE', $search);
    $this->db->or_like('PERIODE', $search);
    $this->db->or_like('STATUS', $search);

    return $this->db->get('SIIS_JGR')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
  }
}