<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan_sekretaris extends CI_Controller
{
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
            $data['undangan'] = $this->db->get('undangan')->result_array();
            $this->load->view("sekretaris/undangan_sekretaris", $data);
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
            $config['upload_path']      = './assets/pdf';
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
        redirect('sekretaris/undangan_sekretaris/index');
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
            $config['upload_path']      = './assets/pdf';
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
            'id' => $id,
            'tgl ' => $tgl,
            'judul_undangan' => $judul_undangan,
            'jam_pelaksanaan' => $jam_pelaksanaan,
            'tempat_pelaksana' => $tempat_pelaksana,
            'yang_ditugaskan' => $yang_ditugaskan,
            'nomor_surat' => $nomor_surat,
            'pdf' => $pdf,
            'status' => 1
        );
        $this->db->where('id', $data['id']);
        $this->db->update('undangan', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Diedit</div>');
        redirect('sekretaris/undangan_sekretaris/index');
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
        redirect('sekretaris/undangan_sekretaris/index');
    }
    public function setuju()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $id,
            'status' => 1
        );
        $this->db->where('id', $id);
        if ($this->db->update('undangan', $data)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Disetujui<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/undangan_sekretaris/index');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Gagal Menyetujui agenda!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/undangan_sekretaris/index');
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
        if ($this->db->update('undangan', $data)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Agenda Berhasil Ditolak<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/undangan_sekretaris/index');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Gagal Menolak Agenda!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('sekretaris/undangan_sekretaris/index');
        }
    }
}
