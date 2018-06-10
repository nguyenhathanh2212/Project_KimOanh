<div class='Module Module-142 news-index'>
    <div class='ModuleContent'>
        <section class="home-news">
            <div class="container">
                <h1 class="home-title text-center">Tin tức</h1>
                <div class="page-nav">
                    <div class="btn-showtab"></div>
                    <ul class="nav nav-tabs home-tab" id="myTab" role="tablist">
                        @foreach ($typeNews as $typeNew)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" role="tab" aria-selected="true" href="#tab{{ $typeNew->id }}" aria-controls="tab{{ $typeNew->id }}">
                                    {{ $typeNew->name_custom }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    @foreach ($typeNews as $typeNew)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" role="tabpanel" id="tab{{ $typeNew->id }}" aria-labelledby="tab{{ $typeNew->id }}">
                            <section class="hot-news">
                                <div class="row">
                                    @php
                                        $firstNew = $typeNew->topNews()->first();
                                    @endphp
                                    <div class="col-12 col-lg-6">
                                        <div class="news-col big">
                                            <figure>
                                                <a class="news-img" href="{{ route('kimoanh.news.detail', [str_slug($firstNew->title), $firstNew->id]) }}" target="_self" title="{{ $firstNew->title }}">
                                                    <img src="{{ $firstNew->first_picture }}" alt="{{ $firstNew->title }}">
                                                </a>
                                                <figcaption>
                                                    <h3 class="news-name">
                                                        <a href="{{ route('kimoanh.news.detail', [str_slug($firstNew->title), $firstNew->id]) }}" target="_self" title="{{ $firstNew->title }}">{{ $firstNew->title }}</a>
                                                    </h3>
                                                    <div class="news-des"><div style="text-align: justify;">{{ $firstNew->preview }}&nbsp;</div></div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            @foreach($typeNew->topNews as $news)
                                                @if (!$loop->first)
                                                    <div class="col-12 col-md-6">
                                                        <div class="news-col">
                                                            <figure>
                                                                <a class="news-img" href="{{ route('kimoanh.news.detail', [str_slug($news->title), $news->id]) }}" target="_self" title="{{ $news->title }}">
                                                                    <img src="{{ $news->first_picture }}">
                                                                </a>
                                                                <figcaption>
                                                                    <h3 class="news-name">
                                                                        <a href="{{ route('kimoanh.news.detail', [str_slug($news->title), $news->id]) }}" target="_self" title="{{$news->title }}">{{ $news->title }}</a>
                                                                    </h3>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
