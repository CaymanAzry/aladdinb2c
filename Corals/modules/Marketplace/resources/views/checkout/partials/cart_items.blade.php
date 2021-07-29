{!! Form::open( ['url' => url($urlPrefix.'checkout/step/cart-details'),'method'=>'POST', 'class'=>'ajax-form','id'=>'checkoutForm']) !!}

<div class="row">
    <div class="col-md-12 shopping-cart">
        <div class="table-responsive">
            
<div class="row">
    <div class="col-md-12">
        <h4 style="color:black; font-family: poppins">
            @lang('Marketplace::labels.cart.have_coupon')
        </h4>
    </div>
</div>

<div class="row">
    <div  class="col-md-4">
        {!! CoralsForm::text('coupon_code','',false,$coupon_code,['placeholder'=>trans('Marketplace::attributes.coupon.coupon_code')]) !!}
    </div>
</div>
            <table class="table color-table info-table table table-condensed">
                <thead>
                <tr style="color:black; font-family: poppins">
                    <th class="table-image"></th>
                    <th>@lang('Marketplace::labels.cart.product')</th>
                    <th>@lang('Marketplace::labels.cart.quantity')</th>
                    <th>@lang('Marketplace::labels.cart.price')</th>
                </tr>
                </thead>
                <tbody>
                @foreach (ShoppingCart::getAllInstanceItems() as $item)
                    <tr style="color:black; font-family: poppins" id="item-{{$item->getHash()}}" class="product-item m-t-0">
                        <td class="table-image">
                            <a href="{{ url('shop', [$item->id->product->slug]) }}" target="_blank">
                                <img src="{{ $item->id->image }}" alt="SKU Image"
                                     class="img-rounded img-responsive" width="100"></a>
                        </td>
                        <td>
                            <h4  class="product-title">
                                <a style="color:black" target="_blank"
                                   href="{{url('shop', [$item->id->product->slug])}}">{{ $item->id->product->name }}
                                    [{{ $item->id->code }}]</a>
                            </h4>
                            {!! $item->id->present('options')  !!}

                            {!! \Actions::do_action('post_cart_item_details', $item) !!}
                        </td>
                        <td><b>{{ $item->qty }}</b></td>
                        <td id="item-total-{{$item->getHash()}}">{{ \Payments::currency($item->qty * $item->price) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td class="table-image"></td>
                    <td></td>
                    <td  class="small-caps table-bg"
                        style="text-align: right; color:black; font-family: poppins">@lang('Marketplace::labels.cart.sub_total')</td>
                    <td id="sub_total" style="color:black; font-family: poppins">{{ ShoppingCart::subTotalAllInstances() }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



{!! Form::close() !!}