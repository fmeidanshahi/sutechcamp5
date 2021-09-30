<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/css/mystyle.css">
</head>
<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" >داشبورد</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">پیشخوان</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  پست ها
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('panel.posts')}}">همه پست ها</a></li>
                  <li><a class="dropdown-item" href="{{route('panel.posts.new')}}">افزودن پست</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  کاربران
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('panel.users')}}">همه کاربران</a></li>
                  <li><a class="dropdown-item" href="{{route('panel.users.new')}}">افزودن کاربر</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-flex">
              <div class="dropdown">
                <a class="usermenu" href="#" type="button" id="usermenu" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span>فرناز میدانشاهی</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="dropdown-menu animate__animated animate__fadeInUp animate__faster"
                    aria-labelledby="usermenu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user-alt"></i>
                            <span>مشاهده پروفایل</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>خروج از حساب</span>
                        </a>
                    </li>
                </ul>
            </div>
            </div>
          </div>
        </div>
      </nav>
      <main>
          <div class="container">
              <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">@yield('panel-title')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">پیشخوان</a></li>
                                    <li class="breadcrumb-item active">@yield('panel-title')</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
              <div class="row">
                  <div class="col-12 col-lg-8">
                  <div class="card">
                            
                            @yield('content-right')
                            
                        </div>
                  </div>
              </div>
          </div>
        </main>
      <hr>
      @include('layouts.panel.footer')