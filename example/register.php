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
	
	$text = "<html><body>

<table align=\"center\" border=\"0\" cellspacing=\"0\" width=\"100%\">
                                                        <tbody>
                                                     
                                                          <tr>
                                                            <td>
															<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#FFFFFF\" style=\"margin:1px \">
   	<tr>
      <td colspan=\"2\">";
	   if($businessTypeRadioButton == 0) 
	   {
	  	$text = $text."<label>
        <input name=\"businessTypeRadioButton\" value=\"0\" type=\"radio\" id=\"id0\"  checked=\"checked\" >
        Ιδιώτης</label>";
	   }
	   else 
	  {
	  	$text = $text."<label>		
    	<input name=\"businessTypeRadioButton\" value=\"0\" type=\"radio\" id=\"id0\">
        Ιδιώτης</label>";
		}	
	   if($businessTypeRadioButton == 1)
	   {
	    $text = $text ."<label>
        <input id=\"et1\" type=\"radio\" name=\"businessTypeRadioButton\"  checked=\"checked\" value=\"1\">
        Επιχείρηση</label>";
	   }
	   else 
	   {
		 $text  = $text."<label>	
      	 <input id=\"et1\" type=\"radio\" name=\"businessTypeRadioButton\"  checked=\"checked\" value=\"1\">
         Επιχείρηση</label>";
		}
	   if($businessTypeRadioButton == 2)
	   {
	   $text = $text."<label>
        <input id=\"radio\" type=\"radio\" name=\"businessTypeRadioButton\" checked=\"checked\">
        Δημόσιος Φορέας</label> ";
		}
	   else{	
		$text = $text."<label>
        <input id=\"radio\" type=\"radio\" name=\"businessTypeRadioButton\">
        Δημόσιος Φορέας</label> ";
		}
		$text = $text."
		</td>
    </tr>";
	
	
	if ($businessTypeRadioButton == 1) {
		
	$text= $text."<tr>
			<td colspan=\"2\">
			<table width=\"100%\">
				<tr>
				<td width=\"40%\">Τύπος Επιχείρησης:</td>
				<td width=\"60%\" align=\"left\">". $type."</td> </tr>
	  </table></div>	  </td></tr>";
  	}    
	$text = $text."<tr align=\"left\">
      <td width=\"40%\" align=\"right\" valign=\"top\" class=\"medgray\"><div align=\"left\">&nbsp;Επωνυμία Εταιρίας/Φορέα - ή - Το Ονοματεπώνυμο σας : </div></td>
      <td valign=\"middle\">".$fullname."</td>
    </tr>
    <tr align=\"left\">
      <td width=\"40%\" align=\"right\" class=\"medgray\"><div align=\"left\">&nbsp;Όνομα : </div></td>
      <td><label>".$firstname."</label></td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\"  width=\"40%\"><div align=\"left\">&nbsp;Επίθετο : </div></td>
      <td>".$lastname."</td>
    </tr>";
    
	if ($businessTypeRadioButton == 1 || $businessTypeRadioButton  == 2){
	$text = $text."<tr><td colspan=\"2\">
  	<div id=\"afm_tr\" style=\"display:block\">
	<table width=\"100%\">
  	<tr align=\"left\" valign=\"top\">
       <td  width=\"40%\"><div align=\"left\">Α.Φ.Μ. : </div></td>
       <td  width=\"60%\">".$afm."</td>
  	</tr>
	  </table>
        </div>
    </td></tr>
	<tr><td colspan=\"2\">
	<div id=\"doy_tr\" style=\"display:block\">
	<table width=\"100%\">
     <tr align=\"left\" bordercolordark=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
         <td align=\"left\" width=\"40%\"><div align=\"left\">ΔΟΥ : </div></td>
         <td align=\"left\" width=\"60%\">".$doy."</td>
      </tr>
	 </table></div></td></tr>";
   }
	if ($businessTypeRadioButton == 2) {
	$text = $text."<tr><td colspan=\"2\">
      <div id=\"drast_ep\" style=\"display:block\">
	  <table width=\"100%\">
            <tr align=\"left\" valign=\"top\">
               <td nowrap=\"nowrap\" width=\"40%\">Δραστηριότητα Επιχείρησης :</td>
			 
               <td width=\"60%\">". $drast."</td>
            </tr>
		</table>	
        </div>
		</td></tr>";
	}
	$text = $text."<tr align=\"left\">
      <td align=\"right\" ><div align=\"left\">&nbsp;Email : </div></td>
      <td><label>".$emailText."</label></td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\" class=\"medgray\"><div align=\"left\">&nbsp;Διεύθυνση : </div></td>
      <td><label>".$address1."</label></td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\" width=\"40%\"><div align=\"left\">&nbsp;Περιοχή :</div></td>
      <td>".$stateProvince."</td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\" class=\"medgray\"><div align=\"left\">&nbsp;Πόλη/Χωριό :</div></td>
      <td>". $city."</td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\" class=\"medgray\"><div align=\"left\">&nbsp;Ταχ.Κώδικας : </div></td>
      <td>". $postcode."</td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\" class=\"medgray\"><div align=\"left\">&nbsp;Χώρα :</div></td>
      <td class=\"style15\">".$country."</td>
    </tr>
    <tr align=\"left\">
      <td align=\"right\" class=\"medgray\"><div align=\"left\">&nbsp;Τηλέφωνο :</div></td>
      <td><label>".$phoneNum."</label></td>
    </tr>";
	if(strlen($mobile) != 0) {
	$text = $text."<tr align=\"left\">
      <td align=\"right\" ><div align=\"left\">&nbsp;Κινητό (Προαιρετικό): </div></td>
      <td>".$mobile."</td>
    </tr>";
	} 
	if(strlen($fax) != 0){
    	$text = $text."<tr align=\"left\">
      <td align=\"right\"><div align=\"left\">&nbsp;Fax (Προαιρετικό): </div></td>
      <td>".$fax."</td>
    </tr>";
	 }
    $text = $text."
	<tr align=\"left\">
      <td colspan=\"2\">&nbsp;</td>
    </tr>
   <TR>
							<TD width=\"40%\" height=\"25\">&nbsp;</TD>
							<TD width=\"895\" height=\"25\">&nbsp;</TD>
	</TR>
	
	<TR>
							
							<TD height=\"25\" colspan=\"2\">";
			if($chkNewsletters == 1) {						
	   			$text = $text."<input name=\"chkNewsletters\" id=\"chkNewsletters\" type=\"checkbox\" checked=\"checked\" value=\"1\" />";
			}
										
						 $text = $text. "Επιθυμώ να λαμβάνω πληροφορίες για προσφορές και νέα προιόντα</TD>
						</TR>
						<TR>
							
							<TD colspan=\"2\" class=\"black\" height=\"1\" style=\"padding:0\">&nbsp;</TD>
						</TR>
						<TR>
							<TD width=\"40%\" height=\"25\">&nbsp;</TD>
							<TD width=\"895\" height=\"25\"></TD>
						</TR>
  </table></td>
                                                          </tr>
                                                          <tr>
                                                            <td>                                                            </td>
                                                          </tr>
<tr><td colspan=\"2\">επιθυμεί να κατοχυρώσει τα παρακάτω ονόματα χώρου </td></tr>														 <tr><td colspan=\"2\">".$domainNames."</td></tr> 
                                                        </tbody>
                                                    </table>
													
</body>
</html>
";
	
	mail($admin_email,$subject,$text,$headers);
	
 
	

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




