<?php

$servername = "128.199.86.241";
$username = "aladdins_store";
$password = "E5B&yM2XiNp!";
$dbname = "aladdins_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$domain = "https://toopmarketing.com/ir_services/user_login.php";
$action = "?Phone=01156311830&Password=ah73zwrb";

// Set query data here with the URL
$url = $domain.$action;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(curl_errno($ch)){
	echo 'Curl error: ' . curl_error($ch);
}

// ob_start(); 
$return = curl_exec($ch);
// ob_end_clean();
//echo curl_errno($ch);
//echo curl_error($ch);
curl_close($ch);

$login_detail = json_decode($return,true);

// echo $login_detail['Bal'];


//request topup

$postparam=array(
'prodId'=>$_POST['carrier'],
'login_uid'=>$login_detail['uid'],
'password'=>"ah73zwrb",
'txtAmt'=>$_POST['amount'],
'txtMobile'=>$_POST['phone_number'],
);

//print_r($postparam);

//echo http_build_query($postparam);


$url = "https://toopmarketing.com/ir_services/reload.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postparam));
curl_setopt($ch, CURLOPT_HEADER, "Content Type: application/x-www-form-urlencoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
    
$return = curl_exec($ch);
// ob_end_clean();
// echo curl_errno($ch);
// echo curl_error($ch);
curl_close($ch);
            
$json = json_decode($return,true);

echo $return;

if($json['status']=='true'){
	$sql="INSERT INTO topups(carrier,amount,number,email,reload_id) VALUES ('".$_POST['carrier']."','".$_POST['amount']."','".$_POST['phone_number']."','','".$json['reload_id']."')";

	if ($conn->query($sql) === TRUE) {
	  echo "

	  <script>

	  	alert('Your number successfully reload!');

	  	window.location.href = '/aladdin_b2c/topup';

	  </script>

	  ";
	}
	

}else{
    
    echo "

	  <script>

	  	alert('Topup uncussessful. ".$json['msg']."');

	  	window.location.href = '/aladdin_b2c/topup';

	  </script>

	  ";
	
    
}







//print_r($json);

?>