<?php
require 'db.php';


session_start();
echo 'session start';
$id = isset($_SESSION['id']);
echo $id;


abstract class showDetailsStrategy {
    //put your code here
    private $key;
    public $LoggedIn = false;
    function __construct($key) {
        //echo $key;
        $this->key = $key;
        if(isset($_SESSION["id"])){
             $this->LoggedIn = true; 
            
        }
      
    }
    function getKey()
    {
        return $this->key;
    }
    abstract function showDetails();
}

class showBookDetails extends showDetailsStrategy
{
    
    function showDetails() 
    {
           
           echo 'show book';
           echo $this->getKey();
            header("Location: bookprof.php?Book_id=".$this->getKey());
             
         
         exit();
    }
}

class showUserDetails extends showDetailsStrategy
{
    
    function showDetails() 
    {
        
        
        if(!$this->LoggedIn)
        {
            header("Location: LogInMessage.php");
           
        }
         else
         {
             header("Location: userprof.php?id=".$this->getKey());
             
         }
         exit();
        
    }   
}

