<?php

class Model_Agenda extends CI_Model
{
    public function getAgenda()
    {
        return $this->db->get("agenda_bidang");
    }
    public function tambah_agenda($data, $table)
    {
        $this->db->insert($table, $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Ditambah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
    }
    public function update_agenda($data, $table)
    {
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Diedit<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
    }
    public function delete_agenda($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Agenda Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"> &times;</span> </button> </div>');
    }
}
