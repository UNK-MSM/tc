@extends('frontend.layouts.frontendmaster')

@section('meta')
<title>تم تفعيل حسابك بنجاح – ترند كاست</title>
@endsection

@section('content')
<section id="fun-factor" class="page-section">
    <div class="image-bg content-in fixed" data-background="img/backgrounds/moving-background-2.jpg"></div>
    <div class="container">
        <div class="row white">
            <div data-animation="fadeInLeft">
                <h3 class="text-uppercase">اشترك معنا الآن مع <span class="text-color">ترند كاست</span></h3>
                <p>اشترك معنا واجعلنا شريكك الفعلي في مشوارك نحو النجاح، لتدخل في تجربة فريدة للغاية مع توقعات حقيقية تبهرك من اللحظة الأولى.</p>
            </div>
        </div>
    </div>
</section>

<section class="page-section light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">تم تغيير كلمة المرور بنجاح</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify; font-weight: bold;">لقد تم تغيير كلمة المرور بنجاح و تسجيل دخولك، للانتقال لحسابك الخاص <a style="color: #ffc400" href="{{asset(
                '')}}portal/my_stocks">النقر هنا</a>.</p>
                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
@endsection