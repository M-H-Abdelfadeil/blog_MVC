<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;

class PostController extends Controller{
    public function index(){
        $this->view('front/index');
    }

    public function all(){
        $this->view('front/post/index');
    }
}