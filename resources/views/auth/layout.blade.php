<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{ Html::style(asset(config('setting.folder_css_admin') . 'bootstrap.min.css')) }}
        {{ Html::style(asset(config('setting.folder_css_admin') . 'font-awesome.min.css')) }}
        {{ Html::style(asset(config('setting.folder_css_admin') . 'ionicons.min.css')) }}
        <!-- Theme style -->
        {{ Html::style(asset(config('setting.folder_css_admin') . 'AdminLTE.min.css')) }}
        {{ Html::style(asset(config('setting.folder_css_admin') . 'blue.css')) }}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    @yield('content')
</html>
{{ Html::script(asset(config('setting.folder_js_admin') . 'jquery.min.js')) }}
{{ Html::script(asset(config('setting.folder_js_admin') . 'bootstrap.min.js')) }}
{{ Html::script(asset(config('setting.folder_js_admin') . 'adminlte.min.js')) }}
{{ Html::script(asset(config('setting.folder_js_admin') . 'icheck.min.js')) }}
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
