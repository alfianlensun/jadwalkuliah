<?php
class M_JadwalKuliah extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        return $this->db->select('*')
                            ->from('trx_jadwal_kuliah as a')
                            ->join('mst_dosen as b', 'a.id_mst_dosen = b.id_mst_dosen')
                            ->join('mst_kelas as c', 'a.id_mst_kelas = c.id_mst_kelas')
                            ->join('mst_mata_kuliah as e', 'a.id_mst_mata_kuliah = e.id_mst_mata_kuliah')
                            ->where('a.flag_active', 1)
                            ->get()->result_array();
    }

    public function create(){
         $this->db->insert('trx_jadwal_kuliah', $this->input->post());
         return $this->db->insert_id();
    }

    public function delete($id){
         $this->db->where('id_trx_jadwal_kuliah', $id)
                    ->update('trx_jadwal_kuliah', [
                        'flag_active' => 0
                    ]);
         return $this->db->insert_id();
    }
}