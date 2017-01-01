<?php

/**
 * Created by PhpStorm.
 * User: jhonnymatracas
 * Date: 1/01/17
 * Time: 12:16
 */
class Validate
{
    public static function clean($a)
    {
        $a= trim(strip_tags($a));
        $a= htmlspecialchars($a);
        return $a;
    }

    public static function Nick($a = null)
    {
        $error = false;

        if (isset($a)){
            if (!empty($a)){
                $usrname = self::clean($a);
                $contieneLetras = "/[a-zA-Z]/";
                $contieneNumeros = "/\d/";
                if (strlen($usrname) < 6){
                    ErrorForm::addNegative("NICK: Debe contener minimo 6 caracteres");
                    $error = true;
                }
                if(strlen($usrname) > 25){
                    ErrorForm::addNegative("NICK: Debe contener máximo 25 caracteres");
                    $error = true;
                }
                if (!preg_match($contieneLetras, $usrname)) {
                    ErrorForm::addNegative("NICK: Debe contener letras");
                    $error = true;
                }
                if(!preg_match($contieneNumeros, $usrname)){
                   ErrorForm::addNegative("NICK: Debe contener mínimo un número");
                    $error = true;
                }
            }else{
                ErrorForm::addNegative("NICK: Está vacío");
                $error = true;
            }
        }else{
            ErrorForm::addNegative("NICK: No has puesto nada");
            $error = true;
        }
        if (!$error){
            Memory::keep('nick',$a);
            ErrorForm::addPositive('NICK: Todo bien!');
            return true;
        }else{
            Memory::keep('nick',$a);
            return false;
        }

    }
    public static function Nombre($a = null)
    {
        $a = self::clean($a);
    }

    public static function Apellidos($a = null)
    {
        if ($a) {
            $a = self::clean($a);
        }
    }

    public static function Email($a = null)
    {
        $a = self::clean($a);
    }
}