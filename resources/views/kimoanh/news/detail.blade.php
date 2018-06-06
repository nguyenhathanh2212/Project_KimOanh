@extends('kimoanh.news.layout')
@section('title')
    {{ $news->title }}
@endsection
@section('content-news')
    <div class='Module Module-77'>
        <div class='ModuleContent'>
            <div id="ctl00_mainContent_ctl01_ctl00_pnlInnerWrap">
                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-9">
                        <section class="news-detail">
                            <h1 class="news-name">{{ $news->title }}</h1>
                            <div class="news-info">
                                <time>{{ $news->date }}</time>
                            </div>
                            <div class="content">
                                <p style="text-align: justify;">
                                    {{ $news->preview }}&nbsp;
                                </p>
                                <p style="text-align: justify;">
                                    {{ $news->content }}&nbsp;
                                </p>
                            </div>
                            <div class="share">
                                <div class="fb-send"></div>
                                <div class="face-like">
                                    <a class='fb-like' data-href='/tin-tuc/tin-doanh-nghiep-1/chia-khoa-thanh-cong-cua-kim-oanh-real' data-send='false' data-layout='button_count' data-width='100' data-show-faces='false'></a>
                                </div>
                                <div class="fb-share-button" data-layout="button_count"></div>
                                <div class="google">
                                    <div class='g-plusone' data-size='medium' data-count='true' data-href='/tin-tuc/tin-doanh-nghiep-1/chia-khoa-thanh-cong-cua-kim-oanh-real'>
                                    </div>
                                </div>
                                <div class="tweet">
                                    <a class='twitter-share-button' title='Tweet This' href='https://twitter.com/share' data-url='/tin-tuc/tin-doanh-nghiep-1/chia-khoa-thanh-cong-cua-kim-oanh-real' data-text='“Chìa khóa” thành công của Kim Oanh Real' data-count='horizontal'>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="news-sidebar">
                            <h3 class="small-title">Các tin khác</h3>
                            <div class="post-list">
                                @foreach ($newsRelateds as $newsRelated)
                                    <a class="post"
                                        href="{{ route('kimoanh.news.detail', [str_slug($newsRelated->title), $newsRelated->id]) }}"
                                        target="_self">
                                        <figure>
                                            <div class="post-img">
                                                <img src="{{ $newsRelated->first_picture }}" alt="{{ $newsRelated->title }}">
                                            </div>
                                            <figcaption>
                                                <div class="post-name">{{ $newsRelated->title }}</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                @endforeach                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
