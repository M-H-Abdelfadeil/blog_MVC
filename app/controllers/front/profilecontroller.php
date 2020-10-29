<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;

class ProfileController extends Controller{
    public function __construct(){
        if (!$_SESSION['user'])$this->redirectPage();
        $this->model=$this->model('front','profile');
    }

    public function index(){
        $user=$this->model->index($_SESSION['user']['id']);
        $this->view('front/profile',$user);
    }
}