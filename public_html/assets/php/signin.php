<?php
    include "Connection.php";
?>
<script>
    var signin;
    if(localStorage.getItem("SignIn"))
    {
        signin = localStorage.getItem("SignIn");    
    }
    else
    {
        signin = "False";
    }
    
    function ChqSignIN(a)
    {
        console.log("ChqSignin");
        signin = localStorage.getItem("SignIn");
        if(signin != "True")
        {
            document.getElementById("wrap").style.display = "block";
        }
        else
        {
            console.log("this is called" + a);
            if(a == 1)
            {
                document.getElementById("AddToCartDiv").style.display = "flex";
            }
            else if(a == 0)
            {
                saveDataToCart();
            }
            else if(a == 3)
            {
                setCookieForSignIN();
            }
            else if(a == 4)
            {
                setCookiesForMyOrder();
            }
            else if(a == 5)
            {
                console.log("this is called");
                sellMyProduct();
            }
        }
    }
    <?php
        if(isset($_POST['SignInEmail'])){
            $email = $_POST['SignInEmail'];
            $password =$_POST['SignInPass'];
            $sql = "SELECT ID, USERNAME, USEREMAIL , USERPASSWORD FROM userdetails ";
            $result = $conn->query($sql);
            $Found = NULL;
            $FoundID = NULL;
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo("console.log('".$row['USEREMAIL']."','".$row['USERPASSWORD']."');");
                  if($row['USEREMAIL'] ==$email && $password == $row['USERPASSWORD'])
                  {
                      $Found = $row['USERNAME'];
                      $FoundID = $row['ID'];
                     break;
                      
                  }
              }
                
            } 
            if($Found != NULL)
            {
                echo"document.getElementById('userName').innerHTML = '".$Found."';";
                echo"document.getElementById('NO_Name').style.display = 'none';";
                echo"localStorage.setItem('SignIn','True');";
                echo"localStorage.setItem('USERID','".$FoundID."');";
                echo"localStorage.setItem('USERNAME','".$Found."');";
                echo"CurrentSignIN = true;";
                echo "console.log('Sucess');";
            }
            else{
                echo "document.getElementById('userDetailsInfo').innerHTML = 'Incorrect User Details ';";
                echo "console.log('Fail'+Sucess);";
            }
        }  
        if(isset($_POST['SignUpButton'])){ 
           
            $query = "CREATE TABLE `photostorage`.`userdetails` ( `ID` INT(21) NOT NULL AUTO_INCREMENT , `USERNAME` TEXT(255) NOT NULL , `USEREMAIL` TEXT(255) NOT NULL unique, `USERNUMBER` TEXT(20) NOT NULL , `USERPASSWORD` TEXT(255) NOT NULL , UNIQUE `id` (`ID`)) ENGINE = InnoDB;";
            $result = $conn->query($query);
            $username =  $_POST['UserName'];
            $userpassword = $_POST['Userpassword'];
            $useremail = $_POST['UserEmail'];
            $userNumber =$_POST['UserNumber'] ;
            $query = "insert into userdetails (USERNAME,USEREMAIL ,USERNUMBER ,USERPASSWORD) values ('".$username."','".$useremail."','".$userNumber."','".$userpassword."')";
            $result = $conn->query($query);
            
            if($result)
            {
                $data = $conn->insert_id;
                echo"console.log('".$result."');";
                echo"document.getElementById('userName').innerHTML = '".$_POST['UserName']."';";
                echo"document.getElementById('NO_Name').style.display = 'none';";
                echo"localStorage.setItem('SignIn','True');";
                echo"localStorage.setItem('USERID','".$data."');";
                echo"localStorage.setItem('USERNAME','".$_POST['UserName']."');";
                echo "console.log('Sucess');";
            }
            else
            {
                echo "document.getElementById('userDetailsInfo').innerHTML = 'there was an error to save user details, sorry for the trouble';";
                echo "console.log('fail');";
                
            }
       
        }    
    ?>;
    function sucess()
    {
        if(Sucess == true)
        {
            document.getElementById("userDetailsInfo").innerHTML = "SignIn Sucessful";
            document.getElementById("login_Signup").display = "none";
            localStorage.setItem("SignIn","True");
        }
        else
        {
            document.getElementById("userDetailsInfo").innerHTML = "Incorrect User Details ";
            
        }
    }
    window.onload = ()=>{
        if(signin == "True" )
        {
            var name = localStorage.getItem("USERNAME");
            document.getElementById('userName').innerHTML += name;
            document.getElementById('userName').innerHTML = name;
            
            document.getElementById('NO_Name').style.display = 'none';
        }
    }
    
    function CreateAccountVisible()
    {
        document.getElementById("SignInAccount").style.display = "none";
        document.getElementById("CreateAccount").style.display = "block";

    }
    function SignInAccountVisible()
    {

        document.getElementById("SignInAccount").style.display = "block";
        document.getElementById("CreateAccount").style.display = "none";
    }

</script>