@extends('frontend.layouts.frontendmaster')

@section('meta')
<title>الاشتراك وتسجيل الدخول – ترند كاست</title>
@endsection

<script src='https://www.google.com/recaptcha/api.js'></script>

@section('content')
    <section id="fun-factor" class="page-section">
        <div class="image-bg content-in fixed" data-background="{{ asset('') }}img/backgrounds/moving-background.jpg"></div>
        <div class="container">
            <div class="row white">
                <div data-animation="fadeInLeft">
                    <h3 class="text-uppercase">اشترك معنا الآن</h3>
                    <p>واجعلنا شريكك الفعلي في مشوارك نحو النجاح، لتدخل في تجربة فريدة للغاية مع توقعات حقيقية تبهرك من اللحظة الأولى.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-factor -->
    <section class="page-section" style="padding-top: 20px;">
        <div class="container">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <div id="signupbox" class="mainbox col-md-8 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">تسجيل حساب جديد</div>
                    </div>  
                    <div class="panel-body" >
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                                @if ($errors->has('privacy'))
                                    <div id="signupalert" class="alert alert-danger">
                                        <span>{{ $errors->first('privacy') }}</span>
                                    </div>
                                @endif
                            <div class="alert alert-info">
                                <span>نمنحك في TrendCast فرصة تجربة خدماتنا مجاناً لمدة أسبوعين من تاريخ الاشتراك</span>
                            </div>

                            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }} required">
                                <label for="firstname" class="col-md-12 control-label">الاسم الكامل
                                    @if ($errors->has('full_name'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="full_name" placeholder="الإسم الكامل" value="{{ old('full_name') }}">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} required">
                                <label for="username" class="col-md-12 control-label">البريد الإلكتروني
                                    @if ($errors->has('username'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="username" placeholder="بريدك الإلكتروني الذي ستستخدمه للدخول" value="{{ old('username') }}">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} required">
                                <label for="password" class="col-md-12 control-label">كلمة السر
                                    @if ($errors->has('password'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('password') }}</forstrong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" placeholder="كلمة السر لحسابك">
                                </div>
                            </div>
                                
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} required">
                                <label for="password_confirmation" class="col-md-12 control-label">تأكيد كلمة السر
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="أعد إدخال كلمة السر">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('country_serial_no') ? ' has-error' : '' }}">
                                <label for="country_serial_no" class="col-md-12 control-label">الدولة
                                    @if ($errors->has('country_serial_no'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('country_serial_no') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <select name="country_serial_no" class="form-control">
                                        <option value="">إختر دولة</option>
                                        @foreach ($countries as $country)
                                        <option {{ old('country_serial_no') == $country->serial_no ? 'selected' : '' }} value="{{ $country->serial_no }}">{{ $country->label_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
<!-- 
                             <div class="form-group{{ $errors->has('membership_plan') ? ' has-error' : '' }} required">
                                <label for="membership_plan" class="col-md-12 control-label">نوع الاشتراك
                                    @if ($errors->has('membership_plan'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('membership_plan') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <select id="membership_plan" name="membership_plan" class="form-control">
                                        <option value="">إختر نوع الاشتراك المرغوب</option>
                                        <option value="stockMarketPlan" {{ old('membership_plan') == 'stockMarketPlan' || ($plan == 'stockMarketPlan' && old('membership_plan') == '') ? 'SELECTED' : '' }}>اشتراك السوق</option>
                                        <option value="customPlan" {{ old('membership_plan') == 'customPlan' || ($plan == 'customPlan' && old('membership_plan') == '') ? 'SELECTED' : '' }}>اشتراك مخصص</option>
                                    </select>
                                </div>
                            </div>


                             <div id="selected_stock_market" class="form-group{{ $errors->has('selected_stock_market') ? ' has-error' : '' }} required hidden">
                                <label for="selected_stock_market" class="col-md-12 control-label">السوق
                                    @if ($errors->has('selected_stock_market'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('selected_stock_market') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <select name="selected_stock_market" class="form-control">
                                        <option value="">إختر السوق المطلوب</option>
                                        @foreach ($stockMarkets as $stockMarket)
                                        <option {{ old('selected_stock_market') == $stockMarket->serial_no ? 'selected' : '' }} value="{{ $stockMarket->serial_no }}">{{ $stockMarket->label_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> -->

                            <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-12 control-label">رقم الجوال
                                    @if ($errors->has('mobile_no'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('mobile_no') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="mobile_no" style="direction: ltr; text-align: right;" placeholder="00972599409858 بالصيغة الدولية" value="{{ old('mobile_no') }}">
                                </div>
                            </div>
                            
                            <input type="hidden" name="referral" value="{{ $referral }}">

                            <input type="hidden" name="source" value="register">
                            <!--
                            <div class="form-group">
                                <label for="control-label col-md-12">رمز التحقق</label>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LfUaCYTAAAAADZQbFbSP2hQ-RNmeBMPQt4kis7a"></div>
                                </div>
                            </div>-->

                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="privacy" class="control-label col-md-12"><input name="privacy" id="privacy" type="checkbox" value="accept" />&nbsp;لقد قرأت <a href="#" onclick="showPolicy();" style="color: black; text-decoration: underline;">اتفاقية الاستخدام و اخلاء المسؤولية</a> و أوافق عليها.</label>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-12">
                                    <button id="btn-signup" type="submit" class="btn btn-black"><i class="icon-hand-right"></i> &nbsp; تسجيل اشتراك جديد</button>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div> 

            <div id="loginbox" class="mainbox col-md-4 col-sm-12">                    
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title" style="font-weight: regular;">الدخول إلى حسابي</div>
                    </div>     

                    <div class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                                    
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="login-username" class="col-md-12 control-label">البريد الإلكتروني
                                    @if ($errors->has('email'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني" />
                                </div>                                      
                            </div>
                        
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="login-password" class="col-md-12 control-label">كلمة المرور
                                    @if ($errors->has('password'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" placeholder="كلمة مرور حسابك">
                                </div>
                            </div>
                        
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" type="submit" class="btn btn-black">تسجيل الدخول</button>
                                    </div>
                                    <div class="col-sm-12 controls">
                                      <a class="pull-right" style="color: red;" href="#" onclick="showPasswordReset();">نسيت كلمة المرور</a>
                                    </div>
                                </div>  
                        </form>     
                    </div>                     
                </div>  
            </div>
        </div>
    </section>

    @if (old('membership_plan') == 'stockMarketPlan' || ($plan == 'stockMarketPlan' && old('membership_plan') == ''))
        @section('javascript')
        <script type="text/javascript">
            $(document).ready(function() {
                $("#selected_stock_market").removeClass('hidden');

                $("#membership_plan").on("change", function() {
                    if ($(this).val() == "stockMarketPlan") {
                        $("#selected_stock_market").removeClass('hidden');
                    } else {
                        $("#selected_stock_market").addClass('hidden');
                    }
                });
            });
        </script>
        @endsection
    @else
        @section('javascript')
        <script type="text/javascript">
            $(document).ready(function() {
                $("#membership_plan").on("change", function() {
                    if ($(this).val() == "stockMarketPlan") {
                        $("#selected_stock_market").removeClass('hidden');
                    } else {
                        $("#selected_stock_market").addClass('hidden');
                    }
                });
            });
        </script>
        @endsection
    @endif

@endsection