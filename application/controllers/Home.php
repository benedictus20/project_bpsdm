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
        $data['agenda'] = $this->db->get('agenda_bidang')->result_array();
        $data['undangan'] = $this->db->get('undangan')->result_array();
        $this->load->view("home", $data);
    }
    public function lihat_agenda()
    {
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl');
        $nama = $this->input->post('nama_kegiatan');
        $bidang = $this->input->post('bidang_penyelenggara');
        $jam = $this->input->post('Jam');
        $tempat = $this->input->post('tempat_kegiatan');
        $buka_acara = $this->input->post('buka_acara');

        $data = array(
            'id' => $id,
            'tgl' => $tgl,
            'nama_kegiatan' => $nama,
            'bidang_penyelenggara' => $bidang,
            'Jam' => $jam,
            'tempat_kegiatan' => $tempat,
            'buka_acara' => $buka_acara
        );
        redirect('agenda/index');
    }
    public function lihat_undangan()
    {
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl');
        $judul_undangan= $this->input->post('judul_undangan');
        $jam_pelaksanaan = $this->input->post('jam_pelaksanaan');
        $tempat_pelaksana = $this->input->post('tempat_pelaksana');
        $yang_ditugaskan = $this->input->post('yang_ditugaskan');
        $nomor_surat = $this->input->post('nomor_surat');
        $pdf = $_FILES['pdf'];

        $data = array(
            'id ' => $id,
            'tgl ' => $tgl,
            'judul_undangan' => $judul_undangan,
            'jam_pelaksanaan' => $jam_pelaksanaan,
            'tempat_pelaksana' => $tempat_pelaksana,
            'yang_ditugaskan' => $yang_ditugaskan,
            'nomor_surat' => $nomor_surat,
            'pdf' => $pdf,
        );
        redirect('undangan/index');
    }
}
