<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pair{
    public $dist;
    public $idx;
}

class adapter{
    
    private $edit_distance = array();
    private $curr = array();
    private $currSize;
    private $tar = array();
    private $tarSize;
    private $dp = array(array()); 
    
  
    function dpcal($i, $j)
    {
        if($i==$this->currSize)
            return $this->tarSize-$j;
        if($j == $this->tarSize)
            return $this->currSize-$i;
        if($this->dp[$i][$j] != -1)
            return $this->dp[$i][$j];
        if($this->curr[$i] == $this->tar[$j])
            return $this->dpcal($i+1,$j+1);
        $ret1 = $this->dpcal($i+1,$j);
        $ret2 = $this->dpcal($i, $j+1);
        $ret3 = $this->dpcal($i+1, $j+1);
        return $this->dp[$i][$j] = 1+min($ret1,$ret2,$ret3);
    }
    
    function calculate($current, $target)
    {
        $this->tar = $target;
        $this->curr = $current;
        $this->currSize= strlen($current);
        $this->tarSize = strlen($this->tar);
        for($i=0; $i< $this->currSize+10; $i++)
        {
            for($j=0; $j< $this->tarSize+10; $j++)
                $this->dp[$i][$j]=-1;
        }
        return $this->dpcal(0,0);
    }
    
    function solveBook($current, $target)
    {
        $ret1 = $this->calculate($current['Name'],$target);
        $ret2 = $this->calculate($current['Author'], $target);
        $ret3 = $this->calculate($current['Book_Author'], $target);
        return min($ret1,$ret2,$ret3);
    }
    
    function solveUser($current, $target)
    {
        $ret1 = $this->calculate($current['Name'],$target);
        return $ret1;
    }
    
    function cmp($a, $b)
    {
        return ($a->dist < $b->dist) ? -1: 1;
    }
    
    function adapt($arr, $target, $isBook)
    {

        $present = 0;
        
        foreach($arr as $key => $value)
        {
            $present++;
            $current = $value;
            $edit_distance[$key] = new pair();
            if($isBook == 1)
                $edit_distance[$key]->dist = $this->solveBook($value,$target);
            else
               $edit_distance[$key]->dist = $this->solveUser($value,$target); 
            
            $edit_distance[$key]->idx = $key;
        }
        if($present == 0)
            return "No results found!";
       
        
        usort($edit_distance, array("adapter", "cmp"));
        $sortedArr = array();
        $i = 0;
        foreach($edit_distance as $key => $value)
        {
            $pos = $value->idx;
            foreach($arr as $key => $value)
            {
                if($key == $pos)
                {
                    $sortedArr[$i] = $value;
                    break;
                }
            }
            $i++;
        }
        return $sortedArr;
    }
}