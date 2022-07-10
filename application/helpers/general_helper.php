<?php

function dd($data){
    var_dump($data); 
    die;
}

function render($view, $data = []){
    $CI = &get_instance();
    $data['content'] = $view;
    $CI->load->view('layouts/V_base_layout', $data);
}