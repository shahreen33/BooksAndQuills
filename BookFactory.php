<?php
include "Book.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BookFactory
{
    private static $SingleBookFactory;
 
    
    public static function getInstance()
    {
        if (null === static::$SingleBookFactory) {
            static::$SingleBookFactory = new static();
        }
        
        return static::$SingleBookFactory;
    }






    function getBook($name, $genre, $pagecount,$publishers,$synopsys)
    {
       return new Books($name, $genre, $pagecount,$publishers,$synopsys);
    }
    
    
}