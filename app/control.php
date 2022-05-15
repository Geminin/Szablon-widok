<?php
require_once dirname(__FILE__).'/../config.php';

include $conf->root_path.'/app/Security/check.php';


require_once $conf->root_path.'/libs/Smarty.class.php';


    global $conf;
    
    $smarty = new Smarty();
    $smarty->assign('conf',$conf);
    
    $smarty->assign('page_title','Strona główna');
    
            
    $smarty->assign('hide_intro',$this->hide_intro);
    
    $smarty->assign('msgs',$this->msgs);
    $smarty->assign('form',$this->form);
    $smarty->assign('res',$this->result);
    
    $smarty->display($conf->root_path.'/app/Widok.html');

