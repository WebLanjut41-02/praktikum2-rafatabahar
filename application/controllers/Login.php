<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }

  function index(){
    if ($this->input->post('submit')) {
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $this->db->where('nip', $nip);
      $this->db->where('nama', $nama);
      $result = $this->db->get('karyawan')->row();

      if ($result) {
        //print_r($result);
        $data = array('nip' => $result->nip, 'nama' => $result->nama );
        $this->session->set_userdata('data_login',$data);
        redirect(base_url().'Home');
      }else {
        echo "gagal login<br>";
        echo "<a href='".base_url('Home')."'>Kembali</a>";
      }
    }
  }

}
