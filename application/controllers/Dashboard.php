<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $username = $this->session->userdata('username');
        if (!empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        } else {
            $this->load->view('login');
        }
    }
    public function beranda()
    {
        $data['agenda'] = $this->db->count_all('agenda_bidang');
        $data['undangan'] = $this->db->count_all('undangan');
        $jumlah_pelatihan = ['pelatihan', 'webinar'];
        $data['jumlah_pelatihan'] = $this->db->where_in('nama_kegiatan', $jumlah_pelatihan)->count_all_results('agenda_bidang');
        $this->load->view('dashboard', $data);
    }
}
