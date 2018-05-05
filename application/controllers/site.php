<?php
  /**
   *
   */
  class site extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('Siswa');
    }
    public function index()
    {
      $data = array(
        'title' => 'Data Siswa',
        'data_siswa' => $this->Siswa->ambil_data()
      );
      $this->load->view('tampil',$data);
    }



    public function form()
    {

      $this->load->view('form');
    }

    public function insert(){
      $nama = $this->input->post('inputNama');
      $NIS = $this->input->post('inputNomorIndukSiswa');
      $Tlp = $this->input->post('inputNomorTelepon');
      $alamat = $this->input->post('inputAlamat');
      $email = $this->input->post('inputEmail');

      $object = array(
        'nama' => $nama,
        'nis' => $NIS,
        'tlp' => $Tlp,
        'alamat' => $alamat,
        'email' => $email
      );
      $this->db->insert('datasiswa',$object);
      redirect('site');

    }

    public function edit($id)
    {
      $where=array('id'=>$id);
        $data['data_siswa']= $this->Siswa->ambil_where($where,'datasiswa')->result();
        $this->load->view('edit',$data);
    }

    public function proses_edit(){
      $id = $this->input->post('id');
      $nama = $this->input->post('inputNama');
      $NIS = $this->input->post('inputNomorIndukSiswa');
      $Tlp = $this->input->post('inputNomorTelepon');
      $alamat = $this->input->post('inputAlamat');
      $email = $this->input->post('inputEmail');

      $data = array(
        'nama' => $nama,
        'nis' => $NIS,
        'tlp' => $Tlp,
        'alamat' => $alamat,
        'email' => $email
      );
      $where= array('id'=>$id);
      $this->Siswa->update($where,$data,'datasiswa');
      redirect('site');
    }

    public function hapus($id)
    {
      $query_delete = $this->Siswa->hapus($id);
      redirect('site');
    }

  }
