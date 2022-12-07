
<div class="row">
    <div class="col-md-4">
        <div class="portlet light">
            <div class="portlet-body">
                <iframe style="width: 100%; height: 267px;" src="{{ isset($videoLink) ? $videoLink : 'https://www.youtube.com/watch?v=PR95-tBBze4' }}?rel=0&controls=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="col-md-8">
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