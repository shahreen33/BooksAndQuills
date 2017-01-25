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
        require 'db.php';
        include "adapter_sort.php";
        $key = $_GET["fname"];
        echo "<h2>Search results for '" . $key . "':</h2>";
        $prev_key = $key;
        for ($i = 0; $i <strlen($key); $i+=2) {
            $key = substr_replace($key, '%', $i, 0);
    
        }
        $key.= '%';
        
        
        global $con;
        $query = "SELECT * FROM books WHERE Name LIKE '$key'";
        $result = mysqli_query($con, $query);
        mysqli_fetch_all($result, MYSQLI_ASSOC);
//        foreach($result as $tanzir)
//        {
//            echo $tanzir['Name']."    #    ";
//        }
//        echo " honkahonka ";
        $adapt_rows = new adapter();
        $result = $adapt_rows->adapt($result, $prev_key, 1);
        
//        foreach($result as $tanzir)
//        {
//            echo $tanzir['Name']."    #    ";
//        }
//        
       if($result=="No results found!")
       {
           echo "<h3>$result</h3>";
       }
       else
       {
        $n = count($result);
        
        foreach($result as $tanzir)
        {
            
            $link = "StrategyPatternDemo.php?show=books&id=".$tanzir['Book_Author'];
            
            
     echo "<table>";
     echo "<tr>";
      $id = $tanzir['Book_Author'];
         $query = "SELECT Imagepath from books WHERE Book_Author = '$id'";
         $result1 = mysqli_query($con,$query);
         $rows = mysqli_fetch_array($result1);
         $image_id = $rows['Imagepath'];
         
         if($image_id=='')
         {
             echo "<th align=\"left\"><img src=\"boi.png\" alt=\"avatar\" style=\"width:100px;height:100px;>\"></th>";
         }
             
         else
         {
              echo "<th align=\"left\"><img src='".$image_id."' height='100' width='100' ></th>";
          //  echo "<th align=\"left\"><img src=\".$image_id.\"style=\"width:100px;height:100px;>\"></th>";
          }
     //echo "<th align=\"left\"><img src=\"sure.png\" alt=\"avatar\" style=\"width:100px;height:100px;>\"></th>";
     echo "<th>".$tanzir['Name']."<h7>&ensp;by ".$tanzir['Author']."</th>";
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
       }
        ?>
    </body>
</html>
