<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_MasterMataKuliah extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_MasterMataKuliah', 'master');
    }
	public function index(){
        $data['list'] = $this->master->get();
        
        render('/master/V_master_mata_kuliah', $data);
    }

    public function create(){
        $this->master->create();

        redirect(base_url('C_MasterMataKuliah'));
    }

    public function delete($id){
        $this->master->delete($id);

        redirect(base_url('C_MasterMataKuliah'));
    }
}