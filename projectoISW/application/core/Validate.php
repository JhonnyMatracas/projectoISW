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

    public static function Login()
    {
        $user = Memory::getValue('user');
        $pass = Memory::getValue('pass');
        $error = false;
        if (!is_null($user) && !is_null($pass)) {
            if (!empty($user) && !empty($pass)) {
                $usr = UserModel::getUser($user);
                if (!is_null($usr)){
                    if (!password_verify($pass,$usr->pass)){
                        Feedback::addNegative("Los datos introducidos son incorrectos");
                        $error = true;
                    }
                }else{
                    Feedback::addNegative("Los datos introducidos son incorrectos");
                    $error = true;
                }
            } else {

                Feedback::addNegative("Debes introducir tu nick o email y la contraseña");
                $error = true;
            }
        }else{
            Feedback::addNegative("Debes introducir tu nick o email y la contraseña");
            $error = true;
        }
        if (!$error){
            Feedback::addPositive("<b>Bienvenido</b> de nuevo, $usr->name !");
            Feedback::addFeedback_Form('login', true);
            return true;
        }else{
            Feedback::addFeedback_Form('login', false);
            return false;
        }
    }
    public static function SignUp_Nick($a = null)
    {
        $error = false;
        if (!is_null($a)) {
            if (!empty($a)) {
                $a = self::clean($a);
                $contieneLetras = "/[a-zA-Z]/";
                if (strlen($a) < 6) {
                    Feedback::addInputMessage('nick',"Debe contener minimo 6 caracteres");
                    $error = true;
                }
                if(UserModel::NickExist($a)){
                    Feedback::addInputMessage('nick',"Este nick ya esta en uso");
                    $error = true;
                }
                if (strlen($a) > 25) {
                    Feedback::addInputMessage('nick',"Debe contener máximo 25 caracteres");
                    $error = true;
                }
                if (!preg_match($contieneLetras, $a)) {
                    Feedback::addInputMessage('nick',"Debe contener letras");
                    $error = true;
                }
                if (filter_var($a, FILTER_VALIDATE_EMAIL)) {
                    Feedback::addInputMessage('nick',"No puede ser un correo electronico");
                    $error = true;
                }
            } else {

                Feedback::addInputMessage('nick',"Está vacío");
                $error = true;
            }
        }else{
            Feedback::addInputMessage('nick',"Está vacío");
            $error = true;
        }
        if (!$error){
            Feedback::addFeedback_Form('nick', true);
            return true;
        }else{
            Feedback::addFeedback_Form('nick', false);
            return false;
        }

    }
    public static function SignUp_Name($a = null)
    {
        $error = false;
        if (!is_null($a)){
            if (!empty($a)){
                $a = self::clean($a);
                $patron = "/^[a-zA-ZáéíÁÉÍÓ]+$/";
                if (strlen($a) < 2) {
                    Feedback::addInputMessage('name',"El nombre debe contener más de 1 caracter");
                    $error = true;
                }elseif (! preg_match($patron,$a)) {
                    Feedback::addInputMessage('name',"El nombre debe contener letras");
                    $error = true;
                }

            }else{

                Feedback::addInputMessage('name',"El nombre está vacío");
                $error = true;
            }
        }else{
            Feedback::addInputMessage('name',"El nombre está vacío");
            $error = true;
        }



        if (!$error){
            Feedback::addFeedback_Form('name', true);
            return true;
        }else{
            Feedback::addFeedback_Form('name', false);
            return false;
        }
    }

    public static function SignUp_Lastname($a = null)
    {
        $error = false;
        if (!is_null($a)) {
            if (!empty($a)) {
                $a = self::clean($a);
                $patron = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u";
                //El patron permite apellidos como "Mathias d'Arras "Martin Luther King, Jr." o "Hector Sausage-Hausen"
                if (!preg_match($patron, $a)) {
                    Feedback::addInputMessage('lastname',"El apellido debe ser <b>real</b>, no se admiten números");
                    $error = true;
                }
                if (strlen($a) < 2) {
                    Feedback::addInputMessage('lastname',"Introduce unos apellidos reales");
                    $error = true;
                }
            } else {
                Feedback::addInputMessage('lastname',"El apellido está vacío");
                $error = true;
            }
        }else{
            Feedback::addInputMessage('lastname',"El apellido está vacío");
            $error = true;
        }


        if (!$error){
            Feedback::addFeedback_Form('lastname', true);
            return true;
        }else{
            Feedback::addFeedback_Form('lastname', false);
            return false;
        }
    }

    public static function SignUp_Email($a = null)
    {
        $error = false;
        if (!is_null($a)) {
            if (!empty($a)) {
                $a = self::clean($a);
                if (!filter_var($a, FILTER_VALIDATE_EMAIL)) {
                    Feedback::addInputMessage('email',"El email no es válido");
                    $error = true;
                }
                if(UserModel::EmailExist($a)){
                    Feedback::addInputMessage('email',"Este email ya esta en uso");
                    $error = true;
                }
            } else {
                Feedback::addInputMessage('email',"El email está vacío");
                $error = true;
            }


        }else{
            Feedback::addInputMessage('email',"El email está vacío");
            $error = true;
        }

        if (!$error){
            Feedback::addFeedback_Form('email', true);
            return true;
        }else{
            Feedback::addFeedback_Form('email', false);
            return false;
        }
    }


    public static function SignUp_Password($a = null, $b = null)
    {
        $error = false;
        if (!is_null($a)) {
            if (!empty($a)) {
                $a = self::clean($a);
                $contieneLetras = "/[a-zA-Z]/";
                $contieneNumeros = "/\d/";
                if (strlen($a) < 8) {
                    Feedback::addInputMessage('password',"Debe contener mínimo 8 caracteres");
                    $error = true;
                }
                if(Memory::getValue('nick') === $a){
                    Feedback::addInputMessage('password',"La contraseña no puede ser tu nick");
                    $error = true;
                }
                if(filter_var($a, FILTER_VALIDATE_EMAIL)){
                    Feedback::addInputMessage('password',"La contraseña no puede ser tu email");
                    $error = true;
                }
                if (strlen($a) > 30) {
                    Feedback::addInputMessage('password',"Debe contener máximo 30 caracteres");
                    $error = true;
                }
                if (!preg_match($contieneLetras, $a)) {
                    Feedback::addInputMessage('password',"Debe contener letras");
                    $error = true;
                }
                if (!preg_match($contieneNumeros, $a)) {
                    Feedback::addInputMessage('password',"Debe contener números");
                    $error = true;
                }
                if (!self::ConfirmPassword($a,$b)){
                    $error = true;
                }
                if (Memory::getValue('nick')===$a ||Memory::getValue('nick') === $b){
                    Feedback::addInputMessage('password',"No puede ser igual que tu nick");
                    $error = true;
                }
            } else {
                Feedback::addInputMessage('password',"Esta vacía");
                $error = true;
            }
        }else{
            Feedback::addInputMessage('password',"Esta vacía");
            $error = true;
        }
        if (!$error){
            Memory::keep('password',$a);
            //Feedback::addFeedback_Form('password', true);
            return true;
        }else{
            //Feedback::addFeedback_Form('password', false);
            return false;
        }
    }

    public static function ConfirmPassword($a = null,$b = null)
    {
        $error = false;
        if (!is_null($b)){
                if (!empty($a) && !empty($b)){
                    if ($a !== $b){
                        Feedback::addInputMessage('password2',"No coinciden las contraseñas ");
                        $error = true;
                    }
                }else{
                    Feedback::addInputMessage('password2',"Por favor, repite la contraseña ");
                    $error = true;
                }
        }else{
            Feedback::addInputMessage('password2',"Tienes que repetir la contraseña");
            $error = true;
        }

        if (!$error){
            return true;
        }else{
            return false;
        }
    }
    public static function check($a = null,$b = null)
    {
        if (isset($_POST[$a]))
            return self::valida($a,$b);
        else {
            Feedback::addInputMessage($a,"No has puesto nada");
        }
    }

    public static function valida($a = null,$b = null)
    {
        if ($a == null && $b == null){
            Feedback::addNegative("ERROR: Ha sido imposible validar");
        }else{
            switch ($a){
                default:
                    Feedback::addNegative("Estructura del formulario dudosa, extreme la <b>precaución</b>");
                    return false;
                case 'nick':
                    return self::SignUp_Nick($_POST[$a]);

                case 'name':
                    return self::SignUp_Name($_POST[$a]);

                case 'lastname':
                    return self::SignUp_Lastname($_POST[$a]);

                case 'email':
                    return self::SignUp_Email($_POST[$a]);

                case 'password':
                    return self::SignUp_Password($_POST[$a],$_POST[$b]);

                case 'password2':
                    return true;

            }
        }
    }

    public static function Signup()
    {
        $signup = true;

        if (!self::check('nick'))
            $signup =  false;

        if (!self::check('name'))
            $signup =  false;

        if (!self::check('lastname'))
            $signup =  false;

        if (!self::check('email'))
            $signup =  false;

        if (!self::check('password','password2'))
            $signup =  false;

        return $signup;

    }
    public static function AutoSignup(){
        $signup = true;

        foreach($_POST as $nombre_campo => $valor){
            if ($nombre_campo != 'password'){
                if (!self::check($nombre_campo)){
                    $signup = false;
                }
            }else{
                if (!self::check($nombre_campo,'password2')){
                    $signup = false;
                }
            }
        }
        return $signup;
    }
}