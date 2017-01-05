<?php

/**
 * Created by PhpStorm.
 * User: Fernando Meseguer
 * Date: 23/12/2016
 * Time: 15:14
 */
class Signup extends Controller
{


    public function index()
    {
        if(!$_POST):
            parent::Go('Comienza a Innovar· Innova Side World','signup/index');
        else:
            Memory::keepAllPost();
            if (Validate::AutoSignup()){
                //hacer un new User si existe en la base de datos insertar si no iniciar sesion
                Session::delFormData();
                header('Location: home');
                Feedback::addPositive('<b>Bienvenido</b> a Innova Side World!');
            }else{
                parent::Go('Comienza a Innovar · Innova Side World', 'signup/index');



            }


        endif;
    }
}