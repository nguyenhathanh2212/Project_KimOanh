@extends('templates.kimoanh.master')
@section('title')
    Index
@endsection
@section('content')
    @include('kimoanh.index.content')
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slider-award').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $('#slide-partner').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $("#top-slider").slick({
                dots: true
            });
            
            $('#slider-library').slick({
                centerMode: true,
                centerPadding: '280px',
                slidesToShow: 1,
            });
        });
    </script>
@endpush
