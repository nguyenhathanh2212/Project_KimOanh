@extends('templates.kimoanh.master')
@section('title')
Contact
@endsection
@section('content')
<div id="ctl00_divAlt1" class="altcontent1 cmszone">
    <section class="breadcrumb-wrap">
        <div class='Module Module-89'>
            <div class='ModuleContent'>
                <div class="breadcrumb-img">
                    <img src="{{ config('setting.folder_image_public') }}Data/Sites/1/Banner/Default/default.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="breadcrumb-content">
            <div class='container Module Module-148'>
                <ol class='breadcrumb'>

                    <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/' class='itemcrumb' itemprop='url'><span itemprop='title'>Trang chủ</span></a></li>

                    <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/lien-he' class='itemcrumb active' itemprop='url'><span itemprop='title'>Liên hệ</span></a></li>

                </ol>
            </div>
        </div>
    </section>
</div>
<main class="main">
    @include('templates.layout.notice')
    <div id="ctl00_divCenter" class="middle-fullwidth">

        <section class="contact-page">
            <div class="container">
                <div class='Module Module-154'>
                    <div class='ModuleContent'>
                        <h1 class="home-title text-center">Liên hệ</h1></div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class='contact-info Module Module-53'>
                                <div class='ModuleContent'>
                                    <h2 class="company">CÔNG TY CỔ PHẦN DỊCH VỤ THƯƠNG MẠI &amp; XÂY DỰNG ĐỊA ỐC KIM OANH</h2>
                                    <ul>
                                        {{-- <li>
                                            <div class="title">Trụ sở chính:</div>
                                            <div class="des"> <strong>Địa chỉ: </strong>Lô C, Đường Lê Lợi, Phường Hòa Phú, TP. Thủ Dầu Một, Bình Dương
                                                <br />
                                                <strong>Điện thoại: </strong><a href="tel:(0274) 3554 999">(0274) 3554 999</a>
                                                <br />
                                                <strong>Hotline: </strong><a href="tel:0988121212 ">0988.12.12.12 </a>
                                                <br />
                                                <strong>Email: </strong><a href="mailto:info@diaockimoanh.com.vn">info@diaockimoanh.com.vn</a></div>
                                            </li> --}}
                                            <li>
                                                <div class="title">Chi nhánh:</div>
                                                <div class="des"> <strong class="text-uppercase">{{$contract->name}}</strong>
                                                    <br />
                                                    <strong>Địa chỉ: </strong>{{$contract->address}}
                                                    <br />
                                                    {{-- <div class="btn-viewmap">Xem bản đồ</div> --}}
                                                    <br />
                                                    <strong>Điện thoại: </strong><a href="tel:{{$contract->phone}}">{{$contract->phone}}</a>
                                                    <br />
                                                    <strong>Fax: </strong><a href="tel:{{$contract->hotline}} ">{{$contract->hotline}}</a>
                                                    <br />
                                                    <strong>Email: </strong><a href="<mailto:info@>{{$contract->email}}</mailto:info@>">{{$contract->email}}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="contact-form">
                                    <div class='Module Module-156'>
                                        <div class='ModuleContent'>
                                            <div class="module-title">Quý khách vui lòng điền thông tin vào mẫu bên dưới và gửi những góp ý, thắc mắc cho Kim Oanh Group, chúng tôi sẽ phản hồi email của Quý khách trong thời gian sớm nhất.</div>
                                        </div>
                                    </div>
                                    <div class='Module Module-93'>
                                        <div class='ModuleContent'>
                                            <div class="form-wrap">
                                                <div>
                                                    {!! Form::open(['url' => route('kimoanh.contact.store'), 'method' => 'post']) !!}
                                                        <div id="ctl00_mainContent_ctl03_pnlSend">
                                                            <div class="form-row">
                                                                <div class="form-group col-12 col-md-6">
                                                                    {!! Form::text('name', '', ['placeholder' => 'Họ tên', 'class' => 'form-control']) !!}
                                                                    <span class="error">
                                                                        @if ($errors->has('name'))
                                                                            <span>
                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div class="form-group col-12 col-md-6">
                                                                    {!! Form::text('email', '', ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                                                    <span class="error">
                                                                        @if ($errors->has('email'))
                                                                            <span>
                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div class="form-group col-12 col-md-6">
                                                                    {!! Form::text('title', '', ['placeholder' => 'Tiêu đề', 'class' => 'form-control']) !!}
                                                                    <span class="error">
                                                                        @if ($errors->has('title'))
                                                                            <span>
                                                                                <strong>{{ $errors->first('title') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div class="form-group col-12 col-md-6">
                                                                    {!! Form::number('phone', '', ['placeholder' => 'Điện thoại', 'class' => 'form-control']) !!}
                                                                    <span class="error">
                                                                        @if ($errors->has('phone'))
                                                                            <span>
                                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    {!! Form::textarea('content', '', ['placeholder' => 'Nội dung', 'class' => 'form-control', 'rows' => 2, 'cols' => 20]) !!}
                                                                    <span class="error">
                                                                        @if ($errors->has('content'))
                                                                            <span>
                                                                                <strong>{{ $errors->first('content') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="frm-btn">
                                                            <input type="submit" value="Gửi"/>
                                                        </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class='contact-map Module Module-54'>
                                    <div class='ModuleContent'>
                                        <iframe width="100%" height="350" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7831.62270684226!2d106.68488499951077!3d11.052766027909998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d0282acc99d3%3A0x5ab3c603e3e0c834!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gxJDhu4thIOG7kGMgS2ltIE9hbmg!5e0!3m2!1sen!2s!4v1526893561678" style="border: 0px none;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        @endsection
        @push('scripts')
        @endpush
