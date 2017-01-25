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
        global $con;
        $Seller_id = $_GET['seller'];
        $Book_id = $_GET['book'];
        $q = "UPDATE books SET Sold_count= Sold_count+ 1 WHERE Book_Author = '$Book_id'";
        $result = mysqli_query($con, $q);
        $query = "DELETE FROM sellerbooks WHERE Seller_id='$Seller_id' AND Book_info='$Book_id'";
        $result = mysqli_query($con, $query);
        if($result)
        {
            echo "<h3>Your book has been sold! Now it's removed from you selling list.</h3>";
        }
        
        ?>
        
    </body>
</html>
