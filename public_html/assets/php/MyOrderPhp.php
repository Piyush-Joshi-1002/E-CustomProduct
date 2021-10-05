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
          ajax.open("POST", "RemoveFormMyOrder.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image= True " );
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText.trim()=="done")
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