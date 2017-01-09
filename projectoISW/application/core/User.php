<?php

/**
 * Created by PhpStorm.
 * User: jhonnymatracas
 * Date: 8/01/17
 * Time: 12:10
 */
class User
{
    protected static $table = 'usr_users';
    protected static $table2 = 'usr_details';
    protected $model;

    protected $nick;
    protected $pass;
    protected $name;
    protected $lastname;
    protected $email;

    public function __construct($nick = null,$pass = null,$name = null,$lastname = null, $email = null)
    {
        $this->nick = $nick;
        $this->pass= $pass;
        $this->name =$name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->model = UserModel::getModel($this->nick,$this->pass,$this->name,$this->lastname,$this->email);
    }



}