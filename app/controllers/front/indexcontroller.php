<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;

class IndexController extends Controller{
    public function __construct()
    {
        $this->model=$this->model('front','index');
    }

    public function index(){

        $this->view('front/index');
    }
}
