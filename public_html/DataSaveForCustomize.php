<?php
    include "assets/php/Connection.php";
?>
<?php
        
        $ImageName = $_COOKIE['ImageName'];
        $ProductName = $_COOKIE['ProductName'];
        $ProductPrice = $_COOKIE['ProductPrice'];
        $ProductDetails = $_COOKIE['ProductDetails'];
        $ProductQuantity = $_COOKIE['ProductQuantity'];
        $UserID = $_COOKIE['UserID'];
        $Sno = $_COOKIE['ImageName'];
        $Artist_Id = $_COOKIE['Artist_Id'];
        $OrderType = $_COOKIE['OrderType'];
        $DesigneUsed = $_COOKIE['DesigneUsed'];
        /* Move File from cart folder to destination folder */
        $sql = "DELETE FROM `addtocart` WHERE `S_NO` = ".$Sno.";";
        $result = $conn->query($sql);
        if($result)
        {
            $query = "INSERT into buyproducts  (ProductName,ProductDetails,ProductPrice,ProductQuantity,UserID,`Artist_Id`,OrderType,DesigneUsed) VALUES ('".$ProductName."','".$ProductDetails."',".$ProductPrice.",".$ProductQuantity.",".$UserID.",".$Artist_Id.",\"".$OrderType."\",'".$DesigneUsed."');";
            $result = $conn->query($query);
            if($result)
            {
                $filePath = "CartItems/".$ImageName.".jpeg";
                $data = $conn->insert_id;
                $destinationFilePath = 'uploads/'.$data.'.jpeg';
                if( !rename($filePath, $destinationFilePath) ) {  
                    echo"File can't be moved!";  
                    $sql = "DELETE FROM `buyproducts` WHERE `S_NO` = ".$data.";";
                    $result = $conn->query($sql);
                } 
                else
                {
                    echo"File has been moved!"; 
                }
            }
            else
            {
                echo"".$query."";
            }
        }
        
?>