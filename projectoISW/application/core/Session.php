<?php

class Session
{
	public static function init(){

		if (session_id() == '') {

			session_start();

		}

	}

	public static function set($key, $value) {

		$_SESSION[$key] = $value;

	}

	public static function get($key) {

		if (isset($_SESSION[$key])) {

			return $_SESSION[$key];

		}

	}

	public static function add($key, $value) {

		$_SESSION[$key][] = $value;

	}


    public static function addOne($key,$subkey, $value) {

        $_SESSION[$key][$subkey] = $value;

    }
    public static function addVector($a,$b, $value) {

        $_SESSION[$a][$b][] = $value;

    }
    public static function getOne($a,$b)
    {
        if (isset($_SESSION[$a][$b]))
            return $_SESSION[$a][$b];
    }
    public static function delFormData(){
        self::set('feedback_positive', null);
        self::set('feedback_negative', null);
        self::set('fb_form', null);
        self::set('memory_form', null);
        self::set('input_message', null);
        self::set('input_value', null);
    }
	public static function destroy() {

		session_destroy();

	}

	public static function userIsLoggedIn() {

		return (Session::get('user_logged_in')) ? true : false;

	}



}