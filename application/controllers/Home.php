<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

  public function __construct(){
    parent::__construct();
  }

  function index(){
    
    $data['data_paket'] = $result;
    $this->load->view('home',$data);
  }

  public function add_paket(){
    $data['data_penghuni'] = $this->db->get('penghuni')->result();
    $this->load->view('add_paket', $data);
  }

  public function add_paket_post()
  {
    $inputData['sasaran'] = $this->input->post('penghuni');
    $inputData['penerima'] = $this->session->userdata('data_login')['nip'];
    $inputData['isi_paket'] = $this->input->post('isi_paket');
    $inputData['tanggal_datang'] = date('Y-m-d');
    $inputData['tanggal_ambil'] = "NULL";

    $this->db->insert('paket', $inputData);

    redirect(base_url()."Home");

  }

  public function update_paket($id_paket){
    $updateData['tanggal_ambil'] = date('Y-m-d');
    $this->db->where('id_paket', $id_paket);
    if ($this->db->update('paket', $updateData)) {
      redirect(base_url()."Home");
    }else {
      echo "gagal update";
    }


  }

}
