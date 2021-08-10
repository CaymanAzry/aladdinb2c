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


print_r($_POST);
echo '<hr>';
echo $_SESSION['test'];
echo '<hr>';

echo '<pre>';
print_r($_GET);
echo '</pre>';

$vendor = array();

$v_product = array();


foreach ( as $key => $value) {
  # code...
}

$v_sql = "SELECT marketplace_orders.shipping,marketplace_orders.billing,marketplace_stores.id AS vendor_id FROM `marketplace_orders` JOIN marketplace_stores ON marketplace_orders.store_id=marketplace_stores.id WHERE marketplace_orders.id=" . $_GET['order_id'];

$result = $conn->query($v_sql);

$customer = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        
        // echo '<pre>';
        // print_r($row);
        // echo '</pre><hr>';
        
        $customer = json_decode($row['billing'], true);
        
        //customer
        
        if ($row['shipping'] != '') {
            $customer = json_decode($row['shipping'], true);
        }
        
        //product
        
        $pro_sql = "SELECT `marketplace_products`.`name`,`marketplace_products`.`shipping` AS ship_detail, `marketplace_sku`.`code` AS sku, `marketplace_order_items`.`quantity` FROM `marketplace_order_items` JOIN `marketplace_sku` ON `marketplace_order_items`.`sku_code`=`marketplace_sku`.`code` JOIN `marketplace_products` ON `marketplace_sku`.`product_id`=`marketplace_products`.`id` WHERE `marketplace_order_items`.`order_id`=" . (int) $_GET['order_id'];
        
        $pro_result = $conn->query($pro_sql);
        
        if ($pro_result->num_rows > 0) {
            
            $prono = 0;
            
            while ($pro_row = $pro_result->fetch_assoc()) {
                
                $ship_detail = json_decode($pro_row['ship_detail'], 1);
                
                $v_product[$prono]['name'] = $pro_row['name'];
                
                $v_product[$prono]['quantity'] = $pro_row['quantity'];
                
                $v_product[$prono]['weight'] = 1;
                
                if ($ship_detail['weight'] != '') {
                    $v_product[$prono]['weight'] = $ship_detail['weight'] * $v_product[$prono]['quantity'];
                }
                
                if ($ship_detail['width'] != '' && $ship_detail['length'] != '' && $ship_detail['height'] != '') {
                    
                    $v_product[$prono]['width']  = $ship_detail['width'] * $v_product[$prono]['quantity'];
                    $v_product[$prono]['length'] = $ship_detail['length'] * $v_product[$prono]['quantity'];
                    $v_product[$prono]['height'] = $ship_detail['height'] * $v_product[$prono]['quantity'];
                    
                }
                
            }
            
        }
        
        
        //vendor
        
        $vd_sql = "SELECT `model_settings`.`code`,`model_settings`.`value` FROM `model_settings` JOIN `marketplace_stores` ON `marketplace_stores`.`user_id`=`model_settings`.`created_by` WHERE `marketplace_stores`.`id`=" . $row['vendor_id'];
        
        $vd_result = $conn->query($vd_sql);
        
        if ($vd_result->num_rows > 0) {
            
            while ($vd_row = $vd_result->fetch_assoc()) {
                $vendor[$vd_row['code']] = $vd_row['value'];
            }
            
        }
        
        
    }
}


echo '<pre>';
print_r($customer);
echo '</pre><hr>';   
echo '<pre>';
print_r($v_product);
echo '</pre><hr>'; 
echo '<pre>';
print_r($vendor);
echo '</pre><hr>';

$domain = "https://demo-merchant-service.demo-hoolah.co/merchant";

$action    = "/auth/login";
$postparam = array(
    "username" => "68412a2a-5e6e-47cb-8682-c0dcfda77e55",
    "password" => "TK_89993FBB2B18B3B14A"
);

$json_param = json_encode($postparam);

//print_r($postparam);

$url = $domain . $action;
$ch  = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_param);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

ob_start();
$return = curl_exec($ch);
ob_end_clean();
//echo curl_errno($ch);
//echo curl_error($ch);
curl_close($ch);

$login = json_decode($return, true);

echo $return;


echo "<hr>";


//initiate order

$action    = "/order/initiate";
$postparam = array(
    'consumerTitle' => 'Mr',
    'consumerFirstName' => 'Bob',
    'consumerLastName' => 'Mann',
    'consumerEmail' => 'soundcayman@gmail.com',
    'consumerPhoneNumber' => '+6588889999',
    'shippingAddress' => array(
        'line1' => 'No.23, Jalan Mawar 1A, Taman Mawar',
        'line2' => '',
        'line3' => '',
        'postcode' => '43900',
        'city' => 'Sepang',
        'state' => 'Selangor',
        'suburb' => 'Bandar Baru Salak Tinggi',
        'countryCode' => 'MY'
    ),
    'billingAddress' => array(
        'line1' => 'No.23, Jalan Mawar 1A, Taman Mawar',
        'line2' => '',
        'line3' => '',
        'postcode' => '43900',
        'city' => 'Sepang',
        'state' => 'Selangor',
        'suburb' => 'Bandar Baru Salak Tinggi',
        'countryCode' => 'MY'
    ),
    'items' => array(
        0 => array(
            'name' => 'radioactive man comic book',
            'quantity' => 1,
            'price' => 116.51,
            'sku' => '93847598347',
            'description' => 'radioactive man comic book',
            'detailedDescription' => 'Radioactive Man is a mashup/trashup of just about every superhero comic. Layabout playboy Claude Kane III (whose front gate has a large K on it) becomes Radioactive Man when exposed to the blast from his father\'s new atomic weapon. With his super powers, he begins a never-ending battle against evil and Communism -- the latter represented by Dr Crab (who later mutates into Prawn)',
            'originalPrice' => 119.99,
            'taxAmount' => 7.63,
            'images' => array(
                0 => array(
                    'imageLocation' => 'https://homepages.cae.wisc.edu/~ece533/images/serrano.png'
                )
            ),
            'merchantItemId' => 'B000TGJC68',
            'warranty' => 0,
            'discount' => 11.11
        )
    ),
    'totalAmount' => 118.26,
    'originalAmount' => 119.99,
    'taxAmount' => 7.63,
    'cartId' => 'checkout-2020-726678303-7777',
    'orderType' => 'ONLINE',
    'shippingAmount' => 1.75,
    'shippingMethod' => 'NORMAL',
    'discount' => 11.11,
    'voucherCode' => '1111SALE',
    'currency' => 'SGD',
    'returnToShopUrl' => 'https://merchant.com/order/193123123',
    'closeUrl' => 'https://merchant.com/order/193123123'
);

$json_param = json_encode($postparam);

echo 'header array:';

echo '<pre>';

print_r(array(
    'Content-Type: application/json',
    'Authorization: ' . $login['token'] . ''
));

echo '</pre>';

$url = $domain . $action;
$ch  = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $login['token'],
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_param);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

ob_start();
$return = curl_exec($ch);
ob_end_clean();
//echo curl_errno($ch);
//echo curl_error($ch);
curl_close($ch);

$order = json_decode($return, true);

echo $return;

echo '<pre>';
print_r($order);
echo '</pre>';

// if($order['orderId']&&$order['orderUuid']){
//     echo "

//     <script>

//       alert('You will redirect to hoolah.');

//       window.location.href = 'https://demo-js.demo-hoolah.co/?ORDER_CONTEXT_TOKEN=".$order['orderContextToken']."&platform=bespoke&version=1.0.1';

//     </script>


//     ";
// }else{
//     echo "

//     <script>

//       alert('Your order unsuccessful placed.');

//       window.location.href = '/aladdin_staging/public/';

//     </script>


//     ";
// }

echo '<hr>';

// get payment

$action = "/order/" . $order['orderUuid'];

$url = $domain . $action;
$ch  = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $login['token'],
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

ob_start();
$return = curl_exec($ch);
ob_end_clean();
//echo curl_errno($ch);
//echo curl_error($ch);
curl_close($ch);

$json = json_decode($return, true);

echo $return;


?>