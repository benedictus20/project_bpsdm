<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Anda belum Login! </div>');
            redirect('login');
        } else {
            $data['user'] = $this->db->where('role_id', '1')->get('user')->row_array();
            $data['agenda'] = $this->db->count_all('agenda_bidang');
            $data['undangan'] = $this->db->count_all('undangan');
            $jumlah_pelatihan = ['pelatihan', 'webinar'];
            $data['jumlah_pelatihan'] = $this->db->where_in('nama_kegiatan', $jumlah_pelatihan)->count_all_results('agenda_bidang');
            $this->load->view('dashboard_admin', $data);
        }
    }
}
