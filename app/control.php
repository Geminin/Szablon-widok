<?php
require_once dirname(__FILE__).'/../config.php';

include $conf->root_path.'/app/Security/check.php';

require_once $conf->root_path.'/libs/Smarty.class.php';

include 'Widok.html';
