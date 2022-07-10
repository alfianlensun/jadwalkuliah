<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_MasterDosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_MasterDosen', 'master');
    }
	public function index(){
        $data['list'] = $this->master->get();
        
        render('/master/V_master_dosen', $data);
    }

    public function create(){
        $this->master->create();

        redirect(base_url('C_MasterDosen'));
    }

    public function delete($id){
        $this->master->delete($id);

        redirect(base_url('C_MasterDosen'));
    }
}