<?php

/**
 * Created by PhpStorm.
 * User: jhonnymatracas
 * Date: 8/01/17
 * Time: 0:03
 */
class UserModel extends Model
{
    protected static $table = 'usr_users';
    protected static $table2 = 'usr_details';
    public static $model = null;

    protected $nick;
    protected $pass;
    protected $name;
    protected $lastname;
    protected $email;

    private function __construct($nick = null,$pass = null,$name = null,$lastname = null, $email = null)
    {
        $this->nick = $nick;
        $this->pass= $pass;
        $this->pass=$pass;
        $this->name =$name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public static function getModel($nick = null,$pass = null,$name = null,$lastname = null, $email = null)
    {
        if (is_null(self::$model)){
            self::$model = new UserModel($nick,$pass,$name,$lastname,$email);
        }

        return self::$model;
    }
    public static function UserExist($user,$pass)
    {
        $sql = "SELECT id FROM ".self::$table." WHERE nick=:nick";
        $q = self::FetchOne($sql,[':nick'=>$user]);
        if (isset($q->id))
            return $q->id;
        else
            return null;
    }
    public static function NickExist($nick)
    {

        $sql = "SELECT id FROM ".self::$table." WHERE nick=:nick";
        $q = self::FetchOne($sql,[':nick'=>$nick]);
        if (isset($q->id))
            return $q->id;
        else
            return null;

    }

    public static function EmailExist($email)
    {

        $sql = "SELECT usr_id as id FROM ".self::$table2." WHERE email=:email";
        $q = self::FetchOne($sql,[':email'=>$email]);
        if (isset($q->id))
            return $q->id;
        else
            return null;


    }
    public static function getUser($user)
    {
        $sql = "SELECT DISTINCT id,nick,pass,name,lastname,email,created_at,updated_at FROM ".self::$table.",".self::$table2." WHERE id=usr_id and ";

        (filter_var($user,FILTER_VALIDATE_EMAIL)) ? $sql .= "email=:user" : $sql .= "nick=:user";

        $q = self::FetchOne($sql,[':user'=>$user]);
        if (isset($q->id))
            return $q;
        else
            return null;

    }
    public function exists()
    {
        $sql = "SELECT count(id) as count FROM ".static::$table." WHERE nick=:nick and pass=:pass";
        $params = [
            ':nick'=> $this->nick,
            ':pass' =>$this->pass
        ];
        $q = self::FetchOne($sql,$params);

        if ($q->count > 0)
            return true;
        else
            return false;
    }

    public function addUser()
    {
        $error = true;
        $sql = "INSERT INTO ".self::$table."(nick,pass) value(:nick,:pass)";
        $params1 = [':nick'=>$this->nick,':pass'=>$this->pass];

        if($this->exe($sql,$params1))
            $error=true;
        else
            return false;

        $id = parent::getDatabase()->lastInsertId();
        $sql2 = "INSERT INTO ".self::$table2." (name,lastname,email,created_at,usr_id) value (:name,:lastname,:email,NOW(),:id)";
        $params2 = [':name'=>$this->name,':lastname'=>$this->lastname,":email"=>$this->email,":id"=>$id];

        if($this->exe($sql2,$params2))
            $error = true;
        else
            $error = false;

        return $error;
    }
}