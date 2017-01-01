<?php

class Controller
{
    public $view = null;
    public static $vista = null;
    function __construct()
    {
        $this->view = TemplatesFactory::templates();
        self::$vista = $this->view;
        Session::init();
    }

    protected function Go($title,$url)
    {
        $this->view->addData(['titulo' => $title]);
        echo $this->view->render($url);
    }


}
