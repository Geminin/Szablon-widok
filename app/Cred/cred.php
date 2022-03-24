<?php


require_once dirname(__FILE__).'/../config.php';


require_once $conf->root_path.'/app/CredCtrl.class.php';

$ctrl = new CredCtrl();
$ctrl->process();
