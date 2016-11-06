<?php

include('db.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Book
{
    private $name= "";
    private $genre = "";
    private $pagecount = "" ;
    private $pulishers = "";
    private $synopsis ="" ;
    
    function __construct($name,$genre,$pagecount,$publishers, $synopsis) {
        $this->name = $name;
        $this->genre = $genre;
        $this->pagecount = $pagecount;
        $this->publishers = $publishers;
        $this->synopsis = $synopsis;
       
    }
    function getName()
    {
        return $this->name;
    }
    
     function getGenre()
    {
        return $this->genre;
    }
     function getPageCount()
    {
        return $this->pagecount;
    }
     function getPublishers()
    {
        return $this->publishers;
    }
    
     function getSynopsis()
    {
        return $this->synopsis;
    }
     abstract function insertBook($name,$genre,$pagecount,$publishers, $synopsis);
    
  
    
}

class Books extends Book{
    
     function insertBook($name,$genre,$pagecount,$publishers, $synopsis)
     {
        $error = false;
        
        global $con;
        $query1 = "SELECT Name FROM books WHERE Name='$name'";
         $result1 = mysqli_query($con,$query1);
         $count = mysqli_num_rows($result1);
        
         if($count!=0){
             $error = true;
         }
         
        
        $query = "INSERT into books (Name, Genre, PageCount, Publishers, Synopsis) VALUES ('$name','$genre', '$pagecount', '$publishers', '$synopsis')";
        $result = mysqli_query($con,$query);
        if($result && !$error ){
           return true;
        }
        
        else
        {
           return false;
        }
     }
}



