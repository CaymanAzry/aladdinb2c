<?php

require_once 'IPay88.class.php';

$ipay88 = new IPay88('M04204');

$ipay88->setMerchantKey('JXqVd2QZu7');

$ipay88->setField('PaymentId', 2);
$ipay88->setField('RefNo', 'IPAY0000000001');
$ipay88->setField('Amount', '1.00');
$ipay88->setField('Currency', 'myr');
$ipay88->setField('ProdDesc', 'Testing');
$ipay88->setField('UserName', 'Your name');
$ipay88->setField('UserEmail', 'email@example.com');
$ipay88->setField('UserContact', '0123456789'); 
$ipay88->setField('Lang', 'utf-8');
$ipay88->setField('ResponseURL', 'http://localhost/aladin_market_place/ipay88-master/response');

$ipay88->generateSignature();

$ipay88_fields = $ipay88->getFields();

//echo $ipay88->requery(array('MerchantCode' => /*YOUR_MERCHANT_CODE*/, 'RefNo' => 'IPAY0000000001', 'Amount' => '1.00'));

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>iPay88 - Test - Request</title>
</head>

<body>

  <?php if (!empty($ipay88_fields)): ?>
    <p>redirect to ipay88</p>
    <form action="<?php echo Ipay88::$epayment_url; ?>" method="post">
        <?php foreach ($ipay88_fields as $key => $val): ?>
          <input type="hidden" name="<?php echo $key; ?>" value="<?php echo $val; ?>" placeholder="<?php echo $key; ?>"/>
        <?php endforeach; ?>
        
    </form>
    <script>
      jQuery(document).ready(function($){
        $('form').submit();
      });
    </script>
  <?php endif; ?>
</body>

</html>