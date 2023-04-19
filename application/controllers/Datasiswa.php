<?php
class Datasiswa extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-datsis');
 }
 public function cetak()
 {
   $this->form_validation->set_rules('nama', 'Nama Siswa',
  'required|min_length[3]', [
   'required' => 'Nama Harus diisi',
   'min_lenght' => 'Nama terlalu pendek'
   ]);
   $this->form_validation->set_rules('nis', 'NIS',
  'required|min_length[3]', [
   'required' => 'NIS Harus diisi',
   'min_lenght' => 'NIS terlalu pendek'
   ]);
   $this->form_validation->set_rules('kelas', 'Kelas',
  'required|min_length[3]', [
   'required' => 'Kelas Harus diisi',
   'min_lenght' => 'Kelas terlalu pendek'
   ]);
   $this->form_validation->set_rules('tanglah', 'Tanggal Lahir',
  'required|min_length[3]', [
   'required' => 'Tanggal Lahir Harus diisi',
   'min_lenght' => 'Tanggal Lahir terlalu pendek'
   ]);
   $this->form_validation->set_rules('temlah', 'Tempat Lahir',
  'required|min_length[3]', [
   'required' => 'Tempat Lahir Harus diisi',
   'min_lenght' => 'Tempat Lahir terlalu pendek'
   ]);
   $this->form_validation->set_rules('alamat', 'Alamat',
  'required|min_length[3]', [
   'required' => 'Alamat Harus diisi',
   'min_lenght' => 'Alamat terlalu pendek'
   ]);
   if ($this->form_validation->run() != true) {
   $this->load->view('view-form-datsis');
   } else {
   $data = [
   'nama' => $this->input->post('nama'),
   'nis' => $this->input->post('nis'),
   'kelas' => $this->input->post('kelas'),
   'tanglah' => $this->input->post('tanglah'),
   'temlah' => $this->input->post('temlah'),
   'alamat' => $this->input->post('alamat'),
   'jk' => $this->input->post('jk'),
   'agama' => $this->input->post('agama')
   ];
   $this->load->view('view-data-datsis', $data);
   }
   }
  }
