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
                width: 1304px;
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
        <form method="post" action="/tin-tuc" id="aspnetForm">
            <input type="hidden" name="__VIEWSTATEFIELDCOUNT" id="__VIEWSTATEFIELDCOUNT" value="3" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTk3NjY2MTIwNw9kFgJmD2QWAgIBDxYCHgRsYW5nBQJ2aRYCAgMPFgIeBWNsYXNzBQ1jYW5oY2FtIHZpLXZuFgICBQ8WAh4GYWN0aW9uBQgvdGluLXR1YxYQAg8PZBYCZg9kFgJmD2QWAmYPD2QWAh4Ic2l0ZXJvb3QFFmh0dHA6Ly9kaWFvY2tpbW9hbmgudm4WBAIBDw8WBh4HVG9vbFRpcAULVMOsbSBraeG6v20eCENzc0NsYXNzBQtzZWFyY2hpbnB1dB4EXyFTQgICFgQeDGF1dG9jb21wbGV0ZQUDb2ZmHgtwbGFjZWhvbGRlcgULVMOsbSBraeG6v21kAgUPFgIfAQUMc2VhcmNoYnV0dG9uZAIRDw8WBB8FBRNhbHRjb250ZW50MSBjbXN6b25lHwYCAmRkAhMPDxYGHwUFEGxlZnRzaWRlIGNtc3pvbmUfBgICHgdWaXNpYmxlaGRkAhUPDxYEHwUFEG1pZGRs" />
            <input type="hidden" name="__VIEWSTATE1" id="__VIEWSTATE1" value="ZS1mdWxsd2lkdGgfBgICZGQCFw8PFgYfBQURcmlnaHRzaWRlIGNtc3pvbmUfBgICHwloZGQCGQ8PFgYfBQUTYWx0Y29udGVudDIgY21zem9uZR8GAgIfCWhkZAIfD2QWAmYPZBYCZg9kFgJmD2QWBAIBD2QWDgIBDxYCHwloFgICAQ8WAh4EVGV4dGVkAgMPFgIfCgU5PGgyIGNsYXNzPSJtb2R1bGUtdGl0bGUiPsSQxINuZyBrw70gbmjhuq1uIGLhuqNuIHRpbjwvaDI+ZAIFD2QWBAIBDw8WAh8KBQJUb2RkAgMPEGRkFgBkAgkPFgIfCWgWAgIFDxQrAAMPFgIeD1ZhbGlkYXRpb25Hcm91cAUuZm9ybXdpemFyZDEwM2Q4ZGRhLWRlM2YtNGQxNi1hNzY0LThlODE2NDYzYzkzMGQWAh4LQ3VycmVudEd1aWQFJDJmNGU4NWFhLTUwNWYtNDBlMy1iMDdkLTE4OGZlOTE4ZTRl" />
            <input type="hidden" name="__VIEWSTATE2" id="__VIEWSTATE2" value="ZBQrAANkZGRkAg0PDxYEHwoFDTw8IFF1YXkgbOG6oWkfCWhkZAIPDw8WBB8LBS5mb3Jtd2l6YXJkMTAzZDhkZGEtZGUzZi00ZDE2LWE3NjQtOGU4MTY0NjNjOTMwHwoFBUfhu61pZGQCEQ8WAh4FdmFsdWUFBFjDs2FkAgMPZBYCAgEPFgIfCgUfQ8OhbSDGoW4gYuG6oW4gxJHDoyDEkcSDbmcga8O9LmQCJQ8PFgIfCWhkZBgBBR5jdGwwMCRGb3JtRGFuZ0t5JGN0bDAwJGNhcHRjaGEPFCsAAgUkMmY0ZTg1YWEtNTA1Zi00MGUzLWIwN2QtMTg4ZmU5MThlNGVkBgAAAAAAAAAAZA6BlzIhuT0iIr2LoRcYGwQuhhgk" />
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
                                        <div id='ctl00_TimKiem_ctl00_Search_pnlSearch' class='searchbox'>
                                            <input onfocus="javascript:watermarkEnter(this, &#39;&#39;);" onblur="javascript:watermarkLeave(this, &#39;&#39;);" name="ctl00$TimKiem$ctl00$Search$txtSearch" type="text" id="ctl00_TimKiem_ctl00_Search_txtSearch" title="Tìm kiếm" class="searchinput" autocomplete="off" placeholder="Tìm kiếm" />
                                            <button onclick="__doPostBack('ctl00$TimKiem$ctl00$Search$btnSearch','')" id="ctl00_TimKiem_ctl00_Search_btnSearch" class="searchbutton">
                                                <i class="material-icons">search</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
