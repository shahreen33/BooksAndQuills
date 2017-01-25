<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of showDetailsContext
 *
 * @author ASUS
 */
include_once 'showDetailsStrategy.php';
class showDetailsContext {
        
        private $strategy;
        function __construct(showDetailsStrategy $strategy){
            $this->strategy = $strategy;
            $this->strategy->showDetails();
        }
        
      
       
   
    
}
