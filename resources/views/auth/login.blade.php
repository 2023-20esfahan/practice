<!doctype html>
<html lang="fa-IR" dir="rtl">

<!-- Mirrored from limoostudio.com/rtl-theme/sash/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 11:09:19 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – الگوی مدیریت و داشبورد بوت استرپ 5">
    <meta name="author" content="limoostudio">
    <meta name="keywords"
          content="ادمین,داشبورد ادمین,پنل ادمین,قالب مدیریت,بوت استرپ,کلین,داشبورد,فلت,جیکوئری,مدرن,ریسپانسیو,قالب ادمین حرفه ای,داشبورد ریسپانسیو,رابط کاربری,کیت رابط کاربری.">

    <link rel="shortcut icon" type="image/x-icon"
          href="https://limoostudio.com/rtl-theme/assets/images/brand/favicon.ico"/>

    <title>صفحه لاگین</title>

    <link href="{{asset('/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/backend/fonts/iran-yekan.css')}}" rel="stylesheet"/>

    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('/backend/css/dark-style.css')}}" rel="stylesheet"/>
    <link href="{{asset('/backend/css/transparent-style.css')}}" rel="stylesheet"/>
    <link href="{{asset('/backend/css/skin-modes.css')}}" rel="stylesheet"/>
    <link href="{{asset('/backend/css/icons.css')}}" rel="stylesheet"/>

    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('/backend/colors/color1.css')}}"/>
    <link href="{{asset('/backend/switcher/switcher.css')}}" rel="stylesheet"/>
    <link href="{{asset('/backend/switcher/demo.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" id="fonts" href="#">
    <link href="{{asset('/backend/css/rtl.css')}}" rel="stylesheet"/>


</head>
<body class="app sidebar-mini ltr login-img">

<div class="">

    <div id="global-loader">
        <img src="https://limoostudio.com/rtl-theme/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>


    <div class="page">
        <div class="">

            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <img src="../assets/images/brand/logo-white.png" class="header-brand-img" alt="">
                </div>
            </div>
            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
<span class="login100-form-title pb-5">
ورود
</span>
                        <div class="panel panel-primary">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">

                                    <ul class="nav panel-tabs">
                                        <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">ایمیل</a>
                                        </li>
                                        <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">موبایل</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="wrap-input100 validate-input input-group"
                                             data-bs-validate="ایمیل معتبر مورد نیاز است: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" name="email" type="email"
                                                   placeholder="ایمیل">
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="password"
                                                   placeholder="پسورد" name="password">
                                        </div>
                                        <div class="text-end pt-4">
                                            <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">فراموشی
                                                    رمز؟</a></p>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            {{--<a href="index-2.html" class="login100-form-btn btn-primary">
                                                ورود
                                            </a>--}}
                                            <button class="login100-form-btn btn-primary" type="submit">ورود</button>
                                        </div>
                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">عضو نیستید؟<a href="{{ route('register') }}"
                                                                                    class="text-primary ms-1">عضو
                                                    شوید</a></p>
                                        </div>
                                        <label class="login-social-icon"><span>ورود با شبکه های اجتماعی</span></label>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-google"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login text-center">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <span>+98</span>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0">
                                        </div>
                                        <div id="login-otp" class="justify-content-around mb-5">
                                            <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                            <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                            <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                            <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                        </div>
                                        <span>یادداشت : برای تولید OTP با شماره موبایل ثبت شده وارد شوید.</span>
                                        <div class="container-login100-form-btn ">
                                            <a href="javascript:void(0)" class="login100-form-btn btn-primary"
                                               id="generate-otp">
                                                ادامه
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>


<script src="{{asset('/backend/js/show-password.min.js')}}"></script>

<script src="{{asset('/backend/js/generate-otp.js')}}"></script>
<script src="{{asset('/backend/js/jquery.min.js')}}"></script>
<script src="{{asset('/backend/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/backend/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/backend/js/sticky.js')}}"></script>
<script src="{{asset('/backend/js/circle-progress.min.js')}}"></script>
<script src="{{asset('/backend/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{asset('/backend/plugins/peitychart/peitychart.init.js')}}"></script>
<script src="{{asset('/backend/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{asset('/backend/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/backend/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('/backend/plugins/p-scroll/pscroll-1.js')}}"></script>

<script src="{{asset('/backend/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
<script src="{{asset('/backend/js/typehead.js')}}"></script>
<script src="{{asset('/backend/js/index.js')}}"></script>
<script src="{{asset('/backend/js/themeColors.js')}}"></script>
<script src="{{asset('/backend/js/custom.js')}}"></script>
<script src="{{asset('/backend/js/custom1.js')}}"></script>
<script src="{{asset('/backend/switcher/js/switcher.js')}}"></script>


</body>

<!-- Mirrored from limoostudio.com/rtl-theme/sash/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 11:09:20 GMT -->
</html>
