<?php
namespace BLOG\Controllers\Dashboard;
use BLOG\Controllers\Controller;

class PostController extends Controller{
    public function index(){
        $this->view('dashboard/post/index');
    }

    public function all(){
        $this->view('dashboard/post/index');
    }

    public function show(){
        $this->view('dashboard/post/show');
    }
}

