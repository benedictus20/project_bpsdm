<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Undangan", "", TRUE);
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
            $data['undangan'] = $this->Model_Undangan->getUndangan()->result_array();
            $data['karyawan'] = $this->Model_Karyawan->getKaryawan()->result_array();
            $data['user'] = $this->db->where('role_id', '1')->get('user')->row_array();
            $this->load->view("undangan", $data);
        }
    }
    public function tambah_undangan()
    {
        $tgl = $this->input->post('tgl');
        $pengirim_undangan = $this->input->post('pengirim_undangan');
        $judul_undangan = $this->input->post('judul_undangan');
        $jam_pelaksanaan = $this->input->post('jam_pelaksanaan');
        $tempat_pelaksana = $this->input->post('tempat_pelaksana');
        $yang_ditugaskan = $this->input->post('yang_ditugaskan');
        $nomor_surat = $this->input->post('nomor_surat');
        $pdf = $_FILES['pdf'];
        if ($pdf = '') {
        } else {
            $config['upload_path']      = './upload/';
            $config['allowed_types']    = 'pdf';


            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('pdf')) {
                echo $this->upload->display_errors();
                die();
            } else {
                $pdf = $this->upload->data('file_name');
            }
        }

        // Check apabila jadwal bentrok
        $existing_undangan = $this->Model_Undangan->check_existing_undangan($tgl, $jam_pelaksanaan, $yang_ditugaskan);

        if ($existing_undangan) {
            // Undangan apabila bentrok
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Undangan Bentrok! Undangan gagal ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times;</span> </button> </div>');
        } else {
            $data = array(
                'tgl ' => $tgl,
                'pengirim_undangan ' => $pengirim_undangan,
                'judul_undangan' => $judul_undangan,
                'jam_pelaksanaan' => $jam_pelaksanaan,
                'tempat_pelaksana' => $tempat_pelaksana,
                'yang_ditugaskan' => $yang_ditugaskan,
                'nomor_surat' => $nomor_surat,
                'pdf' => $pdf,
            );
            $this->Model_Undangan->tambah_undangan($data, 'undangan');
        }
        redirect('undangan/index');
    }
    public function edit_undangan()
    {
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl');
        $pengirim_undangan = $this->input->post('pengirim_undangan');
        $judul_undangan = $this->input->post('judul_undangan');
        $jam_pelaksanaan = $this->input->post('jam_pelaksanaan');
        $tempat_pelaksana = $this->input->post('tempat_pelaksana');
        $yang_ditugaskan = $this->input->post('yang_ditugaskan');
        $nomor_surat = $this->input->post('nomor_surat');
        $pdf = $_FILES['pdf'];
        if ($pdf = '') {
        } else {
            $config['upload_path']      = './upload/';
            $config['allowed_types']    = 'pdf';


            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('pdf')) {
                echo $this->upload->display_errors();
                die();
            } else {
                $pdf = $this->upload->data('file_name');
            }
        }
        // Check apabila jadwal bentrok
        $existing_undangan = $this->Model_Undangan->check_existing_undangan($tgl, $jam_pelaksanaan, $yang_ditugaskan);

        if ($existing_undangan) {
            // Agenda apabila bentrok
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Undangan Bentrok! Undangan gagal ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times;</span> </button> </div>');
        } else {
            // Agenda is unique, proceed with insertion
            $data = array(
                'id' => $id,
                'tgl ' => $tgl,
                'pengirim_undangan' => $pengirim_undangan,
                'judul_undangan' => $judul_undangan,
                'jam_pelaksanaan' => $jam_pelaksanaan,
                'tempat_pelaksana' => $tempat_pelaksana,
                'yang_ditugaskan' => $yang_ditugaskan,
                'nomor_surat' => $nomor_surat,
                'pdf' => $pdf,
                'status' => 0
            );
            $this->Model_Undangan->update_undangan($data, 'undangan');
        }
        redirect('undangan/index');
    }
    public function delete_undangan()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id,
        );
        $this->Model_Undangan->delete_undangan($data, 'undangan');
        redirect('undangan');
    }
}
