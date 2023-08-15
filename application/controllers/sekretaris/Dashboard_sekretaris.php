<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_sekretaris extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('role_id') != '2') {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Anda belum Login! </div>');
      redirect('login');
    } else {
      $data['agenda'] = $this->db->count_all('agenda_bidang');
      $data['undangan'] = $this->db->count_all('undangan');
      $jumlah_pelatihan = ['pelatihan', 'webinar'];
      $data['jumlah_pelatihan'] = $this->db->where_in('nama_kegiatan', $jumlah_pelatihan)->count_all_results('agenda_bidang');
      $this->load->view('sekretaris/dashboard_sekretaris', $data);
    }
  }
}