<?php

class Contenu extends CI_Controller {

    // display the rubrique page with some related data
    public function displayContenu($page = 'contenu'){
        if ( ! file_exists(APPPATH.'views/'.$page.'.php')){
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('inc/header', $data);
        $this->load->view($page, $data);
        $this->load->view('inc/footer', $data);
    }

}