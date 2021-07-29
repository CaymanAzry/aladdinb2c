<div class="row">
    <div class="col-md-10">
        
      <!--Payment methods source code corals/modules/marketplace/resource/view/checkout/payment-->

    <a href="" class="btn btn-success text-center" style="width: 200px;">Ipay88</a>

    </div>
</div>

<script type="application/javascript">
    $(document).ready(function () {
        $('input[name="select_gateway"]').on('change', function () {

            if ($(this).prop('checked')) {
                var gatewayName = $(this).val();
                var url = '{{ url('checkout/gateway-payment') }}' + "/" + gatewayName;
                $("#gatewayPayment").empty();
                $("#gatewayPayment").load(url);
            }
        });


        $('input[name="use_points"]').on('change', function () {
            if ($(this).prop('checked')) {
                $('#payment-section').hide();
            } else {
                $('#payment-section').show();
            }
        });


    });
</script>
