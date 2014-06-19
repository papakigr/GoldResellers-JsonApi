<?php
require '../config.php';
$errors='';
$message='';
$task=isset($_POST['task'])?$_POST['task']:'';
$domain=isset($_POST['domain'])?$_POST['domain']:'';
$plan=isset($_POST['plan'])?$_POST['plan']:'';
$duration=isset($_POST['duration'])?$_POST['duration']:'';
$autorenew=isset($_POST['autorenew'])?$_POST['autorenew']:'';
$notification_type=isset($_POST['notification_type'])?$_POST['notification_type']:'';
$notify_address=isset($_POST['notify_address'])?$_POST['notify_address']:'';
$test=isset($_POST['test'])?$_POST['test']:'';
$test=$test=='1'?'True':'False';
if($task=='create'){
	if(trim($domain)=='' || strlen($domain)<3 || strlen($domain)>63 || trim($notify_address)=='' ){
		$errors='Invalid domain.';
	}
	else{
		$json='{"request": 	{ 	"do":"createhosting", 	"apiKey":"'.$Papaki_apikey.'", 	"domain":"'.$domain.'", 	"test":"'.$test.'", 	"plan":"'.$plan.'", 	"duration":"'.$duration.'", 	"autorenew":"'.$autorenew.'", 	"notification_type":"'.$notification_type.'", 	"notify_address":"'.$notify_address.'" 	} }';
		$url='https://api.papaki.gr/register_url2.aspx?xmlmessage='.urlencode($json);
		$resp=file_get_contents($url);
		$resp=json_decode($resp);
		//print_r($resp);
		if($resp->response->code!='1000'){
			$errors=$resp->response->message;
			$message='';
		}
		else{
			$errors='';
			$message='Hosting created successfully';
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Αγορά Πακέτου Web Hosting</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
var durations={
	'basic':[12],
	'dynamic-windows':[1,6,12,24,36,48,60],
	'advanced-windows':[1,6,12,24,36,48,60],
	'pro-windows':[1,6,12,24,36,48,60],
	'dynamic-linux':[1,6,12,24,36,48,60],
	'advanced-linux':[1,6,12,24,36,48,60],
	'pro-linux':[1,6,12,24,36,48,60],	   
};
function fillDurations(plan){
	var d=durations[plan];
	$('select[name="duration"]').empty();
	for(i in d){
		var s=d[i]<12?(d[i]==1?('1 month'):(d[i]+' months')):(d[i]==12?('1 year'):(d[i]/12+' years'));
		$('select[name="duration"]').append('<option value="' + d[i] + '">' + s + '</option>')
	}
}
</script>
</head>
<body>
<form action="index.php" method="post">
<input type="hidden" name="task" value="create" />
  <table>
  <tr><td colspan="2" align="center"><h3>Create new client hosting packet</h3></td></tr>
    <tr><td colspan="2" align="center"><h4 style="color:red"><?php print $errors.$message;?></h4></td></tr>
    <tr>
      <td>Domain:</td>
      <td><input type="text" name="domain" /></td>
    </tr>
    <tr>
      <td>Webhosting Plan:</td>
      <td>
      <select name="plan" onchange="fillDurations(this.value)">
            <option value="basic" selected="selected">Free Hosting</option>
            <option value="dynamic-windows">Dynamic Windows</option>
            <option value="advanced-windows">Advanced Windows</option>
            <option value="pro-windows">Pro Windows</option>
            <option value="dynamic-linux">Dynamic Linux</option>
            <option value="advanced-linux">Advanced Linux</option>
            <option value="pro-linux">Pro Linux</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td>
      <select name="duration">
            <option value="12">1 year</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Autorenew:</td>
      <td><input type="checkbox" name="autorenew" value="1" checked="checked"/></td>
    </tr>
    <tr>
      <td>Notification Type:</td>
      <td>
      <select name="notification_type">
            <option value="email">By email</option>
            <option value="url">Url</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Notify Address (url or email):</td>
      <td><input type="text" name="notify_address" /></td>
    </tr>
     <tr>
      <td>Test:</td>
      <td>
      <input type="checkbox" name="test" value="1" />
      </td>
    </tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Send" /></td></tr>
  </table>
</form>
</body>
</html>