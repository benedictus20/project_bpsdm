<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{
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
            $data['undangan'] = $this->db->get('undangan')->result_array();
            $this->load->view("undangan", $data);
        }
    }
    public function tambah_undangan()
    {
        $tgl = $this->input->post('tgl');
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

        $data = array(
            'tgl ' => $tgl,
            'judul_undangan' => $judul_undangan,
            'jam_pelaksanaan' => $jam_pelaksanaan,
            'tempat_pelaksana' => $tempat_pelaksana,
            'yang_ditugaskan' => $yang_ditugaskan,
            'nomor_surat' => $nomor_surat,
            'pdf' => $pdf,
        );
        $this->db->insert('undangan', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Ditambah</div>');
        redirect('undangan/index');
    }
    public function edit_undangan()
    {
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl');
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
        $status = $this->input->post('status');

        $data = array(
            'id' => $id,
            'tgl ' => $tgl,
            'judul_undangan' => $judul_undangan,
            'jam_pelaksanaan' => $jam_pelaksanaan,
            'tempat_pelaksana' => $tempat_pelaksana,
            'yang_ditugaskan' => $yang_ditugaskan,
            'nomor_surat' => $nomor_surat,
            'pdf' => $pdf,
            'status' => $status
        );
        $this->db->where('id', $data['id']);
        $this->db->update('undangan', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Diedit</div>');
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
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Dihapus</div>');
        redirect('undangan');
    }
}
