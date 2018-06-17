@extends('kimoanh.project.layout')
@section('title')
  Project
@endsection
@section('content-project')
  <main class="main">
    <div id="ctl00_divCenter" class="middle-fullwidth">
        <div class='Module Module-151'>
            <div class='ModuleContent'>
                <nav class="top-nav">
                    <ul class="home-tab">
                        <li>
                            <a href="#section1">Tổng quan</a>
                        </li>
                        <li>
                            <a href="#section2">Vị trí</a>
                        </li>
                        <li>
                            <a href="#section3">Tiện ích</a>
                        </li>
                        <li>
                            <a href="#section4">Phân lô</a>
                        </li>
                        <li>
                            <a href="#section5">Video</a>
                        </li>
                        <li>
                            <a href="#section6">Hình ảnh</a>
                        </li>
                    </ul>
                </nav>
                <section class="project-page project-section1" id="section1">
                    <div class="container">
                        <h1 class="home-title text-center">Tổng quan</h1>
                        <div class="home-des text-center">{{ $project->preview }}</div>
                        <div class="project-content">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-6">
                                    <div class="project-img">
                                        <img src="{{ $project->first_picture }}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="content">
                                        @php
                                            $overView = $project->overview;
                                        @endphp
                                        <ul>
                                            <li style="text-align: justify;">
                                                <strong>Vị trí: </strong>{{ $overView->position }}
                                            <li>
                                                <strong>Quy mô: </strong>{{ $overView->area }}
                                            </li>
                                            <li>
                                                <strong>Đầu tư và phân phối: </strong>{{ $overView->investment }}
                                            </li>
                                            <li style="text-align: justify;">
                                                <strong>Hạ tầng: </strong>{{ $overView->structure }}
                                            </li>
                                            <li style="text-align: justify;">
                                                <strong>Tiện ích nội khu: </strong>{{ $overView->utility_local }}
                                            </li>
                                            <li style="text-align: justify;">
                                                <strong>Tiện ích liên kết: </strong>{{ $overView->utility_link }}
                                            </li>
                                            <li>
                                                <strong>Pháp lý: </strong>{{ $overView->contract }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="project-page project-section2" id="section2">
                    <div class="container">
                        <h2 class="page-title">Vị trí</h2>
                        <div class="project-content">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="content">
                                        <div style="text-align: justify;">{{ $project->location_content }}</div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="project-img">
                                        <img src="{{ $project->location_picture_custom }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="project-page project-section3" id="section3">
                    @foreach ($project->utilities as $utility)
                        <div class="project-content">
                            <section class="container">
                                <div class="row">
                                    @if ($loop->iteration % 2)
                                        <div class="col-12 col-lg-7 col-img">
                                            <div class="project-img">
                                                <img src="{{ $utility->first_picture }}" alt="Tiện ích">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5 col-text">
                                            <h2 class="page-title text-center">{{ $utility->title }}</h2>
                                            <div class="content">
                                                <div style="text-align: justify;">{{ $utility->content }}</div>
                                            </div>
                                        </div>
                                    @else 
                                        <div class="col-12 col-lg-5 col-text">
                                            <h2 class="page-title text-center">{{ $utility->title }}</h2>
                                            <div class="content">
                                                <div style="text-align: justify;">{{ $utility->content }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 col-img">
                                            <div class="project-img">
                                                <img src="{{ $utility->first_picture }}" alt="Tiện ích">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </section>
                        </div>
                    @endforeach
                </section>
                <section class="project-page project-section4" id="section4">
                    <div class="container">
                        <h2 class="page-title text-center">Phân lô</h2>
                        <div class="project-video">
                            <img src="{{ $project->subdivision_picture_custom }}" alt="Tiện ích">
                        </div>
                    </div>
                </section>
                <section class="project-page project-section5" id="section5">
                    <div class="container">
                        <h2 class="page-title text-center">Video</h2>
                        <div class="project-phanlo">
                            <iframe width="1240" height="560" src="{{ $project->first_video }}" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                        </div>
                    </div>
                </section>
                <section class="project-page" id="section6">
                    <div class="container">
                        <h2 class="page-title text-center">Hình ảnh</h2>
                        <div class="project-img">
                            <div class="row">
                                @foreach ($project->pictures as $picture)
                                    <div class="col-6 col-md-3">
                                        <a class="img" data-fancybox="album1" href="{{ $picture->name_custom }}" title="">
                                            <img src="{{ $picture->name_custom }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="project-page project-section6" id="section7">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <div class='project-form Module Module-155'>
                            <div class='ModuleContent'>
                                <div id="ctl00_mainContent_ctl01_pnlFormWizard">

                                    <div id="ctl00_mainContent_ctl01_pnlForm" class="wrap-form">

                                        <h2 class="module-title text-center">Đăng ký nhận thông tin dự án</h2>

                                        <div id="ctl00_mainContent_ctl01_pnlQuestions">
                                            <div class="form-wrap">
                                                <div class="form-row">
                                                    <div class="form-group qtext require form-group col-12 col-md-6">
                                                        <input name="ctl00$mainContent$ctl01$ctle7cafda1cf6c48a5a68db49bfb520b02$txte7cafda1cf6c48a5a68db49bfb520b02" type="text" id="ctl00_mainContent_ctl01_ctle7cafda1cf6c48a5a68db49bfb520b02_txte7cafda1cf6c48a5a68db49bfb520b02" placeholder="Họ và tên..." />
                                                    </div>
                                                    <div class="form-group qtext require form-group col-12 col-md-6">
                                                        <input name="ctl00$mainContent$ctl01$ctlf9830e74d9674e39908eff0a2b8a52ab$txtf9830e74d9674e39908eff0a2b8a52ab" type="text" size="30" id="ctl00_mainContent_ctl01_ctlf9830e74d9674e39908eff0a2b8a52ab_txtf9830e74d9674e39908eff0a2b8a52ab" placeholder="Email..." />
                                                    </div>
                                                    <div class="form-group qtext require form-group col-12 col-md-6">
                                                        <input name="ctl00$mainContent$ctl01$ctl6eb8db7ddb7e4ae4957f0fa7a77f16d7$txt6eb8db7ddb7e4ae4957f0fa7a77f16d7" type="text" id="ctl00_mainContent_ctl01_ctl6eb8db7ddb7e4ae4957f0fa7a77f16d7_txt6eb8db7ddb7e4ae4957f0fa7a77f16d7" placeholder="Tiêu đề..." />
                                                    </div>
                                                    <div class="form-group qtext require form-group col-12 col-md-6">
                                                        <input name="ctl00$mainContent$ctl01$ctlf02c19c771cb4ec49d9bca4c3dc23cd6$txtf02c19c771cb4ec49d9bca4c3dc23cd6" type="text" id="ctl00_mainContent_ctl01_ctlf02c19c771cb4ec49d9bca4c3dc23cd6_txtf02c19c771cb4ec49d9bca4c3dc23cd6" placeholder="Số điện thoại..." />
                                                    </div>
                                                    <div class="form-group qparagraph form-group col-12">
                                                        <textarea name="ctl00$mainContent$ctl01$ctl12fdabfbec7a47519ec27d201e122530$txt12fdabfbec7a47519ec27d201e122530" rows="2" cols="20" id="ctl00_mainContent_ctl01_ctl12fdabfbec7a47519ec27d201e122530_txt12fdabfbec7a47519ec27d201e122530" placeholder="Nội dung...">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="ctl00_mainContent_ctl01_up1" style="display:none;">

                                            <img src='{{ config(' setting.folder_image_public ') }}Data/SiteImages/indicators/indicator1.gif' alt=' ' />

                                        </div>
                                        <div class="form-group frm-btnwrap">
                                            <label class="label">&nbsp;</label>
                                            <div class="frm-btn">

                                                <input type="submit" name="ctl00$mainContent$ctl01$btnSubmit" value="Gửi" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$ctl01$btnSubmit&quot;, &quot;&quot;, true, &quot;formwizardd7897178-8144-4e89-bebd-c3e610527236&quot;, &quot;&quot;, false, false))" id="ctl00_mainContent_ctl01_btnSubmit" class="btn btn-default frm-btn-submit" />
                                                <input name="ctl00$mainContent$ctl01$btnReset" type="reset" id="ctl00_mainContent_ctl01_btnReset" class="btn btn-default frm-btn-reset" value="Xóa" />
                                                <input type="hidden" name="ctl00$mainContent$ctl01$hdnResponseSetGuid" id="ctl00_mainContent_ctl01_hdnResponseSetGuid" />
                                            </div>
                                        </div>
                                        <div class="clear"></div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
