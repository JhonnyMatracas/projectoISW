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
        Memory::keep('nick',$a);

        if (!$error){

            ErrorForm::addFeedback_Form('nick', true);
            return true;
        }else{
            ErrorForm::addFeedback_Form('nick', false);
            return false;
        }

    }
    public static function Nombre($a = null)
    {
        $error = false;
        if (isset($a)){
            if (!empty($a)){
                $a = self::clean($a);
                $patron = "/^[a-zA-ZáéíÁÉÍÓ]+$/";
                if (strlen($a) < 2) {
                    ErrorForm::addNegative("NOMBRE: Debe contener más de 2 caracteres");
                    $error = true;
                }elseif (! preg_match($patron,$a)) {
                    ErrorForm::addNegative("NOMBRE: Debe contener letras");
                    $error = true;
                }
            }else{
                ErrorForm::addNegative("NOMBRE: Está vacío");
                $error = true;
            }
        }else{
            ErrorForm::addNegative("NOMBRE: No has puesto nada");
            $error = true;
        }

        Memory::keep('name',$a);

        if (!$error){
            ErrorForm::addFeedback_Form('name', true);
            return true;
        }else{
            ErrorForm::addFeedback_Form('name', false);
            return false;
        }
    }

    public static function Apellidos($a = null)
    {
        $error = false;
        if (isset($a)){
            if (!empty($a)){
                $a = self::clean($a);
                $patron = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u";
                //El patron permite apellidos como "Mathias d'Arras "Martin Luther King, Jr." o "Hector Sausage-Hausen"
                if (! preg_match($patron, $a)) {
                    ErrorForm::addNegative("APELLIDOS: No se admiten números");
                    $error = true;
                }
            }else{
                ErrorForm::addNegative("APELLIDOS: Está vacío");
                $error = true;
            }
        }else{
            ErrorForm::addNegative("APELLIDOS: No has puesto nada");
            $error = true;
        }

        Memory::keep('lastname',$a);

        if (!$error){
            ErrorForm::addFeedback_Form('lastname', true);
            return true;
        }else{
            ErrorForm::addFeedback_Form('lastname', false);
            return false;
        }
    }

    public static function Email($a = null)
    {
        $a = self::clean($a);
    }
}