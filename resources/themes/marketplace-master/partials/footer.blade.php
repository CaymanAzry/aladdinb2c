
<footer class="footer-one">
    <div class="inner-footer" style="background-color: #086E38">
        <div class="container">
            <div class="footer-top col-lg-12 col-xs-10">
                <div class="row">
                    <div class="tiva-html col-lg-3 col-md-12 col-xs-12">
                        <div class="block">
                            <div class="block-content">
                                <p class="logo-footer">
                                    <a href="{{ url('/') }}">
                                        <img style="max-width: 200px" src="{{ asset('uploads/settings/logo.png') }}"
                                             alt="{{ \Settings::get('site_name', 'Aladin') }}">
                                    </a>
                                </p>
                            </div>
                            <div class="block-content">
                             <p class="text-center" style="color:white">A Social Commerce platform for Authentic &amp; Halal-focused lifestyle. By the year 2023, we will be in over 45 countries, with 45 domestic platforms – with 80% of the products from international market, 20% local products.</p>
                            
                            </div>
                        </div>
                     
                            <div class="block-content">
              <img class="img" src="{{asset('uploads/footer/china.png')}}">
              <img class="img" src="{{asset('uploads/footer/indonesia.png')}}">
               <img class="img" src="{{asset('uploads/footer/italy.png')}}">
                <img class="img" src="{{asset('uploads/footer/kazakhstan.png')}}">
                 <img class="img" src="{{asset('uploads/footer/laos.png')}}">
                  <img class="img" src="{{asset('uploads/footer/pakistan.png')}}">
                   <img class="img" src="{{asset('uploads/footer/malaysia.png')}}">
                    <img class="img" src="{{asset('uploads/footer/philippines.png')}}">
                     <img class="img" src="{{asset('uploads/footer/South-Korea.png')}}">
                      <img class="img" src="{{asset('uploads/footer/south_africa.png')}}">
                       <img class="img" src="{{asset('uploads/footer/taiwan.png')}}">
                        <img class="img" src="{{asset('uploads/footer/thailand.png')}}">
                         <img class="img" src="{{asset('uploads/footer/uk.png')}}">
                          <img class="img" src="{{asset('uploads/footer/united-arab-emirates.png')}}">
                            </div>
                      
                    </div>
                    <div class="tiva-html col-lg-3 col-md-6 text-center" style="margin-top: -5px;" >
                        
  <h1 style="font: poppins; font-size: 18px">Company</h1>
  <li><a style="color:white" class="text-center fot">Halal Policy</a></li>
  <li>
  <a style="color:white" class="text-center fot">Privacy Policy</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">Prohibited Items</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">Refund and Return Policy</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">IP Rights</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">Teams of Service</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">Help Center</a>
</li>
<h1 style="margin-top: 45px; margin-bottom: 20px; font-size: 18px; font: poppins">Business</h1>
 <li>
  <a style="color:white" class="text-center fot">Category</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">About Us</a>
</li>
 
 <li>
  <a style="color:white" class="text-center fot">Contact</a>
</li>
 <li>
  <a style="color:white" class="text-center fot">Order Tracking</a>
</li>

                    </div>

        
                    <div class="tiva-modules col-xs-12 col-lg-3 col-md-6 " style="margin-top: -5px;">
                      
  <h1 style="font: poppins; font-size: 18px;" class="text-center">Secure Payment</h1>
    
<img src="{{asset('uploads/footer/payment/fpx.png')}}" height="40" width="70">
<img src="{{asset('uploads/footer/payment/visa.png')}}" height="40" width="70">
<img src="{{asset('uploads/footer/payment/master.png')}}" height="40" width="70">

<img src="{{asset('uploads/footer/payment/cimd.png')}}" height="40" width="70">
<img src="{{asset('uploads/footer/payment/may.png')}}" height="40" width="70">
<img src="{{asset('uploads/footer/payment/bank.png')}}" height="40" width="70">


<img src="{{asset('uploads/footer/payment/boost.png')}}" height="40" width="70">
<img src="{{asset('uploads/footer/payment/grab.png')}}" height="40" width="70">
<img src="{{asset('uploads/footer/payment/tg.png')}}" height="40" width="70">


  
  <div class="row col2" style="margin-top: 60px;">
  <h1 style="font:poppins; font-size: 18px" class="text-center">Our Platform</h1>
  <div class="row">
<img src="{{asset('uploads/footer/delivery/pos.png')}}" height="40" width="100">
<img src="{{asset('uploads/footer/delivery/jt.png')}}" height="40" width="100">
<img src="{{asset('uploads/footer/delivery/aram.png')}}" height="40" width="100">

<img src="{{asset('uploads/footer/delivery/abx.png')}}" height="40" width="100">
<img src="{{asset('uploads/footer/delivery/sky.png')}}" height="40" width="100">
<img src="{{asset('uploads/footer/delivery/del.png')}}" height="40" width="100">


<img src="{{asset('uploads/footer/delivery/zto.png')}}" height="40" width="100">
<img src="{{asset('uploads/footer/delivery/fed.png')}}" height="40" width="100">
<img src="{{asset('uploads/footer/delivery/dhl.jpeg')}}" height="40" width="100">




           
            </div>
        </div>
    </div>               



                    <div class="tiva-modules col-lg-3 col-md-6">
                        <div class="block m-top">
                            <div class="block-content">
                                <div class="block-newsletter">
                                    {!! Form::open( ['url' => url('utilities/newsletter/subscribe'),'method'=>'POST', 'class'=>'ajax-form','id'=>'subscribe']) !!}
                                    <div class="input-group form-group">
                                        <input class="form-control enteremail" name="email" id="subscribe-email"
                                               placeholder="@lang('corals-marketplace-pro::labels.template.home.your_email')"
                                               spellcheck="false" type="text">
                                        <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary "
                                                            type="submit" id="subscribe-button">
                                                        Subscribe
                                                    </button>
                                                </span>
                                        <input type="hidden" name="list_id">

                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="block m-top1">
                            <div class="block-content">
                                <div class="social-content">
                                    <div class="title-block text-center" style="color:white">
                                        Follow us on
                                    </div>
                                    <div id="social-block">
                                        <div class="social">
                                            <ul class="list-inline mb-0 justify-content-end">
                                                @foreach(\Settings::get('social_links',[]) as $key=>$link)
                                                    <li class="list-inline-item mb-0">

                                                        <a class="social-button shape-circle sb-{{ $key }} sb-light-skin"
                                                           href="{{ $link }}"
                                                           target="_blank"><i class="fa fa-{{ $key }}"></i>
                                                        </a>

                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tiva-copyright" style="background-color:#086E38">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12 ">
                        <!-- <span>
                             {!! \Settings::get('footer_text','') !!}
                        </span> -->
                        <p style="color:white"> &copy;<?php echo date("Y"); ?> All rights reserved By Aladdin.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<style type="text/css">
    .img{
        height: 40px;
        width: 40px;
        margin-bottom: 5px;
    }
    h1{
        color:white;
    }

    .inner-footer{ padding-top: 50px}

    li{
    list-style-type:none;
    }

    #subscribe-button {
        background-color: #000000;
        color: white;
        font-size: 13px;
        padding: 0 15px;
    }

    @media (max-width: 767px) {
 
}

@media (max-width: 479px) {
  .inner-footer {
    width: 80%;
    margin-left: 10%;
    padding: 0px 10px 0px 20px;
  }
  .tiva-copyright{
    width: 80%;
    margin-left: 10%;
    padding: 0px 10px 0px 20px;
  }
}
    

</style>