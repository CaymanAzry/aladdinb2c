@extends('layouts.public')

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
    <div class="user-login  cols">
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="container">
                       
                       <div class="col-lg-12">
                       <!--  <h1 class="text-center title-page" style="margin-left: 100px">Login</h1> -->
                        <div class="row">

                       <!--  @lang('corals-marketplace-pro::labels.auth.login')</h1> -->
                                                  <div class="col-lg-6 sidebar">
 
        <p style="color:white; font:normal; font-size: 25px;">Welcome<br>Back To</p>
        <h1 style="color:white">Aladdin1</h1>
        <p style="color:white; font-size: 12px; font-family: normal">Authentic &amp; Halal Social Commerce</p>
      
                                              </div>
                            <div class="col-lg-6 forml">

                        <form method="POST" action="{{ route('register') }}"
                              class="ajax-form login-box js-customer-form"
                              id="customer-form">
                            {{ csrf_field() }}
                            <div>
                                <div class="row">
                                     <div class="forms"><a class="form" href="login">login</a><span class="span"></span><a class="form" href="register">Register</a></div>
                                    <div class="forms"><h5 class="form">Create an account</h5></div>
                               
                                    <div class="col-md-12" style="margin-bottom: -10px;">

                                       
                                        <div class="form-group" id="first-name-col">
                                            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" style="margin-bottom: -2px;">Your first name</label>
                                                <input style="border-radius: 10px; font:normal; border:solid #58D68D  1px" type="text" name="name"
                                                        class="form-control input"
                                                       placeholder="@lang('User::attributes.user.name')"
                                                       value="{{ old('name') }}" autofocus/>
                                                @if ($errors->has('name'))
                                                    <div class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-bottom: -10px;">

                                        <div class="form-group" id="last-name-col">
                                            <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                                <label style="margin-bottom: -2px;" for="lastname">Your lastname</label>
                                                <input style="border-radius: 10px; font:normal; border:solid #58D68D  1px" type="text" name="last_name"
                                                       class="form-control input"
                                                       placeholder="@lang('User::attributes.user.last_name')"
                                                       value="{{ old('last_name') }}" autofocus/>
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                                @if ($errors->has('last_name'))
                                                    <div class="help-block">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: -10px;">
                                        <div class="form-group">
                                            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label style="margin-bottom: -2px;" for="email">Email Address</label>
                                                <input style="border-radius: 10px; font:normal; border:solid #58D68D  1px" type="email" name="email"
                                                       class="form-control input"
                                                       placeholder="@lang('User::attributes.user.email')"
                                                       value="{{ old('email') }}"/>
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                                @if ($errors->has('email'))
                                                    <div class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: -10px;">
                                        <div class="form-group">
                                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label style="margin-bottom: -1px">Your password</label>
                                                <div class="input-group js-parent-focus">
                                                   
                                                    <input style="border-radius: 10px; font:normal; border:solid #58D68D  1px" type="password" name="password" class="form-control input"
                                                           placeholder="@lang('User::attributes.user.password')"/>
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                    @if ($errors->has('password'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-bottom: -10px;">
                                        <div class="form-group">
                                            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                               <label style="margin-bottom: -2px">Retype password</label>
                                                <div class="input-group js-parent-focus">
                                                    
                                                    <input style="border-radius: 10px; font:normal; border:solid #58D68D  1px" type="password" name="password_confirmation"
                                                           class="form-control input"
                                                           placeholder="@lang('User::attributes.user.retype_password')"/>
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                    @if ($errors->has('password_confirmation'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: -10px;">
                                        <div class="form-group">
                                            @if( $is_two_factor_auth_enabled = \TwoFactorAuth::isActive())
                                                @if( $twoFaView = \TwoFactorAuth::TwoFARegistrationView())
                                                    <div id="2fa-registration-details">
                                                        @include($twoFaView)
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div style="margin-bottom: -10px;" class="{{ $errors->has('terms') ? ' has-error' : '' }}">
                                                <div class="checkbox icheck" >
                                                    <label>
                                                        <input name="terms"  value="1" type="checkbox"/>
                                                        <strong>@lang('corals-marketplace-pro::labels.auth.agree')
                                                            <a href="#" data-toggle="modal" id="terms-anchor"
                                                               style="color:#41a5d2;"
                                                               data-target="#terms">@lang('corals-marketplace-pro::labels.auth.terms')</a>
                                                </strong>
                                            </label>
                                        </div>
                                        @if ($errors->has('terms'))
                                            <span class="help-block"><strong>@lang('corals-marketplace-pro::labels.auth.accept_terms')</strong></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-center text-sm">
                                        <button style="border-radius: 10px; background-color: #58D68D; color:black" type="submit" class="form-control btn margin-bottom-none">
                                         <!--    @lang('corals-marketplace-pro::labels.auth.register') -->
                                         Signup
                                        </button>
                                        <!-- login button -->
                                        <!-- <a class="btn btn-primary bg-blue margin-bottom-none check-out" href="{{ route('login') }}"
                                           rel="nofollow"
                                           title="Checkout">
                                            <span> @lang('corals-marketplace-pro::labels.partial.login')</span>
                                        </a> -->
                                    </div>
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
    margin: 0px 0px 10px 40px;
}
.forml{
    margin-left: 10px;
    margin-top: 20px;
}
.span{
    border-right: 1px solid grey;
    margin-left: 10px;
    height: 50px;
}
h4{
    color:white;
}
.input:hover{
   box-shadow: 0 4px 8px 0 rgba(88, 214, 141, 0.2), 0 6px 20px 0 rgba(88, 214, 141, 0.19);
}
</style>
@endsection
@component('components.modal',['id'=>'terms','header'=>\Settings::get('site_name').' Terms and policy'])
    {!! \Settings::get('terms_and_policy') !!}
@endcomponent