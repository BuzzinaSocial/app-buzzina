<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>| {{ config('app.name') }} | @yield('title', '')</title>
    <link rel="apple-touch-icon" href="{{ asset("/images/favicon/apple-touch-icon-152x152.png") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("/images/favicon/favicon-32x32.png") }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: MIX CSS -->
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
@yield('style-mix')
<!-- END: MIX CSS -->
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("/vendors/vendors.min.css") }}">
@yield('style-vendor')
<!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset("/css/themes/vertical-gradient-menu-template/materialize.css") }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset("/css/themes/vertical-gradient-menu-template/style.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/pages/login.css") }}">
@yield('style-page-level')
<!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/custom/custom.css") }}">
@yield('style-custom')
<!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu 1-column login-bg  blank-page blank-page"
    data-open="click" data-menu="vertical-gradient-menu" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container" id="app">
            <div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form class="login-form" id="auth.login">
                        @csrf
                        @if ($errors->any())
                            <div class="card-alert card red lighten-5">
                                <div class="card-content red-text">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ ucfirst($error) }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="divider-border"><p></p></div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                <label for="email" class="center-align">@lang('auth.login.forms.labels.email')</label>
                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password" name="password" value="{{ old('password') }}"
                                       required>
                                <label for="password">@lang('auth.login.forms.labels.password')</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 m12 l12 ml-2 mt-1">
                                <p>
                                    <label>
                                        <input type="checkbox" name="remember"/>
                                        <span>@lang('auth.login.forms.labels.remember_me')</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button
                                    class="btn waves-effect waves-light border-round gradient-45deg-green-teal col s12"
                                    type="submit"
                                    form="auth.login"
{{--                                    formaction="{{ route('auth.login.authenticate') }}"--}}
                                    formmethod="post"
                                >@lang('auth.login.sing_in')</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small"><a
                                        {{--href="{{ route('auth.register.index') }}"--}}
                                    >
                                        <strong>@lang('auth.login.sing_up')</strong></a>
                                </p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small"><a
                                        href="user-forgot-password.html"><strong>@lang('auth.login.forgot_password')</strong></a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN MIX JS -->
{{--<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>--}}
@yield('script-mix')
<!-- END MIX JS -->
<!-- BEGIN VENDOR JS-->
<script src="{{ asset("/js/vendors.min.js") }}" type="text/javascript"></script>
@yield('script-vendor')
<!-- END VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
@yield('script-page')
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{ asset("/js/plugins.js") }}" type="text/javascript"></script>
<script src="{{ asset("/js/custom/custom-script.js") }}" type="text/javascript"></script>
@yield('script-theme')
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
@yield('script-page-level')
<!-- END PAGE LEVEL JS-->
{{--@include('layouts.components.widget')--}}
</body>
</html>
