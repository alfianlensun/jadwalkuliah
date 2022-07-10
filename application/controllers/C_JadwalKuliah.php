<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_JadwalKuliah extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_JadwalKuliah', 'jadwal');
        $this->load->model('M_MasterKelas', 'kelas');
        $this->load->model('M_MasterDosen', 'dosen');
        $this->load->model('M_MasterMataKuliah', 'mk');
    }
	public function index(){
        $data['list'] = $this->jadwal->get();
        $data['kelas'] = $this->kelas->get();
        $data['dosen'] = $this->dosen->get();
        $data['mk'] = $this->mk->get();
        
        render('/master/V_jadwal_kuliah', $data);
    }

	public function json(){
        echo json_encode($this->jadwal->get());
    }

    public function create(){
        $this->jadwal->create();

        redirect(base_url('C_JadwalKuliah'));
    }

    public function delete($id){
        $this->jadwal->delete($id);

        redirect(base_url('C_JadwalKuliah'));
    }
}