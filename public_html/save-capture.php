<?php
        include "assets/php/Connection.php";
    ?>
<?php
    $Table;    
    if($_COOKIE['TshirtType'] == "Male" )
    {
        $Table = 'price_for_male';
    }
    else
    {
        $Table = 'price_for_female';
    }
    $query="SELECT * FROM `".$Table."` where `Tshirt-Type` = '".$_COOKIE['TshirtChoice']."';";

    $result = $conn->query($query);
    if($result)
    {
        $row = $result->fetch_assoc();
        $price = $row['Price']*$_COOKIE['quantity'];
        $TshirtType = $_COOKIE['TshirtType'];
        $TshirtChoice = $_COOKIE['TshirtChoice'];
        $quantity = $_COOKIE['quantity'];
        $UserID = $_COOKIE['UserID'];
        $AddTable =$_COOKIE['DataTable'];  
        $foldername = $_COOKIE['folderName'];
        $ProductName = $_COOKIE['ProductName'];
        $ArtistID = $_COOKIE['ArtistID'];
        $OrderType = $_COOKIE['OrderType'];
        $ProductDetails = "Customize a beautiful ".$TshirtChoice ." Tshirt with Unique and enovative Designe on " .$TshirtType. " Type Tshirt "; ;
        $query = "INSERT into ".$AddTable."  (ProductName,ProductDetails,ProductPrice,ProductQuantity,UserID) VALUES ('".$ProductName."','Custom ".$TshirtType." tshirt in ".$TshirtChoice." formate',".$price.",".$quantity.",".$UserID.");";
        if($OrderType != "false")
        {
            $query = "INSERT into ".$AddTable."  (ProductName,ProductDetails,ProductPrice,ProductQuantity,UserID,`Artist_Id`,OrderType) VALUES ('".$ProductName."','".$ProductDetails."',".$price.",".$quantity.",".$UserID.",'".$ArtistID."','".$OrderType."');";
        }
        else
        {
            $query = "INSERT into ".$AddTable."  (ProductName,ProductDetails,ProductPrice,ProductQuantity,UserID,`Artist_Id`) VALUES ('".$ProductName."','".$ProductDetails."',".$price.",".$quantity.",".$UserID.",'".$ArtistID."');";
        }
        $result = $conn->query($query);
        if($result)
        {
            $data = $conn->insert_id;
            $image = $_POST["image"];
            $image = explode(";", $image)[1];
            $image = explode(",", $image)[1];
            $image = str_replace(" ", "+", $image);
            $image = base64_decode($image);
            file_put_contents("".$foldername."/".$data.".jpeg", $image);
            echo "Done";
        }
        else
        {
            echo"NotDone";
            echo"".$query."";
        }
    }
    else
    {
        echo"NotDone";
        echo"".$query."";
    }
?>    
