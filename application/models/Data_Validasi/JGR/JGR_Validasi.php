<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JGR_Validasi extends CI_Model {
  public function filter($search, $limit, $start, $order_field, $order_ascdesc){
    $this->db->like('odc', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('jml_odp', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('validated', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('cap_prev', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('used_prev', $search);
    $this->db->or_like('idle_prev', $search);
    $this->db->or_like('loss_prev', $search);
    $this->db->or_like('cap_now', $search);
    $this->db->or_like('used_now', $search);
    $this->db->or_like('idle_now', $search);
    $this->db->or_like('offline', $search);
    $this->db->or_like('loss_now', $search);
    $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
    $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT

    return $this->db->get('VALIDASI_JGR')->result_array(); // Eksekusi query sql sesuai kondisi diatas
  }

  public function count_all(){
    return $this->db->count_all('VALIDASI_JGR'); // Untuk menghitung semua data siswa
  }

  public function count_filter($search){
    $this->db->like('odc', $search); // Untuk menambahkan query where LIKE
    $this->db->or_like('jml_odp', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('validated', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('cap_prev', $search); // Untuk menambahkan query where OR LIKE
    $this->db->or_like('used_prev', $search);
    $this->db->or_like('idle_prev', $search);
    $this->db->or_like('loss_prev', $search);
    $this->db->or_like('cap_now', $search);
    $this->db->or_like('used_now', $search);
    $this->db->or_like('idle_now', $search);
    $this->db->or_like('offline', $search);
    $this->db->or_like('loss_now', $search);
    return $this->db->get('VALIDASI_JGR')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
  }
}