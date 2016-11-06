<?php
include "User.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserFactory
{
    private static $SingleUserFactory;
 
    
    public static function getInstance()
    {
        if (null === static::$SingleUserFactory) {
            static::$SingleUserFactory = new static();
        }
        
        return static::$SingleUserFactory;
    }






    function getUser($name, $id, $email, $password,$type)
    {
        if($type == "General"){
           return new GeneralUser($name, $id, $email, $password);
        }
        else {
            return new Seller($name, $id, $email,$password);
        }
    }
    
    
}