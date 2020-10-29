<?php
namespace BLOG\traits;

trait HelpTrait{
    //filter inputs
    public function filterInputs($input,$filter=null){
        if ($filter=='string')   return filter_var($input,FILTER_SANITIZE_STRING);
        elseif ($filter==null)   return filter_var($input,FILTER_SANITIZE_STRING);
        elseif ($filter=='email')return filter_var($input,FILTER_SANITIZE_EMAIL);
        elseif ($filter=='url')return filter_var($input,FILTER_SANITIZE_URL);
        elseif ($filter=='number_int')return filter_var($input,FILTER_SANITIZE_NUMBER_INT);

    }


    //  check find all request $_POST

    public function chkRequestPost($needed_requests){
        $diff=array_diff($needed_requests,array_keys($_POST));
        if (count($diff)==0)return 1;
        else return 0;
    }

    // check length input string

    public function chkLengthString($value,$min=false,$max=false,$empty=false){
        if ($empty==false){
            //When the value is not needed, it is empty
            if (empty($value) && $empty==false){
                return "This field is required";
            }elseif (strlen($value)<$min && $min != false){
                return "Minimum ".$min." characters";
            }elseif (strlen($value)>$max && $max!=false){
                return "Maximum ".$max." characters";
            }
        }

    }


}
