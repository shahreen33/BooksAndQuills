<?php
include_once "User.php";
include_once "EmailResponder.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserFactory
{
    private static $SingleUserFactory;
 
    private function __construct(){}
    
    public static function getInstance()
    {
        if (null === static::$SingleUserFactory) {
            static::$SingleUserFactory = new static();
        }
        
        return static::$SingleUserFactory;
    }






    function getUser($name, $id, $email, $password,$type)
    {
        $ret;
        if($type == "General"){
           $ret = new GeneralUser($name, $id, $email, $password);
        }
        else {
            $ret = new Seller($name, $id, $email,$password);
        }
        $new_observer = new EmailResponder($ret);
        return $ret;
    }
    
    
}