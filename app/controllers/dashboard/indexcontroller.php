<?php
namespace BLOG\Controllers\Dashboard;
use BLOG\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        $this->view('dashboard/index');
    }
}
