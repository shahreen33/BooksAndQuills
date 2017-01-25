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
    private $author = "";
    private $genre = "";
    private $pagecount = "" ;
    private $publishers = "";
    private $synopsis ="" ;
    
    function __construct($name,$author, $genre,$pagecount,$publishers, $synopsis) {
        $this->name = $name;
        $this->author = $author;
        $this->genre = $genre;
        $this->pagecount = $pagecount;
        $this->publishers = $publishers;
        $this->synopsis = $synopsis;
       
    }
    function getName()
    {
        return $this->name;
    }
    
    function getAuthor()
    {
        return $this->author;
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
     abstract function insertBook($name, $author, $genre,$pagecount,$publishers, $synopsis);
    
  
    
}

class Books extends Book{
    
     function insertBook($name, $author,$genre,$pagecount,$publishers, $synopsis)
     {
         $first= str_replace(' ', '', $name);
         $first = preg_replace('/\s+/', '', $first);
         
                  
         $second = str_replace(' ', '', $author);
         $second = preg_replace('/\s+/', '', $second);
         
         $book_author = $first . '_' . $second;
         
        $error = false;
        
        global $con;
        $query1 = "SELECT Name FROM books WHERE Name='$name'";
         $result1 = mysqli_query($con,$query1);
         $count = mysqli_num_rows($result1);
        
         if($count>0){
             $error = true;
         }
       
        
        $query = "INSERT INTO books(Name, Author, Genre, PageCount, Publishers, Synopsis, Book_Author) VALUES ('$name', '$author','$genre', '$pagecount','$publishers','$synopsis' ,'$book_author')";
        $result = mysqli_query($con,$query);
        echo (int)$error;
        if($result && !$error ){
            
           return true;
        }
        
        else
        {
           return false;
        }
     }
}



