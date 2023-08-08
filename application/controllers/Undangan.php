<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{
    public function index()
    {
        $data['undangan'] = $this->db->get('undangan')->result_array();

        $this->load->view("undangan", $data);
    }
    public function tambah_undangan()
    {
        $tgl = $this->input->post('tgl');
        $judul_undangan= $this->input->post('judul_undangan');
        $jam_pelaksanaan = $this->input->post('jam_pelaksanaan');
        $tempat_pelaksana = $this->input->post('tempat_pelaksana');
        $yang_ditugaskan = $this->input->post('yang_ditugaskan');
        $nomor_surat = $this->input->post('nomor_surat');

        $data = array(
            'tgl ' => $tgl,
            'judul_undangan' => $judul_undangan,
            'jam_pelaksanaan' => $jam_pelaksanaan,
            'tempat_pelaksana' => $tempat_pelaksana,
            'yang_ditugaskan' => $yang_ditugaskan,
            'nomor_surat' => $nomor_surat,
        );
        $this->db->insert('undangan', $data);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Undangan Berhasil Ditambah</div>');
        redirect('undangan/index');
    }
    public function edit_undangan()
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
            'tempat_kegiatan' => $tempat,
            'buka_acara' => $buka_acara
        );
        $this->db->where('id', $data['id']);
        $this->db->update('undangan', $data);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Undangan Berhasil Diedit</div>');
        redirect('undangan/index');
    }
    public function delete_undangan()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id,
        );
        $this->db->where('id', $data['id']);
        $this->db->delete('undangan', $data);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Undangan Berhasil Dihapus</div>');
        redirect('undangan');
    }
}
