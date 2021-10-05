<?php

		require_once('vendor/autoload.php');

         $API_KEY = "test_d883b3a8d2bc1adc7a535506713";
    $AUTH_TOKEN = "test_dc229039d2232a260a2df3f7502";
    $URL = "https://test.instamojo.com/api/1.1/";

		$api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN,$URL);

		$payid = $_GET["payment_request_id"];

		try {
		$response = $api->paymentRequestStatus($payid);
	$response['payments'][0]['payment_id'];
		 $response['payments'][0]['buyer_name'];
		 $response['payments'][0]['buyer_email'];
		 $response['payments'][0]['buyer_phone'];
		 $response['payments'][0]['status'];

		}
	catch (Exception $e) {
		print('Error: ' . $e->getMessage());
		}
		$_SESSION["payment_status"]= $response['payments'][0]['status'];
		header("location:orderplaced.php");
	?>