            
            <!DOCTYPE html>
            <html>
            <head>
            <title>Home page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            </head>
            <body>
            <!--Top header-->
            
            <div class="row" style="height: auto; padding: 0px 0px 0px 0px; background-color:#0A2A12; color:white">
            <div class="container clearfix">
            <ul class="nav pull-left"><li><a class="top" style="color:white; font: normal normal normal;" href="{{url('landing-page')}}"><i class="fas fa-globe-asia"></i> Malaysia |</a></li>
            <li id="menu-item-121763" class="top-bar-text menu-item "><a class="top" style="color:white"  href="#">MYR |</a></li>
            <li  class="top-bar-text menu-item"><a class="top" style="color:white"  href="#">English</a></li>
            </ul><ul id="menu-top-bar-right" class="nav nav-inline pull-right"><li class="top-bar-text menu-item "><a class="top" style="color:white"  href="https://aladdin1.my/track-your-order/"><i class="fas fa-truck"></i>Track Your Order |</a></li>
            <li  class="vendor top-bar-text"><a class="top" style="color:white"  href="{{url('dashboard')}}/"><i class="far fa-user-circle"></i> 
            @auth
            <span>{{ auth()->user()->name }}</span>
            @else
            <span>@lang('corals-marketplace-pro::labels.auth.login')</span>
            @endauth
            
            </a></li>
            </ul>            </div>
            </div>
            
            
            <!-- header desktop -->
            <div class="header-top d-xs-none " style="height: 140px; ">
            <div class="container" >
            
            <div class="col-lg-12">
            
            <div class="row" >
            
            
            
            
            
            
            
            <!-- logo -->
            
            <div class="col-sm-1 col-md-1 col-lg-1 d-flex align-items-center" style="margin-left: -100px;">
            <div>
            <a href="#"><img src="{{asset('uploads/header/logoo.png')}}" style="height: 50px; width: 50px; border-radius: 50px; margin-right: 20px; top: 15px;
            left: 25px;
            width: 73px;
            height: 73px;"></a>
            </div>
            
            </div>
            
            
            <div class="col-sm-5 col-md-5 col-lg-5" style="margin-top: 20px;">
            <form method="get" action="{{ url('shop') }}">
            <div class="input-group mb-3">
            <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9">
            <input type="text" name="search" class="form-control" placeholder="Trending Products" aria-label="Trending Products" aria-describedby="basic-addon2" style="margin-right: -40px; border-top-left-radius: 20px; border-bottom-left-radius:20px; height: 40px; ">
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="input-group-append">
            <button class="btn btn-outline" type="submit" style="border-top-right-radius: 20px; border-bottom-right-radius:20px; margin-left: -40px; background-color:#1D6700;  width: 100px; color:white; height: 40px; font: normal normal normal;">search</button>
            </div>
            </div>
            </div>
            </div>
            </form>
            
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7" style="margin-top: 22px;">
            
            @if($brands->count() < 4)
            @foreach($brands as $brand)
            <button class="btn btn btn1" type="button">{{$brand->name}}</button>
            
            @endforeach
            @endif
            
            
            <div style="height: 35px; border-radius: 20px; font-size: 13px; padding-top: 7px; border: solid 1px #ECF0F1" class="myaccount-title btn btn btn2">
            <a style="float:right; color:black" href="cart" style="padding-top: 8px;">
            <div class="header-cart tiva-toggle-btn">
            
            <i style="font-size: 15px; color:black" class="fa fa-shopping-bag" aria-hidden="true"></i>
            RM<span class="cart-products-count"
            id="cart-header-count">{{ \ShoppingCart::countAllInstances() }}.00</span>
            
            </div>
            
            
            </a>
            @auth
            <a style="float:left; color:white; padding-left: 10px"  href="#acount" data-toggle="collapse" class="acount">
            <i  style="font-size: 15px; color:black" class="fa fa-user" aria-hidden="true"></i>
            <!--<span>{{ auth()->user()->name }}</span>-->
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            @else
            <a style="float:left; color:black; padding-left: 10px" href="#acount" data-toggle="collapse" class="acount">
            <i style="font-size: 15px; color:black" class="fa fa-user" aria-hidden="true"></i>
            <!--<span>@lang('corals-marketplace-pro::labels.auth.login')</span>-->
            <!--<i class="fa fa-angle-down" aria-hidden="true"></i>-->
            </a>
            @endauth
            
            </div>
            
            <div id="acount" class="collapse">
            <div class="account-list-content">
            @auth
            <div>
            <a class="login" href="{{ url('dashboard') }}" rel="nofollow"
            title="Log in to your customer account">
            <i class="fa fa-cog"></i>
            <span>@lang('corals-marketplace-pro::labels.partial.dashboard')</span>
            </a>
            </div>
            <div>
            <a class="login" href="{{ url('profile') }}" rel="nofollow"
            title="Log in to your customer account">
            <i class="fa fa-sign-in"></i>
            <span>@lang('corals-marketplace-pro::labels.partial.my_profile')</span>
            </a>
            </div>
            <div>
            <a class="register" href="{{ route('logout') }}" data-action="logout"
            rel="nofollow"
            title="Register Account">
            <i class="fa fa-user"></i>
            <span>@lang('corals-marketplace-pro::labels.partial.logout')</span>
            </a>
            </div>
            <div id="desktop_currency_selector"
            class="currency-selector groups-selector hidden-sm-down">
            <ul class="list-inline-2">
            @php \Actions::do_action('post_display_frontend_menu') @endphp
            </ul>
            </div>
            
            @else
            <div>
            <a class="check-out" href="{{ route('login') }}" rel="nofollow"
            title="Checkout">
            <i class="fa fa-check" aria-hidden="true"></i>
            <span> @lang('corals-marketplace-pro::labels.partial.login')</span>
            </a>
            </div>
            <div>
            <a href="{{ route('register') }}" title="My Wishlists">
            <i class="fa fa-heart"></i>
            <span> @lang('corals-marketplace-pro::labels.partial.register')</span>
            </a>
            </div>
            @endauth
            </div>
            </div>
            
            </div>
            
            
            
            
            </div>
            </div>
            <div class="row">
            <div class="col-sm-11 col-md-11 col-lg-11">
            
            <nav class="navbar navbar-expand-lg navbar-light " style="margin-right: -100px; height: 25px; border-radius: 50px; background: #086E38">
            
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" height="30;">
            @if(\Shop::getActiveCategories()->count() <= 5)
            @foreach(\Shop::getActiveCategories() as $category)
            
            <a href="{{ url('shop?category='.$category->slug) }}" style="color:white; font: normal normal  15px/18px CircularXX; text-decoration: none; margin-top: 7px;" class="nav-link"><li class="nav-item nav-itemd dropdown">{{$category->name}}
            <svg height="20" width="20" style="margin-bottom: -0px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">-->
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
            </li>
            
            </a>
            
            @endforeach
            @endif
            
            
           <!--  
            <li class="nav-item dropdown">
            <a style="color:white; font: normal normal  15px/18px CircularXX; text-decoration: none;" class="nav-link" href="shop" >
            Brands
            </a>
            </li> -->
            <li class="nav-item dropdown">
            <a style="color:white; font: normal normal  15px/18px poppins ; text-decoration: none;" class="nav-link" href="newarrivel" >
            New Arrivals
            </a>
            </li>
            <!--<li class="nav-item">-->
            <!--<a style="color:white; font: normal normal  15px/18px CircularXX; text-decoration: none;" class="nav-link" href="#" >-->
            <!--Group Buy-->
            <!--</a>-->
            <!--</li>-->
            <!-- <li class="nav-item">
            <a style="color:white;font: normal normal  15px/18px CircularXX;  text-decoration: none;" class="nav-link" href="live" >
            Live
            </a>
            </li> -->
            
            
            </ul>
            
            </div>
            </nav>
            
            </div>
            </div>
            
           
           </div>
           
           <div class="container">
            
            
            <div class="row">
                <h2 class="text-center" style="font-weight:bold; margin-bottom: 50px">New Arrivel</h2>
               
               @foreach($products as $product)
               
                 <div class="col-lg-3 col3">
                     <a href="{{ url('shop', $product->name) }}" style="color:black; text-decoration:none">
                     <div class="na-image"><img src="{{ $product->non_featured_image }}"><br></div>
                     <small style="font-size: 12px; color:grey; margin-left: 30px">{{$product->slug}}</small><br>
                     <strong style="margin-left: 30px;">{{$product->name}}</strong><br>
                    <strong style="margin-left: 30px; border-bottom: 1px solid #D7DBDD; padding-bottom: 20px ">{{$product->price}} 
                    <a style="margin-left: 100px; text-decoration:none" href="{{ url('shop', $product->slug) }}">
                        <i style="color:#145A32; border:solid 2px #D7DBDD; border-radius: 50px; height: 30px; width: 30px; padding: 5px" class="fa fa-shopping-cart"></i></a></strong>
                      <br><br> <a style="color:grey; margin-left: 50px; text-decoration:none" href=""><i class="fa fa-heart"></i>&nbsp&nbsp Add to wishlist</a>
                
                </a> </div>
                 @endforeach
                 
               
                
                </div>
                </div>
            
          
            
           
            
            
            
             <!-- Footer -->
      <div class="row footer" style="padding-left: 50px; margin-right: -20px">
         <div class="col-xs-12 col-lg-3 text-center">
            <img style="color:green" src="{{asset('uploads/settings/logo1.png')}}" height="40">
            <p style="font-size: 18px;">A Social Commerce platform for Authentic &amp; Halal-focused lifestyle. By the year 2023, we will be in over 45 countries, with 45 domestic platforms – with 80% of the products from international market, 20% local products.</p>
            <br><br>
            <div class="row flag">
               <h1 style="font-family: bold;  margin-top: 45px;">Our Platform</h1>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/malaysia.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/china.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/italy.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/pakistan.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/Taiwan.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               </br>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/laos.png')}}" height="40" width="40" style="border-radius: 50px; ">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/uk.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/united-arab-emirates.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/south_africa.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/Kazakhstan.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <br>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/South-Korea.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
               <div class="col-xs-2 col-lg-2">
                  <img style="color:green" src="{{asset('uploads/footer/philippines.png')}}" height="40" width="40" style="border-radius: 50px;">
               </div>
            </div>
         </div>
         <div class="col-lg-2 text-center">
            <h1 style="font-family: bold;">Company</h1>
            <li><a class="text-center fot" >Halal Policy</a></li>
            <li>
               <a class="text-center fot">Privacy Policy</a>
            </li>
            <li>
               <a class="text-center fot">Prohibited Items</a>
            </li>
            <li>
               <a class="text-center fot">Refund and Return Policy</a>
            </li>
            <li>
               <a class="text-center fot">IP Rights</a>
            </li>
            <li>
               <a class="text-center fot">Teams of Service</a>
            </li>
            <li>
               <a class="text-center fot">Help Center</a>
            </li>
            <h1 style="margin-top: 60px; margin-bottom: 20px">Business</h1>
            <li>
               <a class="text-center fot">Category</a>
            </li>
            <li>
               <a class="text-center fot">About Us</a>
            </li>
            <li>
               <a class="text-center fot">Contact</a>
            </li>
            <li>
               <a class="text-center fot">Order Tracking</a>
            </li>
         </div>
         <div class="col-lg-3 text-center">
            <h1 style="font-family: bold">Secure Payment</h1>
            <div class="row col2">
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/fpx.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/visa.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/master.png')}}" height="40" width="70"></div>
            </div>
            <div class="row col2">
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/cimd.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/may.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/bank.png')}}" height="40" width="70"></div>
            </div>
            <div class="row col2">
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/boost.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/grab.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-4"><img src="{{asset('uploads/footer/payment/tg.png')}}" height="40" width="70"></div>
            </div>
            <div class="row col2" style="margin-top: 120px;">
               <h1 style="font-family: bold">Our Platform</h1>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/pos.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/jt.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/aram.png')}}" height="40" width="70"></div>
            </div>
            <div class="row col2">
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/abx.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/sky.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/del.png')}}" height="40" width="70"></div>
            </div>
            <div class="row col2">
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/zto.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/fed.png')}}" height="40" width="70"></div>
               <div class="col-xs-2 col-lg-3 c2"><img src="{{asset('uploads/footer/delivery/dhl.jpeg')}}" height="40" width="70"></div>
            </div>
         </div>
         <div class="col-xs-12 col-lg-4 text-center">
            <div class="row col2" style="margin-top: 100px; margin-right: 30px;">
               <form>
                  <div class="input-group">
                     <input class="input" type="text" style="height: 50px; width: 150px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; border:solid 1px #145A32; padding-left: 10px; color:grey"  placeholder="Email Address"><button class="btn btn" style="background-color: #145A32; color:white; font:normal; height: 49px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; margin-top: -3px;">Subscribe</button>
                  </div>
               </form>
               <div class="row" style="display: inline; margin-top: 30px;">
                  <h1 style="font-family: bold;">Follow Us</h1>
                  <a href="#" style="height: 50px; width: 50px; border-radius: 50px; padding:10px 15px 10px 15px; background-color:#145A32; color:white">F</a>
                  <a href="#" style="height: 50px; width: 50px; border-radius: 50px; padding:10px 15px 10px 15px; background-color:#145A32; color:white">T</a>
                  <a href="#" style="height: 50px; width: 50px; border-radius: 50px; padding:10px 15px 10px 15px; background-color:#145A32; color:white">G</a>
               </div>
               <div class="row text-center" style="margin-top: 70px;">
                  <h3>A product by</h3>
                  <div style="height: 130px; width: 130px; margin: auto; border-radius: 80px; background-color: white; padding: 50px 0px 0px 0px">
                     <img height="120" width="110" src="{{asset('uploads/settings/logo1.png')}}" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
         <hr style="background-color: grey; margin-right: 100px; margin-top: 50px">
         <p style="color:black; font:normal; font-weight: bold;">Download The Aladdin App Now</p>
         <div class="row" style="margin-left: 10px; margin-top: 15px; display: inline;">
            <div class="col-lg-7">
               <a href=""><img src="{{asset('uploads/footer/delivery/appstore.png')}}" height="45" width="150"></a>
               <a href=""><img src="{{asset('uploads/footer/delivery/play.png')}}" height="45" width="150"></a>
            </div>
            <div class="col-lg-5">
               <p>©Copyright 2021 | Aladdin Group | All Rights Reserved.</p>
            </div>
         </div>
      </div>
      <!-- Footer -->
    
            
            <style>
            
            .btn1{
            border-radius:20px;
            background-color: white;
            border: solid #ECF0F1 1px; 
            padding: 0px 10px 0px 10px; height: 35px; color:green; margin: 0px 20px 0px 0px; 
            font: normal normal normal;
            } 
            .btn2{
            border-radius:20px;
            
            padding: 10px 10px 0px 10px;  color:black; margin: 10px 0px 0px 40px;
            width: 160px;
            font: normal normal normal;
            } 
            ul li .top:hover{
            background-color:#0A2A12;
            }
            .nav-item{
            width: 100px;
            }
            
            .nav-item1{
            width: 80px;
            
            
            }
            .nav-itemd{
            width: 150px;
            }
            .dropdown-menu{
            width: 200px;
            }
            .dropdown-item{
            height: 30px;
            color:black;
            font: normal normal normal;
            }
            /*.dropdown-item:hover{
            
            padding: 10px 0px 10px;
            border-radius: 5px;
            font: normal normal normal;
            }*/
            li a{
            list-style: none;
            text-decoration: none;
            
            }
           
            .btn2{
            border-radius: 20px;
            border:solid 0.5px #BB8FCE;
            color:black;
            height: 25px;
            margin-top: 5px;
            font-size:10px;
            padding-top: 5px;
            }
            .icon{
            width: 54px;
            height: 54px;
            background: #086D38 0% 0% no-repeat padding-box;
            opacity: 1;
            list-style: none;
            padding: 10px 0px 0px 20px;
            border-radius: 50px; 
            }
            
            .btn-side-menu {
            margin: 10px 10px 0px 30px;
            background: #086D38;
            color: white;
            width: 54px;
            height: 54px;
            border-radius: 30px;
            }
            
            .menu-active {
            width: 64px;
            height: 64px;
            border-radius: 50px;
            border: 2px solid #086D38;
            background: transparent;
            padding: 0px 7px 0px 7px;
            }
            
            .menu-active .logo {
            background: #086D38;
            padding: 10px;
            border-radius: 30px;
            }
            
            .con1{
            margin-top: 460px;
            }
            .catimg{
            width: 149px;
            height: 94px;
            margin:10px;
            }
            .h3{
            border-bottom: solid 2px green;
            width: 370px;
            padding-bottom: 10px;
            }
            .btnh:hover{
            background-color: #F1C40F;
            color: black;
            border: solid 2px #F1C40F;
            }
            
           
            
            .col3{
                height: auto;
                border-right: solid 1px #D7DBDD;
                margin-bottom: 100px;
                padding: 20px 5px 20px 5px;
            }
            .col3:hover{
                 border-radius:10px;
                 
                   height: auto;
                   box-shadow: 0 0 10px;
            }
  
            .footer{
            margin: 40px 0px 0px 0px;
            background-color: #F2F3F4;
            padding: 80px 0px 100px 100px; 
            
            }
            
            li{
            list-style: none;
            }
            .fot{
            color:black; text-decoration: none; font-size: 18px;
            }
            
            .col2{
            margin-left: 30px;
            
            }
            .c2{
            margin-right:30px;
            }

            .na-image {
                text-align: center;
                overflow: hidden;
            }
            
            .na-image img {
                height: 250px;
            }
            
            </style>
            
            
            
            
            
            </body>
            </html>