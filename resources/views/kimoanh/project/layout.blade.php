@extends('templates.kimoanh.master')
@section('title')
    News
@endsection
@push('styles')
@endpush
@section('content')
<div id="ctl00_divAlt1" class="altcontent1 cmszone">
    <section class="breadcrumb-wrap">
        <div class='Module Module-89'>
            <div class='ModuleContent'>
                <div class="breadcrumb-img">
                    <img src="{{ config('setting.folder_image_public') }}Data/Sites/1/Banner/banner-duan.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="breadcrumb-content">
            <div class='container Module Module-148'>
                <ol class='breadcrumb'>
                    <li itemscope itemtype=''>
                        <a href='/' class='itemcrumb' itemprop='url'>
                            <span itemprop='title'>Trang chủ</span>
                        </a>
                    </li>
                    <li itemscope itemtype=''>
                        @php
                            $firstProject = $typeProjects->first();
                        @endphp
                        <a href='{{ route('kimoanh.project.show', [str_slug($firstProject->name), $firstProject->id]) }}' class='itemcrumb' itemprop='url'>
                            <span itemprop='title'>Dự án</span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>         
    </section>      
</div>
@yield('content-project')
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).bind('scroll', function() {
                var navHeight = $( window ).height() - 400;
                
                if ($(window).scrollTop() >= navHeight) {
                    $('.home-tab').addClass('top-fixed');
                } else {
                    $('.home-tab').removeClass('top-fixed');
                }
            });
        });
    </script>
@endpush
