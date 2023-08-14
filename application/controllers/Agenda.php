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
        $tempat = $this->input->post('tempat_kegiatan');
        $buka_acara = $this->input->post('buka_acara');

        $data = array(
            'tgl ' => $tgl,
            'nama_kegiatan' => $nama,
            'bidang_penyelenggara' => $bidang,
            'Jam' => $jam,
            'tempat_kegiatan' => $tempat,
            'buka_acara' => $buka_acara
        );
        $this->db->insert('agenda_bidang', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Ditambah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
        redirect('agenda/index');
    }
    public function edit_agenda()
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
        $this->db->where('id', $data['id']);
        $this->db->update('agenda_bidang', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Diedit<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
        redirect('agenda/index');
    }
    public function delete_agenda()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id,
        );
        $this->db->where('id', $data['id']);
        $this->db->delete('agenda_bidang', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
        redirect('agenda');
    }
}
