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
        $this->view->addData(['titulo' => 'Empìeza a Innovar || Innova Side World']);
        echo $this->view->render('signup/index');
    }
}