<?php
class M_MasterMataKuliah extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        return $this->db->where('flag_active', 1)
                            ->get('mst_mata_kuliah')->result_array();
    }

    public function create(){
         $this->db->insert('mst_mata_kuliah', $this->input->post());
         return $this->db->insert_id();
    }

    public function delete($id){
         $this->db->where('id_mst_mata_kuliah', $id)
                    ->update('mst_mata_kuliah', [
                        'flag_active' => 0
                    ]);
         return $this->db->insert_id();
    }
}