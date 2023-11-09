<?php

class Model_Karyawan extends CI_Model
{
    public function getKaryawan()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->order_by('no', 'asc');

        return $this->db->get();
    }
}
