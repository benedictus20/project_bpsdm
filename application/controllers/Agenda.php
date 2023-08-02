<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function index()
    {
        $data['agenda'] = $this->db->get('agenda_bidang')->result_array();

        $this->load->view("agenda", $data);
    }
}
