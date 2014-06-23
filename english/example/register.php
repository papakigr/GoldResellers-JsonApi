<?php ob_start();

ini_set("max_execution_time", 120);
	require("papaki.php");
	require("config.php");

error_reporting(0);

 
 
	

	$subject = "Domain Request";
	$headers ="Content-type:text/html; charset=UTF-8";
	$headers  = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\n";

	$domainNames = $_POST['domainNames'];

	
	
	$businessTypeRadioButton =  $_POST['businessTypeRadioButton'];

	$drast =  $_POST['businessDrast'];
	$type = $_POST['DropDownListCompanyType'];
	$doy = $_POST['doy'];
	$stateProvince = $_POST['stateProvince'];
	
	$fullname  = $_POST['fullname'];
	 
	$firstname = $_POST['firstname'];
 
	$lastname  = $_POST['lastname'];
	 
	$emailText = $_POST['emailText'];
	$postcode  = $_POST['postcode'];
	$address1  = $_POST['address1'];
	$phoneNum = $_POST['phoneNum'];
	$mobile = $_POST['mobile'];
	$fax = $_POST['fax'];
	
	$stateProvince = $_POST['stateProvince'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	
	$afm  = $_POST['afm'];
	
	$chkNewsletters = $_POST['chkNewsletters'];
	
 
	
 
	

	$params=array();
	$params["companyname"]=$fullname;
	$params["firstname"]=$firstname;
	$params["lastname"]=$lastname;
	$params["address1"]=$address1;
	$params["address2"]="";
	$params["city"]=$city;
	$params["state"]=$stateProvince;
	$params["postcode"]=$postcode;
	$params["country"]=$country;
	$params["email"]=$emailText;
	$params["phonenumber"]=$phoneNum;
	$params["fax"]=$fax;
	  
	$params["APIkey"]=$Papaki_apikey;
	$params["PostUrl"]=$papaki_Post_url;
	 
	$params["domain"]=$_POST['domainNames'];
	$params["regperiod"]="2"; 
	 
	$params["ns1"]="";
	$params["ns2"]="";
	$params["ns3"]="";
	$params["ns4"]="";
	$params["idprotection"]="0";
	$response= papaki_registerdomain($params);
	if($response["code"]=="1000"){
		echo "Domain Registered successfully";
	}
	else{
		echo "Error. Code: ".$response["code"]." , message: ".	$response["message"];
	}
	 
	ob_flush();?>




