<? 
	
	$domainNames = $_POST['domainNames'];

		
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script language="JavaScript">
   function check_data(form)
    { 
      if (form.fullname.value.length < 1) {
	   showMessage(form.fullname, "Fullname is required");
	   return false;
      }
	if (form.firstname.value.length < 1) {
	showMessage(form.firstname, "Firstname is required");
	return false;
      }
	  if (form.lastname.value.length < 1) {
	showMessage(form.lastname, "Lastname is required");
	return false;
      }
	  if (form.phoneNum.value.length < 1) {
	showMessage(form.phoneNum, "Phonenumber is required");
	return false;
      }
     if (form.emailText.value.length < 1) {
	   showMessage(form.emailText, "Email is required");
	   return false;
      }
	  if (form.emailText.value.search(/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/) == -1)
	{
	    return showMessage(form.emailText, "Email is not valid");
		return false;
	}
	 
 
	 
	  if (form.address1.value.length < 1) {
	showMessage(form.address1, "Address is required");
	return false;
      }
	  if (form.phoneNum.value.length > 0)
	  {
		if (form.phoneNum.value.search(/^\+[0-9]{1,3}\.[0-9]{1,14}$/) == -1){ 
			showMessage(form.phoneNum, 'Phone number is invalid\n');
			return false;
		}
	  }

	 if (form.fax.value.length > 0) 
	 {
		if (form.fax.value.search(/^\+[0-9]{1,3}\.[0-9]{1,14}$/) == -1)
		{ 
			showMessage(form.fax, '  Fax number is invalid\n');
			return false;
	 	}
	}
    
	if (form.city.value.length < 1) {
	showMessage(form.city, "City is required");
	return false;
      }
	  if (form.postcode.value.length < 1) {
	showMessage(form.zip, "Postcode is required");
	return false;
      }
 
	
		//edw add ton neo usser
	  form.submit();		     	  
   } 
	
	function CompareStrings(a,b){
		if (a!=b)
			return false;
		else
			return true;
	}

	
function showMessage(frmObj, message)
{
	alert(message);
    if (frmObj.type == "hidden")
           return false;
	else{
          //window.focus();
	  return false;}
}

function CheckSelected(){
	var grp = form1.businessTypeRadioButton	
	
	for (var i = 0; i < grp.length - 1; i++){
		if(grp[i].checked){
			switch(grp[i].value){
				case 0:
					TrHide(true);
				break;
				case 1:
					TrHide(false);
				break;
				case 2:
					TrHide(3);
				break;
				default:
					TrHide(true);
				break;
			}
		}
	}
}

	function TrHide(bool){
		if (bool==true){			
			document.getElementById("afm_tr").style.display = 'none';
			document.getElementById("list_tr").style.display = 'none';
			document.getElementById("doy_tr").style.display = 'none';
			document.getElementById("drast_ep").style.display = 'none';
		}else if(bool==false) {
			document.getElementById("afm_tr").style.display = 'block';
			document.getElementById("list_tr").style.display = 'block';
			document.getElementById("doy_tr").style.display = 'block';
			document.getElementById("drast_ep").style.display = 'block';
		}else if(bool==3){
			document.getElementById("afm_tr").style.display = 'block';
			document.getElementById("list_tr").style.display = 'none';
			document.getElementById("doy_tr").style.display = 'block';
			document.getElementById("drast_ep").style.display = 'none';
		}
	}
</script>
</head>

<body>
<form name="form1" method = "post" action="register.php" onSubmit="return check_data(form1);">
<input type="hidden" name="domainNames" value="<?=$domainNames?>" />
<table align="center" border="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td width="100%" align="left" valign="top"><p><span id="lblFillFormInstructions">Registrant Details</span></p>
                                                                
                                                                
                                                                <p><strong>Registration Period:2 years</strong></p>                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>
															<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF" style="margin:1px ">
   	<tr>
      <td colspan="2"><label>
        <input name="businessTypeRadioButton" value="0" type="radio" id="id0" onClick="return TrHide(true);" checked="checked" >
        Ιδιώτης</label>
        <label>
        <input id="et1" type="radio" name="businessTypeRadioButton" onClick="return TrHide(false);" value="1">
        Επιχείρηση</label>
        <label>
        <input id="radio" type="radio" name="businessTypeRadioButton" onClick="return TrHide(3);" value="2">
        Δημόσιος Φορέας</label>      </td>
    </tr>
      
	  
	  <tr>
	<td colspan="2"><div id="list_tr" style="display:none;">
	<table width="100%">
	
		<tr>
		<td width="40%">Company Type:</td>
		<td width="60%" align="left">
      
         
          <select name="DropDownListCompanyType" id="DropDownListCompanyType">
			<option value="ΑΕ">ΑΕ</option>
			<option value="ΑΕΒΕΕ">ΑΕΒΕΕ</option>
			<option value="Ατομική Επιχείρηση">Ατομική Επιχείρηση</option>
			<option value="ΕΕ">ΕΕ</option>
			<option value="ΕΠΕ">ΕΠΕ</option>
			<option value="ΟΕ">ΟΕ</option>
          
         </select>	  </td> </tr>
	  </table></div>	  </td></tr>
	  
	  
    <tr align="left">
      <td width="40%" align="right" valign="top" class="medgray"><div align="left">&nbsp;Fullname: </div></td>
      <td valign="middle">
        <input name="fullname" type="text" id="fullaname" size="32">
        </td>
    </tr>
    <tr align="left">
      <td width="40%" align="right" class="medgray"><div align="left">&nbsp;FirstName : </div></td>
      <td><label>
        <input name="firstname" type="text" id="firstname" size="32">
      </label></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray" width="40%"><div align="left">&nbsp;LastName : </div></td>
      <td>
        <input name="lastname" type="text" id="lastname" size="32"></td>
    </tr>
    
	
	<tr><td colspan="2">
  	<div id="afm_tr" style="display:none">
	<table width="100%">
  	<tr align="left" valign="top">
       <td class="medgray" width="40%"><div align="left">Vat number : </div></td>
       <td class="medgray" width="60%%"><input name="afm" type="text" id="afm" size="32">
        		 </td>
     </tr>
	  </table>
        </div>
    </td></tr>
	
     <tr>
    <td colspan="2"><div id="doy_tr" style="display:none">
      <table width="100%">
        <tr align="left" bordercolordark="#FFFFFF" bgcolor="#FFFFFF">
          <td align="left" width="40%" class="medgray"><div align="left">Tax office : </div></td>
          <td align="left" width="60%"><select name="doy">
            <option value="">[Select Tax Office]</option>
            <option value="">[Select Tax Office]</option>
            <option value="ΑΓ. ΑΘΑΝΑΣΙΟΥ">ΑΓ. ΑΘΑΝΑΣΙΟΥ </option>
            <option value="ΑΓ.ΑΝΑΡΓΥΡΩΝ">ΑΓ.ΑΝΑΡΓΥΡΩΝ </option>
            <option value="ΑΓ.ΠΑΡΑΣΚΕΥΗΣ">ΑΓ.ΠΑΡΑΣΚΕΥΗΣ </option>
            <option value="ΑΓ.ΣΤΕΦΑΝΟΥ">ΑΓ.ΣΤΕΦΑΝΟΥ </option>
            <option value="ΑΓΙΑΣ ">ΑΓΙΑΣ </option>
            <option value="ΑΓΙΟΥ ΔΗΜΗΤΡΙΟΥ">ΑΓΙΟΥ ΔΗΜΗΤΡΙΟΥ </option>
            <option value="ΑΓΙΟΥ ΝΙΚΟΛΑΟΥ">ΑΓΙΟΥ ΝΙΚΟΛΑΟΥ </option>
            <option value="ΑΓΡΙΝΙΟΥ">ΑΓΡΙΝΙΟΥ </option>
            <option value="ΑΘΗΝΩΝ  Α΄">ΑΘΗΝΩΝ  Α΄ </option>
            <option value="ΑΘΗΝΩΝ Β΄">ΑΘΗΝΩΝ Β΄ </option>
            <option value="ΑΘΗΝΩΝ Γ΄ ">ΑΘΗΝΩΝ Γ΄ </option>
            <option value="ΑΘΗΝΩΝ Δ΄ ">ΑΘΗΝΩΝ Δ΄ </option>
            <option value="ΑΘΗΝΩΝ Ε΄">ΑΘΗΝΩΝ Ε΄ </option>
            <option value="ΑΘΗΝΩΝ Ζ΄">ΑΘΗΝΩΝ Ζ΄ </option>
            <option value="ΑΘΗΝΩΝ  Η΄">ΑΘΗΝΩΝ  Η΄ </option>
            <option value="ΑΘΗΝΩΝ Θ΄">ΑΘΗΝΩΝ Θ΄ </option>
            <option value="ΑΘΗΝΩΝ Ι΄">ΑΘΗΝΩΝ Ι΄ </option>
            <option value="ΑΘΗΝΩΝ Κ΄">ΑΘΗΝΩΝ Κ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΑ΄">ΑΘΗΝΩΝ ΙΑ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΒ΄">ΑΘΗΝΩΝ ΙΒ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΓ΄">ΑΘΗΝΩΝ ΙΓ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΔ΄">ΑΘΗΝΩΝ ΙΔ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΕ΄">ΑΘΗΝΩΝ ΙΕ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΖ΄">ΑΘΗΝΩΝ ΙΖ΄ </option>
            <option value="ΑΘΗΝΩΝ ΙΘ΄">ΑΘΗΝΩΝ ΙΘ΄ </option>
            <option value="ΑΘΗΝΩΝ  ΚΑ΄">ΑΘΗΝΩΝ  ΚΑ΄ </option>
            <option value="ΑΘΗΝΩΝ ΚΒ΄">ΑΘΗΝΩΝ ΚΒ΄ </option>
            <option value="ΑΘΗΝΩΝ ΚΓ΄">ΑΘΗΝΩΝ ΚΓ΄ </option>
            <option value="ΑΘΗΝΩΝ ΣΤ΄">ΑΘΗΝΩΝ ΣΤ΄ </option>
            <option value="ΑΘΗΝΩΝ  ΙΣΤ΄">ΑΘΗΝΩΝ  ΙΣΤ΄ </option>
            <option value="ΑΘΗΝΩΝ   ΙΗ΄">ΑΘΗΝΩΝ   ΙΗ΄ </option>
            <option value="ΑΙΓΑΛΕΩ">ΑΙΓΑΛΕΩ </option>
            <option value="ΑΙΓΙΝΗΣ ">ΑΙΓΙΝΗΣ </option>
            <option value="ΑΙΓΙΝΙΟΥ">ΑΙΓΙΝΙΟΥ </option>
            <option value="ΑΙΓΙΟΥ ">ΑΙΓΙΟΥ </option>
            <option value="ΑΚΡΑΤΑΣ ">ΑΚΡΑΤΑΣ </option>
            <option value="ΑΛΕΞΑΝΔΡΕΙΑΣ ">ΑΛΕΞΑΝΔΡΕΙΑΣ </option>
            <option value="ΑΛΕΞΑΝΔΡΟΥΠΟΛΗΣ ">ΑΛΕΞΑΝΔΡΟΥΠΟΛΗΣ </option>
            <option value="ΑΛΜΥΡΟΥ ">ΑΛΜΥΡΟΥ </option>
            <option value="ΑΜΑΛΙΑΔΑΣ">ΑΜΑΛΙΑΔΑΣ </option>
            <option value="ΑΜΑΡΟΥΣΙΟΥ">ΑΜΑΡΟΥΣΙΟΥ </option>
            <option value="ΑΜΠΕΛΟΚΗΠΩΝ ΘΕΣ`ΚΗΣ">ΑΜΠΕΛΟΚΗΠΩΝ ΘΕΣ`ΚΗΣ </option>
            <option value="ΑΜΥΝΤΑΙΟΥ ">ΑΜΥΝΤΑΙΟΥ </option>
            <option value="ΑΜΦΙΚΛΕΙΑΣ">ΑΜΦΙΚΛΕΙΑΣ </option>
            <option value="ΑΜΦΙΛΟΧΙΑΣ">ΑΜΦΙΛΟΧΙΑΣ </option>
            <option value="ΑΜΦΙΣΣΑΣ">ΑΜΦΙΣΣΑΣ </option>
            <option value="ΑΝΔΡΙΤΣΑΙΝΑΣ ">ΑΝΔΡΙΤΣΑΙΝΑΣ </option>
            <option value="ΑΝΔΡΟΥ ">ΑΝΔΡΟΥ </option>
            <option value="ΑΡΓΟΣ ΟΡΕΣΤΙΚΟΥ">ΑΡΓΟΣ ΟΡΕΣΤΙΚΟΥ </option>
            <option value="ΑΡΓΟΣΤΟΛΙΟΥ ">ΑΡΓΟΣΤΟΛΙΟΥ </option>
            <option value="ΑΡΓΟΥΣ">ΑΡΓΟΥΣ </option>
            <option value="ΑΡΓΥΡΟΥΠΟΛΗΣ ">ΑΡΓΥΡΟΥΠΟΛΗΣ </option>
            <option value="ΑΡΕΟΠΟΛΗΣ">ΑΡΕΟΠΟΛΗΣ </option>
            <option value="ΑΡΙΔΑΙΑΣ ">ΑΡΙΔΑΙΑΣ </option>
            <option value="ΑΡΚΑΛΟΧΩΡΙΟΥ ">ΑΡΚΑΛΟΧΩΡΙΟΥ </option>
            <option value="ΑΡΝΑΙΑΣ">ΑΡΝΑΙΑΣ </option>
            <option value="ΑΡΤΑΣ ">ΑΡΤΑΣ </option>
            <option value="ΑΣΤΑΚΟΥ ">ΑΣΤΑΚΟΥ </option>
            <option value="ΑΣΤΡΟΥΣ (ΠΑΡΑΛΙΟΥ)">ΑΣΤΡΟΥΣ (ΠΑΡΑΛΙΟΥ) </option>
            <option value="ΑΤΑΛΑΝΤΗΣ">ΑΤΑΛΑΝΤΗΣ </option>
            <option value="ΑΧΑΡΝΩΝ">ΑΧΑΡΝΩΝ </option>
            <option value="ΒΑΜΟΥ ">ΒΑΜΟΥ </option>
            <option value="ΒΕΡΟΙΑΣ">ΒΕΡΟΙΑΣ </option>
            <option value="ΒΟΛΟΥ Α΄">ΒΟΛΟΥ Α΄ </option>
            <option value="ΒΟΛΟΥ Β΄">ΒΟΛΟΥ Β΄ </option>
            <option value="ΒΟΝΙΤΣΑΣ ">ΒΟΝΙΤΣΑΣ </option>
            <option value="ΒΥΡΩΝΟΣ">ΒΥΡΩΝΟΣ </option>
            <option value="ΓΑΛΑΤΣΙΟΥ ">ΓΑΛΑΤΣΙΟΥ </option>
            <option value="ΓΑΡΓΑΛΙΑΝΩΝ ">ΓΑΡΓΑΛΙΑΝΩΝ </option>
            <option value="ΓΑΣΤΟΥΝΗΣ ">ΓΑΣΤΟΥΝΗΣ </option>
            <option value="ΓΙΑΝΝΙΤΣΩΝ ">ΓΙΑΝΝΙΤΣΩΝ </option>
            <option value="ΓΛΥΦΑΔΑΣ ">ΓΛΥΦΑΔΑΣ </option>
            <option value="ΓΟΥΜΕΝΙΤΣΑΣ">ΓΟΥΜΕΝΙΤΣΑΣ </option>
            <option value="ΓΡΕΒΕΝΩΝ">ΓΡΕΒΕΝΩΝ </option>
            <option value="ΓΥΘΕΙΟΥ ">ΓΥΘΕΙΟΥ </option>
            <option value="ΔΑΦΝΗΣ">ΔΑΦΝΗΣ </option>
            <option value="ΔΕΛΒΕΝΑΚΙΟΥ">ΔΕΛΒΕΝΑΚΙΟΥ </option>
            <option value="ΔΕΡΒΕΝΙΟΥ">ΔΕΡΒΕΝΙΟΥ </option>
            <option value="ΔΕΣΚΑΤΗΣ">ΔΕΣΚΑΤΗΣ </option>
            <option value="ΔΗΜΗΤΣΑΝΑΣ">ΔΗΜΗΤΣΑΝΑΣ </option>
            <option value="ΔΙΔΥΜΟΤΕΙΧΟΥ">ΔΙΔΥΜΟΤΕΙΧΟΥ </option>
            <option value="ΔΟΜΟΚΟΥ">ΔΟΜΟΚΟΥ </option>
            <option value="ΔΡΑΜΑΣ">ΔΡΑΜΑΣ </option>
            <option value="ΕΔΕΣΣΗΣ">ΕΔΕΣΣΗΣ </option>
            <option value="ΕΛΑΣΣΟΝΑΣ">ΕΛΑΣΣΟΝΑΣ </option>
            <option value="ΕΛΕΥΘ.ΕΠΑΓΓ.ΑΘΗΝ. Α΄">ΕΛΕΥΘ.ΕΠΑΓΓ.ΑΘΗΝ. Α΄ </option>
            <option value="ΕΛΕΥΘ.ΕΠΑΓΓ.ΑΘΗΝ. Β΄">ΕΛΕΥΘ.ΕΠΑΓΓ.ΑΘΗΝ. Β΄ </option>
            <option value="ΕΛΕΥΘΕΡΟΥΠΟΛΗΣ ">ΕΛΕΥΘΕΡΟΥΠΟΛΗΣ </option>
            <option value="ΕΛΕΥΣΙΝΑΣ">ΕΛΕΥΣΙΝΑΣ </option>
            <option value="ΖΑΓΚΛΙΒΕΡΙΟΥ ">ΖΑΓΚΛΙΒΕΡΙΟΥ </option>
            <option value="ΖΑΚΥΝΘΟΥ">ΖΑΚΥΝΘΟΥ </option>
            <option value="ΖΑΧΑΡΩΣ ">ΖΑΧΑΡΩΣ </option>
            <option value="ΖΩΓΡΑΦΟΥ ">ΖΩΓΡΑΦΟΥ </option>
            <option value="ΗΓΟΥΜΕΝΙΤΣΑΣ">ΗΓΟΥΜΕΝΙΤΣΑΣ </option>
            <option value="ΗΛΙΟΥΠΟΛΗΣ">ΗΛΙΟΥΠΟΛΗΣ </option>
            <option value="ΗΡΑΚΛΕΙΑΣ">ΗΡΑΚΛΕΙΑΣ </option>
            <option value="ΗΡΑΚΛΕΙΟΥ  Α΄">ΗΡΑΚΛΕΙΟΥ  Α΄ </option>
            <option value="ΗΡΑΚΛΕΙΟΥ  Β΄">ΗΡΑΚΛΕΙΟΥ  Β΄ </option>
            <option value="ΘΑΣΟΥ">ΘΑΣΟΥ </option>
            <option value="ΘΕΡΜΟΥ">ΘΕΡΜΟΥ </option>
            <option value="ΘΕΣΠΡΩΤΙΚΟΥ">ΘΕΣΠΡΩΤΙΚΟΥ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Α΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Α΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Β΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Β΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Γ΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Γ΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Δ΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Δ΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Ε΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Ε΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Ζ΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Ζ΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ  Η΄">ΘΕΣΣΑΛΟΝΙΚΗΣ  Η΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Θ΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Θ΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ Ι΄">ΘΕΣΣΑΛΟΝΙΚΗΣ Ι΄ </option>
            <option value="ΘΕΣΣΑΛΟΝΙΚΗΣ ΣΤ΄">ΘΕΣΣΑΛΟΝΙΚΗΣ ΣΤ΄ </option>
            <option value="ΘΗΒΩΝ ">ΘΗΒΩΝ </option>
            <option value="ΘΗΡΑΣ">ΘΗΡΑΣ </option>
            <option value="ΙΕΡΑΠΕΤΡΑΣ">ΙΕΡΑΠΕΤΡΑΣ </option>
            <option value="ΙΘΑΚΗΣ ">ΙΘΑΚΗΣ </option>
            <option value="ΙΚΑΡΙΑΣ (ΑΓ.ΚΗΡΥΚΟΥ)">ΙΚΑΡΙΑΣ (ΑΓ.ΚΗΡΥΚΟΥ) </option>
            <option value="ΙΣΤΙΑΙΑΣ ">ΙΣΤΙΑΙΑΣ </option>
            <option value="ΙΩΑΝΝΙΝΩΝ Α΄">ΙΩΑΝΝΙΝΩΝ Α΄ </option>
            <option value="ΙΩΑΝΝΙΝΩΝ Β΄">ΙΩΑΝΝΙΝΩΝ Β΄ </option>
            <option value="ΚΑΒΑΛΑΣ Α΄">ΚΑΒΑΛΑΣ Α΄ </option>
            <option value="ΚΑΒΑΛΑΣ Β΄">ΚΑΒΑΛΑΣ Β΄ </option>
            <option value="ΚΑΛΑΒΡΥΤΩΝ ">ΚΑΛΑΒΡΥΤΩΝ </option>
            <option value="ΚΑΛΑΜΑΡΙΑΣ">ΚΑΛΑΜΑΡΙΑΣ </option>
            <option value="ΚΑΛΑΜΑΤΑΣ ">ΚΑΛΑΜΑΤΑΣ </option>
            <option value="ΚΑΛΑΜΠΑΚΑΣ">ΚΑΛΑΜΠΑΚΑΣ </option>
            <option value="ΚΑΛΛΙΘΕΑΣ Α΄">ΚΑΛΛΙΘΕΑΣ Α΄ </option>
            <option value="ΚΑΛΛΙΘΕΑΣ Β΄">ΚΑΛΛΙΘΕΑΣ Β΄ </option>
            <option value="ΚΑΛΛΟΝΗΣ">ΚΑΛΛΟΝΗΣ </option>
            <option value="ΚΑΛΥΜΝΟΥ">ΚΑΛΥΜΝΟΥ </option>
            <option value="ΚΑΝΑΛΑΚΙΟΥ ">ΚΑΝΑΛΑΚΙΟΥ </option>
            <option value="ΚΑΡΔΙΤΣΑΣ ">ΚΑΡΔΙΤΣΑΣ </option>
            <option value="ΚΑΡΛΟΒΑΣΙΟΥ ">ΚΑΡΛΟΒΑΣΙΟΥ </option>
            <option value="ΚΑΡΠΑΘΟΥ ">ΚΑΡΠΑΘΟΥ </option>
            <option value="ΚΑΡΠΕΝΗΣΙΟΥ ">ΚΑΡΠΕΝΗΣΙΟΥ </option>
            <option value="ΚΑΡΥΣΤΟΥ ">ΚΑΡΥΣΤΟΥ </option>
            <option value="ΚΑΣΣΑΝΔΡΑΣ ">ΚΑΣΣΑΝΔΡΑΣ </option>
            <option value="ΚΑΣΤΕΛΙΟΥ ΚΙΣΣΑΜΟΥ ">ΚΑΣΤΕΛΙΟΥ ΚΙΣΣΑΜΟΥ </option>
            <option value="ΚΑΣΤΕΛΙΟΥ ΠΕΔΙΑΔΑΣ ">ΚΑΣΤΕΛΙΟΥ ΠΕΔΙΑΔΑΣ </option>
            <option value="ΚΑΣΤΟΡΙΑΣ ">ΚΑΣΤΟΡΙΑΣ </option>
            <option value="ΚΑΤΕΡΙΝΗΣ ">ΚΑΤΕΡΙΝΗΣ </option>
            <option value="ΚΑΤΕΡΙΝΗΣ Β΄">ΚΑΤΕΡΙΝΗΣ Β΄ </option>
            <option value="ΚΑΤΩ ΑΧΑΙΑΣ ">ΚΑΤΩ ΑΧΑΙΑΣ </option>
            <option value="ΚΕΑΣ ">ΚΕΑΣ </option>
            <option value="ΚΕΡΚΥΡΑΣ Α΄">ΚΕΡΚΥΡΑΣ Α΄ </option>
            <option value="ΚΕΡΚΥΡΑΣ Β΄ ">ΚΕΡΚΥΡΑΣ Β΄ </option>
            <option value="ΚΕΦ. ΠΕΙΡΑΙΩΣ Α΄">ΚΕΦ. ΠΕΙΡΑΙΩΣ Α΄ </option>
            <option value="ΚΕΦΑΛΑΙΟΥ ΑΘΗΝΩΝ  Α΄">ΚΕΦΑΛΑΙΟΥ ΑΘΗΝΩΝ  Α΄ </option>
            <option value="ΚΕΦΑΛΑΙΟΥ ΑΘΗΝΩΝ  Β΄">ΚΕΦΑΛΑΙΟΥ ΑΘΗΝΩΝ  Β΄ </option>
            <option value="ΚΕΦΑΛΑΙΟΥ ΘΕΣ`ΚΗΣ">ΚΕΦΑΛΑΙΟΥ ΘΕΣ`ΚΗΣ </option>
            <option value="ΚΗΦΙΣΣΙΑΣ ">ΚΗΦΙΣΣΙΑΣ </option>
            <option value="ΚΙΑΤΟΥ ">ΚΙΑΤΟΥ </option>
            <option value="ΚΙΛΚΙΣ ">ΚΙΛΚΙΣ </option>
            <option value="ΚΙΣΣΑΜΟΥ ">ΚΙΣΣΑΜΟΥ </option>
            <option value="ΚΟΖΑΝΗΣ ">ΚΟΖΑΝΗΣ </option>
            <option value="ΚΟΜΟΤΗΝΗΣ ">ΚΟΜΟΤΗΝΗΣ </option>
            <option value="ΚΟΝΙΤΣΗΣ ">ΚΟΝΙΤΣΗΣ </option>
            <option value="ΚΟΡΙΝΘΟΥ ">ΚΟΡΙΝΘΟΥ </option>
            <option value="ΚΟΡΥΔΑΛΛΟΥ ">ΚΟΡΥΔΑΛΛΟΥ </option>
            <option value="ΚΟΡΩΠΙΟΥ ">ΚΟΡΩΠΙΟΥ </option>
            <option value="ΚΡΑΝΙΔΙΟΥ ">ΚΡΑΝΙΔΙΟΥ </option>
            <option value="ΚΡΕΣΤΑΙΝΩΝ ">ΚΡΕΣΤΑΙΝΩΝ </option>
            <option value="ΚΡΟΚΕΩΝ ">ΚΡΟΚΕΩΝ </option>
            <option value="ΚΥΘΗΡΩΝ ">ΚΥΘΗΡΩΝ </option>
            <option value="ΚΥΜΗΣ ">ΚΥΜΗΣ </option>
            <option value="ΚΥΠΑΡΙΣΣΙΑΣ ">ΚΥΠΑΡΙΣΣΙΑΣ </option>
            <option value="ΚΩΣ ">ΚΩΣ </option>
            <option value="Λ. ΧΕΡΣΟΝΗΣΣΟΥ ">Λ. ΧΕΡΣΟΝΗΣΣΟΥ </option>
            <option value="ΛΑΓΚΑΔΑ ">ΛΑΓΚΑΔΑ </option>
            <option value="ΛΑΓΚΑΔΙΩΝ ">ΛΑΓΚΑΔΙΩΝ </option>
            <option value="ΛΑΜΙΑΣ ">ΛΑΜΙΑΣ </option>
            <option value="ΛΑΡΙΣΣΗΣ  Α΄">ΛΑΡΙΣΣΗΣ  Α΄ </option>
            <option value="ΛΑΡΙΣΣΗΣ  Β΄">ΛΑΡΙΣΣΗΣ  Β΄ </option>
            <option value="ΛΑΥΡΙΟΥ ">ΛΑΥΡΙΟΥ </option>
            <option value="ΛΕΒΙΔΙΟΥ">ΛΕΒΙΔΙΟΥ </option>
            <option value="ΛΕΡΟΥ">ΛΕΡΟΥ </option>
            <option value="ΛΕΥΚΑΔΑΣ ">ΛΕΥΚΑΔΑΣ </option>
            <option value="ΛΕΧΑΙΝΩΝ ">ΛΕΧΑΙΝΩΝ </option>
            <option value="ΛΕΩΝΙΔΙΟΥ ">ΛΕΩΝΙΔΙΟΥ </option>
            <option value="ΛΗΜΝΟΥ ">ΛΗΜΝΟΥ </option>
            <option value="ΛΙΒΑΔΕΙΑΣ ">ΛΙΒΑΔΕΙΑΣ </option>
            <option value="ΛΙΔΩΡΙΚΙΟΥ ">ΛΙΔΩΡΙΚΙΟΥ </option>
            <option value="ΛΙΜΝΗΣ ">ΛΙΜΝΗΣ </option>
            <option value="ΜΑΚΡΑΚΩΜΗΣ ">ΜΑΚΡΑΚΩΜΗΣ </option>
            <option value="ΜΕΓΑΛΟΠΟΛΗΣ ">ΜΕΓΑΛΟΠΟΛΗΣ </option>
            <option value="ΜΕΓΑΡΩΝ ">ΜΕΓΑΡΩΝ </option>
            <option value="ΜΕΛΙΓΑΛΑ ">ΜΕΛΙΓΑΛΑ </option>
            <option value="ΜΕΣΟΛΟΓΓΙΟΥ ">ΜΕΣΟΛΟΓΓΙΟΥ </option>
            <option value="ΜΕΣΣΗΝΗΣ ">ΜΕΣΣΗΝΗΣ </option>
            <option value="ΜΕΤΣΟΒΟΥ ">ΜΕΤΣΟΒΟΥ </option>
            <option value="ΜΗΘΥΜΝΗΣ ">ΜΗΘΥΜΝΗΣ </option>
            <option value="ΜΗΛΟΥ ">ΜΗΛΟΥ </option>
            <option value="ΜΟΙΡΩΝ ">ΜΟΙΡΩΝ </option>
            <option value="ΜΟΛΑΩΝ ">ΜΟΛΑΩΝ </option>
            <option value="ΜΟΣΧΑΤΟΥ ">ΜΟΣΧΑΤΟΥ </option>
            <option value="ΜΟΥΖΑΚΙΟΥ ">ΜΟΥΖΑΚΙΟΥ </option>
            <option value="ΜΥΚΟΝΟΥ ">ΜΥΚΟΝΟΥ </option>
            <option value="ΜΥΤΙΛΗΝΗΣ ">ΜΥΤΙΛΗΝΗΣ </option>
            <option value="Ν.ΖΙΧΝΗΣ ">Ν.ΖΙΧΝΗΣ </option>
            <option value="Ν.ΗΡΑΚΛΕΙΟΥ ">Ν.ΗΡΑΚΛΕΙΟΥ </option>
            <option value="Ν.ΙΩΝΙΑΣ ">Ν.ΙΩΝΙΑΣ </option>
            <option value="Ν.ΛΙΟΣΙΩΝ">Ν.ΛΙΟΣΙΩΝ </option>
            <option value="Ν.ΜΟΥΔΑΝΙΩΝ ">Ν.ΜΟΥΔΑΝΙΩΝ </option>
            <option value="Ν.ΦΙΛΑΔΕΛΦΕΙΑΣ ">Ν.ΦΙΛΑΔΕΛΦΕΙΑΣ </option>
            <option value="ΝΑΞΟΥ ">ΝΑΞΟΥ </option>
            <option value="ΝΑΟΥΣΑΣ ">ΝΑΟΥΣΑΣ </option>
            <option value="ΝΑΥΠΑΚΤΟΥ ">ΝΑΥΠΑΚΤΟΥ </option>
            <option value="ΝΑΥΠΛΙΟΥ ">ΝΑΥΠΛΙΟΥ </option>
            <option value="ΝΕΑΠΟΛΕΩΣ ">ΝΕΑΠΟΛΕΩΣ </option>
            <option value="ΝΕΑΠΟΛΕΩΣ ΚΡΗΤΗΣ ">ΝΕΑΠΟΛΕΩΣ ΚΡΗΤΗΣ </option>
            <option value="ΝΕΑΠΟΛΕΩΣ ΛΑΚΩΝΙΑΣ ">ΝΕΑΠΟΛΕΩΣ ΛΑΚΩΝΙΑΣ </option>
            <option value="ΝΕΑΠΟΛΗΣ ΒΟΙΟΥ ">ΝΕΑΠΟΛΗΣ ΒΟΙΟΥ </option>
            <option value="ΝΕΑΣ ΣΜΥΡΝΗΣ ">ΝΕΑΣ ΣΜΥΡΝΗΣ </option>
            <option value="ΝΕΜΕΑΣ ">ΝΕΜΕΑΣ </option>
            <option value="ΝΕΣΤΟΡΙΟΥ ">ΝΕΣΤΟΡΙΟΥ </option>
            <option value="ΝΕΥΡΟΚΟΠΙΟΥ ">ΝΕΥΡΟΚΟΠΙΟΥ </option>
            <option value="ΝΙΓΡΙΤΑΣ ">ΝΙΓΡΙΤΑΣ </option>
            <option value="ΝΙΚΑΙΑΣ ">ΝΙΚΑΙΑΣ </option>
            <option value="ΞΑΝΘΗΣ Α΄">ΞΑΝΘΗΣ Α΄ </option>
            <option value="ΞΑΝΘΗΣ Β΄">ΞΑΝΘΗΣ Β΄ </option>
            <option value="ΞΥΛΟΚΑΣΤΡΟΥ">ΞΥΛΟΚΑΣΤΡΟΥ </option>
            <option value="ΟΡΕΣΤΙΑΔΟΣ">ΟΡΕΣΤΙΑΔΟΣ </option>
            <option value="ΠΑΛΑΙΟΥ ΦΑΛΗΡΟΥ ">ΠΑΛΑΙΟΥ ΦΑΛΗΡΟΥ </option>
            <option value="ΠΑΛΑΜΑ ΚΑΡΔΙΤΣΑΣ">ΠΑΛΑΜΑ ΚΑΡΔΙΤΣΑΣ </option>
            <option value="ΠΑΛΛΗΝΗΣ ">ΠΑΛΛΗΝΗΣ </option>
            <option value="ΠΑΞΩΝ ">ΠΑΞΩΝ </option>
            <option value="ΠΑΡΑΜΥΘΙΑΣ">ΠΑΡΑΜΥΘΙΑΣ </option>
            <option value="ΠΑΡΓΑΣ">ΠΑΡΓΑΣ </option>
            <option value="ΠΑΡΟΥ">ΠΑΡΟΥ </option>
            <option value="ΠΑΤΡΩΝ  Α΄">ΠΑΤΡΩΝ  Α΄ </option>
            <option value="ΠΑΤΡΩΝ  Β΄">ΠΑΤΡΩΝ  Β΄ </option>
            <option value="ΠΑΤΡΩΝ  Γ΄">ΠΑΤΡΩΝ  Γ΄ </option>
            <option value="ΠΕΙΡΑΙΩΣ Α΄">ΠΕΙΡΑΙΩΣ Α΄ </option>
            <option value="ΠΕΙΡΑΙΩΣ  Β΄">ΠΕΙΡΑΙΩΣ  Β΄ </option>
            <option value="ΠΕΙΡΑΙΩΣ Γ΄">ΠΕΙΡΑΙΩΣ Γ΄ </option>
            <option value="ΠΕΙΡΑΙΩΣ  Δ΄">ΠΕΙΡΑΙΩΣ  Δ΄ </option>
            <option value="ΠΕΙΡΑΙΩΣ Ε΄">ΠΕΙΡΑΙΩΣ Ε΄ </option>
            <option value="ΠΕΙΡΑΙΩΣ ΣΤ΄">ΠΕΙΡΑΙΩΣ ΣΤ΄ </option>
            <option value="ΠΕΡΑΜΑΤΟΣ ">ΠΕΡΑΜΑΤΟΣ </option>
            <option value="ΠΕΡΙΣΤΕΡΙΟΥ  Α΄">ΠΕΡΙΣΤΕΡΙΟΥ  Α΄ </option>
            <option value="ΠΕΡΙΣΤΕΡΙΟΥ  Β΄">ΠΕΡΙΣΤΕΡΙΟΥ  Β΄ </option>
            <option value="ΠΕΤΡΟΥΠΟΛΗΣ ">ΠΕΤΡΟΥΠΟΛΗΣ </option>
            <option value="ΠΛΟΙΩΝ ΠΕΙΡΑΙΩΣ">ΠΛΟΙΩΝ ΠΕΙΡΑΙΩΣ </option>
            <option value="ΠΛΩΜΑΡΙΟΥ ΠΡΟΚΥΜΑ ">ΠΛΩΜΑΡΙΟΥ ΠΡΟΚΥΜΑ </option>
            <option value="ΠΟΛΥΓΥΡΟΥ ">ΠΟΛΥΓΥΡΟΥ </option>
            <option value="ΠΟΡΟΥ ">ΠΟΡΟΥ </option>
            <option value="ΠΡΑΜΑΝΤΩΝ ">ΠΡΑΜΑΝΤΩΝ </option>
            <option value="ΠΡΕΒΕΖΗΣ ">ΠΡΕΒΕΖΗΣ </option>
            <option value="ΠΤΟΛΕΜΑΙΔΑΣ ">ΠΤΟΛΕΜΑΙΔΑΣ </option>
            <option value="ΠΥΛΗΣ ">ΠΥΛΗΣ </option>
            <option value="ΠΥΛΟΥ ">ΠΥΛΟΥ </option>
            <option value="ΠΥΡΓΟΥ ">ΠΥΡΓΟΥ </option>
            <option value="ΡΕΘΥΜΝΟΥ ">ΡΕΘΥΜΝΟΥ </option>
            <option value="ΡΟΔΟΥ ">ΡΟΔΟΥ </option>
            <option value="ΣΑΛΑΜΙΝΑΣ">ΣΑΛΑΜΙΝΑΣ </option>
            <option value="ΣΑΜΟΥ ">ΣΑΜΟΥ </option>
            <option value="ΣΑΠΠΩΝ ">ΣΑΠΠΩΝ </option>
            <option value="ΣΕΡΒΙΩΝ ">ΣΕΡΒΙΩΝ </option>
            <option value="ΣΕΡΡΩΝ Α΄">ΣΕΡΡΩΝ Α΄ </option>
            <option value="ΣΕΡΡΩΝ Β΄">ΣΕΡΡΩΝ Β΄ </option>
            <option value="ΣΗΤΕΙΑΣ ">ΣΗΤΕΙΑΣ </option>
            <option value="ΣΙΑΤΙΣΤΗΣ ">ΣΙΑΤΙΣΤΗΣ </option>
            <option value="ΣΙΔΗΡΟΚΑΣΤΡΟΥ ">ΣΙΔΗΡΟΚΑΣΤΡΟΥ </option>
            <option value="ΣΚΙΑΘΟΥ ">ΣΚΙΑΘΟΥ </option>
            <option value="ΣΚΟΠΕΛΟΥ ">ΣΚΟΠΕΛΟΥ </option>
            <option value="ΣΟΥΦΛΙΟΥ">ΣΟΥΦΛΙΟΥ </option>
            <option value="ΣΟΥΦΛΙΟΥ">ΣΟΥΦΛΙΟΥ </option>
            <option value="ΣΠΑΡΤΗΣ ">ΣΠΑΡΤΗΣ </option>
            <option value="ΣΠΕΤΣΩΝ ">ΣΠΕΤΣΩΝ </option>
            <option value="ΣΤΥΛΙΔΑΣ ">ΣΤΥΛΙΔΑΣ </option>
            <option value="ΣΥΡΟΥ ">ΣΥΡΟΥ </option>
            <option value="ΣΩΧΟΥ">ΣΩΧΟΥ </option>
            <option value="ΤΗΝΟΥ">ΤΗΝΟΥ </option>
            <option value="ΤΟΥΜΠΑΣ ">ΤΟΥΜΠΑΣ </option>
            <option value="ΤΡΙΚΑΛΩΝ">ΤΡΙΚΑΛΩΝ </option>
            <option value="ΤΡΙΠΟΛΕΩΣ ">ΤΡΙΠΟΛΕΩΣ </option>
            <option value="ΤΡΟΠΑΙΩΝ">ΤΡΟΠΑΙΩΝ </option>
            <option value="ΤΥΜΠΑΚΙΟΥ">ΤΥΜΠΑΚΙΟΥ </option>
            <option value="ΤΥΡΝΑΒΟΥ ">ΤΥΡΝΑΒΟΥ </option>
            <option value="ΥΔΡΑΣ ">ΥΔΡΑΣ </option>
            <option value="ΦΑΒΕ ΑΘΗΝΩΝ ">ΦΑΒΕ ΑΘΗΝΩΝ </option>
            <option value="ΦΑΕΕ ΑΘΗΝΩΝ ">ΦΑΕΕ ΑΘΗΝΩΝ </option>
            <option value="ΦΑΕΕ ΘΕΣ/ΝΙΚΗΣ ">ΦΑΕΕ ΘΕΣ/ΝΙΚΗΣ </option>
            <option value="ΦΑΕΕ ΠΕΙΡΑΙΩΣ ">ΦΑΕΕ ΠΕΙΡΑΙΩΣ </option>
            <option value="ΦΑΡΣΑΛΩΝ ">ΦΑΡΣΑΛΩΝ </option>
            <option value="ΦΙΛΙΑΤΡΩΝ ">ΦΙΛΙΑΤΡΩΝ </option>
            <option value="ΦΙΛΙΑΤΩΝ ">ΦΙΛΙΑΤΩΝ </option>
            <option value="ΦΙΛΙΠΠΙΑΔΟΣ ">ΦΙΛΙΠΠΙΑΔΟΣ </option>
            <option value="ΦΛΩΡΙΝΗΣ">ΦΛΩΡΙΝΗΣ </option>
            <option value="ΧΑΙΔΑΡΙΟΥ">ΧΑΙΔΑΡΙΟΥ </option>
            <option value="ΧΑΛΑΝΔΡΙΟΥ ">ΧΑΛΑΝΔΡΙΟΥ </option>
            <option value="ΧΑΛΚΙΔΑΣ">ΧΑΛΚΙΔΑΣ </option>
            <option value="ΧΑΝΙΩΝ Α΄">ΧΑΝΙΩΝ Α΄ </option>
            <option value="ΧΑΝΙΩΝ Β΄">ΧΑΝΙΩΝ Β΄ </option>
            <option value="ΧΙΟΥ ">ΧΙΟΥ </option>
            <option value="ΧΟΛΑΡΓΟΥ ">ΧΟΛΑΡΓΟΥ </option>
            <option value="ΧΡΥΣΟΥΠΟΛΗΣ ">ΧΡΥΣΟΥΠΟΛΗΣ </option>
            <option value="ΨΥΧΙΚΟΥ ">ΨΥΧΙΚΟΥ </option>
          </select></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div id="drast_ep" style="display:none">
      <table width="100%">
        <tr align="left" valign="top">
          <td nowrap="nowrap" width="40%">Business Type :</td>
          <td class="medgray" width="60%"><input name="businessDrast" type="text" id="businessDrast" size="32" /></td>
        </tr>
      </table>
    </div></td>
  </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;Email : </div></td>
      <td><label>
        <input name="emailText" type="text" id="email_id" size="32">
      </label></td>
    </tr>
    <tr align="left" valign="top">
      <td class="medgray"><div align="right" class="smgray"></div></td>
      <td class="medgray"><span class="smgray"> Example: <a href="https://www.papaki.gr/onoma@yahoo.gr"><font color="#3366ff">name@yahoo.gr</font></a>  
        </span></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;Address : </div></td>
      <td><label>
        <input name="address1" type="text" id="streetNum" size="32">
      </label></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray" width="40%"><div align="left">&nbsp;State :</div></td>
      <td><span class="style15">
        <input name="stateProvince" type="text" id="stateProvince" size="32">
        </span></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;City :</div></td>
      <td><span class="style15">
        <input name="city" type="text" id="city" size="32" maxlength="50">
      </span></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;PostCode : </div></td>
      <td><input name="postcode" type="text" id="zip" size="32" maxlength="50"></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;Country :</div></td>
      <td class="style15">
         <select name="country" id="country" size="1">
           <option selected="selected" value="GR">Greece</option>
           <option value="AF">Afghanistan</option>
           <option value="AL">Albania</option>
           <option value="DZ">Algeria</option>
           <option value="AS">American Samoa</option>
           <option value="AD">Andorra</option>
           <option value="AO">Angola</option>
           <option value="AI">Anguilla</option>
           <option value="AQ">Antarctica</option>
           <option value="AG">Antigua and Barbuda</option>
           <option value="AR">Argentina</option>
           <option value="AM">Armenia</option>
           <option value="AW">Aruba</option>
           <option value="AU">Australia</option>
           <option value="AT">Austria</option>
           <option value="AZ">Azerbaijan</option>
           <option value="BS">Bahamas</option>
           <option value="BH">Bahrain</option>
           <option value="BD">Bangladesh</option>
           <option value="BB">Barbados</option>
           <option value="BY">Belarus</option>
           <option value="BE">Belgium</option>
           <option value="BZ">Belize</option>
           <option value="BJ">Benin</option>
           <option value="BM">Bermuda</option>
           <option value="BT">Bhutan</option>
           <option value="BO">Bolivia</option>
           <option value="BA">Bosnia-Herzegovina</option>
           <option value="BW">Botswana</option>
           <option value="BV">Bouvet Island</option>
           <option value="BR">Brazil</option>
           <option value="IO">British Indian Ocean Territories</option>
           <option value="BN">Brunei Darussalam</option>
           <option value="BG">Bulgaria</option>
           <option value="BF">Burkina Faso</option>
           <option value="BI">Burundi</option>
           <option value="KH">Cambodia</option>
           <option value="CM">Cameroon</option>
           <option value="CA">Canada</option>
           <option value="CV">Cape Verde</option>
           <option value="KY">Cayman Islands</option>
           <option value="CF">Central African Republic</option>
           <option value="TD">Chad</option>
           <option value="CL">Chile</option>
           <option value="CN">China</option>
           <option value="CX">Christmas Island</option>
           <option value="CC">Cocos (Keeling) Island</option>
           <option value="CO">Colombia</option>
           <option value="KM">Comoros</option>
           <option value="CG">Congo</option>
           <option value="CD">Congo, Democratic republic of the (former Zaire)</option>
           <option value="CK">Cook Islands</option>
           <option value="CR">Costa Rica</option>
           <option value="CI">Cote D'ivoire</option>
           <option value="HR">Croatia</option>
           <option value="CY">Cyprus</option>
           <option value="CZ">Czech Republic</option>
           <option value="DK">Denmark</option>
           <option value="DJ">Djibouti</option>
           <option value="DM">Dominica</option>
           <option value="DO">Dominican Republic</option>
           <option value="TP">East Timor</option>
           <option value="EC">Ecuador</option>
           <option value="EG">Egypt</option>
           <option value="SV">El Salvador</option>
           <option value="GQ">Equatorial Guinea</option>
           <option value="ER">Eritrea</option>
           <option value="EE">Estonia</option>
           <option value="ET">Ethiopia</option>
           <option value="FK">Falkland Islands (Malvinas)</option>
           <option value="FO">Faroe Islands</option>
           <option value="FJ">Fiji</option>
           <option value="FI">Finland</option>
           <option value="FR">France</option>
           <option value="FX">France (Metropolitan)</option>
           <option value="GF">French Guiana</option>
           <option value="PF">French Polynesia</option>
           <option value="TF">French Southern Territories</option>
           <option value="GA">Gabon</option>
           <option value="GM">Gambia</option>
           <option value="GE">Georgia</option>
           <option value="DE">Germany</option>
           <option value="GH">Ghana</option>
           <option value="GI">Gibraltar</option>
           <option value="GL">Greenland</option>
           <option value="GD">Grenada</option>
           <option value="GP">Guadeloupe (French)</option>
           <option value="GU">Guam (United States)</option>
           <option value="GT">Guatemala</option>
           <option value="GN">Guinea</option>
           <option value="GW">Guinea-bissau</option>
           <option value="GY">Guyana</option>
           <option value="HT">Haiti</option>
           <option value="HM">Heard &amp; McDonald Islands</option>
           <option value="VA">Holy See (Vatican City State)</option>
           <option value="HN">Honduras</option>
           <option value="HK">Hong Kong</option>
           <option value="HU">Hungary</option>
           <option value="IS">Iceland</option>
           <option value="IN">India</option>
           <option value="ID">Indonesia</option>
           <option value="IQ">Iraq</option>
           <option value="IE">Ireland</option>
           <option value="IL">Israel</option>
           <option value="IT">Italy</option>
           <option value="JM">Jamaica</option>
           <option value="JP">Japan</option>
           <option value="JO">Jordan</option>
           <option value="KZ">Kazakhstan</option>
           <option value="KE">Kenya</option>
           <option value="KI">Kiribati</option>
           <option value="KR">Korea Republic of</option>
           <option value="KW">Kuwait</option>
           <option value="KG">Kyrgyzstan</option>
           <option value="LA">Lao People's Democratic Republic</option>
           <option value="LV">Latvia</option>
           <option value="LB">Lebanon</option>
           <option value="LS">Lesotho</option>
           <option value="LR">Liberia</option>
           <option value="LI">Liechtenstein</option>
           <option value="LT">Lithuania</option>
           <option value="LU">Luxembourg</option>
           <option value="MO">Macau</option>
           <option value="MK">Macedonia The Former Yugoslav Republic of</option>
           <option value="MG">Madagascar</option>
           <option value="MW">Malawi</option>
           <option value="MY">Malaysia</option>
           <option value="MV">Maldives</option>
           <option value="ML">Mali</option>
           <option value="MT">Malta</option>
           <option value="MH">Marshall Islands</option>
           <option value="MQ">Martinique</option>
           <option value="MR">Mauritania</option>
           <option value="MU">Mauritius</option>
           <option value="YT">Mayotte</option>
           <option value="MX">Mexico</option>
           <option value="FM">Micronesia Federated States of</option>
           <option value="MD">Moldavia Republic of</option>
           <option value="MC">Monaco</option>
           <option value="MN">Mongolia</option>
           <option value="MS">Montserrat</option>
           <option value="MA">Morocco</option>
           <option value="MZ">Mozambique</option>
           <option value="NA">Namibia</option>
           <option value="NR">Nauru</option>
           <option value="NP">Nepal</option>
           <option value="NL">Netherlands</option>
           <option value="AN">Netherlands Antilles</option>
           <option value="NC">New Caledonia</option>
           <option value="NZ">New Zealand</option>
           <option value="NI">Nicaragua</option>
           <option value="NE">Niger</option>
           <option value="NG">Nigeria</option>
           <option value="NU">Niue</option>
           <option value="NF">Norfolk Island</option>
           <option value="MP">Northern Mariana Island</option>
           <option value="NO">Norway</option>
           <option value="OM">Oman</option>
           <option value="PK">Pakistan</option>
           <option value="PW">Palau</option>
           <option value="PA">Panama</option>
           <option value="PG">Papua New Guinea</option>
           <option value="PY">Paraguay</option>
           <option value="PE">Peru</option>
           <option value="PH">Philippines</option>
           <option value="PN">Pitcairn</option>
           <option value="PL">Poland</option>
           <option value="PT">Portugal</option>
           <option value="PR">Puerto Rico</option>
           <option value="QA">Qatar</option>
           <option value="RE">Reunion</option>
           <option value="RO">Romania</option>
           <option value="RU">Russian Federation</option>
           <option value="RW">Rwanda</option>
           <option value="SH">Saint Helena</option>
           <option value="KN">Saint Kitts and Nevis</option>
           <option value="LC">Saint Lucia</option>
           <option value="PM">Saint Pierre and Miquelon</option>
           <option value="VC">Saint Vincent and the Grenadines</option>
           <option value="WS">Samoa</option>
           <option value="SM">San Marino</option>
           <option value="ST">Sao Tome and Principe</option>
           <option value="SA">Saudi Arabia</option>
           <option value="SN">Senegal</option>
           <option value="SC">Seychelles</option>
           <option value="SL">Sierra Leone</option>
           <option value="SG">Singapore</option>
           <option value="SK">Slovakia (Slovak Republic)</option>
           <option value="SI">Slovenia</option>
           <option value="SB">Solomon Islands</option>
           <option value="SO">Somalia</option>
           <option value="ZA">South Africa</option>
           <option value="GS">South Georgia and South Sandwich Islands</option>
           <option value="ES">Spain</option>
           <option value="LK">Sri Lanka</option>
           <option value="SR">Suriname</option>
           <option value="SJ">Svalbard &amp; Jan Mayen Islands</option>
           <option value="SZ">Swaziland</option>
           <option value="SE">Sweden</option>
           <option value="CH">Switzerland</option>
           <option value="TW">Taiwan Province of China</option>
           <option value="TJ">Tajikistan</option>
           <option value="TZ">Tanzania United Republic of</option>
           <option value="TH">Thailand</option>
           <option value="TG">Togo</option>
           <option value="TK">Tokelau</option>
           <option value="TO">Tonga</option>
           <option value="TT">Trinidad &amp; Tobago</option>
           <option value="TN">Tunisia</option>
           <option value="TR">Turkey</option>
           <option value="TM">Turkmenistan</option>
           <option value="TC">Turks &amp; Caicos Islands</option>
           <option value="TV">Tuvalu</option>
           <option value="UG">Uganda</option>
           <option value="UA">Ukraine</option>
           <option value="AE">United Arab Emirates</option>
           <option value="GB">United Kingdom</option>
           <option value="UM">United States Minor Outlying Islands</option>
           <option value="US">United States of America</option>
           <option value="UY">Uruguay</option>
           <option value="UZ">Uzbekistan</option>
           <option value="VU">Vanuatu</option>
           <option value="VE">Venezuela</option>
           <option value="VN">Viet Nam</option>
           <option value="VG">Virgin Islands (British)</option>
           <option value="VI">Virgin Islands (United States)</option>
           <option value="WF">Wallis &amp; Futuna Islands</option>
           <option value="EH">Western Sahara</option>
           <option value="YE">Yemen</option>
           <option value="YU">Yugoslavia</option>
           <option value="ZM">Zambia</option>
         </select></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;PhoneNumber :</div></td>
      <td><label>
        <input name="phoneNum" type="text" id="phoneNum" size="32">
      </label></td>
    </tr>
    <tr align="left" valign="top">
      <td class="medgray"><div align="right" class="smgray"></div></td>
      <td class="medgray"><span class="smgray">i.e. +30.2105555555 <br>
        </span></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;Mobile (Optional): </div></td>
      <td><input name="mobile" type="text" id="mobile" size="32"></td>
    </tr>
    <tr align="left">
      <td align="right" class="medgray"><div align="left">&nbsp;Fax (Optional): </div></td>
      <td><input name="fax" type="text" id="fax" size="32"></td>
    </tr>
    <tr align="left">
      <td colspan="2" class="medgray">&nbsp;</td>
    </tr>
   <TR>
							<TD width="40%" height="25">&nbsp;</TD>
							<TD width="895" height="25"><IMG height="25" alt="" src="graphics/spacer.gif" width="1"></TD>
	</TR>
	<TR>
							
							<TD height="25" colspan="2"><input name="chkNewsletters" id="chkNewsletters" type="checkbox" checked="checked" value="1" />&nbsp;I would like to receive newsletters</TD>
						</TR>
						<TR>
							
							<TD colspan="2" class="black" height="1" style="padding:0"><IMG height="1" width="1" alt="" src="graphics/spacer.gif"></TD>
						</TR>
						<TR>
							
							<TD align="right" colspan="2">
						  <input type="image" name="imgBtnContinue" id="imgBtnContinue" src="images/continueEN.gif" alt="" border="0" /></TD>
						</TR>
						<TR>
							<TD width="40%" height="25">&nbsp;</TD>
							<TD width="895" height="25"><IMG height="25" alt="" src="graphics/spacer.gif" width="1"></TD>
						</TR>
  </table></td>
                                                          </tr>
                                                          <tr>
                                                            <td>                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
													</form>
</body>
</html>
