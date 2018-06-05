@include ('kimoanh.index.slider')
<main class="main">
    <div id="ctl00_divCenter" class="middle-fullwidth">
        @include ('kimoanh.index.news')
        @include ('kimoanh.index.project')
        @include ('kimoanh.index.video')
        @include ('kimoanh.index.collection')
        @include ('kimoanh.index.award')
        @include ('kimoanh.index.partner')
    </div>
</main>
<script type="text/javascript">
    $(document).ready(function() {
        $("#top-slider").slick({
            dots: true
        });
    });
</script>
