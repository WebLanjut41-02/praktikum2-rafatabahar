<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenghuniModel extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->table_name = "paket";
  }

  public function get_all_data()
  {
    $this->db->select('paket.*, penghuni.nama as nama_penghuni, karyawan.nama')
            ->from('paket')
            ->join('karyawan', 'paket.penerima = karyawan.nip')
            ->join('penghuni', 'paket.sasaran = penghuni.no_ktp')
            ->order_by("tanggal_ambil","DESC");
    return $this->db->get()->result();
  }

  public function save_data($data)
  {
    return $this->db->insert($this->table_name, $data);
  }

  public function update_data($id,$data)
  {
    $this->db->where('id_paket', $id);
    return $this->db->update($this->table_name, $data);
  }

}
