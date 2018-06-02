@extends('templates.kimoanh.master')
@section('title')
    Introduce
@endsection
@section('content')
<div id="ctl00_divAlt1" class="altcontent1 cmszone">
    <section class="breadcrumb-wrap">
        <div class='Module Module-89'>
            <div class='ModuleContent'>
                <div class="breadcrumb-img">
                    <img src="{{ config('setting.folder_image_public') }}Data/Sites/1/Banner/banner.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="breadcrumb-content">
            <div class='container Module Module-148'>
                <ol class='breadcrumb'>
                    <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>
                        <a href='http://diaockimoanh.vn' class='itemcrumb' itemprop='url'>
                            <span itemprop='title'>Trang chủ</span>
                        </a>
                    </li>
                    <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>
                        <a href='/gioi-thieu' class='itemcrumb active' itemprop='url'>
                            <span itemprop='title'>Giới thiệu</span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </section>    
</div>
<main class="main">
    <div id="ctl00_divCenter" class="middle-fullwidth">
        <div class='Module Module-149'>
            <div class='ModuleContent'>
                <nav class="top-nav">
                    <div class="btn-showtab"></div>
                        <ul class="home-tab">
                            <li>
                                <a href="#section1">Thông điệp Tổng Giám Đốc</a>
                            </li>
                            <li>
                                <a href="#section2">Lịch sử hình thành</a>
                            </li>
                            <li>
                                <a href="#section3">Lĩnh vực hoạt động</a>
                            </li>
                            <li>
                                <a href="#section4">Tầm nhìn - Sứ mệnh</a>
                            </li>
                            <li>
                                <a href="#section5">Sơ đồ tổ chức</a>
                            </li>
                            <li>
                                <a href="#section6">Giải thưởng</a>
                            </li>
                        </ul>
                </nav>
                @include ('kimoanh.introduce.supervisory-message')
                @include ('kimoanh.introduce.history')
                @include ('kimoanh.introduce.operation')
                @include ('kimoanh.introduce.vision')
                @include ('kimoanh.introduce.organization')
                @include ('kimoanh.introduce.award')
            </div>
        </div>
    </div>
</main>
@endsection
@push('scripts')
@endpush
