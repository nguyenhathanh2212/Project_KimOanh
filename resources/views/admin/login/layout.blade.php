<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     {{ Html::style(asset(config('setting.folder_css_admin') . 'bootstrap.min.css')) }}
    {{-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> --}}
    <!-- Font Awesome -->
    {{ Html::style(asset(config('setting.folder_css_admin') . 'font-awesome.min.css')) }}
    {{-- <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css"> --}}
    <!-- Ionicons -->
    {{ Html::style(asset(config('setting.folder_css_admin') . 'ionicons.min.css')) }}
    {{-- <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css"> --}}
    <!-- Theme style -->
    {{ Html::style(asset(config('setting.folder_css_admin') . 'AdminLTE.min.css')) }}
    {{ Html::style(asset(config('setting.folder_css_admin') . 'blue.css')) }}
  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


@yield('content')

<!-- jQuery 3 -->
 {{ Html::script(asset(config('setting.folder_js_admin') . 'jquery.min.js')) }}
{{-- <script src="bower_components/jquery/dist/jquery.min.js"></script> --}}
<!-- Bootstrap 3.3.7 -->
{{ Html::script(asset(config('setting.folder_js_admin') . 'bootstrap.min.js')) }}
{{-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
<!-- AdminLTE App -->
{{ Html::script(asset(config('setting.folder_js_admin') . 'adminlte.min.js')) }}
<!-- iCheck -->

{{ Html::script(asset(config('setting.folder_js_admin') . 'icheck.min.js')) }}
{{-- <script src="../../plugins/iCheck/icheck.min.js"></script> --}}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
