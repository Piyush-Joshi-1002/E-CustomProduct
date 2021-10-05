
<?php
    include "assets/php/Connection.php";
?>
<?php
   
    $UserID = $_COOKIE['UserID'];
    $AddTable =$_COOKIE['DataTable'];  
    $foldername = $_COOKIE['folderName'];
    $ProductName = $_COOKIE['productname'];
    $ProductDescription = $_COOKIE['productDescription'];
    $TshirtChoice = $_COOKIE['TshirtChoice'];
    $UserDesign = $_COOKIE['UserDesign'];
    $query = "SELECT * FROM `designeid` WHERE 1";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $Designe_Name = $row['Number'];
    $DesigneUsed = $_POST['DesigneUsed'];
    if($UserDesign == "True")
    {
        
        $DesigneUsed = explode(";", $DesigneUsed)[1];
        $DesigneUsed = explode(",", $DesigneUsed)[1];
        $DesigneUsed = str_replace(" ", "+", $DesigneUsed);
        $DesigneUsed = base64_decode($DesigneUsed);
        if(file_put_contents("AllSellDesigne/".$Designe_Name.".png",$DesigneUsed))
        {
            
            $Designe_Name;
            $query = "UPDATE designeid set Number = ".($Designe_Name+1)." where Number = ".$Designe_Name."";
            $result = $conn->query($query);
            $DesigneUsed = "".$Designe_Name.".png";
        }
        else
        {
            echo"Not_Done";
        }
    }
    $Price = $_COOKIE['productPrice'];
    $query = "INSERT into ".$AddTable."  (ProductName,ProductDetails,Price,UserID,`Tshirt-Type`,DesigneUsed) VALUES ('".$ProductName."',\"".$ProductDescription."\",".$Price.",".$UserID.",'".$TshirtChoice."','AllSellDesigne/".$DesigneUsed."');";
    $result = $conn->query($query);
    if($result)
    {
        $data = $conn->insert_id;
        $image = $_POST["image"];
        $image = explode(";", $image)[1];
        $image = explode(",", $image)[1];
        $image = str_replace(" ", "+", $image);
        $image = base64_decode($image);
        $result = file_put_contents("".$foldername."/".$data.".jpeg", $image);
        if($result)
        {
            echo "Done";
        }
        else
        {
            $query = "DELETE FROM ".$AddTable."  where S_NO = ".$data.";";
            $result = $conn->query($query);
            echo"not done";
        }
    }
        
    else
    {
        echo "NotDone ".$query."";
    }
?>   