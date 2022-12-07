<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5MTD9XF');</script>
		<!-- End Google Tag Manager -->

        <script src='https://www.google.com/recaptcha/api.js'></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @section('meta')

        @show
        <meta name="keywords" content="Trendcast Stock Prediction" />
        <meta name="author" content="trend-cast.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.png" />
        <!-- Font -->

        @section('stylesheets')
        <!--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />-->
        <!-- Font Awesome Icons 
        <link href='{{ asset('') }}css/font-awesome.min.css' rel='stylesheet' type='text/css' />-->
        <!-- Bootstrap core CSS 
        <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet" />-->
        <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}css/css_content" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" rel="stylesheet" />

        <!--<link href="{{ asset('') }}css/hover-dropdown-menu.ar.css" rel="stylesheet" />
        Icomoon Icons 
        <link href="{{ asset('') }}css/icons.css" rel="stylesheet" />
        <!-- Revolution Slider 
        <link href="{{ asset('') }}css/revolution-slider.css" rel="stylesheet" />
        <link href="{{ asset('') }}rs-plugin/css/settings.css" rel="stylesheet" />
        <!-- Animations 
        <link href="{{ asset('') }}css/animate.min.css" rel="stylesheet" />
        <!-- Owl Carousel Slider 
        <link href="{{ asset('') }}css/owl/owl.carousel.css" rel="stylesheet" />
        <link href="{{ asset('') }}css/owl/owl.theme.css" rel="stylesheet" />
        <link href="{{ asset('') }}css/owl/owl.transitions.css" rel="stylesheet" />
        <!-- PrettyPhoto Popup 
        <link href="{{ asset('') }}css/prettyPhoto.css" rel="stylesheet" />-->
        <!-- fancy Select 
        <link href="{{ asset('') }}css/fancySelect.css" rel="stylesheet">-->
        <!-- Custom Style 
        <link href="{{ asset('') }}css/style.css?vid=2" rel="stylesheet" />
        <link href="{{ asset('') }}css/responsive.css" rel="stylesheet" />
        <!-- Color Scheme 
        <link href="{{ asset('') }}css/color.css" rel="stylesheet" />

        <link href="{{ asset('') }}css/trendcast-ar.css?vid=2" rel="stylesheet" type="text/css"/>

        <!--<link href="{{ asset('') }}css/introjs-min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}css/introjs-rtl.min.css" rel="stylesheet" type="text/css"/>-->

        @show
    </head>
    <body class="boxed">
    	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MTD9XF"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
        <div id="overlay-bg" style="
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    z-index: 10000;
                                    background-color: rgba(0, 0, 0, 0.5);
                                    {{ old('formId') == 'login' ? '' : 'display: none;' }}
                                ">
            <div id="floatingloginbox" class="mainbox" style="  position: absolute;
                                                                top: 50%;
                                                                left: 50%;
                                                                z-index: 10000;
                                                                transform: translate(-50%, -50%);
                                                                width: 35%;
                                                            ">                    
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">الدخول إلى حسابي</div>
                    </div>     

                    <div class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="formId" value="login" />

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                <label for="email" class="col-md-12 control-label">البريد الإلكتروني
                                	@if ($errors->has('email'))
                                        <span class="help-block pull-right">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني">
                                </div>

                                                                        
                            </div>
                        
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
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

                                      <a href="{{ asset('') }}signup/stockMarketPlan" class="pull-right btn btn-black">تسجيل اشتراك</a>
                                    </div>
                                    <div class="col-sm-12 controls">
                                      <a class="pull-left" style="color: red;" href="#" onclick="showPasswordReset();">نسيت كلمة المرور</a>
                                    </div>
                                </div>  
                        </form>     
                    </div>                     
                </div>  
            </div>

            <div id="floatingresetbox" class="mainbox" style="  position: absolute;
                                                                top: 50%;
                                                                left: 50%;
                                                                z-index: 10000;
                                                                transform: translate(-50%, -50%);
                                                                width: 35%;
                                                                display: none;
                                                            ">                    
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">تسيت كلمة المرور</div>
                    </div>     

                    <div class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <p>إذا كنت قد نسيت كلمة المرور، يرجى إدخال بريدك الإلكتروني والنقر على زر الاستعادة.</p>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}
                                    
                            <div class="form-group">
                                <label for="login-username" class="col-md-12 control-label">البريد الإلكتروني</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                                                        
                            </div>
                        
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" type="submit" class="btn btn-black">استعادة كلمة المرور</button>
                                    </div>
                                </div>  
                        </form>     
                    </div>                     
                </div>  
            </div>



            <div id="floatingpolicybox" class="mainbox" style="  position: absolute;
                                                                top: 50%;
                                                                left: 50%;
                                                                z-index: 10000;
                                                                transform: translate(-50%, -50%);
                                                                height: 80%;
                                                                width: 85%;
                                                                display: none;
                                                            ">                    
                <div class="panel panel-info" style="height: 100%">
                    <div class="panel-heading">
                        <div class="panel-title">اتفاقية الاستخدام و اخلاء المسؤولية</div>
                    </div>     

                    <div class="panel-body" style="overflow-y: auto; height: calc(100% - 49.4px);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-left">
                                        <!-- Title -->
                                        <h2 class="title">إخلاء المسئولية</h2>
                                    </div>
                                    <!-- Content -->
                                    <p style="text-align: justify; font-weight: bold;">تحرص إدارة الموقع في إطار سعيها لتقديم خدمة تحليل أداء الأسهم وتوقع اتجاهاتها المستقبلية باستخدام أسلوب  تكامل الاحتمالات العشوائية  إلى مراعاة الدقة والتأكد من استخدام البيانات الصحيحة التي تنشرها الأسواق المالية واستقراء الأخبار الاقتصادية وغير الاقتصادية التي لها تأثير على الأسواق المالية بهدف الوصول إلى أفضل النتائج. وفي حال وجود  أي خطأ في البيانات أو الأخبار أو الاستنتاجات التي يستخدمها أو يعرضها الموقع فهي حتماً من قبيل السهو أو الخطأ غير المقصود مع التأكيد التام بأن إدارة الموقع لا مصلحة لها ولا هدف في استخدام أو تقديم أية بيانات أو أخبار أو استنتاجات غير صحيحة.</p>

                                    <p style="text-align: justify; font-weight: bold;">إن الاسنتاجات والتوقعات التي تصدر عن الموقع بخصوص أي سهم أو سلعة أو ورقة مالية أو غيرها تستند إلى المفهوم العلمي للاحتمالات حيث يكون الترجيح للاحتمال الأكبر، مع عدم استبعاد أي احتمال آخر مهما كان قليلاً. ويتم عرض الاحتمالات المحسوبة أمام المستخدم وعليه وحده مسؤلية اتخاذ أي قرار بخصوصها دون جزم أو تأكيدٍ قاطع من قبل الموقع بصحة أو خطأ أحد الاحتمالات.</p>

                                    <p style="text-align: justify; font-weight: bold;">يعتبر دخول المستخدم إلى الموقع واطلاعه على محتوياته وتحليلاته سواءً كان مشتركاً أو في فترة التجربة أو من خلال طرف آخر أياً كان إقراراً تلقائياً منه بإخلاء مسؤولية الموقع وإدارته والأطراف المالكة له والمشاركة فيه وكذلك الموظفين والوكلاء والموزعين والمزودين له بالبيانات والأخبار عن أية أضرار مادية أو معنوية مباشرة أو غير مباشرة  تقع على المستخدم جراء استعمال أو عدم استعمال أية خدمات أو محتويات أو بيانات أو إعلانات منشورة على الموقع. ويلتزم المستخدم بإعفاء الموقع وكافة الأطراف المرتبطة به من المسؤولية التي تترتب على قيام المستخدم بإساءة استعمال الخدمة.</p>
                                    <!-- Features -->
                                    <!-- Features -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-left">
                                        <!-- Title -->
                                        <h2 class="title">اتفاقية الاستخدام</h2>
                                    </div>
                                    <!-- Content -->
                                    <p style="text-align: justify; font-weight: bold;">تعتبر هذه الاتفاقية إطاراً حاكماً للتعامل مع الموقع يحدد الشروط والمسؤوليات الملزمة لمن يستخدم الموقع وتتألف من أحد عشر بنداً و هذه المقدمة التي تعتبر جزءاً منها وتسري على جميع الخدمات التي يقدمها الموقع:</p>

                                    <ol>
                                        <li>تعتبر الفقرة الخاصة بإخلاء المسؤولية   بكافة تفاصيلها  جزءاً من الاتفاقية .</li>
                                        <li>يلتزم الموقع ببذل الجهد الممكن لتقديم خدمة التحليل على أساس تكامل الاحتمالات استناداً إلى البيانات الصحيحة  التي تنشرها الأسواق المالية.</li>
                                        <li>يحتفظ الموقع بحقه في جمع واستخدام معلومات عن المستخدم كالتي يتم تعبئتها في استمارة التسجيل وذلك للأغراض الإحصائية ولأغراض تحسين الخدمة.</li>
                                        <li>يلتزم الموقع بتوفير السرية الكاملة لبيانات المستخدمين، وعدم بيعها، أو إطلاع أي طرف ثالث علىيها.</li>
                                        <li>يلتزم الموقع باتخاذ المعايير اللازمة لحماية البيانات وحفظها، علما بأن شبكة الإنترنت ليست وسيلة آمنة 100% لحفظ المعلومات السرية. و لا يتحمل الموقع أية مسؤولية عن تعرض المعلومات والبيانات المحفوظة فية للقرصنة باعتبارها عملاً خارجاً عن إرادته.</li>
                                        <li>يعتبر دخول المستخدم إلى الموقع واطلاعه على البيانات والنتائج الأخبار الواردة فيه موافقة ضمنيةً منه على الالتزام ببنود هذه الاتفاقية.</li>
                                        <li>يلتزم المستخدم بالمحافظة على سرية بيانات الحساب المخصص له، بما في ذلك اسم المستخدم وكلمة السر الخاصة به، كما يعتبر مسئولا مسئولية كاملة عن أي استعمال للخدمة يتم من خلال اسم المستخدم وكلمة السر الخاصة به سواء تم ذلك من طرفه أو من قبل طرفٍ آخر.</li>
                                        <li>يحق لإدارة الموقع إلغاء أو إيقاف أي حق في استعمال الخدمة في حالة انتهاك المستخدم أي بند من بنود هذه الاتفاقية. أو مخالفة أية  نصوص قانونية، أو في حالة قيامه بتصرفات تراها إدارة الموقع غير مناسبة أو تنتهك اتفاقية الاستخدام.</li>
                                        <li>يحتفظ الموقع بكافة الحقوق في تغيير أو تعديل أو إلغاء أو تبديل كل أو جزء من الخدمة.</li>
                                        <li>يحتفظ الموقع بكافة الحقوق في إجراء أي تغيير أو تعديل على كل أو بعض بنود اتفاقية الاستخدام، سواء كان ذلك بالحذف أو الإضافة، بما في ذلك الشروط المتعلقة بفرض قيود أو رسوم على استعمال الخدمة.</li>
                                        <li>يلتزم الموقع بإخطار المستخدم بالتغييرات والتعديلات التي تجرى على اتفاقية الاستخدام، وذلك من خلال نشرها على الموقع أو بإخطار المستخدم بأي وسيلة أخرى من وسائل الإخطار. وتعتبر هذه التغييرات سارية المفعول بمجرد إخطار المستخدم بها، كما يعتبر استعمال المستخدم للخدمة بعد إخطاره بتلك التغييرات بمثابة موافقة منه على تلك التغييرات. </li>
                                    </ol>
                                    <!-- Features -->
                                    <!-- Features -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>                     
                </div>                     
            </div> 
        </div>
        <div id="page">
            <!-- Top Bar -->
            <!-- Sticky Navbar -->
            <header id="sticker" class="sticky-navigation header-logo-center">
                <!-- Sticky Menu -->
                <div class="sticky-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default navbar-bg-light" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar-header">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">تغيير التصفح</span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span></button> 
                                        <!-- Logo -->
                                        <a class="navbar-brand" href="index.html">
                                            <img class="site_logo" alt="Site Logo" src="{{ asset('') }}img/logo.png" />
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->

                                    @if (isset($currentUser))
                                    <div style="width: calc(100% + 30px); position: relative; left: 15px; background-color: #ddc993; font-size: 80%; padding: 5px;">
                                        <span class="pull-left">
                                        أنت مسجل الدخول باسم <a href="#">{{ $currentUser->full_name }}</a>&nbsp;|&nbsp;<a href="{{ asset('') }}logout">تسجيل الخروج</a></span>

                                        <span class="pull-right">تم تسجيل الدخول بتاريخ {{ $currentUser->last_login_date }}</span>

                                        <div class="clearfix"></div>
                                    </div>
                                    @endif

                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav justified-top-menu">
                                            <!-- Home  Mega Menu -->
                                            <li class="center-logo">
                                                <a class="navbar-brand" href="{{ asset('index') }}">
                                                    <img class="site_logo" alt="Trendcast Logo" src="{{ asset('') }}img/logo.png" />
                                                </a>
                                            </li>

                                            <li class="mega-menu">
                                                <a href="{{ asset('') }}index">الرئيسة</a>
                                            </li>

                                            @if ($currentUser != null)
                                            <li class="mega-menu visible-sm">
                                                <a href="{{ asset('') }}portal/my_stocks">الدخول للنظام</a>
                                            </li>
                                            @else
                                            <li class="mega-menu visible-sm">
                                                <a onclick="showLogin();" href="#">تسجيل الدخول</a>
                                            </li>
                                            @endif

                                            <!-- Mega Menu Ends -->
                                            <!-- Pages Mega Menu -->
                                            <li class="mega-menu">
                                                <a href="{{ asset('') }}index#analysis-methodology">أسلوب التحليل</a>
                                            </li>
                                            <!-- Pages Menu Ends -->
                                            <!-- Portfolio Menu -->
                                            <li>
                                                <a href="{{ asset('') }}pricing">التسجيل والاشتراك</a> 
                                            </li>
                                            <!-- Portfolio Menu -->
                                            <!-- Shop Menu -->
                                            <!-- Ends Shop Menu -->

                                            <li>
                                                <a href="{{ asset('') }}index#support">الدعم الفني</a> 
                                            </li>

                                            <!-- Features Menu -->
                                            <li>
                                                <a href="{{ asset('') }}about">عن النظام</a>
                                            </li>
                                            <!-- Ends Features Menu -->
                                            <!-- Blog Menu -->
                                            <!-- Ends Widgets Block -->
                                            <!-- Pages Mega Menu -->
                                            <!-- <li class="mega-menu">
                                                <a href="pricing#calculator" onclick="window.location = '{{ asset('') }}pricing#calculator';">تكلفة الاشتراك</a>
                                            </li> -->

                                            <!-- <li class="mega-menu">
                                                <a href="{{ asset('') }}blog/">المدونة</a>
                                            </li> -->

                                            @if ($currentUser != null)
                                            <li class="mega-menu visible-md visible-lg">
                                                <a href="{{ asset('') }}portal/my_stocks">الدخول للنظام</a>
                                            </li>
                                            @else
                                            <li class="mega-menu visible-md visible-lg">
                                                <a onclick="showLogin();" href="#">تسجيل الدخول</a>
                                            </li>
                                            @endif

                                            <!-- Shortcode Menu Ends -->
                                            <!-- Search Box Block -->
                                            <!--<li class="search-dropdown">
                                                <a href="#">
                                                    <span class="searchbox-icon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu left">
                                                    <li>
                                                        <form class="navbar-form navbar-left" role="search">
                                                            <div class="form-group">
                                                                <input type="text" value="" name="s" id="s" class="form-control" placeholder="search" />
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>-->
                                            <!-- Ends Search Box Block -->
                                        </ul>
                                        <!-- Right nav -->
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!-- Sticky Menu -->
            </header>
            <!-- Sticky Navbar -->
            <div class="clearfix"></div>
        
            @yield('content')

            <!-- request -->
            <footer id="footer">
                <!-- footer-top -->
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <!-- Copyrights -->
                            <div class="col-xs-10 col-sm-6 col-md-6"><a href="#">trend-cast.com</a> &copy; 2021. هذا الموقع ومنتجاته تحت إدارة وملكية شركة TrendCast للاستشارات
                                <br />
                                <!-- Terms Link -->
                                <a href="{{ asset('') }}terms">شروط الاستخدام</a> / <a href="{{ asset('') }}disclaimer">إخلاء المسئولية</a>
                                 / <a href="{{ asset('') }}privacy">سياسة الخصوصية</a>
                            </div>
                            <div style="text-align: left;" class="col-xs-2  col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                                <!-- Goto Top -->
                                <img src="{{ asset('img/master_visa.jpg') }}" width="80" height="80" alt="">
                                <a href="#page">
                                    <i class="glyphicon glyphicon-arrow-up" style="font-family: 'Glyphicons Halflings' !important;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-bottom -->
            </footer>
            <!-- footer -->
        </div>
        <!-- page -->
        <!-- Scripts -->
        
        <script type="text/javascript" src="{{ asset('') }}js/jquery.min.js"></script> 
        <script type="text/javascript" src="{{ asset('') }}js/bootstrap.min.js"></script> 
        <!-- Menu jQuery plugin 
        <script type="text/javascript" src="{{ asset('') }}js/hover-dropdown-menu.ar.js"></script> -->
        <!-- Menu jQuery Bootstrap Addon 
        <script type="text/javascript" src="{{ asset('') }}js/jquery.hover-dropdown-menu-addon.js"></script> --> 
        <!-- Scroll Top Menu -->
        <script type="text/javascript" src="{{ asset('') }}js/jquery.easing.1.3.js"></script> 
        <!-- Sticky Menu --> 
        <script type="text/javascript" src="{{ asset('') }}js/jquery.sticky.js"></script> 
        <!-- Bootstrap Validation -->
        <script type="text/javascript" src="{{ asset('') }}js/bootstrapValidator.min.js"></script> 
        <!-- Revolution Slider 
        <script type="text/javascript" src="{{ asset('') }}rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
        <script type="text/javascript" src="{{ asset('') }}rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
        <script type="text/javascript" src="{{ asset('') }}js/revolution-custom.js"></script> -->
        <!-- Portfolio Filter 
        <script type="text/javascript" src="{{ asset('') }}js/jquery.mixitup.min.js"></script> -->
        <!-- Animations -->
        <script type="text/javascript" src="{{ asset('') }}js/jquery.appear.js"></script> 
        <script type="text/javascript" src="{{ asset('') }}js/effect.js"></script> 
        <!-- Owl Carousel Slider -->
        <script type="text/javascript" src="{{ asset('') }}js/owl.carousel.ar.min.js"></script> 
        <!-- Pretty Photo Popup 
        <script type="text/javascript" src="{{ asset('') }}js/jquery.prettyPhoto.js"></script> -->
        <!-- Parallax BG  -->
        <script type="text/javascript" src="{{ asset('') }}js/jquery.parallax-1.1.3.js"></script>
        <!-- Fun Factor / Counter 
        <script type="text/javascript" src="{{ asset('') }}js/jquery.countTo.js"></script> -->
        <!-- Twitter Feed  -->
        <script type="text/javascript" src="{{ asset('') }}js/tweet/carousel.ar.js"></script> 
        <!--<script type="text/javascript" src="{{ asset('') }}js/tweet/scripts.js"></script> 
        <script type="text/javascript" src="{{ asset('') }}js/tweet/tweetie.min.js"></script>
        <!-- Background Video 
        <script type="text/javascript" src="{{ asset('') }}js/jquery.mb.YTPlayer.js"></script> -->
        <!-- Fancy select
        <script type="text/javascript" src="{{ asset('') }}js/fancySelect.js"></script> -->
        <!-- Custom Js Code -->
        <script type="text/javascript" src="{{ asset('') }}js/custom.js"></script> 

        <script src="{{ asset('') }}js/intro.min.js" type="text/javascript"></script>

        <script src="{{ asset('') }}js/site_main.js" type="text/javascript"></script>

        <!-- Scripts -->
        @yield('javascript')

        <script src="{{ asset('') }}js/analytics.js" type="text/javascript"></script>

        <script type="text/javascript">
            function initInterval() {

            }
        </script>
    </body>
</html>