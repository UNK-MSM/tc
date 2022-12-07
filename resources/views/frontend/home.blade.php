@extends('frontend.layouts.frontendmaster') 

@section('meta')
<title>ترند كاست - لتحليل وتوقع أسعار الأسهم</title>
<meta name="title" content="ترند كاست - لتحليل وتوقع أسعار الأسهم" />
<meta name="description" content="ترند كاست نظام علمي مبتكر لتحليل وتوقع أسعار الأسهم بدلاً من التحليل الفني، تحليل الأسهم السعودية ، تحليل الأسهم." />
@endsection

@section('content')
    @if (old('formId') == 'signUp')
    <script type="text/javascript">
        window.location.hash = 'register';
    </script>
    @endif

    @if (old('formId') == 'doContactUs')
    <script type="text/javascript">
        window.location.hash = 'support';

        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function() {
                $("#support").click();
            }, 200);
        });
    </script>
    @endif

    @if (isset($fragmentId))
    <section id="fun-factor" class="page-section">
        <div class="image-bg content-in fixed" data-background="../img/backgrounds/moving-background-2.jpg"></div>
        <div class="container">
            <div class="row white">
                <div data-animation="fadeInLeft">
                    <h4 class="text-uppercase" style="display: inline-block; background-color: rgba(0, 0, 0, 0.3); padding: 5px;">امتلك أحدث الأدوات المبتكرة في تحليل الأسهم</h4>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="slider" id="home">
        <div id="main-slider" class="relative">
            <ul class="menu slider-controls">
                <li class="highlighted">
                    <i class="feature-icon flaticon-old-microscope"></i>
                    <span>أسلوب علمي مبتكر</span>
                </li>

                <li>
                    <i class="feature-icon flaticon-increasing-line-graphic-of-business"></i>
                    <span>الأسواق و الأسهم</span>
                </li>

                <li>
                    <i class="feature-icon flaticon-responsive-design-for-variety-of-screens-formats"></i>
                    <span>سهل الاستخدام</span>
                </li>

                <li>
                    <i class="feature-icon flaticon-live-news-report"></i>
                    <span>تحليل فوري</span>
                </li>

                <li>
                    <i class="feature-icon flaticon-fast-transport"></i>
                    <span>التعامل مع الأسباب الطارئة</span>
                </li>
            </ul>

            <section class="slider-1-content slider-material current">
                <h3>أسلوب علمي مبتكر</h3>
                <p>يستخدم نظام TrendCast الحقائق العلمية في التنبؤ ، اعتمادا على أدوات التحليل والتنبؤ المعروفة إضافة إلى  أو أدواتنا المبتكرة. <br /><a href="#register" class="call-to-action-button">ابدأ الآن</a></p>                
                <img src="{{ asset('') }}img/slidermaterial/slider-1.png" />
            </section>

            <section class="slider-2-content slider-material not-visible">
                <h3>الأسواق و الأسهم</h3>
                <p>آلية التحليل المبتكرة في النظام تسمح له بالتعامل مع كافة أسواق الأسهم العالمية، و يتم تعديل إعدادات النظام بطريقة آلية لتتناسب مع خصائص كل سهم في كل سوق. <br /><a href="#register" class="call-to-action-button">ابدأ الآن</a></p>
                <img src="{{ asset('') }}img/slidermaterial/slider-2.png" />
            </section>

            <section class="slider-3-content slider-material not-visible">
                <h3>سهل الاستخدام</h3>
                <p>لا يتطلب استخدام النظام أي نوع من الخبرة أو المهارة أو التدريب كل ما يحتاجة المشترك هو اختيار السهم الذي يريد،<br />وسوف تظهر النتيجة بالأرقام. <br /><a href="#register" class="call-to-action-button">ابدأ الآن</a></p>                
                <img src="{{ asset('') }}img/slidermaterial/slider-1.png" />
            </section>

            <section class="slider-4-content slider-material not-visible">
                <h3>تحليل فوري</h3>
                <p>بانتهاء جلسة التداول و احتساب اسعار الإغلاق حسب آلية السوق يحصل المشترك على توقع لحركة السهم لليوم التالي. و اثناء التداول يمكن متابعة و توقع حركة السهم. <br /><a href="#register" class="call-to-action-button">ابدأ الآن</a></p>
                <img src="{{ asset('') }}img/slidermaterial/slider-4.png" class="round" />
            </section>

            <section class="slider-5-content slider-material last-material not-visible">
                <h3>التعامل مع الأسباب الطارئة</h3>
                <p style="text-align: justify; color: white; font-weight: bold; width: 100%">أحيانا يفاجئك السوق بأخبار و أحداث غير متوقعة تطيح بكل التحليلات لكن مع نظام TrendCast  وبقليل من الانتباه و المتابعة منك يمكنك توقع تأثير هذه العوامل <br /><a href="#register" class="call-to-action-button">ابدأ الآن</a></p>
            </section>

            <img src="{{ asset('') }}img/sections/slider/hosting-slide3.jpg?vid=4" alt="" />
            <img class="slider-5-special-background slider-image-content" style="position: absolute; top: 0; opacity: 0;" class="last" src="{{ asset('') }}img/sections/slider/hosting-slide4.jpg?vid=5" alt="" />
        </div>
    </section>
    @endif

    @if ((isset($fragmentId) && $fragmentId == 'service') || !isset($fragmentId))
    <section id="service" class="page-section">
        <div class="container">
            <div class="section-title">
                <!-- Heading -->
                <h2 class="title">مميزات نظام TrendCast</h2>
            </div>
            <div class="row">
                <div class="col-md-4" data-animation="fadeInLeft">
                    <ul class="features-list features-list-left">
                        <li class="features-list-item">
                            <!-- Icon -->
                            <i class="fa fa-list fa-2x border-black"></i>
                            <div class="features-content">
                                <!-- Title -->
                                <h5>نتائج محددة</h5>
                                <!-- Text -->
                                <p>نتائج التحليل عبار ة عن نسب مئوية تبين قوة الاحتمال و قيمة ر قمية تشير  إلى سعر الإغلاق المتوقع.</p>
                            </div>
                        </li>
                        <li class="features-list-item">
                            <!-- Icon -->
                            <i class="fa fa-arrows fa-2x border-black"></i>
                            <div class="features-content">
                                <!-- Title -->
                                <h5>تقدير الاتجاه</h5>
                                <!-- Text -->
                                <p>التحليل يشير إلى اتجاه السهم المتوقع بالارتفاع أو الانخفاض أو البقاء عند نفس المستوى بدرجة كافية من الدقة.</p>
                            </div>
                        </li>
                        <li class="features-list-item">
                            <!-- Icon -->
                            <i class="fa fa-area-chart fa-2x border-black"></i>
                            <div class="features-content">
                                <!-- Title -->
                                <h5>توقع سعر الإغلاق</h5>
                                <!-- Text -->
                                <p>التحليل يشير إلى سعر الإغلاق المتوقع مع تفاصيل جزئية على شكل  3 مستويات لحالة الارتفاع  و احتمالاتها و 3 مستويات  لحالة الانخفاض واحتمالاتها.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-center" data-animation="fadeInUp">
                    <!-- Image -->
                    <img src="{{ asset('') }}img/tablet.jpg" width="350" height="480" alt="" style="margin-top: 60px;" />
                </div>
                <div class="col-md-4" data-animation="fadeInRight">
                    <ul class="features-list features-list-right" style="text-align: right;">
                        <li class="features-list-item">
                            <!-- Icon -->
                            <i class="fa fa-flash fa-2x border-black"></i>
                            <div class="features-content">
                                <!-- Title -->
                                <h5>تحليل فوري</h5>
                                <!-- Text -->
                                <p>سوف تعرف اتجاه وسعر الإغلاق المتوقع لليوم التالي بمجرد دخول سعر الإغلاق لليوم الحالي.</p>
                            </div>
                        </li>
                        <li class="features-list-item">
                            <!-- Icon -->
                            <i class="fa fa-cogs fa-2x border-black"></i>
                            <div class="features-content">
                                <!-- Title -->
                                <h5>أثناء التداول</h5>
                                <!-- Text -->
                                <p>أدخل السعر الحالي أثناء جلسة التداول تحصل على توقع عن اتجاه السهم والمستوى الذي يصل إليه السعر  معززاً بالاحتمالات بالنسب المئوية.</p>
                            </div>
                        </li>
                        <li class="features-list-item">
                            <!-- Icon -->
                            <i class="fa fa-microphone fa-2x border-black"></i>
                            <div class="features-content">
                                <!-- Title -->
                                <h5>الطواريء والمفاجآت</h5>
                                <!-- Text -->
                                <p>الأسباب والمؤثرات المفاجئة تخرج السوق عن مساره العادي وترفع الأسهم أو تخفضها بنسب غير متوقعة. ونظام TrendCast يوفر لك الحل.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if ((isset($fragmentId) && $fragmentId == 'analysis-methodology') || !isset($fragmentId))
    <span class="anchor" id="analysis-methodology"></span>
    <section class="page-section light-bg">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-4 text-center bottom-xs-pad-30" data-animation="pulse">
                     Image
                    <img src="{{ asset('') }}img/sections/irp.png" width="280" height="440" alt="" />
                </div> -->
                <div class="col-md-12" data-animation="fadeInRight">
                    <div id="main-title" class="section-title" data-animation="fadeInUp">
                        <!-- Title -->
                        <h2 class="title">التحليل المبتكر فيTrendCast </h2>
                    </div>
                    <!-- Content -->
                    

                    <p style="text-align: justify;">نظام مبتكر لتحليل وتوقع أسعار الأسهم قام بتطويره د. عماد ملكاوي في إطار أبحاثه في مجال قياس وتوقع القيم المستقبلية للمتغيرات التي تتسم بالعشوائية مثل أسعار الأسهم وغيرها.يعتمد النظام الجديد على أسلوب رياضي إحصائي متطور أطلق عليه الباحث اسم تكامل الاحتمالات العشوائية  IRP - Integration of random probabilities     يستخدم فيه بيانات تاريخية لفترات طويلة نسبياً تتمثل في هذه الحالة بسعر الإغلاق اليومي للسهم والذي يتغير بطريقة عشوائية وفق ظروف وعوامل ونسب مختلفة.</p>
                    <p style="text-align: justify;">هذه العوامل والظروف والنسب يتم ترميزها وتحديد خصائصها وتحويلها إلى أنماط يمكن حساب احتمالات حدوثها عند متابعتها على مدى سنوات وبشكل يومي.  وعند تحديد الظروف و العوامل التي أدت إلى حدوث آخر سعر إغلاق يتم حساب احتمالات التغيير القادم وترجيح الاحتمال الأكبر وتوقع اتجاه وقيمة الإغلاق التالي.</p>
                    <P style="text-align: justify;"> كل ذلك في المسار العادي للسوق - مسار المضاربة و جني الأرباح في ظروف عادية - لكن عند وقوع اسباب و مؤثرات طارئة  يكون التحليل و التوقع في المسار العادي غير مناسب. فإذا كنت متابعا لأحداث و متغيرات السوق و الاقتصاد و أوضاع الشركات يمكنك اختيار السبب الذي تتوقع تأثيره ليقوم النظام بحساب ذلك الأثر. </p> 
                    <!-- Features -->
                    <!-- Features -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    @endif

    @if ((isset($fragmentId) && $fragmentId == 'testimonials') || !isset($fragmentId))
    <span class="anchor" id="testimonials"></span>

    <section id="testimonials" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 testimonails">
                    <div class="section-title">
                        <!-- Heading -->
                        <h2 class="title">قالوا عن TrendCast</h2>
                    </div>
                    <div class="owl-carousel pagination-1 dark-switch" data-pagination="true" data-autoplay="true" data-navigation="false" data-items="1" data-desktop="1">
                        <div class="item pad-10" data-animation="fadeInLeft">
                            <div class="desc-border bottom-arrow">
                                <blockquote class="small-text text-center">
                                    شيء رائع أن أحصل كمستثمر على أداة علمية جديدة لتحليل أداء السهم اعتماداً على التحليل الكمي وحساب الاحتمالات المتكاملة . ومع أن أسلوب التحليل يعتمد على عمليات حسابية ورياضية معقدة . فإن ما لفت نظري في نظام ترند كاست سهولة الاستخدام وتعدد الخيارات التي تمكن المستثمر من تكوين رأي محدد عند اتخاذ قرار الشراء أو البيع.
                                </blockquote>
                            </div>
                            <div class="client-details text-center">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="{{ asset('img/testimonial-1.jpg') }}" width="80" height="80" alt="">
                                </div>
                                <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">محمد حمد الشحي</strong>
                                    <!-- Company -->
                                    <span>مستثمر في السوق المالي</span>
                                </div>
                            </div>
                        </div>
                        <div class="item pad-10">
                            <div class="desc-border bottom-arrow">
                                <blockquote class="small-text text-center">
                                    كنت دائماً أتطلع إلى  وجود  أدوات تحليل أخرى تختلف عن التحليل الفني وكنت على قناعة بأن التحليل الرياضي الكمي هو الحل. لكن كيف ؟ وما هي المدخلات والمخرجات؟ هذا ما أسعدني أن أجد الجواب عليه في أسلوب الاحتمالات المتكاملة في نظام ترند كاست. حيث يحصل المستخدم على توقع لإغلاق اليوم التالي وعند كل سعر أثناء التداول. والأجمل من ذلك التوقع تحت تأثير الأخبار والأسباب الطارئة.
                                </blockquote>
                            </div>
                            <div class="client-details text-center">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="{{ asset('img/testimonial-2.jpg') }}" width="80" height="80" alt="">
                                </div>
                                <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">رامي خريسات</strong>
                                    <!-- Company -->
                                    <span>خبير في الأسواق المالية</span>
                                </div>
                            </div>
                        </div>
                        <div class="item pad-10">
                            <div class="desc-border bottom-arrow">
                                <blockquote class="small-text text-center">
                                    يواجه المستخدمون اليوم تحديات كبيرة بسبب التعقيد والافراط في المعلومات,وهنا يأتي نظام TrendCast  ليساعد في إيجاد حل لتبسيط العمل على أنظمة التحليل والتوقع لاداء الأسهم ,وبصفتي اعمل في مجال تصميم البرامج منذ ما يزيد عن عشرين سنة فان نظام TrendCast نظام متميز جدا بتصميمه العصري ووظائفه الشاملة واستخدامه المبسط, نظام متخصص جدا وبنفس الوقت مفيد جدا لشرائح متعددة من المستخدمين  سواء كانوا مؤسسات أو افراد.
                                </blockquote>
                            </div>
                            <div class="client-details text-center">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="{{ asset('img/testimonial-3.jpg') }}" width="80" height="80" alt="">
                                </div>
                                <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">محمود جاغوب</strong>
                                    <!-- Company -->
                                    <span>مدير عام مجموعة المجرة الدولية</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="section-title">
                        <!-- Heading -->
                        <h2 class="title">الأسواق المتاحة</h2>
                    </div>
                    @foreach ($stockMarkets as $market)
                    <div class="boxed-block inline-block margin-10" data-animation="fadeInLeft" style="position: relative; width: 130px; height: 130px; background-color: white;">
                        <a style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%" title="{{ $market->label_ar }}"><img src="{{ '/tcps/public/img/logo/min/' . $market->logo }}" width="130" height="130" alt=""></a>
                    </div>
                    @endforeach
                        <!-- clients -->
                </div>                    
            </div>
        </div>
    </section>
    @endif

    @if ((isset($fragmentId) && $fragmentId == 'how-to-start') || !isset($fragmentId))
    <span class="anchor" id="how-to-start"></span>
    <section id="how-to-start-section" class="page-section light-bg selected-slide-0">
        <div class="container" style="height: 350px; overflow: hidden;">
            <div class="section-title">
                <!-- Heading -->
                <h2 class="title">كيف أبدأ ؟</h2>
            </div>

            <ul class="steps-menu">
                <li class="selected"><i class="flaticon-clipboard-with-pencil"></i></li>
                <li><i class="flaticon-eye"></i></li>
                <li><i class="flaticon-technical-support"></i></li>
            </ul>

            <div class="row first-slide menu-slide">
                <div class="col-md-7">
                    <h4>سجل لدينا في الموقع</h4>سجل في النظام واختر اسم المستخدم وكلمة السر، اشترك في الباقة المجانية لمدة أسبوع حتى تتأكد من فاعلية النظام، اختر الأسهم التي تهمك واشترك فيها حسب الأسعار المحددة واستفد من الخصومات الممنوحة.
                    <a style="color: goldenrod;" href="{{ asset('index#pricing') }}">سجل الآن</a>
                </div>
                <div class="col-md-5">
                    <img style="border-radius: 35px; box-shadow: 5px 5px 0 0 rgba(0, 0, 0, 0.3)" src="{{ asset('') }}img/sections/slider/bottom-slider1.jpg"/>
                </div>
            </div>

            <div class="row second-slide menu-slide">            
                <div class="col-md-7">
                    <h4>نتائج توقع دقيقة</h4>في كل يوم بعد إغلاق السوق النظام يعطيك الاتجاه والسعر المتوقع للسهم لليوم التالي.أما أثناء التداول  يعطيك النظام الاتجاه المتوقع للسهم عند السعر الحالي أو أي سعر تحدده أنت  ليساعدك في اتخاذ قرار البيع أو الشراء.</div>
                <div class="col-md-5">
                    <img style="border-radius: 35px; box-shadow: 5px 5px 0 0 rgba(0, 0, 0, 0.3)" src="{{ asset('') }}img/sections/slider/bottom-slider2.jpg"/>
                </div>
            </div>

            <div class="row third-slide menu-slide">
                <div class="col-md-7">
                    <h4>دوماً موجودون من أجلك</h4>فريق خدمة العملاء لدينا يستقبل استفساراتكم بكل ترحيب على مدار الساعة. فلا تترددوا <a style="color: goldenrod;" href="#support" onclick="$('#support').click()">بالاتصال بنا</a>.</div>
                <div class="col-md-5">
                    <img style="border-radius: 35px; box-shadow: 5px 5px 0 0 rgba(0, 0, 0, 0.3)" src="{{ asset('') }}img/sections/slider/bottom-slider3.jpg"/>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    @endif

    @if (isset($fragmentId) && $fragmentId == 'register' || !isset($fragmentId))
    <span class="anchor" id="register"></span>
    <section class="page-section" style="padding-top: 20px;">
        <div class="container">
            <div class="section-title">
                <!-- Heading -->
                <h2 class="title">اشترك الآن مجاناً</h2>
            </div>

            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                @if ($errors->has('privacy'))
                    <div id="signupalert" class="alert alert-danger">
                        <span>{{ $errors->first('privacy') }}</span>
                    </div>
                @endif

                <div class="col-md-6 col-sm-12 form-group{{ $errors->has('full_name') ? ' has-error' : '' }} required">
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

                <div class="col-md-6 col-sm-12 form-group{{ $errors->has('username') ? ' has-error' : '' }} required">
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

                <div class="col-md-6 col-sm-12 form-group{{ $errors->has('password') ? ' has-error' : '' }} required">
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
                    
                <div class="col-md-6 col-sm-12 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} required">
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

                <div class="col-md-6 col-sm-12 form-group{{ $errors->has('country_serial_no') ? ' has-error' : '' }}">
                    <label for="country_serial_no" class="col-md-12 control-label">الدولة
                        @if ($errors->has('country_serial_no'))
                            <span class="help-block pull-right">
                                <strong>{{ $errors->first('country_serial_no') }}</strong>
                            </span>
                        @endif
                    </label>
                    <div class="col-md-12">
                        <select name="country_serial_no" class="form-control">
                            <option value="" selected>إختر دولة</option>
                            @foreach ($countries as $country)
                            <option {{ old('country_serial_no') == $country->serial_no && old('country_serial_no') != ''? 'selected' : '' }} value="{{ $country->serial_no }}">{{ $country->label_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                    <label for="firstname" class="col-md-12 control-label">رقم الجوال
                        @if ($errors->has('mobile_no'))
                            <span class="help-block pull-right">
                                <strong>{{ $errors->first('mobile_no') }}</strong>
                            </span>
                        @endif
                    </label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="mobile_no" style="direction: ltr; text-align: right;" placeholder="+97142629252 بالصيغة الدولية" value="{{ old('mobile_no') }}">
                    </div>
                </div>

                 <!-- <div class="col-md-6 col-sm-12 form-group{{ $errors->has('membership_plan') ? ' has-error' : '' }} required">
                    <label for="membership_plan" class="col-md-12 control-label">نوع الاشتراك
                        @if ($errors->has('membership_plan'))
                            <span class="help-block pull-right">
                                <strong>{{ $errors->first('membership_plan') }}</strong>
                            </span>
                        @endif
                    </label>
                    <div class="col-md-12">
                        <select id="membership_plan" name="membership_plan" class="form-control">
                            <option value="" selected>إختر نوع الاشتراك المرغوب</option>
                            <option value="stockMarketPlan" {{ old('membership_plan') == 'stockMarketPlan' ? 'SELECTED' : '' }}>اشتراك السوق</option>
                            <option value="customPlan" {{ old('membership_plan') == 'customPlan' ? 'SELECTED' : '' }}>اشتراك مخصص</option>
                        </select>
                    </div>
                </div>

                 <div id="selected_stock_market" class="col-md-6 col-sm-12 form-group{{ $errors->has('selected_stock_market') ? ' has-error' : '' }} required hidden">
                    <label for="selected_stock_market" class="col-md-12 control-label">السوق
                        @if ($errors->has('selected_stock_market'))
                            <span class="help-block pull-right">
                                <strong>{{ $errors->first('selected_stock_market') }}</strong>
                            </span>
                        @endif
                    </label>
                    <div class="col-md-12">
                        <select name="selected_stock_market" class="form-control">
                            <option value="" selected>إختر السوق المطلوب</option>
                            @foreach ($stockMarkets as $stockMarket)
                            <option {{ old('selected_stock_market') == $stockMarket->serial_no ? 'selected' : '' }} value="{{ $stockMarket->serial_no }}">{{ $stockMarket->label_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> -->
                
                <input type="hidden" name="referral" value="{{ $referral }}">

                <input type="hidden" name="formId" value="signUp">

                <input type="hidden" name="source" value="home">

                <!--
                <div class="form-group">
                    <label for="control-label col-md-12">رمز التحقق</label>
                    <div class="col-md-12">
                        <div class="g-recaptcha" data-sitekey="6LfUaCYTAAAAADZQbFbSP2hQ-RNmeBMPQt4kis7a"></div>
                    </div>
                </div>-->

                <div class="col-md-12 form-group clearfix" style="margin-bottom: 15px;">
                    <label class="control-label col-md-12"><input name="privacy" id="privacy" type="checkbox" value="accept" />&nbsp;لقد قرأت <a  onclick="showPolicy();" style="color: black; text-decoration: underline;">اتفاقية الاستخدام و اخلاء المسؤولية</a> و أوافق عليها.</label>
                </div>

                <div class="col-md-12 form-group">
                    <!-- Button -->                                        
                    <div class="col-md-12">
                        <button id="btn-signup" type="submit" class="btn btn-black"><i class="icon-hand-right"></i> &nbsp; تسجيل اشتراك جديد</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @endif

    @if ((isset($fragmentId) && $fragmentId == 'faq') || !isset($fragmentId))
    <section class="page-section light-bg"">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 faq">
                    <div class="section-title text-left" data-animation="fadeInUp">
                        <!-- Heading -->
                        <h2 class="title">الدعم والمساعدة</h2>
                    </div>
                    <ul class="buttons-tabs">
                        <li class="selected"><button class="btn"><i class="fa fa-question-circle"></i>&nbsp;الأسئلة المتكررة</button></li>
                        <li><button id="support" class="btn"><i class="fa fa-support"></i>&nbsp;اتصل بنا الآن</button></li>
                    </ul>

                    <div id="contact-us-tab" style="display: none;">
                        <h4 class="panel-title" style="margin-bottom: 10px; margin-top: 10px;">فريق خدمة العملاء لدينا يستقبل استفساراتكم بكل ترحيب على مدار الساعة. فلا تترددو بالتواصل معنا عن طريق تعبئة النموذج أدناه  :</h4>
                        <form method="post" class="col-md-6" action="{{ asset('') }}doContactUs">
                            {{ csrf_field() }}
                            <div class="col-md-12 form-group{{ $errors->has('full_name') ? ' has-error' : '' }} required">
                                <label for="fullName" class="col-md-12 control-label">الاسم
                                    @if ($errors->has('full_name'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" id="fullName" name="full_name" value="{{ old('full_name') }}" placeholder="الاسم الكامل">
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('email_address') ? ' has-error' : '' }} required">
                                <label for="emailAddress" class="col-md-12 control-label">البريد الإلكتروني
                                    @if ($errors->has('email_address'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('email_address') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <input type="email" class="form-control" id="emailAddress" name="email_address" value="{{ old('email_address') }}" placeholder="أدخل البريد الإلكتروني للتواصل">
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('previous_member') ? ' has-error' : '' }} required">
                                <label for="previousMember" class="col-md-12 control-label">هل أنت مشترك حالي
                                    @if ($errors->has('previous_member'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('previous_member') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <select class="form-control" id="previousMember" name="previous_member">
                                    <option value="">إختر إن كنت مشتركاً حالياً</option>
                                    <option value="نعم" {{ old('previous_member') == 'نعم' ? 'selected' : '' }}>نعم</option>
                                    <option value="لا" {{ old('previous_member') == 'لا' ? 'selected' : '' }}>لا</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('subject') ? ' has-error' : '' }} required">
                                <label for="subject" class="col-md-12 control-label">الموضوع
                                    @if ($errors->has('subject'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <select class="form-control" id="subject" name="subject">
                                    <option value="">إختر الموضوع</option>
                                    <option value="الإبلاغ عن خلل" {{ old('subject') == 'الإبلاغ عن خلل' ? 'selected' : '' }}>الإبلاغ عن خلل</option>
                                    <option value="طلب إضافة سهم جديد" {{ old('subject') == 'طلب إضافة سهم جديد' ? 'selected' : '' }}>طلب إضافة سهم جديد</option>
                                    <option value="طلب إضافة سوق مالي جديد" {{ old('subject') == 'طلب إضافة سوق مالي جديد' ? 'selected' : '' }}>طلب إضافة سوق مالي جديد</option>
                                    <option value="اقتراح" {{ old('subject') == 'اقتراح' ? 'selected' : '' }}>اقتراح</option>
                                    <option value="آلية الدفع و التسعيير" {{ old('subject') == 'آلية الدفع و التسعيير' ? 'selected' : '' }}>آلية الدفع و التسعيير</option>
                                    <option value="آلية الاشتراك" {{ old('subject') == 'آلية الاشتراك' ? 'selected' : '' }}>آلية الاشتراك</option>
                                    <option value="أخرى" {{ old('subject') == 'أخرى' ? 'selected' : '' }}>أخرى</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('body') ? ' has-error' : '' }} required">
                                <label for="body" class="col-md-12 control-label">التفاصيل
                                    @if ($errors->has('body'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('captcha') ? ' has-error' : '' }} required">
                                <label for="captcha">رمز التحقق
                                    @if ($errors->has('captcha'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('captcha') }}</strong>
                                        </span>
                                    @endif
                                </label>
                                <div class="g-recaptcha" data-sitekey="6LfUaCYTAAAAADZQbFbSP2hQ-RNmeBMPQt4kis7a"></div>
                            </div> 

                            <input type="hidden" name="formId" value="doContactUs">

                            <button class="btn" style="float: left; margin-bottom: 15px;">أرسل الآن</button>
                        </form>
                    </div>

                    <div class="panel-group" id="faq-tab" role="tablist" aria-multiselectable="true" data-animation="fadeInLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq1" aria-expanded="true" aria-controls="faq1">
                                        بماذا يختلف أسلوب تكامل الاحتمالات IRP عن أسلوب التحليل الفني؟
                                    </a>
                                </h4>
                            </div>
                            <div id="faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    أسلوب تكامل الاحتمالات يعتمد أساساً على حساب الاحتمالات . فهو يقوم بتحليل ظروف التداول لفترات طويلة قد تصل إلى 10 سنوات أو أكثر وبشكل يومي، ويحدد الظروف التي حدثت وأدت إلى ارتفاع أو انخفاض أو استقرار سعر إغلاق السهم وبنسب مختلفة ثم يتم حساب احتمالات التغيير القادم بناءً على ظروف التداول الحالية. أما التحليل الفني فله أدواته الخاصة و لا يتعامل مع الاحتمالات.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq2" aria-expanded="true" aria-controls="faq2">
                                        هل يستطيع نظام TrendCast توقع التغييرات الناتجة عن الأحداث المفاجئة مثل نتائج الشركات  أو الأزمات الاقتصادية  أو الاضطرابات السياسية أو الكوارث الطبيعية وما شابهها؟
                                    </a>
                                </h4>
                            </div>
                            <div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    أسعار الأسهم تتغير وفق مسارين : المسار الطبيعي الذي يمثل تصرفات وممارسات المستثمرين في الشراء بسعر مناسب والبيع بسعر أعلى لجني الأرباح. هذا المسار يخلق ظروف وأنماط تتكرر بأعداد ملموسة يمكن حصرها وإحصاؤها وحساب احتمالاتها . لذلك يستطيع نظام تكامل الاحتمالات توقع تغييرات الأسعار في هذا المسار بدقة كافية.
                                </div>
                                <div class="panel-body">
                                    أما التغييرات المفاجئة والطارئة الناتجة عن الظروف المذكورة في السؤال فهي خارج المسار الطبيعي وهي حالات طارئة لايمكن توقعها بأي أسلوب من أساليب التحليل. لكن نظامنا الجديد يقدم أداة  للتعامل مع الظروف الطارئة.
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq3" aria-expanded="true" aria-controls="faq3">
                                        كيف أستفيد من النظام الجديد عند وجود ظروف ومتغيرات طارئة ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    في نظام تكامل الاحتمالات قمنا بحصر أهم الحالات والأسباب الطارئة وحسبنا مدى تأثيرها سلباً أو إيجاباً بالنسب المئوية. وعلى المستثمر أن يكون متابعاً للأخبار والتقارير الاقتصادية والمالية وسوف يجد توقعات بحدوث تأثير لسبب من الأسباب الطارئة وعندها عليه أن يختار هذا السبب من ضمن قائمة الأسباب الطارئة التي وضعناها في النظام  وسوف يقوم النظام بحساب السعر المتوقع تحت تأثير السبب الذي تم اختياره.
                                </div>                                
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq4" aria-expanded="true" aria-controls="faq4">
                                        ما مدى دقة التوقعات التي يقدمها النظام بالمقارنة مع أسلوب التحليل الفني؟
                                    </a>
                                </h4>
                            </div>
                            <div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    في مجال التوقع أو التنبؤ العلمي للمتغيرات العشوائية  وأياً كان أسلوب التوقع  لا يمكن الحديث عن مستويات دقة بنسبة مائة بالمائة ولا حتى ثمانين بالمائة . إذا كانت أكثرية التوقعات صحيحة فهي دقة جيدة لأن القرارات التي تنبني عليها تكون أكثريتها صحيحة . وقد قمنا باختبار دقة النظام باستخدام البيانات التاريخية وكانت التوقعات دقيقة بدرجة كافية في المسار الطبيعي للسوق أي بدون الأسباب والمؤثرات الطارئة التي لا يمكن توقعها. وفي حالة وجود تلك الأسباب يتيح النظام للمشترك أن يستخدم أسلوب التوقع تحت الأسباب الطارئة الذي يعتبر ميزة ينفرد بها نظام  TrendCast  وعندها  يكون التوقع صحيحاً ويرتفع مستوى الدقة بشكل ملموس. لذلك فإن إلمام المستخدم بظروف السوق و متابعته لأوضاع وأخبار الشركات يساهم في الاستفادة من أدوات ومميزات يوفرها النظام للحصول على توقعات دقيقة . وبشكل عام فإن التحليل بأسلوب تكامل الاحتمالات أكثر دقة من أسلوب التحليل الفني.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq5" aria-expanded="true" aria-controls="faq5">
                                        هل يتطلب استخدام أسلوب تكامل الاحتمالات خبرة من المستخدم في مجال التحليل؟
                                    </a>
                                </h4>
                            </div>
                            <div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    نظام تكامل الاحتمالات يستخدم نماذج رياضية إحصائية متطورة ويعطي نتائج جاهزة عن  احتمالات الارتفاع و مخاطر الانخفاض على شكل نسب مئوية مع توضيح بالرسم البياني وبعض الشروحات المختصرة . ولا تأثير لخبرة أو مهارة المستخدم في الوصول إلى النتائج .
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq6" aria-expanded="true" aria-controls="faq6">
                                        عندما تكون نتيجة التحليل  : احتمال الارتفاع 42%   و مخاطر الانخفاض 35%  و احتمال البقاء عند نفس المستوى 23% فما معنى ذلك؟
                                    </a>
                                </h4>
                            </div>
                            <div id="faq6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    النتائج المذكورة تعني أنه في ظروف التداول الحالية والتي تكررت لمرات كثيرة فإن سعر السهم ارتفع في 42% من الحالات  من مستوى آخر إغلاق إلى المستوى المحدد . وفي 35% من الحالات انخفض إلى المستوى المحدد .وبقي عند مستوى الإغلاق السابق في 23% من الحالات.  أي أن احتمال الارتفاع هو الأرجح مع ضرورة الإطلاع على الإحتمالات الجزئية لكل من الإرتفاع و الانخقاض و قراءة الشروحات المختصرة التي نقدمها مع النتيجة.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-faq1" href="#faq7" aria-expanded="true" aria-controls="faq7">
                                        كم يجب أن تكون النسبة المئوية للارتفاع أو الانخفاض حتى نقول أنها مؤكدة أو مرجحة؟ 
                                    </a>
                                </h4>
                            </div>
                            <div id="faq7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    في علم الاحتمالات كل مازادت نسبة الاحتمال زادت فرصة حدوثه لكن حتى الاحتمالات القليلة فهي واردة لكن فرصتها أقل وبشكل عام إذا كانت نسبة الانخفاض 5% مثلاً فمعناها  أنه إذا تكررت ظروف التداول الحالية مرات كثيرة فإن السعر سينخفض في  5% منها. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection

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

    <script type="text/javascript" src="{{ asset('') }}js/home_main.js"></script>
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

    <script type="text/javascript" src="{{ asset('') }}js/home_main.js"></script>
    @endsection
@endif