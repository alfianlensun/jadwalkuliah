<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_MainMenu extends CI_Controller {

	public function index(){
        render('/mainmenu/V_main_menu');
    }
}