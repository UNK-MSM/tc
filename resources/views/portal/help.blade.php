@extends('portal.layouts.master')

@section('title', 'الإرشادات')

@section('stylesheets')
        @parent
        <link href="{{ asset('portal/assets/pages/css/profile-rtl.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar" style="position: fixed;">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet " style="padding-top: 10px !important;">
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">فهرس الإرشادات</div>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li>
                                <a href="#first-look">
                                    <i class="fa fa-eye"></i> النظرة الأولى </a>
                            </li>
                            <li>
                                <a href="#my-stock">
                                    <i class="fa fa-line-chart"></i> أسهمي </a>
                            </li>
                            <li>
                                <a href="#methodology">
                                    <i class="fa fa-magic"></i> آلية التحليل </a>
                            </li>
                            <li>
                                <a href="#methodology-more">
                                    <i class="fa fa-support"></i> التكامل والمخاطر </a>
                            </li>
                            <li>
                                <a href="#urgent-calculation">
                                    <i class="fa fa-leanpub"></i> تحليل الأسباب الطارئة </a>
                            </li>
                            <li>
                                <a href="#my-account">
                                    <i class="fa fa-user"></i> حسابي </a>
                            </li>
                            <li>
                                <a href="#video-lib">
                                    <i class="fa fa-youtube-play"></i> مكتبة الفيديو </a>
                            </li>
                            <li>
                                <a href="#question">
                                    <i class="fa fa-question"></i> المساعدة </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
                <!-- PORTLET MAIN -->
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content help">

                <div class="portlet light profile-sidebar-portlet " style="padding: 10px !important;">
                    <span class="anchor" id="first-look"></span>
                    <h4><i class="fa fa-eye"></i>&nbsp;النظرة الأولى</h4> <p>أنت الآن داخل نظام التحليل ترند كاست وفي أعلى الصفحة تشاهد شريط أو قائمة  الخيارات الرئيسية حيث يمكنك الدخول إلى  صفحة <a href="{{ asset('portal/my_stocks') }}" target="_blank">أسهمي</a>  أو  <a href="{{ asset('portal/my_account') }}" target="_blank">حسابي</a>  أو  <a href="{{ asset('portal/video-lib') }}" target="_blank">مكتبة الفيديو</a>   أو  <a href="{{ asset('portal/contactUs') }}" target="_blank">المساعدة</a>    أو صفحة <a href="{{ asset('portal/help') }}" target="_blank">الإرشادات</a> التي تطالعها الآن.</p>

                    <span class="anchor" id="my-stock"></span>
                    <h4><i class="fa fa-line-chart"></i>&nbsp;أسهمي</h4>

                    <p>أنت هنا في الجزء الأهم حيث نتائج و أدوات التحليل للأسهم التي اخترت الاشتراك فيها بالاضافة إلى شريط الأخبار العامة في أعلى الصفحة وفيه تطالع بعض الأخبار المحلية و العالمية التي نرى أنها قد ئؤثر على أسواق المال بشكل مباشر أو غير مباشر. كما تشاهد زاوية للأخبار والتنبيهات التى تتعلق بسهم معين أو سوق معين. </p>

                    <p>ونود الإشارة إلى أننا لا نركز على سرد واستقصاء كافة الأخبار عن الشركات والقرارات والاجتماعات  لآنها متاحة في كثير من المواقع والمصادر وأهمها مواقع الأسواق المالية .  تركيزنا سيكون على إظهار خبر له تأثير مباشر على السهم أو التنبيه ولفت النظر إلى استخدام سبب محدد من قائمة الأسباب الطارئة.</p>

                    <p>في صفحة أسهمي رتبنا لك أسهمك على شكل جدول من خمسة أعمدة. حيث تجد في العمود الأول اسم السهم وفي الأعمدة التالية احتمال الارتفاع واحتمال الانخفاض واحتمال الثبات وفي الأخير سعر الإغلاق السابق. وفي كل عمود يظهر السعر الممكن واحتمال حدوثه . وتستطيع بنظرة سريعة أخذ فكرة عن اتجاهات الأسهم ومستويات الإغلاق المحتملة. مع الانتباه إلى أن الأسعار والاحتمالات في الجدول هي أسعار الإغلاق المتوقعة في نهاية اليوم وليست الأسعار التي تتغير وتتبدل أثناء جلسة التداول ، فهذه لها <a href="{{ asset('index#about-quant-4-cast') }}" target="_blank">مكان آخر</a>.</p>

                    <p>بالضغط على اسم السهم تدخل إلى صفحة التحليل التفصيلي الخاصة بهذا السهم وفي بدايتها تشاهد المخطط البياني لمسار السهم لبضعة أيام سابقة ثم الاتجاهات الثلاث الممكنة للإغلاق التالي للسهم على شكل ثلاثة فروع : الأخضر يشير  إلى احتمال ومستوى الارتفاع الممكن  والأحمر إلى احتمال ومستوى الانخفاض الممكن والأزرق إلى احتمال الثبات عند المستوى السابق. ويشير الوميض في نهاية أحد الفروع إلى أنه صاحب  الاحتمال الأكبر . و نطلق على الاحتمالات المذكورة - الاتجاه العام -   وبموجب نظرية الاحتمالات المتكاملة فإن الاتجاه العام تشير إلى الاتجاه العام المتوقع للسهم.</p>
                    
                    <p>الجدول المجاور للرسم البياني  يضم  مجموعة من عناصر التحليل هي الاتجاه العام التي ظهرت في الرسم البياني وهي هنا على شكل أرقام ونسب مئوية. ثم نسبة التكامل والمخاطر.</p>

                    <span class="anchor" id="methodology"></span>
                    <h4><i class="fa fa-magic"></i>&nbsp;آلية التحليل</h4>
                    <p>عناصر التحليل الأساسية هي:</p>

                    <ul>
                        <li style="margin-bottom: 15px;">الاتجاه العام ( الارتفاع والانخفاض والثبات).</li>
                        <li style="margin-bottom: 15px;">نسبة التكامل.</li>
                        <li>المخاطر.</li>
                    </ul>

                    <p>ويتم احتساب هذه العناصر وفق خوارزميات  رياضية دقيقة في إطار نظرية الاحتمالات المتكاملة  المبتكرة. وتدل الاتجاه العام كما ذكرنا على الاتجاه العام للسهم عند الإغلاق. أما نسبة التكامل فتشير إلى نزعة أو ميل السهم نحو الارتفاع في حين تشير المخاطر إلى نزعة أو ميل السهم إلى الانخفاض. ولا نقصد بالمخاطر هنا تذبذب سعر السهم- كما هو شائع -  وأنما المقصود إمكانية انخفاض سعر السهم عن مستوى الإغلاق السابق أو عن السعر المحدد أثناء التداول.</p>

                    <p>وتكون نتيجة التحليل وفق الآلية التالية:</p>

                    <ul>
                        <li style="margin-bottom: 15px;">الاحتمال الأكبر من الاتجاه العام يشير إلى الاتجاه العام المتوقع عند الإغلاق.</li>
                        <li style="margin-bottom: 15px;">إذا كانت نسبة التكامل أكبر من المخاطر ، يميل السهم إلى الارتفاع أثناء التداول.</li>
                        <li style="margin-bottom: 15px;">إذا كانت المخاطر أكبر من نسبة التكامل ، يميل السهم إلى الانخفاض أثناء التداول.</li>
                        <li style="margin-bottom: 15px;">إذا كان احتمال الارتفاع أكبر من باقي الاتجاه العام ونسبة التكامل أكبر من المخاطر فهذا ترجيح لمسار الارتفاع أثناء التداول وعند الإغلاق.</li>
                        <li style="margin-bottom: 15px;"> إذا كان احتمال الارتفاع أكبر من باقي الاتجاه العام وكانت المخاطر أكبر من نسبة التكامل فإن السهم يتجه أساساً إلى الارتفاع مع ميل للانخفاض بسبب ارتفاع المخاطر مما قد يغير الاتجاه الأساسي للسهم إلى الانخفاض بدل الارتفاع.</li>
                        <li style="margin-bottom: 15px;">إذا كان احتمال الانخفاض أكبر من باقي الاتجاه العام وكانت المخاطر أكبر من نسبة التكامل فهذا ترجيح لمسار الانخفاض أثناء التداول وعند الإغلاق.</li>
                        <li style="margin-bottom: 15px;">إذا كان احتمال الانخفاض أكبر من باقي الاتجاه العام وكانت نسبة التكامل أكبر من المخاطر فإن السهم يتجه أساساً إلى الانخفاض مع وجود نزعة للارتفاع بسبب انخفاض المخاطر مما قد يغير الاتجاه الأساسي للسهم إلى الارتفاع بدل الانخفاض.</li>
                        <li>إذا كان احتمال الثبات أكبر من باقي الاتجاه العام فإن السهم يستقر عند مستوى الإغلاق السابق أو قريباً منه. مع ميل إلى الارتفاع إذا كان احتمال الارتفاع الجزئي أكبر من احتمال الانخفاض ، أو ميل للانخفاض إذا كان احتمال الانخفاض الجزئي  أكبر من احتمال الارتفاع.</li>
                    </ul>

                    <p><strong>عموماً سوف تجد في أسفل الجدول نتيجة التحليل جاهزة.</strong></p>

                    <h5 style="font-weight: bold;">أثناء التداول:</h5>

                    <p>من أهم مزايا نظام ترند كاست أنه يقدم لك التحليل الفوري في أي لحظة أثناء التداول.</p>


                    <p>ماعليك سوى إدخال السعر الحالي أثناء التداول أو السعر الذي ترغب بالشراء أو البيع عنده وسوف يعطيك النظام توقعاته لاتجاه السهم عند السعر المحدد . كما ويعرض لك النظام بالرسم البياني اتجاهات السهم عند مجموعة من الأسعار المفترضة إذا وصل سعر السهم عندها.</p>

                    <p>وسوف تجد بجانب الرسم البياني جدولاً مماثلاً لجدول التحليل السابق تظهر فيه الاتجاه العام والمتكاملة والمخاطر عند السعر المحدد وفي أسفله  نتيجة التحليل.</p>

                    <span class="anchor" id="methodology-more"></span>
                    <h4><i class="fa fa-support"></i>&nbsp;التكامل والمخاطر</h4>

                    <p>في هذا الجزء من التحليل تحصل بالرسم البياني على ثلاث مستويات ممكنة للارتفاع مع احتمالات حدوثها والاحتمال الأكبر يمثل نسبة التكامل . وفي الجانب الآخر يظهر في الرسم البياني ثلاثة مستويات ممكنة للانخفاض أكبرها يمثل المخاطر.</p>

                    <p>فإذا كان الاتجاه المرجح هو الارتفاع فإن مستوى الارتفاع صاحب الاحتمال الأكبر هو مستوى الإعلاق المرجح. وإذا كان الاتجاه الأرجح هو الانخفاض فإن مستوى الانخفاض صاحب الاحتمال الأكبر هو مستوى الإغلاق المحتمل.</p>

                    <span class="anchor" id="urgent-calculation"></span>
                    <h4><i class="fa fa-leanpub"></i>&nbsp;تحليل الأسباب الطارئة</h4>

                    <p>الأجزاء السابقة من التحليل تعمل على أساس أن السوق في مساره الطبيعي بدون مؤثرات أو أخبار أو ظروف طارئة. لكن حين توجد مثل هذه الظروف فإن السوق أو السهم يخرج عن مساره الطبيعي ويتحرك تحت تأثير الأسباب الطارئة.</p>

                    <p>إذا علمت من خلال متابعتك للسوق والأخبار بوجود مؤثر أو سبب طاريء أو توقعت إمكانية وجوده أو أردت اختبار تأثير سبب طاريء معين على اتجاه وسعر السهم  فما عليك سوى اختيار السبب المؤثر من قائمة الأسباب الطارئة التي تجدها في هذا الجزء وسوف يعرض لك النظام تأثير هذا السبب على  السهم ايجاباً أو سلباً مع توضيح بالرسم البياني وتحديد السعر . وسوف تجد إلى جانب ذلك وصفاً دقيقاً للسبب الطاريء الذي تختاره لكي تتأكد من صحة اختيارك له.</p>

                    <span class="anchor" id="my-account"></span>
                    <h4><i class="fa fa-user"></i>&nbsp;حسابي</h4>

                    <p>أنت بحاجة إلى إدارة حسابك ومتابعة كافة الحركات والأنشطة التي تجري عليه وقد جعلنا هذا الأمر سهلاً وممتعاً. بالضغط على  <a href="{{ asset('portal/my_account') }}" target="_blank">حسابي</a> في القائمة الرئيسية تدخل على صفحة حسابك و تطالع في الجزء اليمين من الصفحة اسم الحساب ورصيدك من النقاط  وفي نفس المكان وفرنا لك خاصية نسخ الرابط لإرساله إلى أصدقائك إذا رغبت في مشاركتهم  للاستفادة من خدمات الموقع وسوف تحصل على نقاط مكافأة بمجرد اشتراكهم الفعلي </p>

                    <p>يلي ذلك قائمة من عدة بنود:</p>

                    <ul>
                        <li style="margin-bottom: 15px;"><span style="text-decoration: underline;">تفاصيل الحساب</span>  وبالضغط عليها تظهر لك التفاصيل المتعلقة بحسابك من اشتراكات وتنبيهات.</li>

                        <li style="margin-bottom: 15px;"><span style="text-decoration: underline;">تسجيل اشتراك مخصص</span> ومن خلاله يمكن إنشاء اشتراك مخصص جديد.</li>

                        <li style="margin-bottom: 15px;"><span style="text-decoration: underline;">تسجيل اشتراك سوق</span> لكي تتمكن من تسجيل اشتراك سوق جديد.</li>

                        <li><span style="text-decoration: underline;">أرشيف الاشتراكات</span> وبالضغط عليه تظهر لك قائمة باشتراكاتك الفعالة والمنتهيه تتضمن تفاصيل كل اشتراك وتاريخ البداية والانتهاء مع خيارات التجديد للاشتراكات المنتهية.</li>
                    </ul>

                    <p>في باقي الصفحة تظهر قوائم الاشتراكات الفعالة والمنتهية بكل تفاصيلها المطلوبة وخياراتها المتاحة. ثم قائمة بالتنبيهات وتتضمن الاشعارات التي يسجلها لك النظام عن كل عملية اشتراك أو حصول على نقاط مكافأة أو استخدام لتلك النقاط.</p>

                    <span class="anchor" id="video-lib"></span>
                    <h4><i class="fa fa-youtube-play"></i>&nbsp;مكتبة الفيديو</h4>

                    <p>في هذ الجزء نوفر لك قائمة بالفيديوهات التي تشرح عن النظام وأسلوب التحليل وأية مواضيع نرى أنها تفيد المستثمر والمستخدم للنظام.</p>

                    <span class="anchor" id="sign-in"></span>
                    <h4><i class="fa fa-question"></i>&nbsp;المساعدة</h4>

                    <p>هذا البند ينقلك فوراً إلى صفحة البريد الإليكتروني حيث يتيح لك التواصل معنا وطلب المساندة والدعم الفني.</p>

                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
@endsection