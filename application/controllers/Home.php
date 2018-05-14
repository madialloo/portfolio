<?php

class Home extends CI_Controller {

    // display the home page with the responsive circle
    public function index($page = 'home'){
        // $page = 'home';
        if (! file_exists(APPPATH.'views/'.$page.'.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('inc/header', $data);
        $this->load->view($page, $data);
        $this->load->view('inc/footer', $data);
    }



}