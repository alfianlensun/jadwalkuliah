<?php
class M_MasterDosen extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        return $this->db->where('flag_active', 1)
                            ->get('mst_dosen')->result_array();
    }

    public function create(){
         $this->db->insert('mst_dosen', $this->input->post());
         return $this->db->insert_id();
    }

    public function delete($id){
         $this->db->where('id_mst_dosen', $id)
                    ->update('mst_dosen', [
                        'flag_active' => 0
                    ]);
         return $this->db->insert_id();
    }
}