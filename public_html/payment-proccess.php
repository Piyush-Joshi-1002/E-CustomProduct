<?php
session_start();
    require_once('vendor/autoload.php');
    $host="localhost";
$user="id15634323_mylocalhost";
$pass="Mahakal.123@#$";
$dbname="id15634323_localhost";
$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con){
echo"not connected";
}
 $id=$_COOKIE['x'];
$sql="SELECT * FROM `userdetails` WHERE ID='$id'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result))
   {
   $name = $row['USERNAME'];
   $email ="sandeep.singh.tech11@gmail.com";
   $number=  $row['USERNUMBER'];
   }
}
$amount = $_COOKIE['ProductPrice'];
    $API_KEY = "test_d883b3a8d2bc1adc7a535506713";
    $AUTH_TOKEN = "test_dc229039d2232a260a2df3f7502";
    $URL = "https://test.instamojo.com/api/1.1/";
    $api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN, $URL);

    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "company name",
            "amount" => '400',
            "buyer_name" => $name,
            "send_email" => true,
            "email" => $email,
            "phone" => $number,
            "redirect_url" => "http://ecustomproduct.000webhostapp.com/payment-success.php"
            ));
            
            header('Location: ' . $response['longurl']);
            exit();
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>