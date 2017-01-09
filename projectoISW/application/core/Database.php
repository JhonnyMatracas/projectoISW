<?php

class Database
{
	private static $instancia = null;
	private static $db = null;

	private function __construct() {

		$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
		try {
			self::$db = new PDO(DB_TYPE . ':host=' .
							DB_HOST . ';dbname=' . 
							DB_NAME . ';charset=' . 
							DB_CHARSET, 
							DB_USER, 
							DB_PASS, 
							$options
							);
		} catch (PDOException $e) {
			exit("No tenemos accesible la Base de Datos");
		}
	}

	public static function getInstance(){

		if (is_null(self::$instancia)) {

			self::$instancia = new Database();

		}
		return self::$instancia;

	}

	public static function getDatabase() {
        self::getInstance();
		return self::$db;
	}

	public static function FetchOne($sql,$params = null)
    {
        try {
            $q = self::getDatabase()->prepare($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        ($params)?$q->execute($params):$q->execute();
        return $q->fetch();
    }
    public static function FetchAll($sql,$params = null)
    {
        try {
            $q = self::getDatabase()->prepare($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        ($params)?$q->execute($params):$q->execute();
        return $q->fetchAll();
    }

    public static function exe($sql,$params = null)
    {
        try {
            $q = self::getDatabase()->prepare($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        if(!is_null($params)){
            return $q->execute($params);
        }else{
            return $q->execute();
        }
    }
}