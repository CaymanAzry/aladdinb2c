<?php

if($_GET['code']){

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

	ob_start(); 
	$return = curl_exec($ch);
	ob_end_clean();
	//echo curl_errno($ch);
	//echo curl_error($ch);
	curl_close($ch);

	$login_detail = json_decode($return,true);


	$balance=number_format($login_detail['Bal'],2);


	//get amount



	$url = 'https://toopmarketing.com/ir_services/reload_products.php?code='.$_GET['code'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if(curl_errno($ch)){
		echo 'Curl error: ' . curl_error($ch);
	}

	ob_start(); 
	$return = curl_exec($ch);
	ob_end_clean();
	//echo curl_errno($ch);
	//echo curl_error($ch);
	curl_close($ch);

	$json = json_decode($return,true);


	$content = array();

	foreach($json['data'] as $key => $val){

		if($val['PCategory']=='Telco Reload'){

			$carrier_slug=strtolower(implode('-', explode(' ', $val['Name'])));

			$amounts=explode(',',$val['AcceptAmtDeno']);

			foreach ($amounts as $key => $value) {

				if($value<=$balance){
					echo '<option value="'.$value.'">RM '.$value.'</option>';
				}

			}
			

		}
	}
}



?>