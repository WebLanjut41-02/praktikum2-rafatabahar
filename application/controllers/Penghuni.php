<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni extends MY_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("PenghuniModel","m1");
  }

  function index(){

    $data['data_penghuni'] = $this->m1->get_all_data()->result();
    $this->load->view('list_penghuni',$data);
  }

  public function add(){
    $this->load->view('add_penghuni');
  }

  public function add_penghuni_post()
  {
    $inputData['nama'] = $this->input->post('nama');
    $inputData['no_ktp'] = $this->input->post('no_ktp');
    $inputData['unit'] = $this->input->post('unit');

    if ($this->m1->save_data($inputData)) {
      redirect(base_url()."Penghuni");
    }else {
      echo "gagal input";
    }

  }

  public function edit($id)
  {
    $this->db->where('no_ktp', $id);
    $result = $this->db->get('penghuni')->row();
    $data['data_penghuni'] = $result;
    $this->load->view('edit_penghuni',$data);
  }

  public function edit_penghuni_post()
  {
    $updateData['nama'] = $this->input->post('nama');
    $updateData['no_ktp'] = $this->input->post('no_ktp');
    $updateData['unit'] = $this->input->post('unit');

    if ($this->m1->update_data($updateData['no_ktp'],$updateData)) {
      redirect(base_url()."Penghuni");
    }else {
      echo "gagal edit";
    }
  }

  public function hapus($no_ktp)
  {
    $this->db->where('no_ktp', $no_ktp);
    $this->db->delete('penghuni');

    redirect(base_url()."Penghuni");
  }

}
