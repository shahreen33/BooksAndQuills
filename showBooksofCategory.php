<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mycs.css">
        <link rel="stylesheet" href="table.css">
        <meta charset="UTF-8">
        <title>BOOKS & QUILLS</title>
    </head>
    <body>
        <style>
            h7{
                font-size: 15px;
            }
            h8{
                font-size: 18px;
            }

            table {

border: none;
    border-collapse: collapse;
    width: 100%;
    padding-left: 0px;
    background-color:  #ffcc66;
    border: 1px solid black;
}

th {
    height: 20px;
text-align: center;
padding: 0px 0px 0px 0px;
font-size: 25px;

}

td{
text-align: left;
padding: 0px 5px 5px 5px;
}

        </style>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 require 'db.php';
               
if(isset($_GET['Cat_id']) && !empty($_GET['Cat_id']))
  {
      
      $key = $_GET['Cat_id'];
      
     
      
  }
        echo "<h2>Catagory : $key</h2>";
        
        global $con;
        $query = "SELECT * FROM books WHERE Genre='$key'";
        $result = mysqli_query($con, $query);
        mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($result as $row)
        {
               $link = "StrategyPatternDemo.php?show=books&id=".$row['Book_Author'];
                echo "<table>";
                echo "<tr>";
                echo "<th align=\"left\"><img src=\"sure.png\" alt=\"avatar\" style=\"width:100px;height:100px;>\"></th>";
                echo "<th>".$row['Name']."<h7>&ensp;by ".$row['Author']."</th>";
                echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
                echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
                echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><a href=$link><h8>See details</h8></a></th>";
               echo "</tr>";
                /*echo "<th>".$_GET["fname"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><a href=\"userprof.php\">Go to profile</a></b></td>";
                echo "</tr>";*/
                echo "</table>";
     //echo "<br>";
                
        }
        ?>
        
   </body>
</html>
