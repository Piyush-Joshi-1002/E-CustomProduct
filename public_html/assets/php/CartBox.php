<script>
    <?php
        include "Connection.php";
    ?>
    
    function setCookieForSignIN()
    {
        if(signin == "True" )
        {
            var ID = localStorage.getItem("USERID");
            setCookieHear("id",ID,10);
        }
        location.href = "CartPage.php";
    }
    function setCookiesForMyOrder()
    {
        if(signin == "True" )
        {
            var ID = localStorage.getItem("USERID");
            setCookieHear("id",ID,10);
        }
        location.href = "MyOrder.php";
    }
    function setCookieHear(name,value,min) {
        var expires = "";
        if (min) {
            var date = new Date();
            date.setTime(date.getTime() + (min*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
   }
</script>