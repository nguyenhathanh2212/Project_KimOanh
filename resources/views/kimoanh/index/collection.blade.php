<div class='Module Module-145'>
    <div class='ModuleContent'>
        <section class="home-gallery">
            <div class="container">
                <h2 class="home-title text-center">Thư viện </h2>
                <div class="gallery-slide slider" id="slider-library">
                    @foreach ($newLibraries as $newLibrary)
                        <div class="item">
                            <a class="img" data-fancybox="album1" href="">
                                <img src="{{ $newLibrary->first_picture }}" alt="{{ $newLibrary->title_custom }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript">
    $('#slider-library').slick({
        centerMode: true,
        centerPadding: '280px',
        slidesToShow: 1,
    });
</script>
