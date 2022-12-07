@extends('portal.layouts.master')

@section('title', 'أسهمي')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="portlet light">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-bubbles font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">اتصل بنا للحصول على المساعدة</span>
                    </div>
                </div>
                <div class="portlet-body clearfix">
                    <h4 class="panel-title" style="margin-bottom: 10px; margin-top: 10px;">فريق خدمة العملاء لدينا يستقبل استفساراتكم بكل ترحيب على مدار الساعة. فلا تترددو بالتواصل معنا عن طريق تعبئة النموذج أدناه  :</h4>
                    <form method="post" class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">الاسم</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم الكامل" value="{{ $currentUser->full_name }}" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="أدخل البريد الإلكتروني للتواصل" value="{{ $currentUser->email }}" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">الموضوع</label>
                            <select class="form-control" style="padding-top: 2px; padding-bottom: 2px;">
                                <option>إختر الموضوع</option>
                                <option>الإبلاغ عن خلل</option>
                                <option>طلب إضافة سهم جديد</option>
                                <option>طلب إضافة سوق مالي جديد</option>
                                <option>اقتراح</option>
                                <option>آلية الدفع و التسعيير</option>
                                <option>آلية الاشتراك</option>
                                <option>أخرى</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">التفاصيل</label>
                            <textarea rows="10" class="form-control" ></textarea>
                        </div>
                        <button class="btn" style="float: left; margin-bottom: 15px;">أرسل الآن</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="portlet light">

                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-bubbles font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">أخبار وتنبيهات</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portlet_comments_1">
                                <!-- BEGIN: Comments -->
                                <div id="news-section" class="mt-comments">
                                    @foreach ($all_news as $news)
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img onerror="loadAlternativeImage(this);" width="41" height="41" src="{{ asset('/img/news-logo.png') }}" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">{{ $news->title_ar }}</span>
                                                <span class="mt-comment-date">{{ $news->added_date }}</span>
                                            </div>
                                            <div class="mt-comment-text" style="color: black;">{{ $news->body_ar }}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- END: Comments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>         
@endsection

@section('javascript')
    <script type="text/javascript">
        function showPreviousPrediction(text) {
            bootbox.alert({
                message: text === ''? 'لا يوجد توقع' : text,
                buttons: {
                            ok: {
                            label: 'إغلاق'
                         }
                    }
                });
        }
    </script>
@endsection