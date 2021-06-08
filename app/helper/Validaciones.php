<?php

namespace App\helper;

class Validaciones{


public  static function validarRequerido($nombre){

    if(trim($nombre)  == ''){
        return false;
    }else{
        return true;
    }

}

public static function validaCaracteresMinimo($nombre , $rangoMinino){

    if(strlen($nombre) < $rangoMinino){
        return false;
    }else{
        return true;
    }
}


    public static function validaEmail($valor){
        if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
            return false;
        }else{
            return true;
        }
    }
}