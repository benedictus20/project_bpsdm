<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_sekretaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Agenda", "", TRUE);
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Anda belum Login !
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>');
            redirect('login');
        } else {
            $data['agenda'] = $this->Model_Agenda->getAgenda()->result_array();
            $data['user'] = $this->db->where('role_id', '2')->get('user')->row_array();
            $this->load->view("sekretaris/agenda_sekretaris", $data);
        }
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
            'buka_acara' => $buka_acara,
            'status' => 1
        );
        $this->Model_Agenda->tambah_agenda($data, 'agenda_bidang');
        redirect('sekretaris/agenda_sekretaris/index');
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
        $status = $this->input->post('status');

        $data = array(
            'id' => $id,
            'tgl' => $tgl,
            'nama_kegiatan' => $nama,
            'bidang_penyelenggara' => $bidang,
            'Jam' => $jam,
            'tempat_kegiatan' => $tempat,
            'buka_acara' => $buka_acara,
            'status' => 1
        );
        $this->Model_Agenda->update_agenda($data, 'agenda_bidang');
        redirect('sekretaris/agenda_sekretaris/index');
    }
    public function delete_agenda()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id,
        );
        $this->Model_Agenda->delete_agenda($data, 'agenda_bidang');
        redirect('sekretaris/agenda_sekretaris/index');
    }
    public function setuju()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $id,
            'status' => 1
        );
        $this->db->where('id', $id);
        if ($this->db->update('agenda_bidang', $data)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Disetujui<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/agenda_sekretaris/index');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Gagal Menyetujui agenda!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/agenda_sekretaris/index');
        }
    }
    public function tolak()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $id,
            'status' => 2
        );
        $this->db->where('id', $id);
        if ($this->db->update('agenda_bidang', $data)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Agenda Berhasil Ditolak<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/agenda_sekretaris/index');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Gagal Menolak Agenda!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/agenda_sekretaris/index');
        }
    }
}
