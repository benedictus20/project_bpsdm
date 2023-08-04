<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function index()
    {
        $data['agenda'] = $this->db->get('agenda_bidang')->result_array();

        $this->load->view("agenda", $data);
    }
    public function tambah_agenda()
    {
        $tgl = $this->input->post('tgl');
        $nama = $this->input->post('nama_kegiatan');
        $bidang = $this->input->post('bidang_penyelenggara');
        $jam = $this->input->post('Jam');
        $penyelenggara = $this->input->post('penyelenggara');
        $tempat = $this->input->post('tempat_kegiatan');
        $buka_acara = $this->input->post('buka_acara');

        $data = array(
            'tgl ' => $tgl,
            'nama_kegiatan' => $nama,
            'bidang_penyelenggara' => $bidang,
            'Jam' => $jam,
            'penyelenggara' => $penyelenggara,
            'tempat_kegiatan' => $tempat,
            'buka_acara' => $buka_acara
        );
        $this->db->insert('agenda_bidang', $data);
        redirect('agenda/index');
    }
    public function edit_agenda()
    {
        $id = $this->input->post('id');
        $data['agenda'] = array('id' => $id);
        $this->db->set($data);
        redirect('Agenda');
    }
}
