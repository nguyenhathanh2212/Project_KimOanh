@extends('templates.kimoanh.master')
@section('title')
    News
@endsection
@section('content')
    ﻿<div id="ctl00_divAlt1" class="altcontent1 cmszone">
        <section class="breadcrumb-wrap">
            <div class='Module Module-89'>
                <div class='ModuleContent'>
                    <div class="breadcrumb-img">
                        <img src="{{ config('setting.folder_image_public') }}/Data/Sites/1/Banner/211.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="breadcrumb-content">
                <div class='container Module Module-148'>
                    <ol class='breadcrumb'>
                        <li itemscope itemtype=''>
                            <a href="/" class='itemcrumb' itemprop='url'>
                                <span itemprop='title'>Trang chủ</span>
                            </a>
                        </li>
                        @php
                            $firstLibrary = $typeLibraries->first();
                        @endphp
                        <li itemscope itemtype=''>
                            <a href="{{ route('kimoanh.library.show',[str_slug($firstLibrary->name), $firstLibrary->id]) }}" class='itemcrumb' itemprop='url'>
                                <span itemprop='title'>Thư viện</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </section>          
    </div>
    <main class="main">
        <div id="ctl00_divCenter" class="middle-fullwidth">
            <section class="gallery-page">
                <div class="container">
                    <div class='Module Module-163'>
                        <div class='ModuleContent'>
                            <h1 class="home-title text-center">Thư viện</h1>
                            <div class="page-nav">
                                <div class="btn-showtab"></div>
                                <ul class="home-tab">
                                    @foreach ($typeLibraries as $item)
                                        <li class="nav-item">
                                            <a class="nav-link {{ isset($typeLibrary) && $typeLibrary == $item ? 'active' : '' }}"
                                                href="{{ route('kimoanh.library.show', [str_slug($item->name), $item->id]) }}"
                                                target="_self">{{ $item->name_custom }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('content-library')
                </div>
            </section>
        </div>
    </main>     
@endsection
@push('scripts')
@endpush
