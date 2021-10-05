<?php
    include "Connection.php";
?>
<script>
    
    var Designes = [];
    <?php

        $sql = "SELECT * FROM designes";
        $result = $conn->query($sql);
        error_reporting(0);
        while($row = $result->fetch_assoc()) {
            echo "Designes.push('".$row['SourcePath']."');";        
            echo "document.getElementById('More_Images_Recomended').innerHTML += \"<div class=T_shirtChoice  onclick=ChangeDesignes('".$row['SourcePath']."')><img src='assets/images/Disgnes/".$row['SourcePath']."' width=100% height=100%></div>\";";

        }
    ?>
    
    function saveDataToBuy(OrderType) {
        window.scrollTo(0, 0);  
        console.log(" " +TshirtCatagory + " " + TshirtType);
       var quantity = document.getElementById("Quantity").value;
        var UserID = localStorage.getItem('USERID');
        document.getElementById('AddToCartDiv').style.display = 'none';
        console.log(""+UserID+" " + TshirtCatagory +" ");
        createCookie("quantity",quantity,10);
        createCookie("TshirtChoice",TshirtType ,10);
        createCookie("TshirtType", TshirtCatagory,10);
        createCookie("UserID",UserID,10);
        createCookie("DataTable",'buyproducts',10);
        createCookie("folderName",'uploads',10);
        createCookie("ProductName",'Auto Custom Tshirt',10);
        createCookie("OrderType",OrderType,10);
        console.log("Calling");
        var ajax = new XMLHttpRequest();
        html2canvas(document.getElementById("tshirt_Container")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "assets/php/SaveDataforSellProduct.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              if(this.response.trim()=="Done")
                {
                    alert("your Product Save succesfully")
                }
            }
          };
        }); 
      }
    function saveDataToCart() {
        window.scrollTo(0, 0);  
        console.log(" "+TshirtCatagory+ " " + TshirtType);
        var quantity = document.getElementById("Quantity").value;
        var UserID = localStorage.getItem('USERID');
        document.getElementById('AddToCartDiv').style.display = 'none';
        console.log(""+UserID+"");
        createCookie("quantity",quantity,10);
        createCookie("TshirtChoice",TshirtType ,10);
        createCookie("TshirtType", TshirtCatagory,10);
        createCookie("UserID",UserID,10);
        createCookie("folderName",'CartItems',10);
        createCookie("ProductName",'Auto Custom Tshirt',10);
        createCookie("DataTable",'addtocart',10);
        var ajax = new XMLHttpRequest();
        html2canvas(document.getElementById("tshirt_Container")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "save-capture.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              if(this.response.trim() == "Done")
                {
                    alert("Your Product Saved Succesfully");
                    
                }
                else
                {
                    alert("There was an error for saving data");
                    console.log(this.response.trim());
                }
            }
          };
        });
          
      }
    function createCookie(name, value, seconds) { 
        var expires; 

        if (seconds) { 
            var date = new Date(); 
            date.setTime(date.getTime() + (seconds* 60 * 1000)); 
            expires = "; expires=" + date.toGMTString(); 
        } 
        else { 
            expires = ""; 
        } 

        document.cookie = escape(name) + "=" +  
            escape(value) + expires + "; path=/"; 
    } 
    
</script>