<div class="row">
    <div class="col-md-10">
        
      <!--Payment methods source code corals/modules/marketplace/resource/view/checkout/payment-->

    <p>Select your payment (default:ipay88):

    <ul class="payment-select">
      <li>
        <input type="radio" id="a25" name="payment" value="ipay88" checked/>
        <label for="a25" class="btn">Ipay88</label>
      </li>
      <li>
        <input type="radio" id="a50" name="payment" value="hoolah"/>
        <label for="a50" class="btn">Hoolah</label>
      </li>
    </ul>

    </div>
</div>

<style>
    
    .payment-select {
      list-style-type: none;
      margin: 25px 0 0 0;
      padding: 0;
    }

    .payment-select li {
      float: left;
      margin: 0 5px 0 0;
      width: 100px;
      height: 40px;
      position: relative;
    }

    .payment-select label,
    .payment-select input {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .payment-select input[type="radio"] {
      opacity: 0.01;
      z-index: 100;
    }

    .payment-select input[type="radio"]:checked+label,
    .Checked+label {
      background: #086E38;
      color: white;
    }

    .payment-select label {
      padding: 5px;
      border: 1px solid #CCC;
      cursor: pointer;
      z-index: 90;
    }

    .payment-select label:hover {
      background: #DDD;
    }

    .payment-select .iCheck-helper {
        opacity: 1 !important;
    }

</style>

<script type="application/javascript">
    $(document).ready(function () {
        // $('input[name="select_gateway"]').on('change', function () {

        //     if ($(this).prop('checked')) {
        //         var gatewayName = $(this).val();
        //         var url = '{{ url('checkout/gateway-payment') }}' + "/" + gatewayName;
        //         $("#gatewayPayment").empty();
        //         $("#gatewayPayment").load(url);
        //     }
        // });


        // $('input[name="use_points"]').on('change', function () {
        //     if ($(this).prop('checked')) {
        //         $('#payment-section').hide();
        //     } else {
        //         $('#payment-section').show();
        //     }
        // });


    });
</script>
