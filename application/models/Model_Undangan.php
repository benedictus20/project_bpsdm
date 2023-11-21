<?php

class Model_Undangan extends CI_Model
{
    public function getUndangan()
    {
        return $this->db->get("undangan");
    }
    public function tambah_undangan($data, $table)
    {
        $this->db->insert($table, $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Ditambah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
    }
    public function update_undangan($data, $table)
    {
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Diedit<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
    }
    public function delete_undangan($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Undangan Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
    }
    public function check_existing_undangan($tgl, $jam_pelaksanaan, $yang_ditugaskan)
    {
        $this->db->where('tgl', $tgl);
        $this->db->where('jam_pelaksanaan', $jam_pelaksanaan);
        $this->db->where('yang_ditugaskan', $yang_ditugaskan);
        $query = $this->db->get('undangan');

        return $query->num_rows() > 0;
    }
}
