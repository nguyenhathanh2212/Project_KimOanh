@if ($newProjects->count())
    <div class='Module Module-153'>
        <div class='ModuleContent'>
            <section class="home-project">
                <div class="container">
                    <h2 class="home-title text-center">Dự án</h2>
                    <div class="hot-project">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="row">
                                    @php
                                        $firstProject = $newProjects->first();
                                    @endphp
                                    <div class="col-12">
                                        <div class="project-col big">
                                            <figure>
                                                <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($firstProject->title), $firstProject->id]) }}" target="_self" title="{{ $firstProject->title_custom }}">
                                                    <img src="{{ $firstProject->first_picture }}">
                                                </a>
                                                <figcaption>
                                                    <h3 class="project-name">
                                                        <a target="_self" href="{{ route('kimoanh.project.detail', [str_slug($firstProject->title), $firstProject->id]) }}" title="{{ $firstProject->title_custom }}">{{ $firstProject->title_custom }}</a>
                                                    </h3>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    @if ($newProjects->slice(1)->take(2))
                                        @foreach ($newProjects->slice(1)->take(2) as $newProject)
                                            <div class="col-12 col-md-6">
                                                <div class="project-col">
                                                    <figure>
                                                        <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($newProject->title), $newProject->id]) }}" target="_self" title="{{ $newProject->title_custom }}">
                                                            <img src="{{ $newProject->first_picture }}" alt="{{ $newProject->title_custom }}">
                                                        </a>
                                                        <figcaption>
                                                            <h3 class="project-name">
                                                                <a target="_self" href="{{ route('kimoanh.project.detail', [str_slug($newProject->title), $newProject->id]) }}" title="{{ $newProject->title_custom }}">{{ $newProject->title_custom }}</a>
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
                                    @if ($newProjects->slice(3)->take(1)->first())
                                        @php
                                            $newProject2 = $newProjects->slice(3)->take(1)->first();
                                        @endphp
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="project-col">
                                                <figure>
                                                    <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($newProject2->title), $newProject2->id]) }}">
                                                        <img src="{{ $newProject2->first_picture }}" alt="College Town 3">
                                                    </a>
                                                    <figcaption>
                                                        <h3 class="project-name">
                                                            <a href="{{ route('kimoanh.project.detail', [str_slug($newProject2->title), $newProject2->id]) }}" target="_self">{{ $newProject2->title_custom }}</a>
                                                        </h3>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($newProjects->slice(4)->take(1)->first())
                                        @php
                                            $newProject3 = $newProjects->slice(4)->take(1)->first();
                                        @endphp

                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="project-col high">
                                                <figure>
                                                    <a class="project-img" href="{{ route('kimoanh.project.detail', [str_slug($newProject3->title), $newProject3->id]) }}">
                                                        <img src="{{ $newProject3->first_picture }}" alt="{{ $newProject3->first_picture }}">
                                                    </a>
                                                    <figcaption>
                                                        <h3 class="project-name">
                                                            <a href="{{ route('kimoanh.project.detail', [str_slug($newProject3->title), $newProject3->id]) }}" target="_self">{{ $newProject3->first_picture }}</a>
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
                    <div class="btn-wrap text-right">
                    </div>
                </div>
            </section>
        </div>
    </div>
@endif
