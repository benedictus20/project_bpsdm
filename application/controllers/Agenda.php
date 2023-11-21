<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Agenda", "", TRUE);
        $this->load->model("Model_Karyawan", "", TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Anda belum Login !
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>');
            redirect('login');
        } else {
            $data['agenda'] = $this->Model_Agenda->getAgenda()->result_array();
            $data['karyawan'] = $this->Model_Karyawan->getKaryawan()->result_array();
            $data['user'] = $this->db->where('role_id', '1')->get('user')->row_array();
            $this->load->view("agenda", $data);
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

        // Check apabila jadwal bentrok
        $existing_agenda = $this->Model_Agenda->check_existing_agenda($tgl, $jam, $buka_acara);

        if ($existing_agenda) {
            // Agenda apabila bentrok
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Agenda Bentrok! Agenda gagal ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times;</span> </button> </div>');
        } else {
            $data = array(
                'tgl' => $tgl,
                'nama_kegiatan' => $nama,
                'bidang_penyelenggara' => $bidang,
                'Jam' => $jam,
                'tempat_kegiatan' => $tempat,
                'buka_acara' => $buka_acara
            );

            $this->Model_Agenda->tambah_agenda($data, 'agenda_bidang');
        }
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

        // Check jika tgl, jam dengan yg ditugaskan bentrok
        $existing_agenda = $this->Model_Agenda->check_existing_agenda($tgl, $jam, $buka_acara, $id);

        if ($existing_agenda) {
            // Agenda apabila bentrok
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Agenda Bentrok!! Agenda gagal diedit! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times;</span> </button> </div>');
        } else {
            $data = array(
                'id' => $id,
                'tgl' => $tgl,
                'nama_kegiatan' => $nama,
                'bidang_penyelenggara' => $bidang,
                'Jam' => $jam,
                'tempat_kegiatan' => $tempat,
                'buka_acara' => $buka_acara,
                'status' => 0
            );
            $this->Model_Agenda->update_agenda($data, 'agenda_bidang');
        }

        redirect('agenda/index');
    }

    public function delete_agenda()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id,
        );
        $this->Model_Agenda->delete_agenda($data, 'agenda_bidang');
        redirect('agenda');
    }
}
