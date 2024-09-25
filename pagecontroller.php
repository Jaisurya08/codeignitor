<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PageController extends CI_Controller {
//funtion
public function index(){
    echo 'hi surya';
    //$this->test();

    $this->load->model("main_model");
    $this->load->view("main_view");
   // echo $this->main_model->test_main();
}
public function test(){
    echo 'hi virat';
}

}
