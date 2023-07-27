<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $username = $this->session->userdata('username');
        if (!empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        } else {
            $this->load->view('login');
        }
    }
    public function beranda()
    {
        $this->load->view('dashboard');
    }
}
