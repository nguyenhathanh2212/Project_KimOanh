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
                                            <a class="project-img" href="" target="_self" title="{{ $firstProject->title_custom }}">
                                                <img src="{{ $firstProject->first_picture }}">
                                            </a>
                                            <figcaption>
                                                <h3 class="project-name">
                                                    <a target="_self" href="" title="{{ $firstProject->title_custom }}">{{ $firstProject->title_custom }}</a>
                                                </h3>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                @foreach ($newProjects->slice(1)->take(2) as $newProject)
                                    <div class="col-12 col-md-6">
                                        <div class="project-col">
                                            <figure>
                                                <a class="project-img" href="#" target="_self" title="{{ $newProject->title_custom }}">
                                                    <img src="{{ $newProject->first_picture }}" alt="{{ $newProject->title_custom }}">
                                                </a>
                                                <figcaption>
                                                    <h3 class="project-name">
                                                        <a target="_self" href="#" title="{{ $newProject->title_custom }}">{{ $newProject->title_custom }}</a>
                                                    </h3>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                @php
                                    $newProject2 = $newProjects->slice(3)->take(1)->first();
                                @endphp
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="project-col">
                                        <figure>
                                            <a class="project-img" href="#">
                                                <img src="{{ $newProject2->first_picture }}" alt="College Town 3">
                                            </a>
                                            <figcaption>
                                                <h3 class="project-name">
                                                    <a href="#" target="_self">{{ $newProject2->title_custom }}</a>
                                                </h3>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                @php
                                    $newProject3 = $newProjects->slice(4)->take(1)->first();
                                @endphp

                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="project-col high">
                                        <figure>
                                            <a class="project-img" href="">
                                                <img src="{{ $newProject3->first_picture }}" alt="{{ $newProject3->first_picture }}">
                                            </a>
                                            <figcaption>
                                                <h3 class="project-name">
                                                    <a href="" target="_self">{{ $newProject3->first_picture }}</a>
                                                </h3>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
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
