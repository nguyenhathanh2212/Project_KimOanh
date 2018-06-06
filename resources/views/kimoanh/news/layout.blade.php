@extends('templates.kimoanh.master')
@section('title')
    News
@endsection
@section('content')
<div class="news-home">
    <div id="ctl00_divAlt1" class="altcontent1 cmszone">
        <section class="breadcrumb-wrap">
            <div class='Module Module-89'>
                <div class='ModuleContent'>
                    <div class="breadcrumb-img">
                        <img src="{{ config('setting.folder_image_public') }}Data/Sites/1/Banner/banner-tintuc.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="breadcrumb-content">
                <div class='container Module Module-148'>
                    <ol class='breadcrumb'>
                        <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>
                            <a href='/' class='itemcrumb' itemprop='url'>
                                <span itemprop='title'>Trang chủ</span>
                            </a>
                        </li>
                        <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>
                            <a href='{{ route('kimoanh.news.index') }}' class='itemcrumb active' itemprop='url'>
                                <span itemprop='title'>Tin tức</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
    </div>
</div>
<main class="main">
    <div id="ctl00_divCenter" class="middle-fullwidth">
        <section class="news-page">
            <div class="container">
                <div class='Module Module-157'>
                    <div class='ModuleContent'>
                        <h1 class="home-title text-center">Tin tức</h1>
                        <div class="page-nav">
                        <div class="btn-showtab"></div>
                        <ul class="home-tab">
                            @foreach ($typeNews as $item)
                                <li class="nav-item">
                                    <a class="nav-link {{ isset($typeNew) && $typeNew == $item ? 'active' : '' }}"
                                        href="{{ route('kimoanh.news.show', [str_slug($item->name), $item->id]) }}"
                                        target="_self">{{ $item->name_custom }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @yield('content-news')            
        </section>
    </div>
</main>
@endsection
@push('scripts')
@endpush
