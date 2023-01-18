<!doctype html>
<html lang="fa-IR" dir="rtl">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="مرغ داری">
    <meta name="author" content="limoostudio">
    <meta name="keywords"
          content="ادمین,داشبورد ادمین,پنل ادمین,قالب مدیریت,بوت استرپ,کلین,داشبورد,فلت,جیکوئری,مدرن,ریسپانسیو,قالب ادمین حرفه ای,داشبورد ریسپانسیو,رابط کاربری,کیت رابط کاربری.">

    <link rel="shortcut icon" type="image/x-icon"
          href="https://limoostudio.com/rtl-theme/assets/images/brand/favicon.ico"/>

    <title>مرغ داری </title>

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
    <!-- MAIN CSS -->
    @yield('style')
</head>
<body class="app sidebar-mini rtl light-mode">


<div id="global-loader">
    <img src="https://limoostudio.com/rtl-theme/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>


<div class="page">
    <div class="page-main">

        @include('Admin.section.header')

        @include('Admin.section.menu')
        <div class="main-content app-content mt-0">
            @yield('content')
        </div>

    </div>

    <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0 shadow-none border-0">
            <div class="tab-menu-heading border-0 d-flex p-3">
                <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>اعلان‌ها</div>
                <div class="card-options ms-auto">
                    <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1"
                       data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i
                            class="fe fe-x text-white"></i></a>
                </div>
            </div>
            <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                <div class="tabs-menu border-bottom">

                    <ul class="nav panel-tabs">
                        <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                    class="fe fe-settings me-1"></i>فیدها</a></li>
                        <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> گپ</a></li>
                        <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>تایم لاین</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="side1">
                        <div class="p-3 fw-semibold ps-5">فیدها</div>
                        <div class="card-body pt-2">
                            <div class="browser-stats">
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                class="fe fe-user text-primary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">کاربر جدید ثبت نام کرد</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-secondary bround bg-secondary-transparent"><i
                                                class="fe fe-shopping-cart text-secondary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">سفارش جدید تحویل شد</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-danger bround bg-danger-transparent"><i
                                                class="fe fe-bell text-danger"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">شما کارهای معلق دارید</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-warning bround bg-warning-transparent"><i
                                                class="fe fe-gitlab text-warning"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">نسخه جدید رسید</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                class="fe fe-database text-pink"></i></span></div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">سرور شماره 1 پر شده است</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i
                                                class="fe fe-check-circle text-info"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">پروژه جدید راه اندازی شد</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold ps-5">تنظیمات</div>
                        <div class="card-body pt-2">
                            <div class="browser-stats">
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                class="fe fe-settings text-primary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">تنظیمات عمومی</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-secondary bround bg-secondary-transparent"><i
                                                class="fe fe-map-pin text-secondary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">تنظیمات نقشه</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-danger bround bg-danger-transparent"><i
                                                class="fe fe-headphones text-danger"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">تنظیمات پشتیبانی</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-warning bround bg-warning-transparent"><i
                                                class="fe fe-credit-card text-warning"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">تنظیمات پرداخت</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                class="fe fe-bell text-pink"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">تنظیمات اعلان</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="side2">
                        <div class="list-group list-group-flush">
                            <div class="pt-3 fw-semibold ps-5">امروز</div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/2.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">ادی مینسترا
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> سلام! در آنجا من در دسترس هستم ... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/11.jpg"><span
                                            class="avatar-status bg-success"> </span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">رز بوش
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> باشه... منتظرت هستم </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/10.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">کلود استروفوبیا
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> سلام می توانیم پروژه جدید خود را توضیح
                                            دهیم...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/13.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">ایلین دوور
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> محصول جدید در حال راه اندازی... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/12.jpg"><span
                                            class="avatar-status bg-success"> </span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">ویلی فاندیت
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> باشه... منتظرت هستم </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/15.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">مانی جاه
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> سلام می توانیم پروژه جدید خود را توضیح
                                            دهیم...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/4.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">شکوفه گیلاس
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> سلام! آنجا من در دسترس هستم....</p>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-3 fw-semibold ps-5">دیروز</div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/7.jpg"><span
                                            class="avatar-status bg-success"> </span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">سایمون سایس
                                        </div>
                                        <p class="mb-0 fs-12 text-muted">زمانبندی اجرای واقعی...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/9.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">لورا بایدینگ
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> سلام می توانیم پروژه جدید خود را توضیح
                                            دهیم...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/2.jpg"><span
                                            class="avatar-status bg-success"> </span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">ادی مینسترا
                                        </div>
                                        <p class="mb-0 fs-12 text-muted">برای جزئیات با من تماس بگیرید....</p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/9.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">ایوان نوتریدیا
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> سلام می توانیم پروژه جدید خود را توضیح
                                            دهیم...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/14.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">دالسی ویتا
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"> باشه... منتظرت هستم </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/11.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">فلوریندا کاراسکو
                                        </div>
                                        <p class="mb-0 fs-12 text-muted">محصول جدید در حال راه اندازی...</p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                          data-bs-image-src="../assets/images/users/4.jpg"><span
                                            class="avatar-status bg-success"> </span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                             data-target="#chatmodel">شکوفه گیلاس
                                        </div>
                                        <p class="mb-0 fs-12 text-muted"><span class="__cf_email__"
                                                                               data-cfemail="bcdfd4d9cecec5ded0d3cfcfd3d1fcdbd1ddd5d092dfd3d1">[email&#160;protected]</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="side3">
                        <ul class="task-list timeline-task">
                            <li class="d-sm-flex mt-4">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">کار به پایان رسید<span
                                            class="text-muted fs-11 mx-2 fw-normal">20 مرداد 1401</span></h6>
                                    <p class="text-muted fs-12">آدام بری کار را در<a href="javascript:void(0)"
                                                                                     class="fw-semibold"> مدیریت
                                            پروژه</a> به پایان رساند</p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">نظر جدید<span class="text-muted fs-11 mx-2 fw-normal">20 تیز 1401</span>
                                    </h6>
                                    <p class="text-muted fs-12">ویکتوریا روی پروژه <a href="javascript:void(0)"
                                                                                      class="fw-semibold"> الگوی
                                            AngularJS</a> نظر داد
                                    </p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">نظر جدید<span class="text-muted fs-11 mx-2 fw-normal">15 مرداد 1401</span>
                                    </h6>
                                    <p class="text-muted fs-12">ویکتوریا روی پروژه <a href="javascript:void(0)"
                                                                                      class="fw-semibold"> الگوی
                                            AngularJS</a> نظر داد
                                    </p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">کار به تاخیر افتاده<span
                                            class="text-muted fs-11 mx-2 fw-normal">17 مرداد 1401</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser کار را به پایان رساند <a
                                            href="javascript:void(0)" class="fw-semibold"> مدیریت یکپارچه</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">کار به تاخیر افتاده<span
                                            class="text-muted fs-11 mx-2 fw-normal">12 مرداد 1401</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser کار را به پایان رساند <a
                                            href="javascript:void(0)" class="fw-semibold"> مدیریت یکپارچه</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">کار به پایان رسید<span
                                            class="text-muted fs-11 mx-2 fw-normal">30 مرداد 1401</span></h6>
                                    <p class="text-muted fs-12">آدام بری کار را در<a href="javascript:void(0)"
                                                                                     class="fw-semibold"> مدیریت
                                            پروژه</a> به پایان رساند</p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="country-selector">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content country-select-modal">
                <div class="modal-header">
                    <h6 class="modal-title">انتخاب کشور</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <ul class="row p-3">
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/us_flag.jpg"
                                                                    class="me-3 language"></span>ایالات متحده آمریکا
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/italy_flag.jpg"
                                                                    class="me-3 language"></span>ایتالیا
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/spain_flag.jpg"
                                                                    class="me-3 language"></span>اسپانیا
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/india_flag.jpg"
                                                                    class="me-3 language"></span>هند
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/french_flag.jpg"
                                                                    class="me-3 language"></span>فرانسوی
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/russia_flag.jpg"
                                                                    class="me-3 language"></span>روسیه
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/germany_flag.jpg"
                                                                    class="me-3 language"></span>آلمان
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/argentina.jpg"
                                                                    class="me-3 language"></span>آرژانتین
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/malaysia.jpg"
                                                                    class="me-3 language"></span>مالزی
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="" src="../assets/images/flags/turkey.jpg"
                                                                    class="me-3 language"></span>ترکیه
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @include('Admin.section.footer')

</div>

<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
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
<script src="{{asset('/backend/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('/backend/plugins/chart/rounded-barchart.js')}}"></script>
<script src="{{asset('/backend/plugins/chart/utils.js')}}"></script>
<script src="{{asset('/backend/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('/backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('/backend/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/backend/js/apexcharts.js')}}"></script>
<script src="{{asset('/backend/plugins/apexchart/irregular-data-series.js')}}"></script>
<script src="{{asset('/backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('/backend/plugins/flot/dashboard.sampledata.js')}}"></script>
<script src="{{asset('/backend/plugins/flot/chart.flot.sampledata.js')}}"></script>
<script src="{{asset('/backend/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('/backend/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('/backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('/backend/plugins/sidemenu/sidemenu.js')}}"></script>
<script src="{{asset('/backend/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
<script src="{{asset('/backend/js/typehead.js')}}"></script>
<script src="{{asset('/backend/js/index.js')}}"></script>
<script src="{{asset('/backend/js/themeColors.js')}}"></script>
<script src="{{asset('/backend/js/custom.js')}}"></script>
<script src="{{asset('/backend/js/custom1.js')}}"></script>
<script src="{{asset('/backend/switcher/js/switcher.js')}}"></script>
<script src="{{asset('/backend/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{asset('/backend/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{asset('/backend/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('/backend/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('/backend/plugins/fancyuploder/fancy-uploader.js')}}"></script>




@yield('script')
</body>

<!-- Mirrored from limoostudio.com/rtl-theme/sash/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 11:08:20 GMT -->
</html>
