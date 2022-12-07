@extends('frontend.layouts.frontendmaster')

@section('meta')
<title>استعادة كلمة المرور – ترند كاست</title>
@endsection

<script src='https://www.google.com/recaptcha/api.js'></script>

@section('content')
    <section id="fun-factor" class="page-section">
        <div class="image-bg content-in fixed" data-background="{{ asset('') }}img/backgrounds/moving-background.jpg"></div>
        <div class="container">
            <div class="row white">
                <div data-animation="fadeInLeft">
                    <h3 class="text-uppercase">اشترك معنا الآن مع <span class="text-color">ترند كاست</span></h3>
                    <p>اشترك معنا واجعلنا شريكك الفعلي في مشوارك نحو النجاح، لتدخل في تجربة فريدة للغاية مع توقعات حقيقية تبهرك من اللحظة الأولى.</p>
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
            <div id="signupbox" class="mainbox col-md-12 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">استعادة كلمة المرور</div>
                    </div>  
                    <div class="panel-body" >
                        
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} required">
                                <label for="firstname" class="col-md-12 control-label">الاسم الكامل
                                    @if ($errors->has('email'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="email" placeholder="البريد الإلكتروني" readonly="" value="{{ $email or old('email') }}">
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

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-12">
                                    <button id="btn-signup" type="submit" class="btn btn-black"><i class="icon-hand-right"></i> &nbsp; استعادة كلمة المرور الآن</button>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div> 
        </div>
    </section>

@endsection