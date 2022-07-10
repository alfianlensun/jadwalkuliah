<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_MasterKelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_MasterKelas', 'master');
    }
	public function index(){
        $data['list'] = $this->master->get();
        
        render('/master/V_master_kelas', $data);
    }

    public function create(){
        $this->master->create();

        redirect(base_url('C_MasterKelas'));
    }

    public function delete($id){
        $this->master->delete($id);

        redirect(base_url('C_MasterKelas'));
    }
}