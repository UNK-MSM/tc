@extends('portal.layouts.master')

@section('title', 'مكتبة الفيديو')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-bubbles font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">الأسعار المتوقعة عند الإغلاق في المسار العادي</span>
                    </div>
                </div>
                <div class="portlet-body">
                <iframe style="width: 100%; height: 600px;" src="https://www.youtube.com/embed/6oluFkMCz8A?list=PLFEnT8dlMyRAWACUxfVr-Gw29XrkbsXMt" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div> 
@endsection

@section('javascript')
@endsection