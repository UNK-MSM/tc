@extends('frontend.layouts.frontendmaster')

@section('meta')
<title>عن النظام – ترند كاست</title>
<meta name="title" content="عن النظام – ترند كاست" />
<meta name="description" content="نظام ترند كاست لتحليل وتوقع أسعار الأسهم، نظام مبتكر يعتمد على التحليل الكمي للأسهم وبديلاً للتحليل الفني." />
@endsection

@section('content')
<section id="fun-factor" class="page-section">
    <div class="image-bg content-in fixed" data-background="img/backgrounds/moving-background-2.jpg"></div>
    <div class="container">
        <div class="row white">
            <div data-animation="fadeInLeft">
                <h4 class="text-uppercase" style="display: inline-block; background-color: rgba(0, 0, 0, 0.3); padding: 5px;">امتلك أحدث الأدوات المبتكرة في تحليل الأسهم</h4><br />
                <h4 class="text-uppercase" style="display: inline-block; background-color: rgba(0, 0, 0, 0.3); padding: 5px;">تجربة فريدة تبهرك من اللحظة الأولى</h4><br />
                <h4 class="text-uppercase" style="display: inline-block; background-color: rgba(0, 0, 0, 0.3); padding: 5px;"><span class="text-color">اشترك الآن</span></h4><br />
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
                    <h2 class="title">النظرة الأولى</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">عند دخولك الموقع طالع الصفحة الأولى وفيها وصف عام لطبيعة ومميزات نظام ترند كاست لتحليل وتوقع أسعار الأسهم من حيث أسلوب التحليل الكمي المبتكر القائم على نظرية الاحتمالات المتكاملة والمختلفة كل الاختلاف عن أسلوب التحليل الفني المعروف حيث يكون التوقع بناءً على الاحتمالات الجزئية و الاحتمالات المتكاملة والمخاطر اليومية للسهم.</p>

                <p style="text-align: justify;">كما يمكنك الاطلاع على <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#testimonials') }}" target="_blank">شهادات نخبة من الخبراء</a> والمتخصصين في تحليل الأسواق المالية وتقييمهم <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#analysis-methodology') }}" target="_blank">لأسلوب ترند كاست</a> المبتكر في التحليل.</p>

                <p style="text-align: justify;">وفي نفس الصفحة تعريف مختصر بالخطوات المطلوبة للبدء في استخدام النظام ثم نعرض لك نوعين من خطط الاشتراك المتاحة لتختار المناسب منهما.</p>
                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">إخلاء المسؤولية</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">اضغط على بند <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('policy') }}" target="_blank">إخلاء المسؤولية</a> في قائمة الخيارات لكي تتعرف على حدود المسؤوليات المترتبة وتلك التي لا تتحملها  إدارة الموقع والأطراف الأخرى بما فيها المستخدم. وهذا البند يمثل <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('policy#agreement') }}" target="_blank">اتفاقية استخدام</a> للنظام وسوف تكون موافقتك عليها شرطاً <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#pricing') }}" target="_blank">لتسجيل الاشتراك</a>.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">الأسئلة المتكررة</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">تحت هذا البند سوف تجد الرد المفصل عن الأسئلة التي يتكرر طرحها من قبل المهتمين بالنظام والمشتركين فيه. <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#support') }}" target="_blank">اتصل بنا</a> واطرح استفساراتك وسوف نكون سعداء بالرد عليها.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">الدعم الفني</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">أطلب دعمنا الفني عند شعورك بالحاجة إليه. قد تجد جواباً أو حلاً للمشكلة من خلال <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#support') }}" target="_blank">الأسئلة المتكررة</a> وإلا فلا تتردد <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#support') }}" target="_blank">بالاتصال بنا</a> وطلب المساندة.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">التسجيل والاشتراك</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">اختيارك لبند التسجيل والاشتراك من القائمة الرئيسية يعرض لك نوعين من خطط الاشتراك المتاحة هما:</p>
                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px;"><strong>اشتراك سوق</strong> : حيث يتاح لك اختيار سوق مالي واحد أو أكثر بكل الأسهم المضافة فيه مقابل كلفة الاشتراك المحددة مع الخصومات المغرية التي تزداد مع زيادة مدة الاشتراك والتي قد تكون شهر أو ثلاثة أشهر أو ستة أشهر أو سنة حسب رغبتك.<br />وقد تكون بعض الأسهم المدرجة في السوق غير مضافة في النظام إما لكونها غير نشطة وغير مطلوبة أو لعدم وجود بيانات عنها لفترة كافية . ومع ذلك إذا رغبت في أضافة أحد هذه الأسهم فسوف نضيفه <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#support') }}" target="_blank">بناءً على طلبك</a> وبدون كلفة إضافية شرط توفر الحد الأدنى اللازم من بيانات التداول لهذا السهم.</li>

                    <!-- <li style="border-right: 4px solid silver; padding-right: 5px; margin-top: 15px;"><strong>اشتراك مخصص</strong> : حيث يمكنك اختيار  التشكيلة التي تهتم بها من الأسهم سواءً كانت من نفس السوق أو من أسواق مختلفة ولنفس المدد الزمنية المحددة في النوع الأول والخصومات المستحقة لكل مدة اشتراك.<br /><strong>وفي كلا النوعين من الاشتراك يكون الأسبوع الأول مجاناً لكي تتأكد من فاعلية النظام واقتناعك به.</strong></li> -->
                </ul>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">تسجيل الدخول</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">اختيارك لهذا البند من القائمة ينقلك إلى نافذة الدخول . أدخل بريدك الإليكتروني وكلمة السر التي وضعتها لتدخل إلى حسابك إذا كنت مشتركاً، أو اضغط على تسجيل اشتراك لتنتقل إلى صفحة <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#pricing') }}" target="_blank">التسجيل والاشتراك</a>.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">بيانات الاشتراك</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">البيانات المطلوبة <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#pricing') }}" target="_blank">لتسجيل اشتراك جديد</a> مختصرة وسهلة وهي الاسم الكامل والبريد الإليكتروني وكلمة السر وتأكيدها ونوع الاشتراك واسم السوق  المطلوب وهذه اجبارية مشار إليها بعلامة النجمة أما رقم الهاتف والدولة فهي اختيارية.</p>

                <p style="text-align: justify;">وعند تعبئة البيانات والضغط على تسجيل اشتراك جديد يقوم النظام بإرسال رسالة إلى بريدك الإليكتروني تتضمن الرابط الذي يجب الضغط عليه لتفعيل الاشتراك. ومن المهم الانتباه إلى أن الرسالة ترسل من النظام آلياً فإذا لم تجد الرسالة فيInbox  فقد تكون إعدادات بريدك الإليكتروني مبرمجة على تحويل الرسائل الآلية إلى ملف ـJunk mail   أو  spam   فابحث عنها هناك وفي حالة عدم وصولها اتصل بنا وسوف يتم تفعيل الاشتراك.</p>

                <!-- <p style="text-align: justify;">بعد تفعيل الاشتراك وإذا كان اختيارك هو اشتراك سوق فسوف تجد قائمة بأسماء الأسواق المالية المدرجة في النظام ويمكنك اختيار أياً منها مقابل المبالغ التالية:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-bottom: 2px;">اشتراك بقيمة 50 دولار لمدة شهر .</li>

                    <li style="border-right: 4px solid gray; padding-right: 5px; margin-bottom: 2px;">خصم 25% للاشتراك لمدة ثلاثة أشهر  بقيمة   113 $  بدلاً من  150 $.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-bottom: 2px;">خصم 35% للاشتراك لمدة ستة  أشهر  بقيمة  195 $  بدلاً من  300 $.</li>

                    <li style="border-right: 4px solid gray; padding-right: 5px; margin-bottom: 2px;">خصم 45% للاشتراك لمدة سنة بقيمة  330  $  بدلاً من 600  $.</li>
                </ul>

                <p style="text-align: justify; margin-top: 12px;">أما عند اختيار اشتراك مخصص فسوف تظهر قائمة الأسواق المالية وبالضغط على السوق المطلوب تظهر أسماء الأسهم المضافة فيه ويتم اختيار السهم بالضغط عليه ليظهر في القائمة الجانبية المختصرة مع كلفة الاشتراك والخصومات . ويمكنك الرجوع عن اختيار السهم بالضغط عليه مرة أخرى مع وجود نظام مساعدة يظهر في قائمة الرئيسية لإرشادك إلى كيفية الاختيار. وتحسب رسوم الاشتراك المخصص على النحو التالي لمدة شهر:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-bottom: 2px;">رسوم تحديد السوق 10 $.</li>

                    <li style="border-right: 4px solid gray; padding-right: 5px; margin-bottom: 2px;">كلفة السهم الواحد 4 $  للأسهم الخمسة الأولى تنخفض إلى 2 $ لكل سهم بعد الخامس.</li>
                </ul>

                <p style="text-align: justify; margin-top: 12px;">تطبق نفس نسب الخصم السابقة على المجموع حسب المدة الزمنية:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-bottom: 2px;">25% للاشتراك لمدة ثلاثة أشهر.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-bottom: 2px;">35% للاشتراك لمدة ستة أشهر.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-bottom: 2px;">45% للاشتراك لمدة سنة.</li>

                </ul> -->

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">نقاط المكافأة</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">اشتراكك في  نظام ترند كاست يمنحك ميزة الحصول على نقاط المكافأة حسب قيمة الاشتراك  يمكنك تجميعها للحصول على خصومات إضافية . كما أنك ستحصل على كود خاص تقدمه لأصدقائك يمنحك نقاطاً إضافية عندما يستخدمونه، وقد تجعل  اشتراكك مجانياً وذلك وفق النظام التالي:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px; margin-bottom: 2px;">نقطة مقابل كل دولار من قيمة الاشتراك.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">نقطة مقابل كل دولار من قيمة اشتراك أي شخص عن طريقك عند ما يستخدم الكود الممنوح لك.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">في مقابل النقاط التي تجمعها تحصل على خصم بقيمة دولار مقابل كل عشر نقاط.</li>

                </ul>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">من داخل النظام</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">أنت الآن داخل نظام التحليل ترند كاست وفي أعلى الصفحة تشاهد شريط أو قائمة  الخيارات الرئيسية حيث يمكنك الدخول إلى  صفحة <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('portal/my_stocks') }}" target="_blank">أسهمي</a>  أو  <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('portal/my_account') }}" target="_blank">حسابي</a>  أو  <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="https://www.youtube.com/watch?v=6oluFkMCz8A&list=PLFEnT8dlMyRAWACUxfVr-Gw29XrkbsXMt" target="_blank">مكتبة الفيديو</a>   أو  <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('portal/contactUs') }}" target="_blank">المساعدة</a>    أو صفحة <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('portal/help') }}" target="_blank">الإرشادات</a> التي تطالعها الآن.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">أسهمي</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">أنت هنا في الجزء الأهم حيث نتائج و أدوات التحليل للأسهم التي اخترت الاشتراك فيها بالاضافة إلى شريط الأخبار العامة في أعلى الصفحة وفيه تطالع بعض الأخبار المحلية و العالمية التي نرى أنها قد ئؤثر على أسواق المال بشكل مباشر أو غير مباشر. كما تشاهد زاوية للأخبار والتنبيهات التى تتعلق بسهم معين أو سوق معين.</p>

                <p style="text-align: justify;">ونود الإشارة إلى أننا لا نركز على سرد واستقصاء كافة الأخبار عن الشركات والقرارات والاجتماعات  لآنها متاحة في كثير من المواقع والمصادر وأهمها مواقع الأسواق المالية .  تركيزنا سيكون على إظهار خبر له تأثير مباشر على السهم أو التنبيه ولفت النظر إلى استخدام سبب محدد من قائمة الأسباب الطارئة.</p>

                <p style="text-align: justify;">في صفحة أسهمي رتبنا لك أسهمك على شكل جدول من خمسة أعمدة. حيث تجد في العمود الأول اسم السهم وفي الأعمدة التالية احتمال الارتفاع واحتمال الانخفاض واحتمال الثبات وفي الأخير سعر الإغلاق السابق. وفي كل عمود يظهر السعر الممكن واحتمال حدوثه . وتستطيع بنظرة سريعة أخذ فكرة عن اتجاهات الأسهم ومستويات الإغلاق المحتملة. مع الانتباه إلى أن الأسعار والاحتمالات في الجدول هي أسعار الإغلاق المتوقعة في نهاية اليوم وليست الأسعار التي تتغير وتتبدل أثناء جلسة التداول ، فهذه لها <a style="text-decoration: underline; color: blue !important; cursor: pointer;" href="{{ asset('index#about-quant-4-cast') }}" target="_blank">مكان آخر</a>.</p>

                <p style="text-align: justify;">بالضغط على اسم السهم تدخل إلى صفحة التحليل التفصيلي الخاصة بهذا السهم وفي بدايتها تشاهد المخطط البياني لمسار السهم لبضعة أيام سابقة ثم الاتجاهات الثلاث الممكنة للإغلاق التالي للسهم على شكل ثلاثة فروع : الأخضر يشير  إلى احتمال ومستوى الارتفاع الممكن  والأحمر إلى احتمال ومستوى الانخفاض الممكن والأزرق إلى احتمال الثبات عند المستوى السابق. ويشير الوميض في نهاية أحد الفروع إلى أنه صاحب  الاحتمال الأكبر . و نطلق على الاحتمالات المذكورة - الاحتمالات الجزئية -   وبموجب نظرية الاحتمالات المتكاملة فإن الاحتمالات الجزئية تشير إلى الاتجاه العام المتوقع للسهم.</p>

                <p style="text-align: justify;">>الجدول المجاور للرسم البياني  يضم  مجموعة من عناصر التحليل هي الاحتمالات الجزئية التي ظهرت في الرسم البياني وهي هنا على شكل أرقام ونسب مئوية. ثم نسبة التكامل والمخاطر.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">آلية التحليل</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">عناصر التحليل الأساسية هي:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px; margin-bottom: 2px;">الاحتمالات الجزئية ( الارتفاع والانخفاض والثبات).</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">نسبة التكامل.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">المخاطر.</li>

                </ul>

                <p style="text-align: justify;">ويتم احتساب هذه العناصر وفق خوارزميات  رياضية دقيقة في إطار نظرية الاحتمالات المتكاملة  المبتكرة. وتدل الاحتمالات الجزئية كما ذكرنا على الاتجاه العام للسهم عند الإغلاق. أما نسبة التكامل فتشير إلى نزعة أو ميل السهم نحو الارتفاع في حين تشير المخاطر إلى نزعة أو ميل السهم إلى الانخفاض. ولا نقصد بالمخاطر هنا تذبذب سعر السهم- كما هو شائع -  وأنما المقصود إمكانية انخفاض سعر السهم عن مستوى الإغلاق السابق أو عن السعر المحدد أثناء التداول.</p>

                <p style="text-align: justify;">وتكون نتيجة التحليل وفق الآلية التالية:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px; margin-bottom: 2px;">الاحتمال الأكبر من الاحتمالات الجزئية يشير إلى الاتجاه العام المتوقع عند الإغلاق.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كانت نسبة التكامل أكبر من المخاطر ، يميل السهم إلى الارتفاع أثناء التداول.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كانت المخاطر أكبر من نسبة التكامل ، يميل السهم إلى الانخفاض أثناء التداول.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كان احتمال الارتفاع أكبر من باقي الاحتمالات الجزئية ونسبة التكامل أكبر من المخاطر فهذا ترجيح لمسار الارتفاع أثناء التداول وعند الإغلاق.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كان احتمال الارتفاع أكبر من باقي الاحتمالات الجزئية وكانت المخاطر أكبر من نسبة التكامل فإن السهم يتجه أساساً إلى الارتفاع مع ميل للانخفاض بسبب ارتفاع المخاطر مما قد يغير الاتجاه الأساسي للسهم إلى الانخفاض بدل الارتفاع.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كان احتمال الانخفاض أكبر من باقي الاحتمالات الجزئية وكانت المخاطر أكبر من نسبة التكامل فهذا ترجيح لمسار الانخفاض أثناء التداول وعند الإغلاق.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كان احتمال الانخفاض أكبر من باقي الاحتمالات الجزئية وكانت نسبة التكامل أكبر من المخاطر فإن السهم يتجه أساساً إلى الانخفاض مع وجود نزعة للارتفاع بسبب انخفاض المخاطر مما قد يغير الاتجاه الأساسي للسهم إلى الارتفاع بدل الانخفاض.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;">إذا كان احتمال الثبات أكبر من باقي الاحتمالات الجزئية فإن السهم يستقر عند مستوى الإغلاق السابق أو قريباً منه. مع ميل إلى الارتفاع إذا كان احتمال الارتفاع الجزئي أكبر من احتمال الانخفاض ، أو ميل للانخفاض إذا كان احتمال الانخفاض الجزئي  أكبر من احتمال الارتفاع.</li>

                </ul>

                <p style="text-align: justify;"><strong>عموماً سوف تجد في أسفل الجدول نتيجة التحليل جاهزة.</strong></p>


                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">أثناء التداول</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">من أهم مزايا نظام ترند كاست أنه يقدم لك التحليل الفوري في أي لحظة أثناء التداول.</p>

                <p style="text-align: justify;">ماعليك سوى إدخال السعر الحالي أثناء التداول أو السعر الذي ترغب بالشراء أو البيع عنده وسوف يعطيك النظام توقعاته لاتجاه السهم عند السعر المحدد . كما ويعرض لك النظام بالرسم البياني اتجاهات السهم عند مجموعة من الأسعار المفترضة إذا وصل سعر السهم عندها.</p>

                <p style="text-align: justify;">وسوف تجد بجانب الرسم البياني جدولاً مماثلاً لجدول التحليل السابق تظهر فيه الاحتمالات الجزئية والمتكاملة والمخاطر عند السعر المحدد وفي أسفله  نتيجة التحليل.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">التكامل والمخاطر</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">في هذا الجزء من التحليل تحصل بالرسم البياني على ثلاث مستويات ممكنة للارتفاع مع احتمالات حدوثها والاحتمال الأكبر يمثل نسبة التكامل . وفي الجانب الآخر يظهر في الرسم البياني ثلاثة مستويات ممكنة للانخفاض أكبرها يمثل المخاطر.</p>

                <p style="text-align: justify;">فإذا كان الاتجاه المرجح هو الارتفاع فإن مستوى الارتفاع صاحب الاحتمال الأكبر هو مستوى الإعلاق المرجح. وإذا كان الاتجاه الأرجح هو الانخفاض فإن مستوى الانخفاض صاحب الاحتمال الأكبر هو مستوى الإغلاق المحتمل.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">تحليل الأسباب الطارئة</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">الأجزاء السابقة من التحليل تعمل على أساس أن السوق في مساره الطبيعي بدون مؤثرات أو أخبار أو ظروف طارئة. لكن حين توجد مثل هذه الظروف فإن السوق أو السهم يخرج عن مساره الطبيعي ويتحرك تحت تأثير الأسباب الطارئة.</p>

                <p style="text-align: justify;">إذا علمت من خلال متابعتك للسوق والأخبار بوجود مؤثر أو سبب طاريء أو توقعت إمكانية وجوده أو أردت اختبار تأثير سبب طاريء معين على اتجاه وسعر السهم  فما عليك سوى اختيار السبب المؤثر من قائمة الأسباب الطارئة التي تجدها في هذا الجزء وسوف يعرض لك النظام تأثير هذا السبب على  السهم ايجاباً أو سلباً مع توضيح بالرسم البياني وتحديد السعر . وسوف تجد إلى جانب ذلك وصفاً دقيقاً للسبب الطاريء الذي تختاره لكي تتأكد من صحة اختيارك له.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">حسابي</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">أنت بحاجة إلى إدارة حسابك ومتابعة كافة الحركات والأنشطة التي تجري عليه وقد جعلنا هذا الأمر سهلاً وممتعاً. بالضغط على  <a href="{{ asset('portal/my_account') }}" target="_blank">حسابي</a> في القائمة الرئيسية تدخل على صفحة حسابك و تطالع في الجزء اليمين من الصفحة اسم الحساب ورصيدك من النقاط  وفي نفس المكان وفرنا لك خاصية نسخ الرابط لإرساله إلى أصدقائك إذا رغبت في مشاركتهم  للاستفادة من خدمات الموقع وسوف تحصل على نقاط مكافأة بمجرد اشتراكهم الفعلي </p>

                <p style="text-align: justify;">يلي ذلك قائمة من عدة بنود:</p>

                <ul>
                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px; margin-bottom: 2px;"><span style="text-decoration: underline;">تفاصيل الحساب</span>  وبالضغط عليها تظهر لك التفاصيل المتعلقة بحسابك من اشتراكات وتنبيهات.</li>

                    <!-- <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;"><span style="text-decoration: underline;">تسجيل اشتراك مخصص</span> ومن خلاله يمكن إنشاء اشتراك مخصص جديد.</li> -->

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;"><span style="text-decoration: underline;">تسجيل اشتراك سوق</span> لكي تتمكن من تسجيل اشتراك سوق جديد.</li>

                    <li style="border-right: 4px solid silver; padding-right: 5px; margin-left: 10px;margin-bottom: 2px;"><span style="text-decoration: underline;">أرشيف الاشتراكات</span> وبالضغط عليه تظهر لك قائمة باشتراكاتك الفعالة والمنتهيه تتضمن تفاصيل كل اشتراك وتاريخ البداية والانتهاء مع خيارات التجديد للاشتراكات المنتهية.</li>

                </ul>

                <p style="text-align: justify;">في باقي الصفحة تظهر قوائم الاشتراكات الفعالة والمنتهية بكل تفاصيلها المطلوبة وخياراتها المتاحة. ثم قائمة بالتنبيهات وتتضمن الاشعارات التي يسجلها لك النظام عن كل عملية اشتراك أو حصول على نقاط مكافأة أو استخدام لتلك النقاط.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">مكتبة الفيديو</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">في هذ الجزء نوفر لك قائمة بالفيديوهات التي تشرح عن النظام وأسلوب التحليل وأية مواضيع نرى أنها تفيد المستثمر والمستخدم للنظام.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">المساعدة</h2>
                </div>
                <!-- Content -->
                <p style="text-align: justify;">هذا البند ينقلك فوراً إلى صفحة البريد الإليكتروني حيث يتيح لك التواصل معنا وطلب المساندة والدعم الفني.</p>

                <!-- Features -->
                <!-- Features -->
            </div>
        </div>
    </div>
</section>
@endsection