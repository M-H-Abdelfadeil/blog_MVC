<?php
namespace BLOG\Controllers\Dashboard;
use BLOG\Controllers\Controller;

class UserController extends Controller{
    public function index(){
        $this->view('dashboard/user/index');
    }


    public function all(){
        $this->view('dashboard/user/index');
    }

    public function show(){
        $this->view('dashboard/user/show');
    }


}
