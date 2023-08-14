<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->load->model('ModelLogin');
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("login");
        } else {
            $auth = $this->ModelLogin->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger " role="alert">Username atau Password Anda Salah !</div>');
                redirect('login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                if ($auth->role_id == 1) {
                    $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">SELAMAT DATANG ADMIN<button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true"> &times;</span> </button> </div>');
                    redirect('Dashboard');
                } else {
                    $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">SELAMAT DATANG SEKRETARIS<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"> &times;</span> </button> </div>');
                    redirect('Sekretaris/dashboard_sekretaris');
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Berhasil Logout </div>');
        redirect('login');
    }
}
