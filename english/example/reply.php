<!-- Warning this page Charset must be UTF-8-->
<?php
	
 error_reporting(0);
require("config.php"); 
require_once('papaki.php');

	require("usablewebLib.php"); 
	

	ini_set("max_execution_time", 120);
	$search = new PapakiDomainNameSearch($_REQUEST["domainName"]);	
	$search->use_curl = true;
	$search->apikey = $Papaki_apikey;
	$search->ext = $_POST["extension"];
	 
	$search->exec_request_for(_TYPE_DS);

	//if(!($search->$responseXML ))
	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Papaki.gr Domain Search Reply - Demostraction</title>
<style>
TH {
	FONT-SIZE: 13px; FONT-FAMILY: verdana, arial, helvetica, sans-serif
}
</style>
<script type="text/javascript" language="javascript">
	
function validate()
{
	var total = 0;
	var boxes;
	var id = "id_";
	var domainNames = "";
	for (var i_tem = 0; i_tem < document.form1.cnt.value; i_tem++)
	{
		if (eval("document.form1.box_"+i_tem+".checked"))
			{
				++total ;
				domainNames = eval("document.form1.box_"+i_tem+".value") + domainNames;
				//alert(eval("document.form1.box_"+i_tem+".value"));
			}	
	}		
	//for(var i=0; i < document.form1.checkboxDomains.length; i++){
		//if(document.form1.checkboxDomains[i].checked)
		//total = total + 1;
	//}
	document.form1.domainNames.value = domainNames;
	
	
	if (total == 0)
	{
		alert("Please select a domain name");
		return false;
	}
	else
		return true;	 

	
}	
</script>
</head>
<body>
<form name="form1" method="post" action="registration_form.php" onSubmit="return validate();">
<table width="250px"  border="0" cellspacing="0" cellpadding="0">



			
	<?
	 
	
	
	if($search->message!=""){
		echo $search->message;	
	}
	 
	if (count($search->arrayAvDomains) != 0)
	{
		?>
			
			<tr>
   				 <th bgcolor="#CCCCCC" colspan="2">Available Domain Names</th>
 		 	</tr>
		<?		
		for($i=0;$i < count($search->arrayAvDomains);$i++)
		{ 
			$id = "id_".$i;
			$name = "box_".$i;
			 ?>
  				<tr>
   					 <td width="27">
   					   <label>
   				    	 <input name="<?=$name?>" type="checkbox" id ="<?=$id?>" value="<?=$search->arrayAvDomains[$i]?>">
						 
		       		   </label>
 				   	
			 	  </td>
   				 	<td width="223"><?=$search->arrayAvDomains[$i]?></td>
  				</tr>
 		 	<?  
  		}
		?>
		<input type="hidden" name="domainNames" value="">
		<input type="hidden" name="cnt" value="<?=$i?>">
		</table>
		<table>
			<tr><td height="65"><span id="lblMakeYourSelections">Επιλέξτε τα Ονόματα Χώρου που θέλετε να κατοχυρώσετε και πατήστε <strong>ΚΑΤΟΧΥΡΩΣΗ</strong></span> 
			<BR>
				<input type="image" name="imgBtnRegister" id="imgBtnRegister" src="images/registerEl.gif" alt="" border="0" />
			</td></tr>
		</table>	
	<? } 
  
 	
	if( count($search->arrayNotAvDomains) !=0) 
  	{    ?>
			<table>
  			<tr>
    			<th bgcolor="#CCCCCC" colspan="2">Not Available Domain Names</th>
  			</tr>
		<?
	  	for ($i=0;$i < count($search->arrayNotAvDomains);$i++)
		{ 
		?>
  			<tr>
				<td width="27"></td>
    			<td width="223"><li><?=$search->arrayNotAvDomains[$i]?></li></td>
  			</tr>
			
  		<?  
		}
	}	
	?>

</table>
</form>
</body>
</html>
