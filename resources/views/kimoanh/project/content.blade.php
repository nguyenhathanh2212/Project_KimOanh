<main class="main">
    <div id="ctl00_divCenter" class="middle-fullwidth">
        <section class="project-page">
            <div class="container">
                <div class='Module Module-150'>
                    <div class='ModuleContent'>
                        <h1 class="home-title text-center">Dự án</h1>
                        <div class="page-nav">
                        <div class="btn-showtab"></div>
                            <ul class="home-tab">
                                @foreach ($typeProjects as $item)
                                    <li class="nav-item {{ $typeProject == $item ? 'active' : '' }}">
                                        <a class="nav-link {{ $typeProject == $item ? 'active' : '' }}" href="{{ route('kimoanh.project.show', [str_slug($item->name), $item->id]) }}" target="_self">{{ $item->name_custom }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='Module Module-152'>
                    <div class='ModuleContent'>
                        <div class="hot-project">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="row">
                                        @php
                                            $firstProject = $projects->first();
                                        @endphp
                                        <div class="col-12">
                                            <div class="project-col big">
                                                <figure>
                                                    <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($firstProject->title), $firstProject->id]) }}">
                                                        <img src="{{ $firstProject->first_picture }}">
                                                    </a>
                                                    <figcaption>
                                                        <h3 class="project-name">
                                                            <a href="{{ route('kimoanh.project.detail', [str_slug($firstProject->title), $firstProject->id]) }}" target="_self">{{ $firstProject->title }}
                                                            </a>
                                                        </h3>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        @if ($projects->slice(1)->take(2))
                                            @foreach ($projects->slice(1)->take(2) as $item)
                                                <div class="col-12 col-md-6">
                                                    <div class="project-col">
                                                        <figure>
                                                            <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($item->title), $item->id]) }}">
                                                                <img src="{{ $item->first_picture }}">
                                                            </a>
                                                            <figcaption>
                                                                <h3 class="project-name">
                                                                    <a href="{{ route('kimoanh.project.detail', [str_slug($item->title), $item->id]) }}" target="_self">{{ $item->title }}
                                                                    </a>
                                                                </h3>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="row">
                                        @if ($projects->slice(3)->first())
                                            @php
                                                $item = $projects->slice(3)->first();
                                            @endphp
                                            <div class="col-12 col-md-6 col-lg-12">
                                                <div class="project-col">
                                                    <figure>
                                                        <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($item->title), $item->id]) }}">
                                                            <img src="{{ $item->first_picture }}">
                                                        </a>
                                                        <figcaption>
                                                            <h3 class="project-name">
                                                                <a href="{{ route('kimoanh.project.detail', [str_slug($item->title), $item->id]) }}" target="_self">{{ $item->title }}</a>
                                                            </h3>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($projects->slice(4)->first())
                                            @php
                                                $item = $projects->slice(4)->first();
                                            @endphp
                                            <div class="col-12 col-md-6 col-lg-12">
                                                <div class="project-col high">
                                                    <figure>
                                                        <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($item->title), $item->id]) }}">
                                                            <img src="{{ $item->first_picture }}" alt="Mega City">
                                                        </a>
                                                        <figcaption>
                                                            <h3 class="project-name">
                                                                <a href="{{ route('kimoanh.project.detail', [str_slug($item->title), $item->id]) }}" target="_self">{{ $item->title }}</a>
                                                            </h3>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_mainContent_ctl01_ctl00_divPager" class="pages newspager">
                <div class='modulepager'>
                    {{ $projects->links() }}
                </div>
            </div> 
        </section>         
    </div>
</main>
