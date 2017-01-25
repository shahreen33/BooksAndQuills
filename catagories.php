<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mycs.css">
        <link rel="stylesheet" href="table.css">
        <meta charset="UTF-8">
        <title>BOOKS & QUILLS - Categorized search</title>
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
        
        echo "<h2>Categories</h2>";
       
        
        
        global $con;
        $query = "SELECT DISTINCT Genre AS Genre FROM books ORDER BY Genre";
        $result = mysqli_query($con, $query);
        mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($result as $row)
        {
            $Gname = $row['Genre'];
            $query = "SELECT COUNT(*) AS count FROM books WHERE Genre='$Gname'";
            $res= mysqli_query($con, $query);
            $r = mysqli_fetch_array($res);
            $count = $r['count'];
            $link = "showBooksofCategory.php?Cat_id=".$Gname;
                echo "<table>";
                echo "<tr>";
                echo "<th><a href=$link><h3>$Gname($count)</h3></a></th>";
               echo "</tr>";
               echo "</table>";
                
        }
        
        ?>
    </body>
</html>
