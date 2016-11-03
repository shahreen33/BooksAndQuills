<?php

include('db.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class User
{
    private $name= "";
    private $id = "";
    private $email = "" ;
    private $password = "";
    public $type ="" ;
    
    function __construct($name,$id,$email,$password) {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
       
    }
    function getName()
    {
        return $this->name;
    }
    
     function getId()
    {
        return $this->id;
    }
     function getEmail()
    {
        return $this->email;
    }
     function getPassword()
    {
        return $this->password;
    }
     abstract function insertUser($name,$id,$email,$password, $type);
    
  
    
}

class GeneralUser extends User{
    public $type = 1;
     function insertUser($name,$id,$email,$password, $type)
     {
        $iderror = false;
        $emailerror = false;
        global $con;
        $query1 = "SELECT UserId FROM users WHERE UserId='$id'";
         $result1 = mysqli_query($con,$query1);
         $count = mysqli_num_rows($result1);
        
         if($count!=0){
             $iderror = true;
         }
         
        $query = "SELECT Email FROM users WHERE Email='$email'";
         $result2 = mysqli_query($con,$query);
         $count = mysqli_num_rows($result2);
         if($count != 0)
             $emailerror = true;
              
        $query = "INSERT into users (Name, UserID, Email, Password, Type) VALUES ('$name','$id', '$email', '.md5($password).', '$type')";
        $result = mysqli_query($con,$query);
        if($result && !$iderror && !$emailerror){
           return true;
        }
        
        else
        {
           return false;
        }
     }
}

class Seller extends User{
    public $type = 2;
     function insertUser($name,$id,$email,$password, $type)
     {
        $iderror = false;
        $emailerror = false;
        global $con;
        $query1 = "SELECT UserId FROM users WHERE UserId='$id'";
         $result1 = mysqli_query($con,$query1);
         $count = mysqli_num_rows($result1);
        
         if($count!=0){
             $iderror = true;
         }
         
        $query = "SELECT Email FROM users WHERE Email='$email'";
         $result2 = mysqli_query($con,$query);
         $count = mysqli_num_rows($result2);
         if($count != 0)
             $emailerror = true;
              
        $query = "INSERT into users (Name, UserID, Email, Password, Type) VALUES ('$name','$id', '$email', '.md5($password).', '$type')";
        $result = mysqli_query($con,$query);
        if($result && !$iderror && !$emailerror){
           return true;
        }
        
        else
        {
           return false;
        }
     }
}

