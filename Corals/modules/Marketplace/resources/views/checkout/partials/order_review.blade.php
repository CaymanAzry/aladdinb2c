<div class="row">
    <div class="col-md-12">
        {!! Form::open( ['url' => '../../aladin_market_place/ipay88-master/request.php','method'=>'POST','class'=>'order-review']) !!}
        @foreach($orders as $order)
            <input type="hidden" name="order_ids[]" value="{{ $order->id  }}"/>

            <div class="card panel panel-default m-b-10">
                <div class="card-header panel-heading">
                    <label class="m-r-10"> @lang('Marketplace::attributes.order.order_number'):
                        <strong>{{ $order->order_number }}</strong></label>
                    <label class="m-r-10"> @lang('Marketplace::attributes.order.amount'):
                        <strong>{{ $order->present('amount') }}</strong></label>
                    <label class="m-r-10"> @lang('Marketplace::attributes.order.store'):
                        <strong>{!! $order->present('store')  !!} </strong> </label>
                </div>
                <div class="card-body panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table color-table info-table table table-hover table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th>@lang('Marketplace::attributes.order.amount')</th>
                                        <th>@lang('Marketplace::attributes.order.quantity')</th>
                                        <th>@lang('Marketplace::attributes.order.description')</th>
                                        <th>@lang('Marketplace::attributes.order.sku_code')</th>
                                        <th>@lang('Marketplace::attributes.order.type')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td>{{ \Payments::currency($item->amount, $order->currency) }}</td>
                                            <td>{{ $item->quantity??'-' }}</td>
                                            <td>{!!   $item->description??'-' !!}</td>
                                            <td>{{ $item->sku_code??'-' }}</td>
                                            <td>{{ $item->type }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        @endforeach
        <div class="table-responsive">
            <table class="table color-table info-table table table-hover table-striped table-condensed">
                <tbody>

                <tr>
                    <td class=""></td>
                    <td></td>
                    <td></td>
                    <td class="small-caps table-bg"
                        style="text-align: right">@lang('Marketplace::labels.checkout.sub_total')</td>
                    <td id="sub_total">{{ ShoppingCart::subTotalAllInstances() }}</td>
                </tr>
                <tr>
                    <td class=""></td>
                    <td></td>
                    <td></td>
                    <td class="small-caps table-bg"
                        style="text-align: right">@lang('Marketplace::labels.checkout.tax')</td>
                    <td id="tax_total">{{ \ShoppingCart::taxTotalAllInstances() }}</td>
                </tr>

                <tr>
                    <td class=""></td>
                    <td></td>
                    <td></td>
                    <td class="small-caps table-bg"
                        style="text-align: right">@lang('Marketplace::labels.checkout.discount')</td>
                    <td id="total_discount">{{ ShoppingCart::totalDiscountAllInstances() }}</td>
                </tr>

                <tr class="border-bottom">
                    <td class=""></td>
                    <td></td>
                    <td></td>
                    <td class="small-caps table-bg"
                        style="text-align: right">@lang('Marketplace::labels.checkout.total')</td>
                    <td id="total"><strong> {{ \ShoppingCart::totalAllInstances() }} </strong></td>
                </tr>
                </tbody>
            </table>
        </div>
        
        <input type="hidden" name="UserName" value="">
        <input type="hidden" name="UserEmail" value="">
        <input type="hidden" name="UserContact" value="">
        
        <input type="hidden" name="total" value="{{ $order->present('amount') }}">
        <input type="hidden" name="ref" value="{{ $order->order_number }}">
        
        {!! CoralsForm::formButtons(trans('Marketplace::labels.checkout.complete_order'), [], []) !!}
        {!! Form::close() !!}
        <script>
            $(document).ready(function () {
                
                var name = $('input[name="billing_address[first_name]"]').val()+' '+$('input[name="billing_address[last_name]"]').val();
                var email= $('input[name="billing_address[email]"]').val();
                var conta= $('input[name="billing_address[phone_number]"]').val();
                
                $('.order-review input[name="UserName"]').val(name);
                $('.order-review input[name="UserEmail"]').val(email);
                $('.order-review input[name="UserContact"]').val(conta);
                

                // $('form.order-review').submit(function(e){
                //     e.preventDefault();

                // });


            });
        </script>
    </div>
</div>