 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Kim Oanh</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="templates/admin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    {{ Html::style(asset(config('setting.folder_css_admin') . 'bootstrap.min.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/vendor/animate/animate.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/vendor/css-hamburgers/hamburgers.min.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/vendor/animsition/css/animsition.min.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/vendor/select2/select2.min.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset('/templates/admin/vendor/daterangepicker/daterangepicker.css')) }}
<!--===============================================================================================-->
    {{ Html::style(asset(config('setting.folder_css_admin') . 'util.css')) }}
    {{ Html::style(asset(config('setting.folder_css_admin') . 'main.css')) }}
<!--===============================================================================================-->
    <style type="text/css">
        span.error {
            color: #f00;
        }
    </style>
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(templates/admin/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>
                <form class="login100-form validate-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Enter email">
                        <span class="focus-input100"></span>
                        <span class="error">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                        <span class="error">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        {{-- <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div> --}}
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{ Html::script(asset(config('setting.folder_js_admin') . 'jquery.min.js')) }}
    {{ Html::script(asset('/templates/admin/vendor/animsition/js/animsition.min.js')) }}
    {{ Html::script(asset(config('setting.folder_js_admin') . 'popper.js')) }}
    {{ Html::script(asset(config('setting.folder_js_admin') . 'bootstrap.min.js')) }}
    {{ Html::script(asset('/templates/admin/vendor/select2/select2.min.js')) }}
    {{ Html::script(asset('/templates/admin/vendor/daterangepicker/moment.min.js')) }}
    {{ Html::script(asset('/templates/admin/vendor/daterangepicker/daterangepicker.js')) }}
    {{ Html::script(asset('/templates/admin/vendor/countdowntime/countdowntime.js')) }}
    {{ Html::script(asset(config('setting.folder_js_admin') . 'main.js')) }}
</body>
</html>
