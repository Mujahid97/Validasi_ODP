<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MYR_Detail extends CI_Model {
  public function filter($search, $limit, $start, $order_field, $order_ascdesc){
    $this->db->like('tgl_validasi', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('odp', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('CAP_PREV', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('CAP_NOW', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('USED_NOW', $search);
    $this->db->or_like('IDLE', $search);
    $this->db->or_like('OFFLINE', $search);
    $this->db->or_like('LOSS', $search);
    $this->db->or_like('COMMENT', $search);
    $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
    $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT

    return $this->db->get('DETAIL_MYR')->result_array(); // Eksekusi query sql sesuai kondisi diatas
  }

  public function count_all(){
    return $this->db->count_all('DETAIL_MYR'); // Untuk menghitung semua data siswa
  }

  public function count_filter($search){
    $this->db->like('tgl_validasi', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('odp', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('CAP_PREV', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('CAP_NOW', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('USED_NOW', $search);
    $this->db->or_like('IDLE', $search);
    $this->db->or_like('OFFLINE', $search);
    $this->db->or_like('LOSS', $search);
    $this->db->or_like('COMMENT', $search);
    return $this->db->get('DETAIL_MYR')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
  }
}