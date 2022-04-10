<?php

namespace Controller;
use Model\personneModel;
use Source\Router;


class UserController{

public function getUsr($id)
{
    $p = new personneModel();
    $res = $p->getUser($id);
    var_dump($res);
    return $res;
}
public function getUsrs()
{
    $p = new personneModel();
    $ar = array();
    $res = $p->getUsers($ar);
    require 'View/UserView.php';
}

public function getUsrByName($ar)
{
    $p = new personneModel();
    $res = $p->getUserByName($ar);
    var_dump($res);
    return $res;
}

}



