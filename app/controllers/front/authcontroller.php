<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;

class AuthController extends Controller{
    public function __construct(){
        $this->model=$this->model('front','auth');


    }

    public function index(){
        $this->view('front/index');
    }

    public function login(){
        if (isset($_SESSION['user']))$this->redirectPage();

        $error=['request'=>'','email'=>'','password'=>'','wrong'=>''];
        if (isset($_POST['login'])){
            $needed_requests=['email','password'];
            if (!$this->chkRequestPost($needed_requests)){
                $error['request']="Error Request";
                $this->view('front/auth/login',$error);
                exit();
            }
            // filter data

            $email=$this->filterInputs($_POST['email'],'email');
            $password=$this->filterInputs($_POST['password']);


            // validate data
            $error['password']=$this->chkLengthString($password);
            $error['email']=$this->chkLengthString($email,false,false);

            if (!array_filter($error)){
                $login=$this->model->login($email,$password);
                if ($login){
                    $_SESSION['user']=$login;
                    $this->redirectPage();
                }else{
                    $error['wrong']="The email or password is incorrect";
                    $this->view('front/auth/login',$error);
                }

            }else{
                $this->view('front/auth/login',$error);
            }

        }else{
            $this->view('front/auth/login',$error);
        }
    }

    public function register(){
        if (isset($_SESSION['user']))$this->redirectPage();

        $error=[
            'request'=>'',
            'name'=>'',
            'email'=>'',
            'password'=>'',
            'confirm_password'=>'',
        ];
        if (isset($_POST['register'])){
            $needed_requests=['name','email','password','confirm_password'];
            if (!$this->chkRequestPost($needed_requests)){
                $error['request']="Error Request";
                $this->view('front/auth/register',$error);
                exit();
            }
            // filter data

            $name=$this->filterInputs($_POST['name']);
            $email=$this->filterInputs($_POST['email'],'email');
            $password=$this->filterInputs($_POST['password']);
            $confirm_password=$this->filterInputs($_POST['confirm_password']);


            // validate data
            $error['name']=$this->chkLengthString($name,3,100);
            $error['password']=$this->chkLengthString($password,6);
            $error['email']=$this->chkLengthString($email,false,false);
            // check confirm password
            if (empty($error['password'])){
                if ($password != $confirm_password)$error['confirm_password']="Password does not match";
            }
            // check if valid email
            if (empty($error['email'])){
                if (filter_var($email,FILTER_VALIDATE_EMAIL)==false) {
                    $error['email']="Invalid email";
                }else{
                    //check is notfound database
                    if ($this->model->isFoundEmail($email)){
                        $error['email']="This email already exists";
                    }
                }
            }
            if (!array_filter($error)){
                $password=password_hash($password,PASSWORD_DEFAULT);
                $register_user=$this->model->register($name,$email,$password);
                $_SESSION['user']=[
                    'id'=>$register_user,
                    'name'=>$name
                ];
                $this->redirectPage();
            }else{
                $this->view('front/auth/register',$error);
            }

        }else{
            $this->view('front/auth/register',$error);
        }


    }

    public function logout(){
        unset($_SESSION['user']);
        $this->redirectPage();
    }


}