<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;

class AuthController extends Controller{
    public function index(){
        $this->view('front/index');
    }

    public function login(){
        $this->view('front/auth/login');
    }

    public function register(){
        $this->view('front/auth/register');
    }

}