<?php
namespace BLOG\Controllers;
use BLOG\traits\HelpTrait;

class Controller{
    use HelpTrait;
    protected  $model;
    /**
     * if notfound class or method
     * get page 404 (notfound)
     */
    public function notfound(){
        include APP_PATH.DS.'views'.DS.'notfound.view.php';
    }
    /**
     * method get view
     * if not view return page 404(notfound)
    */
    public function view($view,$data=[]){
       $file_view=APP_PATH.DS.'views'.DS.$view.'.view.php';
        if (file_exists($file_view)){
            include $file_view;
        }else{
            include APP_PATH.DS.'views'.DS.'notfound.view.php';
        }
    }
    /**
     * method get model
     * return object or notfound if notfound file model
     * param namespace=>front or dashboard(or define(DASHBOARD_NAME))
     * param model=> name model (ex [auth or user .......])
     */
    public function model($namespace,$model){
        $file_model=APP_PATH.DS.'models'.DS.lcfirst($namespace).DS.$model.'model.php';

        if (file_exists($file_model)){
            $namespaceModel="\BLOG\Models\\".$namespace.'\\'.ucfirst($model).'Model';
            $classModel=new $namespaceModel;
            return $classModel;
        }else{
            echo 'notfound';
        }

    }

    /**
     * method redirect page
    */
    public function redirectPage($pageName='index'){
        $page=URL_SITE.'/'.$pageName;
        header('location:'.$page.'');
    }


}