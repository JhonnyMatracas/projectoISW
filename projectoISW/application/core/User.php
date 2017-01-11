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
    protected $model = null;

    protected $nick;
    protected $pass;
    protected $name;
    protected $lastname;
    protected $email;

    public function __construct($nick = null,$pass = null,$name = null,$lastname = null, $email = null)
    {
        $this->setNick($nick);
        $this->setPass(password_hash($pass,PASSWORD_DEFAULT,['cost'=>15]));
        $this->setName($name);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setModel(UserModel::getModel(
                        $this->getNick(),
                        $this->getPass(),
                        $this->getName(),
                        $this->getLastname(),
                        $this->getEmail())
                        );
        $this->init();
    }

    /**
     * @param null $nick
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    /**
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param null $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->getName().' '.$this->getLastname();
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function init()
    {
        if (!$this->model->exists()) {
            if($this->model->addUser()){
                Feedback::addPositive('<b>Bienvenido</b> a Innova Side World, '.$this->name.'! Revisa tu correo y <b>activa tu cuenta</b> para iniciar sesion');
            }else{
                Feedback::addNegative('No se ha podido insertar');
            }
        }
    }




}