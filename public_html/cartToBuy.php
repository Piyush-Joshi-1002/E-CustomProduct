 <?php
        include "assets/php/Connection.php";
 ?>
 <?php
        
        $sql = "DELETE FROM `addtocart` WHERE `S_NO` = ".$Sno.";";
        
        $result = $conn->query($sql);
        if($result)
        {
            unlink("CartItems/".$Sno.".jpeg");
            echo "done";
        }
        else
        { 

        }
 ?>