<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view("login");
    }
    public function masuk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $query = $this->db->get("user");
        if ($query->num_rows() > 0) {
            foreach ($query->result as $row) {
                $session = array(
                    'username' => $row->username,
                    'password' => $row->password
                );
            }
            $this->session->get_userdata($session);
            redirect('Dashboard/beranda');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah</div>');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Sudah Logout</div>');
        redirect('login');
    }
}
