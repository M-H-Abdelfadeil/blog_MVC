<?php
namespace BLOG\Controllers\Dashboard;
use BLOG\Controllers\Controller;

class EmailController extends Controller{
    public function index(){
        $this->view('dashboard/email/index');
    }


    public function all(){
        $this->view('dashboard/email/index');
    }

    public function send(){
        $this->view('dashboard/email/send');
    }


}