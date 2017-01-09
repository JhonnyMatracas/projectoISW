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
            if (Validate::Signup()){
                //hacer un new User si existe en la base de datos insertar si no iniciar sesion
                header('Location: home');
                new User(Memory::getValue('nick'),Memory::getValue('password'),Memory::getValue('name'),Memory::getValue('lastname'),Memory::getValue('email'));
                Session::delFormData();
            }else{
                parent::Go('Comienza a Innovar · Innova Side World', 'signup/index');

            }


        endif;
    }
}