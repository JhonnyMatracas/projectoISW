<?php

/**
 * Created by PhpStorm.
 * User: Fernando Meseguer
 * Date: 19/12/2016
 * Time: 15:08
 */
class Login extends Controller
{
    public function index()
    {
        Memory::keepAllPost();
        if (Validate::Login()) {
            Memory::delFormData();
        }
        header('Location: /home');



    }
}