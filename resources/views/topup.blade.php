<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="format-detection" content="telephone=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="author" content="">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <title>Martfury - Multipurpose Marketplace HTML5 Template + Admin Template</title>
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/plugins/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/fonts/Linearicons/Linearicons/Font/demo-files/demo.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/owl-carousel/assets/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/owl-carousel/assets/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/slick/slick/slick.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/nouislider/nouislider.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
      <link rel="stylesheet" href="{{asset('css/plugins/select2/dist/css/select2.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/css/style.css')}}">
   </head>
   <body>
      <header class="header header--1" data-sticky="true" >
         <div class="header__top">
         <div class="ps-container">
            <div class="header__left">
               <div class="menu--product-categories">
                  <div><img class="ps-logotop" height="60" width="60" src="{{asset('uploads/settings/logo2.png')}}"></div>
               </div>
               <a class="ps-logo" href="index.html"><img src="{{asset('uploads/settings/logo2.png')}}" alt=""></a>
            </div>
            <div class="header__center">
               <form class="ps-form--quick-search" method="get" action="{{ url('shop') }}">
                  <input class="form-control" type="text" name="search" style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;" placeholder="Trending Products..." id="input-search">
                  <button type="submit" style="background-color: #086E38; border-top-right-radius: 20px;border-bottom-right-radius: 20px;">Search</button>
               </form>
            </div>
            <div class="header__right">
               <div class="header__actions"><a  href="live" >Aladdin <span style="color:red;">Live</span></a>
                  <a  href="#" >Group Buy</a>
                  <img style="height: 40px; width: 40px; border-radius: 50px" src="{{asset('uploads/footer/malaysia.png')}}">
                  <a href="#" class="lan"  style="height: 35px; width: 40px; border-radius: 20px; padding: 7px 0px 0px 7px">EN</a>
                  <a href="#" class="lan" style="height: 35px; width: 40px; border-radius: 20px; padding: 7px 0px 0px 7px">RM</a>
               </div>
            </div>
         </div>
         <br>
         <nav class="navigation" style="background-color: #086E38">
            <div class="ps-container">
               <div class="navigation__left">
                  <div class="menu--product-categories">
                     <div class="menu__toggle"><i class="icon-menu" style="color:white"></i><span style="color:white"> Shop by Categories</span></div>
                     <div class="menu__content">
                        <ul class="menu--dropdown">
                           @foreach(\Shop::getActiveCategories() as $category)
                           <li><a href="#"> {{$category->name}}</a>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="navigation__right">
                  <ul class="menu">
                  @if(\Shop::getActiveCategories()->count() <= 4)
                  @foreach(\Shop::getActiveCategories() as $category)
                  <li class="menu-item-has-children"><a href="index.html" style="color:white">{{$category->name}}</a><span class="sub-toggle"></span></li>
                  @endforeach
                  @endif
                  <li><a style="color:white" href="#">Brand</a></li>
                  <li><a style="color:white" href="#">New Arrivals</a></li>
               </div>
            </div>
         </nav>
      </header>
      <header class="header header--mobile" data-sticky="true" style="background-color: #086E38">
         <div class="header__top">
            <div class="header__left">
               <p>Welcome to Martfury Online Shopping Store !</p>
            </div>
            <div class="header__right">
               <ul class="navigation__extra">
                  <li><a href="#">Sell on aladdin</a></li>
                  <li><a href="#">Tract your order</a></li>
               </ul>
            </div>
         </div>
         <div class="navigation--mobile" style="background-color: #086E38">
            <div class="navigation__left"><a class="ps-logo mt-2" href="index.html"><img src="{{asset('uploads/settings/logo2.png')}}" alt=""></a></div>
            <div class="navigation__right">
               <div class="header__actions">
                  <div class="ps-cart--mini">
                     <a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                     <div class="ps-cart__content">
                        <div class="ps-cart__items">
                           <div class="ps-product--cart-mobile">
                              <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('css/img/products/clothing/7.jpg')}}" alt=""></a></div>
                              <div class="ps-product__content">
                                 <a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                 <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                 <small>1 x $59.99</small>
                              </div>
                           </div>
                           <div class="ps-product--cart-mobile">
                              <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('css/img/products/clothing/5.jpg')}}" alt=""></a></div>
                              <div class="ps-product__content">
                                 <a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                 <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                 <small>1 x $59.99</small>
                              </div>
                           </div>
                        </div>
                        <div class="ps-cart__footer">
                           <h3>Sub Total:<strong>$59.99</strong></h3>
                           <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                        </div>
                     </div>
                  </div>
                  <div class="ps-block--user-header">
                     <div class="ps-block__left"><i class="icon-user"></i></div>
                     <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="index.html" method="get">
               <div class="form-group--nest">
                  <input class="form-control" type="text" style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;" placeholder="Search something...">
                  <button style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;"><i class="icon-magnifier"></i></button>
               </div>
            </form>
         </div>
      </header>
      <div class="ps-panel--sidebar" id="cart-mobile">
         <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
         </div>
         <div class="navigation__content">
            <div class="ps-cart--mobile">
               <div class="ps-cart__content">
                  <div class="ps-product--cart-mobile">
                     <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('css/img/products/clothing/7.jpg')}}" alt=""></a></div>
                     <div class="ps-product__content">
                        <a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                        <p><strong>Sold by:</strong> YOUNG SHOP</p>
                        <small>1 x $59.99</small>
                     </div>
                  </div>
               </div>
               <div class="ps-cart__footer">
                  <h3>Sub Total:<strong>$59.99</strong></h3>
                  <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
               </div>
            </div>
         </div>
      </div>
      <div class="ps-panel--sidebar" id="navigation-mobile">
         <div class="ps-panel__header">
            <h3>Categories</h3>
         </div>
         <div class="ps-panel__content">
            <ul class="menu--mobile">
               <li><a href="#">Hot Promotions</a>
               </li>
               <li class="menu-item-has-children has-mega-menu">
                  <a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <h4>Electronic<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="#">Home Audio &amp; Theathers</a>
                           </li>
                           <li><a href="#">TV &amp; Videos</a>
                           </li>
                           <li><a href="#">Camera, Photos &amp; Videos</a>
                           </li>
                           <li><a href="#">Cellphones &amp; Accessories</a>
                           </li>
                           <li><a href="#">Headphones</a>
                           </li>
                           <li><a href="#">Videosgames</a>
                           </li>
                           <li><a href="#">Wireless Speakers</a>
                           </li>
                           <li><a href="#">Office Electronic</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="#">Digital Cables</a>
                           </li>
                           <li><a href="#">Audio &amp; Video Cables</a>
                           </li>
                           <li><a href="#">Batteries</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li><a href="#">Clothing &amp; Apparel</a>
               </li>
               <li><a href="#">Home, Garden &amp; Kitchen</a>
               </li>
               <li><a href="#">Health &amp; Beauty</a>
               </li>
               <li><a href="#">Yewelry &amp; Watches</a>
               </li>
               <li class="menu-item-has-children has-mega-menu">
                  <a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="#">Computer &amp; Tablets</a>
                           </li>
                           <li><a href="#">Laptop</a>
                           </li>
                           <li><a href="#">Monitors</a>
                           </li>
                           <li><a href="#">Networking</a>
                           </li>
                           <li><a href="#">Drive &amp; Storages</a>
                           </li>
                           <li><a href="#">Computer Components</a>
                           </li>
                           <li><a href="#">Security &amp; Protection</a>
                           </li>
                           <li><a href="#">Gaming Laptop</a>
                           </li>
                           <li><a href="#">Accessories</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li><a href="#">Babies &amp; Moms</a>
               </li>
               <li><a href="#">Sport &amp; Outdoor</a>
               </li>
               <li><a href="#">Phones &amp; Accessories</a>
               </li>
               <li><a href="#">Books &amp; Office</a>
               </li>
               <li><a href="#">Cars &amp; Motocycles</a>
               </li>
               <li><a href="#">Home Improments</a>
               </li>
               <li><a href="#">Vouchers &amp; Services</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="navigation--list" >
         <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
      </div>
      <div class="ps-panel--sidebar" id="search-sidebar">
         <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="index.html" method="get">
               <div class="form-group--nest">
                  <input class="form-control" type="text" placeholder="Search something...">
                  <button><i class="icon-magnifier"></i></button>
               </div>
            </form>
         </div>
         <div class="navigation__content"></div>
      </div>
      <div class="ps-panel--sidebar" id="menu-mobile">
         <div class="ps-panel__header">
            <h3>Menu</h3>
         </div>
         <div class="ps-panel__content">
            <ul class="menu--mobile">
               <li class="menu-item-has-children">
                  <a href="#" style="color:white">Home</a><span class="sub-toggle"></span>
                  <ul class="sub-menu">
                     <li><a href="index.html">Marketplace Full Width</a>
                     </li>
                     <li><a href="homepage-2.html">Home Auto Parts</a>
                     </li>
                     <li><a href="homepage-10.html">Home Technology</a>
                     </li>
                     <li><a href="homepage-9.html">Home Organic</a>
                     </li>
                     <li><a href="homepage-3.html">Home Marketplace V1</a>
                     </li>
                     <li><a href="homepage-4.html">Home Marketplace V2</a>
                     </li>
                     <li><a href="homepage-5.html">Home Marketplace V3</a>
                     </li>
                     <li><a href="homepage-6.html">Home Marketplace V4</a>
                     </li>
                     <li><a href="homepage-7.html">Home Electronic</a>
                     </li>
                     <li><a href="homepage-8.html">Home Furniture</a>
                     </li>
                     <li><a href="homepage-kids.html">Home Kids</a>
                     </li>
                     <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                     </li>
                     <li><a href="home-medical.html">Home Medical</a>
                     </li>
                  </ul>
               </li>
               <li class="menu-item-has-children has-mega-menu">
                  <a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="shop-default.html">Shop Default</a>
                           </li>
                           <li><a href="shop-default.html">Shop Fullwidth</a>
                           </li>
                           <li><a href="shop-categories.html">Shop Categories</a>
                           </li>
                           <li><a href="shop-sidebar.html">Shop Sidebar</a>
                           </li>
                           <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                           </li>
                           <li><a href="shop-carousel.html">Shop Carousel</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Product Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="product-default.html">Default</a>
                           </li>
                           <li><a href="product-extend.html">Extended</a>
                           </li>
                           <li><a href="product-full-content.html">Full Content</a>
                           </li>
                           <li><a href="product-box.html">Boxed</a>
                           </li>
                           <li><a href="product-sidebar.html">Sidebar</a>
                           </li>
                           <li><a href="product-default.html">Fullwidth</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Product Types<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="product-default.html">Simple</a>
                           </li>
                           <li><a href="product-default.html">Color Swatches</a>
                           </li>
                           <li><a href="product-image-swatches.html">Images Swatches</a>
                           </li>
                           <li><a href="product-countdown.html">Countdown</a>
                           </li>
                           <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                           </li>
                           <li><a href="product-instagram.html">Instagram</a>
                           </li>
                           <li><a href="product-affiliate.html">Affiliate</a>
                           </li>
                           <li><a href="product-on-sale.html">On sale</a>
                           </li>
                           <li><a href="product-video.html">Video Featured</a>
                           </li>
                           <li><a href="product-groupped.html">Grouped</a>
                           </li>
                           <li><a href="product-out-stock.html">Out Of Stock</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Woo Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="shopping-cart.html">Shopping Cart</a>
                           </li>
                           <li><a href="checkout.html">Checkout</a>
                           </li>
                           <li><a href="whishlist.html">Whishlist</a>
                           </li>
                           <li><a href="compare.html">Compare</a>
                           </li>
                           <li><a href="order-tracking.html">Order Tracking</a>
                           </li>
                           <li><a href="my-account.html">My Account</a>
                           </li>
                           <li><a href="checkout-2.html">Checkout 2</a>
                           </li>
                           <li><a href="shipping.html">Shipping</a>
                           </li>
                           <li><a href="payment.html">Payment</a>
                           </li>
                           <li><a href="payment-success.html">Payment Success</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="menu-item-has-children has-mega-menu">
                  <a href="#">Pages</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <h4>Basic Page<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="about-us.html">About Us</a>
                           </li>
                           <li><a href="contact-us.html">Contact</a>
                           </li>
                           <li><a href="faqs.html">Faqs</a>
                           </li>
                           <li><a href="comming-soon.html">Comming Soon</a>
                           </li>
                           <li><a href="404-page.html">404 Page</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="become-a-vendor.html">Become a Vendor</a>
                           </li>
                           <li><a href="vendor-store.html">Vendor Store</a>
                           </li>
                           <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                           </li>
                           <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                           </li>
                           <li><a href="store-list.html">Store List</a>
                           </li>
                           <li><a href="store-list.html">Store List 2</a>
                           </li>
                           <li><a href="store-detail.html">Store Detail</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Account Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="user-information.html">User Information</a>
                           </li>
                           <li><a href="addresses.html">Addresses</a>
                           </li>
                           <li><a href="invoices.html">Invoices</a>
                           </li>
                           <li><a href="invoice-detail.html">Invoice Detail</a>
                           </li>
                           <li><a href="notifications.html">Notifications</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="menu-item-has-children has-mega-menu">
                  <a href="#">Blogs</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <h4>Blog Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="blog-grid.html">Grid</a>
                           </li>
                           <li><a href="blog-list.html">Listing</a>
                           </li>
                           <li><a href="blog-small-thumb.html">Small Thumb</a>
                           </li>
                           <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                           </li>
                           <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                           </li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <h4>Single Blog<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                           <li><a href="blog-detail.html">Single 1</a>
                           </li>
                           <li><a href="blog-detail-2.html">Single 2</a>
                           </li>
                           <li><a href="blog-detail-3.html">Single 3</a>
                           </li>
                           <li><a href="blog-detail-4.html">Single 4</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div id="homepage-1" class="row">
         <div class="col-lg-1">
            <a class="btn-side-menu"><i class="fa fa-home"></i></a>
            <a class="btn-side-menu"><i class="fa fa-shopping-cart"></i></a>
            <a class="btn-side-menu"><i class="fa fa-heart"></i></a>
            <a class="btn-side-menu"><i class="fa fa-comment"></i></a>
            <a class="btn-side-menu"><i class="fa fa-user"></i></a>
         </div>
         <div class="col-lg-10 topup">
            <div class="row">
               <div class="col-lg-8">
                  <h5 class="header">Mobile Reload by Aladdin1</h5>
                  <button onclick="myFunction()" class="btn btn" style="background-color: #D7DBDD; border-radius: 15px; font-size: 13px; font: poppins">Reload</button>
                  <hr>
                  <form class="topup-form" method="post">
                  <div id="myDIV">
                     <div class="row carrier-area">
                        <div class="col-12">
                            <p>Choose carrier :</p>
                        </div>
                     </div>
                     <div class="row">
                        <p>Enter phone number :</p>
                        <div class="col-xs-3 col-lg-2">
                           <div class="form-group">
                              <input type="text" name="phone_number" placeholder="0123456789" class="input2">
                           </div>
                        </div>
                     </div>
                     <div class="row topup-amount">
                        <p>Select reload amount :</p>
                        <div class="col-xs-3 col-lg-2">
                           <div class="form-group">
                              <select class="select input2" name="amount">
                                 <option>Reload Amount</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <p>Enter email (optional) :</p>
                        <div class="col-xs-3 col-lg-2">
                           <div class="form-group">
                              <input type="email" name="email" placeholder="example@example.com" class="input2">
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               </div>
               <div class="col-lg-4 reload">
                  <h5 class="header">Aladdin1 Mobile Reload</h5>
                  <hr>
                  <!-- other load data -->
                  <div class="loadetails">
                     <span>Carrier :</span>
                     <span class="carrier-name">[Carrier Name]</span>
                  </div>
                  <div class="loadetails">
                     <span>Reload amount :</span>
                     <span class="amount">[RM 0]</span>
                  </div>
                  <div class="loadetails">
                     <span>Mobile number :</span>
                     <span class="user-phone">[No phone number]</span>
                  </div>
                  <hr>
                  <div class="loadetails">
                     <span>Bill To :</span>
                  </div>
                  <div class="loadetails">
                     <span>Mobile number :</span>
                     <span>No phone number</span>
                  </div>
                  <div class="loadetails">
                     <span>[User name]</span>
                     <span>Hamid</span>
                  </div>
                  <div class="loadetails">
                     <span>[User email address]</span>
                     <span>No Email</span>
                  </div>
                  <br>
                  <hr>
                  <div class="loadetails">
                     <span class="total">Total</span>
                     <span style="padding-right: 20px" class="amount">RM 0</span>
                  </div>
                  <a href="#" class="btn btn-lg btn pay-btn">PAY</a>
               </div>
            </div>
         </div>
      </div>
      <footer class="ps-footer">
         <div class="ps-container">
            <div class="ps-footer__widgets">
               <aside class="widget widget_footer widget_contact-us col-lg-4">
                  <img class="fooimg " style="text-align: centers; color:green; margin-top: -9px" src="{{asset('uploads/settings/logo1.png')}}" height="40">
                  <br><br>
                  <div class="widget_content">
                     <p>A Social Commerce platform for Authentic &amp; Halal-focused lifestyle. By the year 2023, we will be in over 45 countries, with 45 domestic platforms – with 80% of the products from international market, 20% local products.</p>
                  </div>
                  <div class="widget_content">
                     <h5 class="text-center platform">Our Platform</h5>
                     <div class="row">
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/malaysia.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/china.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/italy.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/indonesia.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/Kazakhstan.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/united-arab-emirates.png')}}"></div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/pakistan.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/philippines.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/South-Korea.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/south_africa.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/Taiwan.png')}}"></div>
                        <div class="col"><img class="footer_country"  src="{{asset('uploads/footer/uk.png')}}"></div>
                     </div>
                  </div>
               </aside>
               <aside class="widget widget_footer col-lg-3 mt-3 com_detail">
                  <h5 class="text-center">company</h5>
                  <ul class="ps-list--link text-center">
                     <li><a class="text-center fot" >Halal Policy</a></li>
                     <li> <a class="text-right ">Privacy Policy</a> </li>
                     <li><a class="text-right ">Prohibited Items</a></li>
                     <li> <a class="text-right ">Refund and Return Policy</a></li>
                     <li> <a class="text-right ">IP Rights</a></li>
                     <li>  <a class="text-right ">Teams of Service</a></li>
                     <li><a class="text-right ">Help Center</a> </li>
                  </ul>
                  <br>
                  <h5 class="text-center mt-4">Business</h5>
                  <ul class="ps-list--link text-center">
                     <li><a href="#">Category</a></li>
                     <li><a href="about-us.html">About Us</a></li>
                     <li><a href="contact-us.html">Contact</a></li>
                     <li><a href="contact-us.html">Order Tracking</a></li>
                  </ul>
               </aside>
               <aside class="widget widget_footer col-lg-3 mt-3">
                  <h5 class="text-center">Secure Payment</h5>
                  <div class="row">
                     <div class="col"><img src="{{asset('uploads/footer/payment/bank.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/payment/boost.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/payment/cimd.png')}}" ></div>
                  </div>
                  <div class="row">
                     <div class="col"><img src="{{asset('uploads/footer/payment/fpx.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/payment/grab.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/payment/master.png')}}"></div>
                  </div>
                  <div class="row">
                     <div class="col"><img src="{{asset('uploads/footer/payment/may.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/payment/tg.png')}}" ></div>
                     <div class="col"><img src="{{asset('uploads/footer/payment/visa.png')}}"></div>
                  </div>
                  <br>
                  <h5 class="text-center delivery">Delivery Partner</h5>
                  <div class="row">
                     <div class="col"><img src="{{asset('uploads/footer/delivery/abx.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/delivery/appstore.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/delivery/aram.png')}}"></div>
                  </div>
                  <div class="row">
                     <div class="col"><img src="{{asset('uploads/footer/delivery/del.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/delivery/dhl.jpeg')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/delivery/fed.png')}}"></div>
                  </div>
                  <div class="row">
                     <div class="col"><img src="{{asset('uploads/footer/delivery/jt.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/delivery/play.png')}}"></div>
                     <div class="col"><img src="{{asset('uploads/footer/delivery/pos.png')}}"></div>
                  </div>
               </aside>
               <aside class="widget widget_footer col-lg-3 subscribe ">
                  <form style="margin-top: -70px">
                     <div class="input-group">
                        <input class="input" type="text" style="height: 35px; width: 150px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; border:solid 1px #145A32; padding-left: 10px; color:grey"  placeholder="Email Address"><button class="btn btn" style="background-color: #145A32; color:white; font:normal; height: 35px; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">Subscribe</button>
                     </div>
                  </form>
                  <div class="row text-center icons" style="display: inline;">
                     <h5 class="text-center">Follow Us</h5>
                     <br>
                     <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
                  </div>
                  <h5 class="footer_logo text-center">A product by</h5>
                  <div class="row">
                     <div class="foot_logo">
                        <img height="90" width="90" src="{{asset('uploads/settings/logo1.png')}}" class="img-fluid foot_img ">
                     </div>
                  </div>
               </aside>
            </div>
            <div class="ps-footer__copyright">
               <p>© 2021 Aladdin. All Rights Reserved</p>
            </div>
         </div>
      </footer>
      <style>
         .header__actions a{
         border: solid 1px #086E38;
         width:  140px;
         height: 40px; 
         padding: 10px 10px 0px 20px;
         border-radius: 20px;
         margin:  0px -10px 0px -10px;
         }
         .menu li a{
         font: poppins;
         }
         .btn-side-menu i{
         margin: 10px 20px 0px 30px;
         background: #086D38;
         color: white;
         width: 54px;
         height: 54px;
         font-size: 30px;
         border-radius: 30px;
         padding: 10px 0px 0px 13px;
         }
         .topup{
         min-height: 500px;
         height: auto;
         padding:  20px;
         border-radius: 20px;
         box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
         }


         /* HIDE RADIO */
        .carrier-area [type=radio] { 
          position: absolute;
          opacity: 0;
          width: 0;
          height: 0;
        }

        /* IMAGE STYLES */
        .carrier-area [type=radio] + img {
          cursor: pointer;
          display: block;
          margin: auto;
        }

        /* CHECKED STYLES */
        .carrier-area [type=radio]:checked + img {
          box-shadow: 0px 0px 8px 1px #64cff6;
          border-radius: 30px;
        }

         .reload{
         background: #FFFFFF 0% 0% no-repeat padding-box;
         border: 2px solid #086E38;
         border-radius: 9px;
         opacity: 1;
         }
         .reload h5{
         height: 20px;
         text-align: center;
         font: normal normal 600 14px/12px Poppins;
         letter-spacing: 0.31px;
         color: #086E38;
         opacity: 1;
         padding: 5px;
         }
         .reload a{
         background-color: #086E38;
         text-align: center;
         font: normal normal 600 14px/12px Poppins;
         letter-spacing: 0.31px;
         color: #FFFFFF;
         opacity: 1;
         padding:  10px 60px 10px 60px;
         margin: 10px 0px 10px 0px;
         }
         .loadetails{
         display: flex;
         justify-content: space-between;
         }
         p{
         text-align: left;
         font: normal normal medium 12px/12px Poppins;
         letter-spacing: 0.26px;
         color: #086E38;
         opacity: 1;
         }
         .row p{
         padding-left: 13px;
         }
         .topuplogo{
         background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 1px 3px #00000029;
        border-radius: 10px;
        opacity: 1;
        width: 140px;
        height: 100px;
        padding: 5px 0 10px 5px;
         }
         .input{
         background-color: white;
         border: solid 1px white;
         margin-top: 5px;
         display: block;
         text-align: center;
         }
         .input2{
         background: #FFFFFF 0% 0% no-repeat padding-box;
         border: 1px solid #086E38;
         border-radius: 10px;
         opacity: 1;
         padding:  3px 0px 3px 5px;
         }
         .topuplogo label{
         margin-bottom: -10px;
         border: solid 1px #F2F3F4;
         border-radius: 50px;
         margin-left: 10px;
         }
         .total{
         text-align: left;
         font: normal normal medium 14px/12px Poppins;
         letter-spacing: 0.31px;
         color: #086E38;
         opacity: 1;
         }
         .header{
         text-align: left;
         font: normal normal 600 16px/12px Poppins;
         letter-spacing: 0.35px;
         color: #086E38;
         opacity: 1;
         }
         footer{
         margin: 40px 0px 0px 0px;
         background-color: #F2F3F4;
         padding: 80px 0px 100px 0px; 
         }
         .footer_country{
         height: auto;
         width: auto;
         border-radius: 50px;
         }
         .ps-footer__widgets p{
         margin-bottom: 15px;
         }
         .ps-list--link li a{
         line-height: 1;
         }
         .platform{
         margin-top: 128px;
         }
         .delivery{
         margin-top: 100px;
         }
         .subscribe{
         margin-top: 90px;
         }
         .icon{
         height: 50px; width: 50px; border-radius: 50px; 
         padding:10px 15px 10px 15px; 
         background-color:#145A32; color:white
         }
         .footer_logo{
         margin-top: 150px;
         }
         .foot_logo{
         background-color: white;
         height: 100px;
         width: 100px;
         border-radius: 50%;
         }
         .foot_img{
         margin-top: 40px;
         }
         .lan{
         border: solid 1px #086E38;
         }
         @media (max-width: 479px) {
         .featurelive{
         width: 87%;
         }
         .livebox{
         min-height: 200px;
         height: auto;
         border-radius: 20px;
         box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
         }
         .ps-logo{
         margin-left: 30px;
         height:  60px;
         width:  60px;
         border-radius: 50px;
         margin-top:  -10px;
         border: solid 1px #D7DBDD;
         margin-left: -15px;
         }
         .ps-logotop{
         margin-left: 30px;
         height:  60px;
         width:  60px;
         border-radius: 50px;
         margin-top:  -10px;
         border: solid 1px white;
         }
         .foot_logo{
         margin-left: 110px;
         }
         .platform{
         margin-top: 40px;
         }
         .com_detail{
         margin-top: -10px;
         }
         .delivery{
         margin-top: 20px;
         }
         .footer_logo {
         margin-top: 40px;
         }
         }
      </style>
      <script src="{{asset('css/plugins/jquery.min.js')}}"></script>
      <script src="{{asset('css/plugins/nouislider/nouislider.min.js')}}"></script>
      <script src="{{asset('css/plugins/popper.min.js')}}"></script>
      <script src="{{asset('css/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('css/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('css/plugins/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('css/plugins/masonry.pkgd.min.js')}}"></script>
      <script src="{{asset('css/plugins/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('css/plugins/jquery.matchHeight-min.js')}}"></script>
      <script src="{{asset('css/plugins/slick/slick/slick.min.js')}}"></script>
      <script src="{{asset('css/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
      <script src="{{asset('css/plugins/slick-animation.min.js')}}"></script>
      <script src="{{asset('css/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
      <script src="{{asset('css/plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
      <script src="{{asset('css/plugins/select2/dist/js/select2.full.min.js')}}"></script>
      <script src="{{asset('css/plugins/gmap3.min.js')}}"></script>
      <!-- custom scripts-->
      <script src="{{asset('css/js/main.js')}}"></script>
      <script>
         function myFunction() {
           var x = document.getElementById("myDIV");
           if (x.style.display === "none") {
             x.style.display = "block";
           } else {
             x.style.display = "none";
           }
         }

         $.ajax({url: "/aladdin_staging/toop/get_carrier.php", success: function(result){
              $(".carrier-area").append(result);
            }});


          $(document).on('change', ".carrier-area [type=radio]", function () {

            var code=$(this).attr('c_code');
            var name=$(this).attr('pro_name');

            $('.carrier-name').text(name);

            $.ajax({
                url: "/aladdin_staging/toop/get_amount.php?code="+code,
                success: function(result){
                    $(".topup-amount select").html(result);

                    var amount = $('.topup-amount select').val();

                    $('.amount').text('RM '+amount);
                }});

          });


          $('input[name="phone_number"]').change(function(){

            var number = $(this).val();

            if(number==''){
                $('.user-phone').text('[no phone number]');
            }else{
                $('.user-phone').text('['+number+']');
            }

          });

          $(document).on('change',"select[name='amount']", function(){

            var amount = $(this).val();

            $('.amount').text('RM '+amount);

          });


          $('.pay-btn').click(function(){
            $('.topup-form').attr('action', "/aladdin_staging/toop/reload_request.php").submit();
          });
      </script>
   </body>
</html>