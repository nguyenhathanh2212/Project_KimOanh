$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('keyup', '.search-news', function(event) {
        event.preventDefault();
        var text = $(this).val();

        $.ajax({
            url: $(this).attr('data-url'),
            type: 'POST',
            data: {text: text},
        })
        .done(function(data) {
            if (data.success) {
                $('.content-list-news').html(data.html);
            }
        });
    });

    $('.content-list-news').on('click','.pagination a', function(e){
       e.preventDefault();
       var page = $(this).attr('href').split('page=')[1];
       getPostsNews(page);
    });

    function getPostsNews(page)
    {
        $.ajax({
            url: $('.search-news').attr('data-url') + '?page='+ page,
            type: 'POST',
            data: {
                text: $('.search-news').val()
            },
        })
        .done(function(data) {
            if (data.success) {
                $('.content-list-news').html(data.html);
            }
        });
    }

    $(document).on('keyup', '.search-project', function(event) {
        event.preventDefault();
        var text = $(this).val();

        $.ajax({
            url: $(this).attr('data-url'),
            type: 'POST',
            data: {text: text},
        })
        .done(function(data) {
            if (data.success) {
                $('.content-list-project').html(data.html);
            }
        });
    });

    $('.content-list-project').on('click','.pagination a', function(e){
       e.preventDefault();
       var page = $(this).attr('href').split('page=')[1];
       getPostsProject(page);
    });

    function getPostsProject(page)
    {
        $.ajax({
            url: $('.search-project').attr('data-url') + '?page='+ page,
            type: 'POST',
            data: {
                text: $('.search-project').val()
            },
        })
        .done(function(data) {
            if (data.success) {
                $('.content-list-project').html(data.html);
            }
        });
    }
});