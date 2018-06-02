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
        {{ Html::style(asset(config('setting.folder_css_public') . 'toolbar.css')) }}
        {{ Html::style(asset(config('setting.folder_css_public') . 'jquery.fancybox.css')) }}
        {{ Html::style(asset(config('setting.folder_css_public') . 'core.css')) }}
        {{ Html::style(asset(config('setting.folder_css_public') . 'main.css')) }}
        <link rel='shortcut icon' href='/Data/Sites/1/skins/default/favicon.ico' />
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
                                    <div class="menu-logo"></div>
                                    <div class='menu-content Module Module-42'>
                                        <div class='ModuleContent'>
                                            <div class="menu-wrap">
                                                <ul class="menu-link">
                                                    <li><a href="/gioi-thieu" target="_self">Giới thiệu</a></li>
                                                    <li><a href="/du-an/du-an-dang-trien-khai" target="_self">Dự án</a></li>
                                                    <li class="active"><a href="/tin-tuc" target="_self">Tin tức</a></li>
                                                    <li><a href="/thu-vien/du-an" target="_self">Thư viện</a></li>
                                                    <li><a href="#" target="_self">Video</a></li>
                                                    <li><a href="/tuyen-dung" target="_self">Tuyển dụng</a></li>
                                                    <li><a href="/lien-he" target="_self">Liên hệ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <div class='hotline Module Module-138'>
                                    <div class='ModuleContent'>
                                        <a href="tel:0988.12.12.12"><em class="material-icons">phone</em>0988.12.12.12</a>
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
