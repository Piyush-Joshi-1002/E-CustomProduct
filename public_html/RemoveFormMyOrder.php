 <?php
        include "assets/php/Connection.php";
 ?>
 <?php
        $Sno = $_COOKIE['SNO'];
        $sql = "DELETE FROM `buyproducts` WHERE `S_NO` = ".$Sno.";";
        $result = $conn->query($sql);
        if($result)
        {
            if(file_exists("uploads/".$Sno.".jpeg"))
                unlink("uploads/".$Sno.".jpeg");
            echo "done";
        }
        else
        { 
            echo "Not Done";
        }
 ?>