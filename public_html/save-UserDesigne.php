<script>
    <?php
        include "assets/php/Connection.php";
    ?>
    <?php
        $query="SELECT * FROM `".$Table."` where `Tshirt-Type` = '".$_COOKIE['TshirtChoice']."';";
        $result = $conn->query($query);
        $image = $_POST["image"];
        $image = explode(";", $image)[1];
        $image = explode(",", $image)[1];
        $image = str_replace(" ", "+", $image);
        $image = base64_decode($image);
        
        file_put_contents("".$foldername."/".$data.".jpeg", $image);

        echo "Done";
    ?>    
</script>