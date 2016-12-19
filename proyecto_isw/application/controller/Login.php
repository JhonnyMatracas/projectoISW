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
        if (! $_POST){
            $this->view->render("login/index",["titulo" => "MasterLogin"]);
        }else{
            echo $_POST["nick"];
        }

    }
}