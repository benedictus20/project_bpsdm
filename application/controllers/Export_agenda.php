<?php
defined('BASEPATH') or exit('No direct script access allowed');

class export_agenda extends CI_Controller
{
    public function index()
    {
        $data['agenda'] = $this->db->where('status', '1')->get('agenda_bidang')->result_array();
        $data['undangan'] = $this->db->where('status', '1')->get('undangan')->result_array();
        $this->load->view("export_agenda", $data);
    }
}
