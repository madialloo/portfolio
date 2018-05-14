<?php

class Basic extends CI_Controller {

    public function start(){

        // if (! file_exists(APPPATH.'views/'.$page.'.php')){
        //     show_404();
        // }
        $page = 'Bootstrap 101 Template';
        $data['title'] = ucfirst($page);

        $this->load->view('base', $data);
    }





}