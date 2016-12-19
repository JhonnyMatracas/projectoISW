<?php

class Controller
{
    public $view = null;

    function __construct()
    {
        $this->view = new View();
        Session::init();
    }

}
