<?php
    include "Connection.php";
    error_reporting(0);
?>
<script>
    function removeFormCart(s_no,ID)
    {
        setCookie("SNO",s_no,10);
        console.log(s_no);
        var get = getCookie("SNO");
        var ajax = new XMLHttpRequest();
          ajax.open("POST", "RemoveFormCart.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image= True " );
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText)
                {
                    alert('Delete data Successfully');
                    console.log(this.responseText)
                    document.getElementById(ID).style.display = 'none';
                }
                else
                  {
                      console.log(this.responseText);
                  }
            }
          };
          
    }
    var ItemID;
    function addToBuy(ImageName,ProductName,ProductPrice,ProductDetails,ProductQuantity,ID,CartItemID,Artist_Id,DesigneUsed)
    {
        setCookie("ImageName",ImageName,10);
        setCookie("ProductName",ProductName,10);
        setCookie("ProductPrice",ProductPrice,10);
        setCookie("ProductDetails",ProductDetails,10);
        setCookie("ProductQuantity",ProductQuantity,10);
        setCookie("UserID",ID,10);
        setCookie("Artist_Id",Artist_Id,10);
        setCookie("DesigneUsed",DesigneUsed,10);
        ItemID = CartItemID;
        console.log("addToBuy");
        document.getElementById("AddToCartDiv").style.display = 'flex';
    }
    function saveDataToBuy(OrderType)
    {
        let image = new Image();
        var  ImageName = getCookie("ImageName");
        image.src = "CartItems/"+ImageName+".jpeg";
        var ajax = new XMLHttpRequest();
        setCookie("OrderType",OrderType,10);
        ajax.open("POST", "DataSaveForCustomize.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send(" image = CartItems/"+ImageName+".jpeg");
        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText.trim()+"";
                if(response == "File has been moved!")
                {
                    alert("Your Product is added successfully,we Contect you as soon as possible");
                    document.getElementById('AddToCartDiv').style.display = 'none';
                    document.getElementById(ItemID).remove();
                }
                else
                {
                    alert("Their was an error to Update data "+response);
                    console.log(""+this.responseText.trim()+"");
                }
            }
          };
        
    }
    function setCookie(name, value, seconds) {
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
    function getCookie(name) {
        var cname = name + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++){
            var c = ca[i];
            while(c.charAt(0) == ' '){
                c = c.substring(1);
            }
            if(c.indexOf(cname) == 0){
                return c.substring(cname.length, c.length);
            }
        }
        return "";
    }
</script> 