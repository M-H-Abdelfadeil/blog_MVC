<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;

class ContactController extends Controller{
    public function index(){
        $this->view('front/contact');
    }
}