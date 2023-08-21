<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $months = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];
        $date = new DateTime();
        $monthName = $months[(int)$date->format('n')];
        $current_date = $date->format('d') . ' ' . $monthName . ' ' . $date->format('Y');
        $data['tanggal'] = $current_date;
        $data['agenda'] = $this->db->where('status', '1')->get('agenda_bidang')->result_array();
        $data['undangan'] = $this->db->where('status', '1')->get('undangan')->result_array();
        $this->load->view("home", $data);
    }
}
