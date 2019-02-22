<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenghuniModel extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->table_name = "penghuni";
  }

  public function get_all_data()
  {
    return $this->db->get($this->table_name);
  }

  public function save_data($data)
  {
    return $this->db->insert($this->table_name, $data);
  }

  public function update_data($id,$data)
  {
    $this->db->where('no_ktp', $id);
    return $this->db->update($this->table_name, $data);
  }

}
