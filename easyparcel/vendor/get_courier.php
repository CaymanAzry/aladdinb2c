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

    
    //fetch courier


    $items_v_no=0;
        
    $v_items=array(); 

    foreach ($v_product as $key => $data) {
        $v_items[$items_v_no]['weight']=$data['weight'];

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


    


    $v_items[$items_v_no]['pick_code']=$vendor['marketplace_company_zip'];
    $v_items[$items_v_no]['pick_state']=$vendor['marketplace_company_state'];
    $v_items[$items_v_no]['pick_country']=$vendor['marketplace_company_country'];
    $v_items[$items_v_no]['send_code']=$customer['billing_address']['zip'];
    $v_items[$items_v_no]['send_state']=$customer['billing_address']['state'];
    $v_items[$items_v_no]['send_country']=$customer['billing_address']['country'];

    if($vendor['marketplace_company_zip']==''){
        
        echo 'You are not fill your address yet!';

        return;

    }
    // $v_items[$items_v_no]['pick_code']="";
    // $v_items[$items_v_no]['pick_state']="";
    // $v_items[$items_v_no]['pick_country']="";
    // $v_items[$items_v_no]['send_code']=$customer['billing_address']['zip'];
    // $v_items[$items_v_no]['send_state']=$customer['billing_address']['state'];
    // $v_items[$items_v_no]['send_country']=$customer['billing_address']['country'];



    // echo '<pre>';
    // print_r($v_items);
    // echo '</pre><hr>';

    $domain = "https://connect.easyparcel.my/?ac=";

    $action = "EPRateCheckingBulk";
    $postparam = array(
    'api'   => 'EP-fFhjYfd0c',
    'bulk'  => $v_items,
        'exclude_fields'    => array(
            'rates.*.pickup_point',
        )
    );
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

    <form action="/aladdin_staging/easyparcel/vendor/awp_process.php" method="get" class="get_awb">

    <p>Courier:</p><select name="courier" class="form-control">';
    
    echo '
            <option value="0">-- Select Courier --</option>
            ';

    foreach ($results as $result => $result_data) {
        for ($rno=0; $rno < count($result_data['rates']); $rno++) {
    
        if(count($result_data['rates'][$rno]['dropoff_point'])>0){


                        
            // echo '
                        
            //     <tr>
                        
            //         <td style="padding:10px"><img src="'.$result_data['rates'][$rno]['courier_logo'].'" width="80px"></td><td style="padding:10px">'.$result_data['rates'][$rno]['service_name'].'</td>
                        
            //     </tr>
            // ';

            echo '
            <option value="'.$result_data['rates'][$rno]['service_id'].'">'.$result_data['rates'][$rno]['service_name'].'</option>
            ';

           //echo 'Service Name : '.$result_data['rates'][$rno]['service_name'].'<br>Service ID:'.$result_data['rates'][$rno]['service_id'].'<hr>';
                        
            }
        }
    }
            
    echo '</select>';

    foreach ($results as $result => $result_data) {
        for ($rno=0; $rno < count($result_data['rates']); $rno++) {
    
        if(count($result_data['rates'][$rno]['dropoff_point'])>0){

            echo'

            <div id="'.$result_data['rates'][$rno]['service_id'].'" class="courier-detail" style="border:1px solid black; width:100%; margin: 30px 0; padding: 30px; display:none">

                <img src="'.$result_data['rates'][$rno]['courier_logo'].'" width="200px">
                <p>Service    : '.$result_data['rates'][$rno]['service_name'].'</p>
                <p>Courier    : '.$result_data['rates'][$rno]['courier_name'].'</p>
                <p>Price      : RM '.$result_data['rates'][$rno]['price'].'</p>
                <p>Delivery   : '.$result_data['rates'][$rno]['delivery'].'</p>
                <p>Start Date : '.$result_data['rates'][$rno]['scheduled_start_date'].'</p>
                <form method="post">

                ';

                echo '<input type="hidden" name="action" value="make_order_ep">';

                echo '<input type="hidden" name="order_id" value="'.$order_id.'">';

                echo '<input type="hidden" name="service_id" value="'.$result_data['rates'][$rno]['service_id'].'">';

                


                $coname=explode(' ', $result_data['rates'][$rno]['service_name']);

                if($coname['0']=='Pgeon'){

                    echo '

                        Service Method :
                        <input type="radio" name="service_method" class="pg-service form-control" row="'.$rno.'" value="dropoff">Point to Door

                        <input type="radio" name="service_method" class="pg-service form-control" row="'.$rno.'" value="pgeon">Point to Point
                    ';


                    echo '

                                            <div class="ptd-section ptd-'.$rno.'" style="display:none;">

                                              <p>Point to Door : </p>
                                            
                                              <select name="dropoff_point">
                                              <option>Select Point</option>
                                              ';

                                              foreach ($result_data['rates'][$rno]['dropoff_point'] as $no_do => $do_data) {
                                                  echo '<option value="'.$do_data['point_id'].'">'.$do_data['point_name'].'</option>';
                                              }



                                              echo '</select>

                                              <input type="date" name="collect-date"><br><br>
                                              <input type="submit">

                                            </div>

                                            ';


                                            echo '

                                            <div class="ptp-section ptp-'.$rno.'" style="display:none;">

                                              <p>Point to Point : </p>
                                            
                                              <select name="pgeon-sender">
                                                  <option>--Select Sender Point--</option>

                                                  ';

                                              for ($pgno=0; $pgno < count($result_data['pgeon_point']['Sender_point']); $pgno++) {

                                                echo '<option value="'.$result_data['pgeon_point']['Sender_point'][$pgno]['point_id'].'">'.$result_data['pgeon_point']['Sender_point'][$pgno]['company'].' - '.$result_data['pgeon_point']['Sender_point'][$pgno]['point_name'].'</option>';

                                              }

                                            echo '
                                                  </select>
                                                  <br>
                                                  <select name="pgeon-receiver">
                                                    <option>--Select Receiver Point--</option>
                                                    ';

                                              for ($pgno=0; $pgno < count($result_data['pgeon_point']['Sender_point']); $pgno++) {

                                                echo '<option value="'.$result_data['pgeon_point']['Receiver_point'][$pgno]['point_id'].'">'.$result_data['pgeon_point']['Receiver_point'][$pgno]['company'].' - '.$result_data['pgeon_point']['Receiver_point'][$pgno]['point_name'].'</option>';

                                              }

                                            echo '
                                                  </select>

                                                  <br>



                                                  <input type="date" name="collect-date"><br><br>
                                                  <button type="button" class="make_order" id="'.$result_data['rates'][$rno]['service_id'].'">Submit</button>

                                            </div>

                                            ';

                }else{

                    echo '

                        <input type="hidden" name="service_method" value="dropoff">

                        <input type="date" name="collect-date"><br><br>
                        <button type="button" class="make_order" id="'.$result_data['rates'][$rno]['service_id'].'">Submit</button>


                    ';

                }

                echo '

                </form>

            </div>

            ';

                        
            // echo '
                        
            //     <tr>
                        
            //         <td style="padding:10px"><img src="'.$result_data['rates'][$rno]['courier_logo'].'" width="80px"></td><td style="padding:10px">'.$result_data['rates'][$rno]['service_name'].'</td>
                        
            //     </tr>
            // ';

            // echo '<pre>';
            //  print_r($result_data['rates'][$rno]);
            // echo '</pre><hr>';
                        
           //echo 'Service Name : '.$result_data['rates'][$rno]['service_name'].'<br>Service ID:'.$result_data['rates'][$rno]['service_id'].'<hr>';
                        
            }
        }
    }


}

?>