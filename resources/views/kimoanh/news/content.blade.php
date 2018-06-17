<div class='Module Module-77'>
    <div class='ModuleContent'>
        <section class="hot-news">
            <div class="row">
                @php
                    $firstNews = $news->first();
                @endphp
                <div class="col-12 col-lg-6">
                    <div class="news-col big">
                        <figure>
                            <a class="news-img"
                                href="{{ route('kimoanh.news.detail', [str_slug($firstNews->title), $firstNews->id]) }}"
                                target="_self" title="{{ $firstNews->title }}">
                                <img src="{{ $firstNews->first_picture }}">
                            </a>
                            <figcaption>
                                <h3 class="news-name">
                                <a href="{{ route('kimoanh.news.detail', [str_slug($firstNews->title), $firstNews->id]) }}"
                                    target="_self" title="{{ $firstNews->title }}">{{ $firstNews->title }}</a></h3>
                                <div class="news-des">
                                    <div style="text-align: justify;">{{ $firstNews->preview }}&nbsp;</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        @if ($news->slice(1)->take(4))
                            @foreach ($news->slice(1)->take(4) as $item)
                                <div class="col-12 col-md-6">
                                    <div class="news-col">
                                        <figure>
                                            <a class="news-img" href="{{ route('kimoanh.news.detail', [str_slug($item->title), $item->id]) }}" target="_self" title="{{ $item->title }}">
                                                <img src="{{ $item->first_picture }}">
                                            </a>
                                            <figcaption>
                                                <h3 class="news-name">
                                                    <a href="{{ route('kimoanh.news.detail', [str_slug($item->title), $item->id]) }}" target="_self" title="{{ $item->title }}">{{ $item->title }}</a>
                                                </h3>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                @if ($news->slice(5))
                    @foreach ($news->slice(5) as $item)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="news-col">
                                <figure>
                                    <a class="news-img" href="{{ route('kimoanh.news.detail', [str_slug($item->title), $item->id]) }}" target="_self" title="{{ $item->title }}">
                                        <img src="{{ $item->first_picture }}">
                                    </a>
                                    <figcaption>
                                        <h3 class="news-name">
                                            <a href="{{ route('kimoanh.news.detail', [str_slug($item->title), $item->id]) }}" target="_self" title="{{ $item->title }}">{{ $item->title }}</a>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        <div id="ctl00_mainContent_ctl01_ctl00_divPager" class="pages newspager">
            <div class='modulepager'>
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>
