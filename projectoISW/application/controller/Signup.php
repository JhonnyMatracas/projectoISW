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
            Validate::Nick($_POST['nick']);
            parent::Go('Comienza a Innovar · Innova Side World', 'signup/index');

        endif;
    }
}