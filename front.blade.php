<!DOCTYPE html>
<html>
   <head>
      <title>Home page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="HandheldFriendly" content="true">
      <meta name="viewport" content="initial-scale=1.0, width=device-width">
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
      <div class="row header" style="height: auto; padding: 0px 0px 0px 0px; background-color:#0A2A12; color:white">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container clearfix">
               <ul class="nav pull-left">
                  <li><a class="top" style="color:white; font: normal normal normal;" href="{{url('landing-page')}}"><i class="fas fa-globe-asia"></i> Malaysia |</a></li>
                  <li id="menu-item-121763" class="top-bar-text menu-item "><a class="top" style="color:white"  href="#">MYR |</a></li>
                  <li  class="top-bar-text menu-item"><a class="top" style="color:white"  href="#">English</a></li>
               </ul>
               <ul id="menu-top-bar-right" class="nav nav-inline pull-right">
                  <li class="top-bar-text menu-item "><a class="top" style="color:white"  href="https://aladdin1.my/track-your-order/"><i class="fas fa-truck"></i>Track Your Order |</a></li>
                  <li  class="vendor top-bar-text"><a class="top" style="color:white"  href="{{url('dashboard')}}/"><i class="far fa-user-circle"></i> 
                     @auth
                     <span>{{ auth()->user()->name }}</span>
                     @else
                     <span>@lang('corals-marketplace-pro::labels.auth.login')</span>
                     @endauth
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- header desktop -->
     
         <div class="container sticky" >
            <div class="col-lg-12 mobile">
               <div class="row" >
                  <!-- logo -->
                  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 d-flex align-items-center" style="margin-left: -100px;">
                     <div>
                        <a href="#"><img src="{{asset('uploads/header/logoo.png')}}" style="height: 50px; width: 50px; border-radius: 50px; margin-right: 30px; top: 15px;
                           left: 55px;
                           width: 73px;
                           height: 73px;"></a>
                     </div>
                  </div>
                  <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6" style="margin-top: 20px;">
                     <form method="get" action="{{ url('shop') }}">
                        <div class="input-group mb-3">
                           <div class="row">
                              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                 <input type="text" name="search" class="form-control" placeholder="Trending Products" aria-label="Trending Products" aria-describedby="basic-addon2" style="margin-right: -40px; border-top-left-radius: 20px; border-bottom-left-radius:20px; height: 40px; ">
                              </div>
                              <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                 <div class="input-group-append">
                                    <button class="btn btn-outline" type="submit" style="border-top-right-radius: 20px; border-bottom-right-radius:20px; margin-left: -40px; background-color:#086E38;  width: 100px; color:white; height: 40px; font: normal normal normal;">search</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6" style="margin-top: 22px;">
                    
                     <a href="live" class="btn btn btn1" type="button">Aladdin <span style="color:red">Live</span></a>
                    
                     <a class="btn btn btn1" href="#">
                       <i class="fa fa-shopping-bag"> </i> Group Buy
                     </a>
                      <img style=" border-radius: 50px; height: 35px; width: 35px; margin-top: 5px;" src="{{asset('uploads/footer/malaysia.png')}}">&nbsp
                    <a class="btn btn btn3 "style="border-radius: 50px; height: 35px; width: 35px; margin-top: 5px; ">EN</a>
                    <a class="btn btn btn3 "style="border-radius: 50px; height: 35px; width: 35px; margin-top: 5px; ">RM</a>
                    
                  </div>
               </div>
            </div>
            <div class="topnav" id="myTopnav">
               @if(\Shop::getActiveCategories()->count() <= 5)
               @foreach(\Shop::getActiveCategories() as $category)
               <a href="{{ url('shop?category='.$category->slug) }}" style="color:white; font: normal normal  15px/18px POPPINS ; text-decoration: none; margin-top: 7px;" class="nav-link">
                  <li class="nav-item nav-itemd dropdown">
                     {{$category->name}}
                     <svg height="20" width="20" style="margin-bottom: -0px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        -->
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                     </svg>
                  </li>
               </a>
               @endforeach
               @endif
               <a href="#" style="color:white; font: POPPINS ; text-decoration: none; margin-top: 7px; padding-bottom: -2px;">Brands</a>
               <a href="newarrivel" style="color:white; font: POPPINS ; width: auto; padding-top: -10px;  text-decoration: none; margin-top: 7px">New Arrivals
</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
               <i class="fa fa-bars"></i>
               </a>
            </div>
         </div>
      
      <!-- banner -->
      <div class="container">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row" style="margin-top: -20px;">
               <div class="col-sm-2 col-md-1 col-lg-1 mobile" style="margin-left: -50px">
                  <div class="row">
                     <div class="col-md-2">
                        <a href="https://aladdins.tech/aladin1/public/" style="padding-top: 7px" class="btn btn-side-menu menu-active">
                           <div class="logo">
                              <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                 <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                              </svg>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <a href="https://aladdins.tech/aladin1/public/cart" style="padding-top: 8px" class="btn btn-side-menu">
                           <div class="logo">
                              <svg height="30" width="30" style="height: 20px" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                 <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </svg>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <a href="/" style="padding-top:10px;" class="btn btn-side-menu">
                           <div class="logo">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                                 <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                              </svg>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <button class="btn btn-side-menu">
                           <div class="logo">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                 <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                              </svg>
                           </div>
                        </button>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <button class="btn btn-side-menu">
                           <div class="logo">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                 <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg>
                           </div>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-10 col-md-11 col-lg-11 img-responsive" style="height: 300px;">
                  <div class="banner">
                     <div class="row">
                        <div class="col-sm-6 col-md-6 co-lg-6"></div>
                        <div class="col-sm-6 col-md-6 col-lg-6 slider">
                           <!--  <img style="height: 200px; width: 500px; margin-right: 100px; margin-top: 5px;" src="{{asset('uploads/slider/skin.png')}}"> -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                 <div class="item active">
                                    
                                       <a href="{{ url('shop?category='.$category->slug) }}"><img class="slid" style="height: 150px;  margin-top: 5px;" src="{{asset('uploads/slider/skin.png')}}"></a>
                                       <h4>Feature Product</h4>
                                       <div class="row" style="margin-top: 5px;">
                                          @if($products->count() < 8)
                                          <?php $count = 0; ?>
                                          @foreach($products as $product)
                                          <?php if($count == 4) break; ?>
                                          <div class="col-xs-6 col-lg-5 calpro1">
                                             <div class="col-xs-6 col-lg-5 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                                             <div class="col-xs-6 col-lg-7 pro-desc" style="margin-top: 13px;">
                                               <strong>{{$product->name}}</strong><br>
                                                <small>{{$product->price}}</small>
                                                <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                                                <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>
                                                
                                             </div>
                                          </div>
                                          <?php $count++; ?>
                                          @endforeach
                                          @endif
                                       </div>
                                    
                                 </div>
                                 <div class="item ">
                                    
                                       <img class="slid" style="height: 150px; margin-top: 5px;" src="{{asset('uploads/slider/skin.png')}}">
                                       <h4>Feature Product</h4>
                                       <div class="row" style="margin-top: 5px;">
                                          @if($products->count() < 8)
                                          <?php $count = 0; ?>
                                          @foreach($products as $product)
                                          <?php if($count == 4) break; ?>
                                          <div class="col-xs-6 col-lg-5 calpro1">
                                             <div class="col-xs-6 col-lg-5 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                                             <div class="col-xs-6 col-lg-7 pro-desc" style="margin-top: 13px;">
                                               <strong>{{$product->name}}</strong><br>
                                                <small>{{$product->price}}</small>
                                                <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                                                <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>
                                                
                                             </div>
                                          </div>
                                          <?php $count++; ?>
                                          @endforeach
                                          @endif
                                       </div>
                                    </div>
                                 
                                 <div class="item ">
                                    
                                       <img class="slid" style="height: 150px; margin-top: 5px;" src="{{asset('uploads/slider/skin.png')}}">
                                       <h4>Feature Product</h4>
                                       <div class="row" style="margin-top: 5px;">
                                          @if($products->count() < 8)
                                          <?php $count = 0; ?>
                                          @foreach($products as $product)
                                          <?php if($count == 4) break; ?>
                                          <div class="col-xs-6 col-lg-5 calpro1">
                                             <div class="col-xs-6 col-lg-5 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                                             <div class="col-xs-6 col-lg-7 pro-desc" style="margin-top: 13px;">
                                               <strong>{{$product->name}}</strong><br>
                                                <small>{{$product->price}}</small>
                                                <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                                                <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>
                                                
                                             </div>
                                          </div>
                                          <?php $count++; ?>
                                          @endforeach
                                          @endif
                                       </div>
                                    
                                 </div>
                              </div>
                              <!-- Indicators -->
                              <ol class="carousel-indicators" style="margin-bottom: 0;position: inherit;padding-top: 25px;left: 45%;">
                                 <li style="background-color: green;" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                 <li style="background-color: green;" data-target="#myCarousel" data-slide-to="1"></li>
                                 <li style="background-color: green;" data-target="#myCarousel" data-slide-to="2"></li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container con1">
            
               <h3 class="text-center"><span style="color:#CACFD2"></span><span style="margin:0px 15px 0px 15px; font: normal normal bold 21px/26px CircularXX;
                  letter-spacing: 0.42px;
                  color: #1D6700;
                  opacity: 1; ">Top Category</span><span style="color:#CACFD2"></span></h3>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat1.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat2.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat3.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat4.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat5.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat6.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat7.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat8.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat9.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat10.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat11.png')}}"></div>
               <div class="col-xs-4 col-sm-6 col-md-3 col-lg-2"><img class="catimg" src="{{asset('uploads/category/cat12.png')}}"></div>
               <!-- Product -->
               <div class="row product" style="margin-bottom: 10px;">
                  <div class="col-xs-9 col-md-9  col-lg-10">
                     <h3>Best Selling Discover</h3>
                  </div>
                  <div class="col-xs-3  Products tocol-sm-2 col-lg-2"><a href="#" class="btn btn btnh" style="margin-top: 15px; padding-top: -5px; border-radius: 20px; height: 30px;">Top 24</a></div>
                  <hr style="margin-top: -12px; background-color:green">
                  @if($products->count() < 8)
                  @foreach($products as $product)
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 calpro6">
                     <div class="col-xs-6 col-lg-6 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                     <div class="col-xs-6 col-lg-6 pro-desc" style="margin-top: 13px;">
                       <strong>{{$product->name}}</strong><br>
                       <small>{{$product->price}}</small>
                       <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                       <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>
                                                
                      </div>
                  </div>
                  @endforeach
                  @endif
               
               <!-- product second row close -->
            </div>
            <div class="col-xs-11 col-sm-6 col-md-4 col-lg-3"><img class="img-fluid colpro6" src="{{asset('uploads/slider/slider2.png')}}" ></div>
            <div class="col-xs-12 col-lg-9">
               <div class="row">
                  <div id="myCarouselq" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators" style="margin-bottom: -30px;">
                        <li style="background-color: green;" data-target="#myCarouselq" data-slide-to="0" class="active"></li>
                        <li style="background-color: green;" data-target="#myCarouselq" data-slide-to="1"></li>
                        <li style="background-color: green;" data-target="#myCarouselq" data-slide-to="2"></li>
                     </ol>
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                           <div class="col-xs-12 col-lg-12">
                              <div class="row" style="margin-top: 5px;">
                                 @if($products->count() < 8)
                                          <?php $count = 0; ?>
                                          @foreach($products as $product)
                                          <?php if($count == 4) break; ?>
                                 <div class="col-xs-12 col-lg-6 calpro6">
                                    <div class="col-xs-6 col-lg-6 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                                     <div class="col-xs-6 col-lg-6 pro-desc" style="margin-top: 13px;">
                                       <strong>{{$product->name}}</strong><br>
                                       <small>{{$product->price}}</small>
                                       <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                                       <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>

                                      </div>
                                 </div>
                                 <?php $count++; ?>
                                          @endforeach
                                          @endif
                                 
                                 
                                
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="col-lg-12">
                              <div class="row" style="margin-top: 5px;">
                                 @if($products->count() < 8)
                                          <?php $count = 0; ?>
                                          @foreach($products as $product)
                                          <?php if($count == 4) break; ?>

                                 <div class="col-xs-12 col-lg-6 calpro6">
                                    <div class="col-xs-6 col-lg-6 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                                     <div class="col-xs-6 col-lg-6 pro-desc" style="margin-top: 13px;">
                                       <strong>{{$product->name}}</strong><br>
                                       <small>{{$product->price}}</small>
                                       <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                                       <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>

                                      </div>
                                 </div>
                                 <?php $count++; ?>
                                          @endforeach
                                          @endif
                               
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="col-xs-12 col-lg-12">
                              <div class="row" style="margin-top: 5px;">
                                 @if($products->count() < 8)
                                          <?php $count = 0; ?>
                                          @foreach($products as $product)
                                          <?php if($count == 4) break; ?>
                                 <div class="col-xs-12 col-lg-6 calpro6">
                                    <div class="col-xs-6 col-lg-6 pro-img"><img class="proimgg" src="{{ $product->non_featured_image }}"></div>
                                     <div class="col-xs-6 col-lg-6 pro-desc" style="margin-top: 13px;">
                                       <strong>{{$product->name}}</strong><br>
                                       <small>{{$product->price}}</small>
                                       <!--<a href="{{ url('shop', $product->slug) }}"><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                                       <a href="{{ url('shop', $product->slug) }}" class="atc-btn">Add To Cart</a>

                                      </div>
                                 </div>
                                 <?php $count++; ?>
                                          @endforeach
                                          @endif
                                 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

         <div class="row brands">
            <div class="col-xs-5 col-sm-6 col-md-2 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand2.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand3.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand4.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand5.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand6.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand7.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand8.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand9.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand10.jpg')}}"></div>
            <div class="col-xs-5 col-sm-6 col-md-3 col-lg-2 colbrand"><img class="braimg" src="{{asset('uploads/Brand/brand11.jpg')}}"></div>
         </div>
      
      
      </div>
      <!-- Footer -->
      <div class="footer" style="padding-left: 50px; margin-right: -20px">
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
         <div class="col-lg-2 text-center" style="margin-bottom: 30px;">
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
         <div class="row">
            <div class="row left" style="width:50%; margin-right: 10px;">
               <h1 style="font-family: bold">Secure Payment</h1>
               <div class="row col2">
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/fpx.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/visa.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/master.png')}}" height="30" width="60"></div>
               </div>
               <div class="row col2">
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/cimd.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/may.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/bank.png')}}" height="30" width="60"></div>
               </div>
               <div class="row col2">
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/boost.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/grab.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/payment/tg.png')}}" height="30" width="60"></div>
               </div>
            </div>
            <div class="row right" style="width:50%; margin-right: 10px;">
               <h1 style="font-family: bold">Our Platform</h1>
               <div class="row col2">
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/pos.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/jt.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/aram.png')}}" height="30" width="60"></div>
               </div>
               <div class="row col2">
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/abx.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/sky.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/del.png')}}" height="30" width="60"></div>
               </div>
               <div class="row col2">
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/zto.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/fed.png')}}" height="30" width="60"></div>
                  <div class="col-xs-2 col-lg-3"><img src="{{asset('uploads/footer/delivery/dhl.jpeg')}}" height="30" width="60"></div>
               </div>
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
               <p>Copyright 2021 | Aladdin Group | All Rights Reserved.</p>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <style>
      body {
    margin: 0;
    padding: 0;
    
    width: 100%;
}

         .btn1{
         border-radius:20px;
         background-color: white;
         border: solid #ECF0F1 1px; 
         padding: 0px 10px 0px 10px; height: 35px; color:green; margin: 0px 10px 0px 0px; 
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
         .slider{
         padding-top: 15px;
         }
         /*.sub-banner{
         height: 150px;
         margin-right: 20px;
         background-color: #EAECEE;
         border-radius: 20px;
         }*/
         
         /*sticky menu*/
 
         
         #myCarousel li.active {
            width: 25px;
        }
         p{
         margin: 30px 20px 0px 20px;
         }
         strong{
         font-family: bold;
         font-size: 6px;
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
         margin-top: 150px;
         margin-left:-20px;
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
         .product{
         
         border-radius: 10px;
         margin-left: 10px;
         }
         .proimg{
         height: 90px;
         width: 100px;
         padding-right: 25px;
         }
         .proimgg{
         height: 80px;
         width: auto;
         margin-left: -20px;
         padding: 5px;
         }
         .pro-img {
            width: 70px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 5px;
        }
        .pro-desc {
            padding: 0 10px;
        }
        .atc-btn {
            display: block;
            border: 2px solid #086E38;
            padding: 3px;
            text-align: center;
            border-radius: 15px;
            color: #086E38;
            font-size: 12px;
            margin-top: 5px;
        }
         .calpro{
         border:solid 2px #F2F3F4;
         height: 140px;
         margin: 0px 0px 10px 0px;
         padding-top: 20px;
         border-radius: 10px;
         }
         .calpro1{
         border:solid 2px #F2F3F4;
         height: 100px;
         margin: 0px 0px 10px 10px;
         padding-top: 2px;
         border-radius: 10px;
         background-color:#ffffff;
         box-shadow: -2px 1px 5px 1px #c3c1c1;
         }
         .calpro6{
         border:solid 2px #F2F3F4;
         height: 150px;
         width: 355px;
         margin: 0px 0px 10px 7px;
         padding-top: 20px;
         border-radius: 10px;
         }
         small{
         color:#A6ACAF;
         font-size:8;
         }
         strong{
         font-size: 10px;
         }
         .brands{
            
         margin-top: 50px;
         margin-bottom: 50px;
         }
         .colbrand{
         height: 130px;
         border:solid #E5E7E9 1px;
         border-radius: 10px;
         margin: 0px 0px 10px 10px;
         padding: 0px 10px 5px 10px;
         }
         .braimg{
         height: 120px;
         width: auto;
         }
         .bname{
         margin-left: 40px;
         margin-top: 5px;
         font:normal;
         font-size: 17px;
         color:#A6ACAF;
         }
         .footer{
         margin: 40px 0px 0px 0px;
         background-color: #F2F3F4;
         padding: 80px 0px 100px 0px; 
         }
        .footer a, .footer p, .footer h1 {
            font-family: poppins;
        }
         li{
         list-style: none;
         }
         .fot{
         color:black; text-decoration: none; font-size: 18px;
         }
         .c2{
         margin-right:30px;
         }
         .topnav {
         width:100%;
         overflow: hidden;
         background: #086E38;
         border-radius:20px;
         margin:0px -20px 20px -10px;
         font-family:poppins;
         }
         .topnav a {
         float: left;
         display: block;
         color: #f2f2f2;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 17px;
         width: 140px;
         }
         .topnav a.active {
         background-color: #04AA6D;
         color: black;
         }
         .topnav .icon {
         display: none;
         }
         .flag img {
            margin: 5px;
         }
         .col-xs-2 {
            width: 33%;
            height: min-content;
         }
         @media screen and (max-width: 600px) {
         .mobile{
         display:none;
         margin-top: -500px;
         margin: 0;
         padding: 0;
         line-height: 0;
         }
         .topnav a:not(:first-child) {display: none;}
         .topnav a.icon {
         float: right;
         display: block;
         }
         .header{
         display:none;
         }
         .topnav {
         border-radius:0px;
         width: 115%;
         
         }
         .slid{
             width: 1000%;
             margin:0;
             padding: 0;
         }
         .calpro1{
             width: 172px;
         }
         .catimg{
         width: 100px;
         height:74px;
         margin: 0px -3px 1px 0px;
         }
         .con1{
             width: 115%;
         }
         .colpro6{
             height: 200px;
             width: 107%;
             margin-left: 4px;
         }
         }
         @media screen and (min-width: 600px) {
         .banner {
         width: 100%;
         height: auto;
         background-image: url("{{asset('uploads/slider/slide1-edited.png')}}");
         background-size: 100% 100%;
         }
         .con1{
         margin-top: 450px;
         }
         .calpro6{
         border:solid 2px #F2F3F4;
         height: 150px;
         width: 255px;
         margin: 0px 0px 10px 7px;
         padding-top: 20px;
         border-radius: 10px;
         }
         .brands{
             margin-left: 140px;
         }
         .topnav{
             width: 100%;
         }
         .catimg{
         width: 149px;
         height: 94px;
         margin:10px;
         }
         .colpro6{
             height: 340px;
         }
         }
         @media screen and (max-width: 400px) {
         .topnav.responsive {position: relative;}
         .topnav.responsive .icon {
         position: absolute;
         right: 0;
         top: 0;
         }
         .topnav.responsive a {
         float: none;
         display: block;
         text-align: left;
         }
         
         }
         @media screen and (max-width: 1488px) {
         .brands{
            margin-left: 10px;
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: space-around;
            justify-content: center;
            align-items: flex-end;
         }
         .braimg{
            width:100%;
         }
         .colbrand{
            display: inline-block;
            min-width: 180px;
         }
         .col-xs-2.col-lg-3 img {
            width: 100%;
            height: 50%;
            min-width: 45px;
         }
         }
      </style>
      <script>
         function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
             x.className += " responsive";
           } else {
             x.className = "topnav";
           }
         }
        //  sticky menu
        window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
      </script>
   </body>
</html>