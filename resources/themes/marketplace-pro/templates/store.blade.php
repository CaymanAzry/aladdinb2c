@extends('layouts.public')

@section('content')

    <div class="container" style="margin-top: 50px">
        <div class="content store">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-8">
                    <!-- <div class="image-section" style="position: relative"><img class="img-fluid"
                                                                               src="{{ $store->cover_photo }}">
                    </div> -->
                    <!-- 
                        <img style="height: 100px; width: 100px" id="store-logo" src="{{ $store->thumbnail }}">

                                <h1 class="mb-2">{{ $store->name }}</h1>
                                <p>{!!    $store->short_description !!}</p> -->
                    
                </div>
            </div>

            <div class="row">
                @include('partials.shop_filter',['store_page'=>true])
                <div class="col-sm-8 col-lg-9 col-md-8 product-container">
                    <div class="text-center">
                        @php \Actions::do_action('pre_display_shop') @endphp
                        <div class="store-banner">
                            {!!   \Shortcode::compile( 'zone','store-header' )  !!}
                        </div>
                    </div>
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-12 profile-header-section1  mt-2" style="margin-bottom: 20px;">
                                <div class="row">
                                <div class="col-md-3">
                               <img style="height: 140px; width: 140px" id="store-logo" src="{{ $store->thumbnail }}">
                           </div>
                           <div class="col-md-9">
                                <h1 class="mb-2">{{ $store->name }}</h1>
                                <p style="font-family: poppins; color: black ; font-size: 11px;"><i class="fa fa-shopping-cart"> </i> 0 Product sold  &nbsp | &nbsp<i class="fa fa-calendar"> </i> On Aladin1 from {{$store->created_at->diffForHumans() }}
                                    &nbsp | &nbsp Onwer {{$store->name}}</p>
                                    <p style="color:black; font-family: Poppins; font-size: 10px;">
                                        {{$store->countRating()}} ratings found yet!</p>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-5">
                                    <a style="border-radius: 20px; padding: 0p 5px 0px 5px; background-color: #145A32; color:white; font-family: Poppins" href="#" class="btn btn"><i class="fa fa-heart"></i> Follow</a>

                                    <a style="border-radius: 20px; padding: 0p 5px 0px 5px; background-color: #145A32; color:white; font-family: Poppins" href="#" class="btn btn">Send Message</a>
                                </div>
                                    <div class="col-md-3">
                                    @include('partials.components.social_share',['url'=> URL::current() , 'title'=>$store->name ])
                                 </div>
                             </div>
                                    </div>
                            </div>
                        </div>
                            </div>
                            <!-- <div class="col-md-2 ">
                                <a class="btn btn-outline-secondary btn-primary pull-right"
                                   data-toggle="tooltip"
                                   title="@lang('corals-marketplace-pro::labels.template.store.contact',['store_name'=>$store->name])"
                                   href="{{ url('messaging/discussions/create?user='.$store->user->hashed_id) }}"
                                   data-original-title="@lang('corals-marketplace-pro::labels.template.store.contact',['store_name'=>$store->name])"><i
                                            class="fa fa-envelope-o"></i>&nbsp; @lang('corals-marketplace-pro::labels.template.store.contact',['store_name'=>$store->name])
                                </a>
                            </div> -->
                        </div>
                    </div>


                    <div class="js-product-list-top firt nav-top">
                        <div class="d-flex justify-content-around row">
                            <div class="col col-xs-12">

                                <ul class="nav nav-tabs">
                                    <li>
                                        <a class="fa fa-th-large {{ $layout=='grid'?'active show ':'' }}"
                                           href="{{ request()->fullUrlWithQuery(['layout'=>'grid']) }}">
                                        </a>
                                    </li>
                                    <li>
                                        <a class="fa fa-list-ul {{ $layout=='list'?'active show ':'' }}"
                                           href="{{ request()->fullUrlWithQuery(['layout'=>'list']) }}">
                                        </a>
                                    </li>
                                </ul>
                                <div class="hidden-sm-down total-products">
                                    <p>
                                        <span>{{trans('corals-marketplace-pro::labels.template.shop.page',['current'=>$products->currentPage(),'total' => $products->lastPage()])}}</span>
                                    </p>
                                </div>
                            </div>
                            @isset($shopText)
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    {{ $shopText }}
                                </div>
                            </div>
                            @endisset
                            <div class="col col-xs-12">
                                <div class="d-flex sort-by-row justify-content-lg-end justify-content-md-end">

                                    <div class="products-sort-order dropdown">
                                        <select class="select-title" id="shop_sort">
                                            <option disabled="disabled"
                                                    selected>@lang('corals-marketplace-pro::labels.template.shop.select_option')</option>
                                            @foreach($sortOptions as $value => $text)
                                                <option value="{{ $value }}" {{ request()->get('sort') == $value?'selected':'' }}>
                                                    {{ $text }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content product-items">
                        <div id="grid"
                             class="related tab-pane fade in active show">
                            <div class="row">
                                @forelse($products as $product)
                                    @include('partials.product_'.$layout.'_item',compact('product'))
                                @empty
                                    <h5 class="text-center">@lang('corals-marketplace-pro::labels.template.shop.sorry_no_result')</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <!-- pagination -->
                    {{ $products->appends(request()->except('page'))->links('partials.paginator') }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="store-banner">
                        {!!   \Shortcode::compile( 'zone','store-footer' )  !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop
@section('js')
    @parent

    <script type="text/javascript">
        $(document).ready(function () {
            $("#shop_sort").change(function () {
                $("#filterSort").val($(this).val());

                $("#filterForm").submit();
            })
        });
    </script>
@endsection