
<?php
    include "assets/php/Connection.php";
?>
<?php

    $UserID = $_COOKIE['UserID'];
    $Product_No = $_COOKIE['Product_No'];
    $ProductName = $_COOKIE['ProductName'];
    $ProductDetails = $_COOKIE['ProductDetails'];
    $price = $_COOKIE['Price'];
    $AddTable =$_COOKIE['DataTable'];  
    $foldername = $_COOKIE['folderName'];
    $MoveFolder = $_COOKIE['MoveFolder'];
    $quantity = $_COOKIE['quantity'];
    $ArtistID = $_COOKIE['ArtistID'];
    $DesigneUsed = $_COOKIE['DesigneUsed'];
    $OrderType = $_COOKIE['OrderType'];
    if($OrderType != "false")
    {
        $query = "INSERT into ".$AddTable."  (ProductName,ProductDetails,ProductPrice,ProductQuantity,UserID,`Artist_Id`,OrderType,DesigneUsed) VALUES ('".$ProductName."','".$ProductDetails."',".$price.",".$quantity.",".$UserID.",'".$ArtistID."','".$OrderType."','".$DesigneUsed."');";
    }
    else
    {
        $query = "INSERT into ".$AddTable."  (ProductName,ProductDetails,ProductPrice,ProductQuantity,UserID,`Artist_Id`,DesigneUsed) VALUES ('".$ProductName."','".$ProductDetails."',".$price.",".$quantity.",".$UserID.",'".$ArtistID."','".$DesigneUsed."');";
    }
    $result = $conn->query($query);
    $data = $conn->insert_id;
    if($result)
    {
        
        $filePath = "".$MoveFolder."/".$Product_No.".jpeg";
        $data = $conn->insert_id;
        $destinationFilePath = ''.$foldername.'/'.$data.'.jpeg';
        if( !copy($filePath , $destinationFilePath) ) {  
            echo"File can't be moved!";  
            $sql = "DELETE FROM `".$AddTable."` WHERE `S_NO` = ".$data.";";
            $result = $conn->query($sql);
        } 
        else
        {
            echo"File has been moved!"; 
        }
    }
    else
    {
        echo"$query";
    }
?>   