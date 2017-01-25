<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once "showDetailsContext.php";
include_once 'showDetailsStrategy.php';

  if(isset($_GET['show']) && !empty($_GET['show']))
  {
      
      $key1 = $_GET['show'];
      
      if($key1 == 'books')
      {
         
           if(isset($_GET['id']) && !empty($_GET['id']))
           {
               
                $key = $_GET['id'];
               

                $context = new showDetailsContext(new showBookDetails($key));
     
      
           }
        
      }
      
      else
      {
          if(isset($_GET['id']) && !empty($_GET['id']))
           {
      
                $key = $_GET['id'];

                $context = new showDetailsContext(new showUserDetails($key));
     
      
           }
          
      }
      
  }
 