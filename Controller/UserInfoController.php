<?php

namespace Controller;
use Model\personneModel;

class UserController{

public function getUsrInfo($id)
{
 
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $p = new personneModel();
        $res = $p->getUser($id);
        var_dump($res);
        require('C:\wamp64\www\MVC\View\UserInfoView.php');
    }
    
    return $res;
}

}



