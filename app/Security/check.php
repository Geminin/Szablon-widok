<?php
require_once dirname(__FILE__).'/../../config.php';
//inicjacja mechanizmu sesji
session_start();


$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';


if ( empty($role) ){
	include $conf->app_root.'/app/Security/login.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}

require_once $conf->root_path.'/libs/Smarty.class.php';