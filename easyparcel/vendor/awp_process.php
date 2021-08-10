<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aladin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET)){
    // print_r($_GET);

    $vendor=array();
    
    $v_product=array();

    $v_address=array();

    $v_sql="SELECT marketplace_orders.shipping,marketplace_orders.billing,marketplace_stores.id AS vendor_id FROM `marketplace_orders` JOIN marketplace_stores ON marketplace_orders.store_id=marketplace_stores.id WHERE marketplace_orders.id=".$_GET['order_id'];
        
    $result = $conn->query($v_sql);

    $customer=array();

    if ($result->num_rows > 0) {
          // output data of each row
        while($row = $result->fetch_assoc()) {
            
            // echo '<pre>';
            // print_r($row);
            // echo '</pre><hr>';

            $customer=json_decode($row['billing'],true);

            //customer

            if($row['shipping']!=''){
                $customer=json_decode($row['shipping'],true);
            }

            //product

            $pro_sql="SELECT `marketplace_products`.`name`,`marketplace_products`.`shipping` AS ship_detail, `marketplace_sku`.`code` AS sku, `marketplace_order_items`.`quantity` FROM `marketplace_order_items` JOIN `marketplace_sku` ON `marketplace_order_items`.`sku_code`=`marketplace_sku`.`code` JOIN `marketplace_products` ON `marketplace_sku`.`product_id`=`marketplace_products`.`id` WHERE `marketplace_order_items`.`order_id`=".(int)$_GET['order_id'];

            $pro_result = $conn->query($pro_sql);

            if($pro_result->num_rows > 0){

                $prono=0;

                while($pro_row = $pro_result->fetch_assoc()){

                    $ship_detail=json_decode($pro_row['ship_detail'],1);

                    $v_product[$prono]['name']=$pro_row['name'];

                    $v_product[$prono]['quantity']=$pro_row['quantity'];

                    $v_product[$prono]['weight']=1;

                    if($ship_detail['weight']!=''){
                        $v_product[$prono]['weight']=$ship_detail['weight']*$v_product[$prono]['quantity'];
                    }

                    if($ship_detail['width']!=''&&$ship_detail['length']!=''&&$ship_detail['height']!=''){

                        $v_product[$prono]['width']=$ship_detail['width']*$v_product[$prono]['quantity'];
                        $v_product[$prono]['length']=$ship_detail['length']*$v_product[$prono]['quantity'];
                        $v_product[$prono]['height']=$ship_detail['height']*$v_product[$prono]['quantity'];

                    }

                }

            }


            //vendor

            $vd_sql="SELECT `model_settings`.`code`,`model_settings`.`value` FROM `model_settings` JOIN `marketplace_stores` ON `marketplace_stores`.`user_id`=`model_settings`.`created_by` WHERE `marketplace_stores`.`id`=".$row['vendor_id'];

            $vd_result= $conn->query($vd_sql);

            if($vd_result->num_rows > 0){

                while ($vd_row=$vd_result->fetch_assoc()) {
                    $vendor[$vd_row['code']]=$vd_row['value'];
                }

            }


        }
    }
    
    // echo '<pre>';
    // print_r($customer);
    // echo '</pre><hr>';   

    // echo '<pre>';
    // print_r($v_product);
    // echo '</pre><hr>'; 

    // echo '<pre>';
    // print_r($vendor);
    // echo '</pre><hr>';

    
    //make order

    $items_v_no=0;
        
    $v_items=array(); 


    $_GET['service_method']='dropoff';

    $weight=0;
    $width=0;
    $length=0;
    $height=0;
    
    foreach ($v_product as $key => $data) {
        $weight=$weight+$data['weight'];

        if($data['width']){
            $v_items[$items_v_no]['width']=$data['width'];
        }

        if($data['length']){
            $v_items[$items_v_no]['length']=$data['length'];
        }

        if($data['height']){
            $v_items[$items_v_no]['height']=$data['height'];
        }

        
    }
    

    if($_GET['service_method']=='dropoff'){
        $v_items[$items_v_no]=array(
        'weight'    => $weight,
        'width' => $width,
        'length'    => $length,
        'height'    => $height,
        'content'   => $v_product[0]['name'],
        'value' => $v_product[0]['quantity'],
        'service_id'    => $_GET['service_id'],
        'pick_name' => $vendor['marketplace_company_owner'],
        'pick_contact'  => $vendor['marketplace_company_phone'],
        'pick_addr1'    => $vendor['marketplace_company_street1'],
        'pick_city' => $vendor['marketplace_company_city'],
        'pick_state'    => $vendor['marketplace_company_state'],
        'pick_code' => $vendor['marketplace_company_zip'],
        'pick_country'  => $vendor['marketplace_company_country'],
        'send_name' => $customer['billing_address']['first_name'].' '.$customer['billing_address']['last_name'],
        'send_contact'  => $customer['billing_address']['phone_number'],
        'send_addr1'    => $customer['billing_address']['address_1'],
        'send_city' => $customer['billing_address']['city'],
        'send_state'    => $customer['billing_address']['state'],
        'send_code' => $customer['billing_address']['zip'],
        'send_country'  => $customer['billing_address']['country'],
        'send_email'    => $customer['billing_address']['email'],
        'reference' => $_GET['order_id']
        );
    }else if($_POST['service_method']=='pgeon'){
        $v_items[$items_v_no]=array(
        'content'   => $v_product[0]['name'],
        'value' => $v_product[0]['quantity'],
        'service_id'    => $_GET['service_id'],
        'pick_point'    => $_GET['pgeon-sender'],
        'pick_contact'  => $vendor['marketplace_company_phone'],
        'pick_addr1'    => $vendor['marketplace_company_street1'],
        'pick_city' => $vendor['marketplace_company_city'],
        'pick_state'    => $vendor['marketplace_company_state'],
        'pick_code' => $vendor['marketplace_company_zip'],
        'pick_country'  => $vendor['marketplace_company_country'],
        'send_point'    => $_GET['pgeon-receiver'],
        'send_name' => $customer['billing_address']['first_name'].' '.$customer['billing_address']['last_name'],
        'send_contact'  => $customer['billing_address']['phone_number'],
        'send_addr1'    => $customer['billing_address']['address_1'],
        'send_city' => $customer['billing_address']['city'],
        'send_state'    => $customer['billing_address']['state'],
        'send_code' => $customer['billing_address']['zip'],
        'send_country'  => $customer['billing_address']['country'],
        'send_email'    => $customer['billing_address']['email'],
        'reference' => $_GET['order_id']
        );
    }

    

    
    $domain = "https://connect.easyparcel.my/?ac=";

    $action = "EPSubmitOrderBulk";
    $postparam = array(
        'api'   => 'EP-fFhjYfd0c',
        'bulk'  => $v_items,
    );

    // echo "<pre>";
    // print_r($postparam);
    // echo "</pre>";

    $url = $domain.$action;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postparam));
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    ob_start(); 
	$return = curl_exec($ch);
	ob_end_clean();
	curl_close($ch);

    
    $json = json_decode($return,true);

    print_r($json);

    if($json['api_status']=='Success'){
        if($json['result'][0]['status']=='Success'){

        	echo 'done';

	}else{
        echo '
           <h3>Failed!</h3>
           <p>'.$json['result'][0]['remarks'].'</p>
                ';
        }
    }

}

?>