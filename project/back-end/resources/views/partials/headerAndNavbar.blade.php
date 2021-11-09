<header>
        <div class="container">
            <div class="row">
                <div class="col-6 header-right">
                    <a href="#">
                        <img src="{{route('home')}}/img/SUTCAMPLogo.png" alt="لوگو سوتک کمپ">
                    </a>
                    <div class="search-bar">
                        <form>
                            <input type="search" class="form-control" name="" id=""
                                placeholder="عبارتی برای جستجو وارد کنید...">
                        </form>
                    </div>
                </div>
                <div class="col-6 header-left">
                    @auth
                    <div class="user-bar">
                        <div class="avatar">
                        <img src="{{route('uploads', 'profiles')}}/{{auth()->user()->avatar}}" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a class="usermenu" href="#" type="button" id="usermenu" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="fas fa-sort-down"></i>
                                </a>
                                <ul class="dropdown-menu animate__animated animate__fadeInUp animate__faster"
                                    aria-labelledby="usermenu">
                                    <li>
                                        
                                        
                                        
                                        <a class="dropdown-item" href="{{route('profile', auth()->user()->id)}}">
                                            <i class="fas fa-user-alt"></i>
                                            <span>مشاهده پروفایل</span>
                                        </a>
                                    </li>
                                    <li>
                                    <form action="{{route('logout')}}" method="POST" id="logout_frm">
                                        @csrf
                                    <a class="dropdown-item" onclick="document.getElementById('logout_frm').submit();" href="#">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>خروج از حساب</span>
                                    </a>
                                    </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="account-type">
                            @auth
                            @php
                            if(!auth()->user()->is_vip()){
                            @endphp
                            اشتراک عادی
                            @php
                            }else{
                            @endphp
                            اشتراک ویژه
                            @php
                            }
                            @endphp
                            @endauth
                            </div>
                        </div>
                    </div>
                    <div class="notif-bell dropdown">
                        <a class="notif-menu" href="#" type="button" id="notif-menu" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <div class="new"></div>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp animate__faster"
                            aria-labelledby="notif-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span>یک اطلاعیه جدید</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span>یک اطلاعیه جدید</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <a href="{{route('login')}}" class="btn btn-info">ورود</a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="منوی ناوبری">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="index" href="#">صفحه اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">سوالات متداول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دسته بندی‌ها</a>
                    </li>
                </ul>
                @auth
                @php
                if(!auth()->user()->is_vip()){
                @endphp
                <button class="btn-upgrade" type="submit" data-bs-toggle="modal" data-bs-target="#upgrade_account">
                    <i class="fas fa-crown"></i>
                    <span>ویژه شوید!</span>
                </button>
                @include('partials.modal.vip')
                @php
                }
                @endphp
                @endauth
                
            </div>
        </div>
    </nav>