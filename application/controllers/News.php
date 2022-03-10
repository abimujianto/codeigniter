<?php
defined("BASEPATH") OR exit('No direct access script allowed');


class News extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index(){
 
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'Arsip berita';
        
     
        $this->load->view('news/index', $data);
    }
}


// class News extends CI_Controller{

// public function __construct(){
//     parent::__construct();
//     $this->load->model('news_model');
//     $this->load->helper('url_helper');
// }


// public function index(){

//     $data['news'] = $this->news_model->get_news();
//     $data['title'] = 'Arsip Berita';

//     $this->load->view('news/index', $data);
// }
// }


?>