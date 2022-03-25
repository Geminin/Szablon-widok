<?php


require_once dirname(__FILE__).'/../../config.php';


require_once $conf->root_path.'/app/Cred/CredControl.class.php';

$ctrl = new CredCtrl();
$ctrl->process();
