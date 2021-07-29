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

$_POST['product']="1,3,4,7,";

$_POST['qty']="1,1,2,1,";

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
    
    print_r($v_product);
    
}else{
	echo 'no data';
}

?>