<?php

/**
 * Created by PhpStorm.
 * User: jhonnymatracas
 * Date: 1/01/17
 * Time: 15:56
 */
class Memory extends Controller
{

    public static function keep($name,$value)
    {
        parent::$vista->addData([$name => $value]);
    }

}