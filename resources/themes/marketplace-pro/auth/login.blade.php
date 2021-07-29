@extends('layouts.auth')

@section('content')
    <div class="wrap-banner">
        <nav class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">
                    <ol>
                        <li>
                            <a href="#">
                                <span>@lang('corals-marketplace-pro::labels.auth.login_register')</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>

    </div>
    
    <div class="user-login cols" >
        <div id="wrapper-site" >
            <div id="content-wrapper">
                <div id="main" >
                    <div class="container mains">
                       
                       <div class="col-xs-12 col-sm-12 col-md-12col-lg-12">
                       <!--  <h1 class="text-center title-page" style="margin-left: 100px">Login</h1> -->
                        <div class="row">
 
                        

                       <!--  @lang('corals-marketplace-pro::labels.auth.login')</h1> -->
                                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 sidebar">
 
        <p style="color:white; font:normal; font-size: 25px;">Welcome<br>Back To</p>
        <h1 style="color:white">Aladdin1</h1>
        <p style="color:white; font-size: 12px; font-family: normal">Authentic &amp; Halal Social Commerce</p>
      
                                              </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 forml">
                        <div class="login-form">
                            <form id="customer-form" method="post" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="p-2">
                                    @php \Actions::do_action('pre_login_form') @endphp
                                </div>
            

                                 <div class="row margin-bottom-1x justify-content-center">
                                    @if(config('services.facebook.client_id'))


                                        <div class="col"><a
                                                    class="btn btn-sm btn-block facebook-btn"
                                                    href="{{ route('auth.social', 'facebook') }}"><i
                                                        class="fa fa-facebook"></i>&nbsp;@lang('corals-marketplace-pro::labels.auth.sign_in_facebook')
                                            </a></div>
                                    @endif
                                    @if(config('services.twitter.client_id'))

                                        <div class="col"><a
                                                    class="btn btn-sm btn-block twitter-btn"
                                                    href="{{ route('auth.social', 'twitter') }}"><i
                                                        class="fa fa-twitter"></i>&nbsp;@lang('corals-marketplace-pro::labels.auth.sign_in_twitter')
                                            </a></div>
                                    @endif
                                    @if(config('services.google.client_id'))
                                        <div class="col"><a
                                                    class="btn btn-sm btn-block google-btn"
                                                    href="{{ route('auth.social', 'google') }}"><i
                                                        class="fa fa-gplus"></i>@lang('corals-marketplace-pro::labels.auth.sign_in_google')
                                            </a></div>
                                    @endif

                                </div>

                               <!--  <h4 class="margin-bottom-1x text-center">@lang('corals-marketplace-pro::labels.auth.or_using_form')</h4>
 -->                             
                               <div class="forms"><a class="form" href="#">login</a><span>|</span><a class="form" href="register">Register</a></div>
                               
                                <div class="form-group text-center">
                                    @if(session('confirmation_user_id'))
                                        <a href="{{ route('auth.resend_confirmation') }}">@lang('User::labels.confirmation.resend_email')</a>
                                    @endif
                                </div>
                                <div class="form-group input-group d-block has-feedback {{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom: -1px;">
                                    <div class="input-icon">
                                        <i class="lni-user"></i>
                                        <label for="email" style="margin-bottom: 5px; font:normal;">Email Address</label>
                                        <input style="border-radius: 10px; font:normal; border:solid #58D68D  2px" type="text" id="email" class="form-control input" name="email"
                                               placeholder="@lang('User::attributes.user.email')"
                                               value="{{ old('email') }}" autofocus><span
                                                class="input-group-addon"><i class="icon-mail"></i></span>
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group input-group d-block has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-icon">
                                        <i class="lni-lock"></i>
                                        <label for="password" style="font:normal; margin-bottom: 2px;">Your password</label>
                                        <input style="border-radius: 10px; font:normal; border:solid #58D68D  2px" type="password" name="password" class="form-control input" id="password"
                                               placeholder="@lang('User::attributes.user.password')"><span
                                                class="input-group-addon"><i class="icon-lock"></i></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                 <a href="{{ route('password.request') }}">
                                                <span class="fa fa-question"></span>
                                                @lang('corals-marketplace-pro::labels.auth.forget_password')
                                            </a>
                                <div class="form-group mb-3 has-feedback">
                                    <div class="checkbox text-center" style="margin-bottom: -10px;">
                                        <input type="checkbox" 
                                               name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                       <!--  @lang('corals-marketplace-pro::labels.auth.remember_me') -->
                                       <small style="font-size: 12px" style="margin-bottom: ">Keep me signed in</small>
                                    </div>
                                </div>
                                <div class="text-center text-sm-right">
                                    <div class="row">
                                        <div class="col" style="margin-bottom: -10px;">

                                            <button style="border-radius: 10px; background-color: #58D68D; color:black" type="submit"
                                                    class="btn  btn-block margin-bottom-none float-left">@lang('corals-marketplace-pro::labels.auth.login')</button>
                                        </div>
                                    </div>
                                    <div class="row">

                                     
                                   
                                         
                                  
                                        @if('services.facebook.client_id')


                                        <div class="col-xs-5 col-lg-6"><a style="background-color:#3498DB; color:white; font-size: 8px; font-weight: bold; margin-left: -10px; height: 30px; width: 120px;padding-top: 10px; border:solid 1px #3498DB " 
                                                    class="btn btn-sm btn-block facebook-btn"
                                                    href="{{ route('auth.social', 'facebook') }}"><i
                                                        class="fa fa-facebook"></i>&nbsp;<!-- @lang('corals-marketplace-pro::labels.auth.sign_in_facebook') -->
                                                        SignIn with facebook
                                            </a></div>
                                    @endif
                                   @if('services.google.client_id')
                                        <div class="col-xs-5 col-lg-6"><a style="background-color: #E74C3C; color:white;font-size: 8px; font-weight: bold; height: 30px; width: 120px; padding-top: 10px; border: solid 1px #E74C3C;" 
                                                    class="btn btn-sm btn-block google-btn"
                                                    href="{{ route('auth.social', 'google') }}"><i
                                                        class="fa fa-gplus"></i><!-- @lang('corals-marketplace-pro::labels.auth.sign_in_google') -->
                                                        SignIn with google
                                            </a></div>
                                    @endif
                                  
                                    </div>
                                    <p class="text-center" style="font-size: 11px; font-family: normal">By Creating or signing in, you are agree to our term and Condition and Privacy Policy</p>
                                    <!-- <div class="row">
                                        <div class="col">
                                            <a href="{{ route('register') }}"
                                               class="btn btn-primary bg-blue margin-bottom-none btn-block">@lang('corals-marketplace-pro::labels.auth.register')</a>

                                        </div> -->
                                      <!--   <div class="col">
                                            <a href="{{ route('password.request') }}"
                                               class="btn bg-yellow btn-social btn-primary btn-block">
                                                <span class="fa fa-question"></span>
                                                @lang('corals-marketplace-pro::labels.auth.forget_password')
                                            </a>
                                        </div> -->
                                   <!--  </div>
 -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
        </div>
        </div>
    

    </div>
<!-- @endsection
@component('components.modal',['id'=>'terms','header'=>\Settings::get('site_name').' Terms and policy'])
    {!! \Settings::get('terms_and_policy') !!}
@endcomponent -->

<style>
    .box{
    background-color:green;
}
form{
    width: 300px;
    background-color: white;
    color:black;
    margin-top: 10px;
}
.cols{
    background-color: #1E8449;
    width: 50%;
    height: auto;
    color:white;
    margin-left: 25%; 
    border-radius: 10px;
    
    margin-bottom: -20px;
}
.sidebar{
    padding: 100px 0px 0px -50px;
    color:white;
     background-size: 100% 100%;
     margin-top: 150px;
     margin-left: -50px;
     margin-right: 40px;



}
.form{
    font-size: 20px;
    font:normal normal;
    color:black;
    margin: 0px 15px 0px 15px;
}
.forms{
    margin: 0px 0px 0px 40px;
}
.forml{
    margin-left: 10px;
    margin-top: 20px;
}
span{
    font-style: 25px;
}
h4{
    color:white;
}
.input{
    border-radius: 10px;
    border: solid 1px #229954;
}

@media (max-width: 767px) {
 
}

@media (max-width: 479px) {
  .cols{
    background-color: #1E8449;
    width: 80%;
    height: auto;
    color:white;
    margin-left: 10%; 
    border-radius: 10px;
    
    margin-bottom: -20px;
}
.sidebar{
    padding: 50px 0px 0px 0px;
    color:white;
     background-size: 100% 100%;
     margin-top: 50px;
     margin-left: 10px;
     margin-right: 40px;
}
.forml{
    margin-left: -15%;
}
}
</style>