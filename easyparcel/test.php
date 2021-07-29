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

$_POST['product']="3,1,";

$_POST['qty']="2,1,";

$_POST['czip']='43900';
$_POST['cstate']='Selangor';
$_POST['ccountry']='MY';

if(isset($_POST)){
    
    $product=array_filter(explode(',',$_POST['product']));
    $qty=array_filter(explode(',',$_POST['qty']));
    
    //print_r($product);
    
    $vendor=array();
    
    $v_product=array();
    
    foreach($product as $num => $value){
        
        $v_sql="SELECT `created_by` FROM `marketplace_products` WHERE `id`=".$value;
        
        $result = $conn->query($v_sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $vendor[]=$row['created_by'];
              
              $v_product['vend_'.$row['created_by']][$value]=$qty[$num];
          }
        }
        
    }
    
    $vendor=array_unique($vendor);
    
    foreach($v_product as $vend_id => $product_data){
        
        //echo $vend_id.'<br>';
        
        $items_v_no=0;
        
        $v_items=array();

        $store_name='';

        $vid=array_filter(explode('vend_',$vend_id));

        $v_address=array();
            
            
        $v_sql="SELECT * FROM `marketplace_stores` WHERE `user_id`=".$vid[1];

        //echo $v_sql;
        
        $result = $conn->query($v_sql);
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
                  
              $store_name=$row['name'];
          }
        }


        $address_sql="SELECT * FROM `model_settings` WHERE `created_by`=".$vid[1];

        //echo $address_sql;
        
        $result = $conn->query($address_sql);
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {

            if($row['code']=='marketplace_company_zip'){
                $v_address['billing']['zip']=$row['value'];
            }else if($row['code']=='marketplace_company_state'){
                $v_address['billing']['state']=$row['value'];
            }else if($row['code']=='marketplace_company_country'){
                $v_address['billing']['country']=$row['value'];
            }
                                
          }
        }

        //print_r($v_address);
        
        foreach($product_data as $pro_id => $pro_qty){
            
            $weight=1;
            $width=1;
            $length=1;
            $height=1;
                    
            
            $v_items[$items_v_no]['weight']+=$weight*$pro_qty;
            $v_items[$items_v_no]['width']+=$width*$pro_qty;
            $v_items[$items_v_no]['length']+=$length*$pro_qty;
            $v_items[$items_v_no]['height']+=$height*$pro_qty;
            
            //$items_v_no++;
            
        }

        
        $v_items[$items_v_no]['pick_code']=$v_address['billing']['zip'];
        $v_items[$items_v_no]['pick_state']=$v_address['billing']['state'];
        $v_items[$items_v_no]['pick_country']=$v_address['billing']['country'];
        $v_items[$items_v_no]['send_code']=$_POST['czip'];
        $v_items[$items_v_no]['send_state']=$_POST['cstate'];
        $v_items[$items_v_no]['send_country']=$_POST['ccountry'];
        
        $domain = "https://connect.easyparcel.my/?ac=";

        $action = "EPRateCheckingBulk";
        $postparam = array(
        'api'   => 'EP-fFhjYfd0c',
        'bulk'  => $v_items,
            'exclude_fields'    => array(
                'rates.*.pickup_point',
            )
        );
        
        
        echo '<pre>';
         print_r($postparam);
        echo '</pre>';
        
        $url = $domain.$action;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postparam));
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

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
       
        // echo '<pre>';
        //  print_r($json);
        // echo '</pre>';
        
        $results=$json['result'];
        
        
        echo '

        <h4 style="color:black; font-family: poppins">Easy Parcel</h4>

        <select name="shipping[vend-'.$vend_id.']" class="vend-'.$vend_id.'" vendor-drop">';
        
        foreach ($results as $result => $result_data) {
            for ($rno=0; $rno < count($result_data['rates']); $rno++) {

                if(count($result_data['rates'][$rno]['dropoff_point'])>0){
                    
                    echo '
                    
                    <option value="'.$result_data['rates'][$rno]['price'].'">'.$result_data['rates'][$rno]['service_name'].' - RM '.$result_data['rates'][$rno]['price'].'</option>
                    
                    ';
                    
                    //echo 'Service Name : '.$result_data['rates'][$rno]['service_name'].'<br>Service ID:'.$result_data['rates'][$rno]['service_id'].'<hr>';
                    
                }
            }
        }
        
        echo '</select><br>';
        
        
    }
    
    //print_r($v_product);
    
}else{
    echo 'no data';
}

?>