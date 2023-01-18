<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index-2.html">
                <img src="{{asset('/backend/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('/backend/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo"
                     alt="logo">
                <img src="{{asset('/backend/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('/backend/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                     alt="logo">
            </a>

        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                     viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                </svg>
            </div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>اصلی</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index-2.html"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">داشبورد</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span
                            class="side-menu__label">کالا</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="" class="slide-item">کاربران</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span
                            class="side-menu__label">حواله به انبار</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="" class="slide-item">ورود حواله به انبار</a></li>
                        <li><a href="" class="slide-item">لیست حواله ها</a></li>
                    </ul>
                </li>
                <li><a href="/logout" class="slide-item">خروج</a></li>
                <li class="sub-category">
                    <h3>صفحات از قبل ساخته شده</h3>
                </li>

            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                     viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/>
                </svg>
            </div>
        </div>
    </div>

</div>
