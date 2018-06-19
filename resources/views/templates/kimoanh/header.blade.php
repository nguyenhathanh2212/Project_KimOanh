<!DOCTYPE html>
<html id="ctl00_Html1" lang="vi">
    <head id="ctl00_Head1">
        <title>
            @yield ('title')
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Tin tức" />
        <meta property="og:site_name" content="Kim Oanh Real Estate" />
        <meta itemprop="name" content="Tin tức" />
        <link rel='next' href='/tin-tuc?pagenumber=2' />
        <link rel="search" type="application/opensearchdescription+xml" title="Tìm kiếm Kim Oanh Real Estate" href="/SearchEngineInfo.ashx" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{ Html::style(asset('css/app.css')) }}
        {{ Html::script(asset('js/app.js')) }}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        {{ Html::style(asset(config('setting.folder_css_public') . 'toolbar.css')) }}
        {{ Html::style(asset(config('setting.folder_css_public') . 'jquery.fancybox.css')) }}
        {{ Html::style(asset(config('setting.folder_css_public') . 'main.css')) }}
        {{ Html::style(asset(config('setting.folder_css_public') . 'core.css')) }}
        <link rel='shortcut icon' href='/Data/Sites/1/skins/default/favicon.ico' />
        <style type="text/css">
            .top-fixed {
                z-index: 100;
                position: fixed;
                top: 60px;
                width: 100%;
                left: 0px;
            }

            .fixed-header {
                z-index: 1000;
                position: fixed;
                top: 0px;
                margin-left: 0px;
                width: 100%;
                left: 0px;
                background: #fff;
                height: 60px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .fixed-header .header-wrap {
                height: 60px;
            }

            .fixed-header .sitelogo {
                padding-top: 0px !important;
            }

            .fixed-header .sitelogo a {
                height: 60px !important;
            }

            .fixed-header .sitelogo a img {
                max-width: 90%;
                max-height: 90%;
            }
        </style>
        @stack('styles')
    </head>
    <body id="ctl00_Body" class="canhcam vi-vn">
            <div class="fullpage">
                <header>
                    <div class="container">
                        <div class="header-wrap">
                            <div class="btn-showmenu">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                            <div class="overlay"></div>
                            <div class='sitelogo Module Module-135'>
                                <div class='ModuleContent'>
                                    <a href="/">
                                        <img alt="" src="{{ config('setting.folder_image_public') }}/logo.png" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-right">
                                <nav class="menu">
                                    <div class="menu-logo">
                                        <div class="sitelogo Module Module-135"><div class="ModuleContent"><a href="/"><img alt="" src="{{ config('setting.folder_image_public') }}/Data/Sites/1/media/default/logo.png"></a></div></div>
                                    </div>
                                    <div class='menu-content Module Module-42'>
                                        <div class='ModuleContent'>
                                            <div class="menu-wrap">
                                                <ul class="menu-link">
                                                    <li
                                                        class="{{ Session::get('page_current') == config('setting.page.introduce')  ? 'active' : '' }}"
                                                        ><a href="{{ route('kimoanh.introduce.index') }}" target="_self">Giới thiệu</a></li>
                                                    @php
                                                        $firstProject = $typeProjects->first();
                                                    @endphp
                                                    <li
                                                        class="{{ Session::get('page_current') == config('setting.page.project')  ? 'active' : '' }}"
                                                        >
                                                        <a href="{{ route('kimoanh.project.show', [str_slug($firstProject->name), $firstProject->id]) }}" target="_self">Dự án</a>
                                                    </li>
                                                    <li
                                                        class="{{ Session::get('page_current') == config('setting.page.news')  ? 'active' : '' }}"
                                                        >
                                                        <a href="{{ route('kimoanh.news.index') }}" target="_self">Tin tức</a>
                                                    </li>
                                                    @php
                                                        $firstLibrary = $typeLibraries->first();
                                                    @endphp
                                                    <li
                                                        class="{{ Session::get('page_current') == config('setting.page.library')  ? 'active' : '' }}"
                                                        >
                                                        <a href="{{ route('kimoanh.library.show',[str_slug($firstLibrary->name), $firstLibrary->id]) }}" target="_self">Thư viện</a>
                                                    </li>
                                                    <li><a href="#" target="_self">Video</a></li>
                                                    <li
                                                        class="{{ Session::get('page_current') == config('setting.page.contact')  ? 'active' : '' }}"
                                                        >
                                                        <a href="{{ route('kimoanh.contact.index') }}" target="_self">Liên hệ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <div class='hotline Module Module-138'>
                                    <div class='ModuleContent'>
                                        <a href="tel:{{$contract->phone}}"><em class="material-icons">phone</em>{{$contract->phone}}</a>
                                    </div>
                                </div>
                                <div class="search">
                                    <div class="btn-search">
                                        <i class="material-icons">search</i>
                                    </div>
                                    <div class='search-wrap Module Module-137'>
                                        <div class='searchbox'>
                                            <form action="{{ route('kimoanh.search.index') }}" method="get">
                                                @csrf
                                                <input type="text" id="search" title="Tìm kiếm" name="text" value="" class="searchinput" autocomplete="off" placeholder="Tìm kiếm" />
                                                <button id="btn-search" type="submit" class="searchbutton">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
