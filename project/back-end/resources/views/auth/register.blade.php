<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام در سایت</title>
    <link rel="stylesheet" href="{{route('home')}}/css/style.css">
</head>

<body dir="rtl">
    <video autoplay muted loop poster="{{route('home')}}/img/poster.jpg" class="back-footage">
        <source src="{{route('home')}}/videos/footage.mp4" type="video/mp4">
    </video>
    <div class="back-overlay"></div>
    <main>
        <div class="card register">
            <div class="content">
                <h1>ثبت نام</h1>
                <p>برای ایجاد یک حساب کاربری اطلاعات زیر را وارد نمایید.</p>
                <form class="grid-container" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                        <div class="form-group row">

                            <div >
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  required placeholder="نام و نام خانوادگی" autofocus>

                                @error('name')
                                    <!-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> -->

                                    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                            {{ $message }}
                                            </div>
                                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>

                                @enderror
                            </div>
                        </div>


                    <div class="form-group row">

                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="ایمیل">

                                @error('email')
                                    <!-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> -->

                                    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                            {{ $message }}
                                            </div>
                                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div >
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required placeholder="رمزعبور">

                                @error('password')
                                    <!-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> -->

                                    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                            {{ $message }}
                                            </div>
                                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div >
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تکرار رمزعبور">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('تصویر پروفایل') }}</label>
                            <div >
                                <input id="avatar" type="file" class="form-control" name="avatar"  placeholder="تصویر پروفایل">
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div >
                            <textarea name="bio" id="bio" cols="30" rows="5" class="form-control" placeholder="معرفی مختصر"></textarea>
                            </div>
                        </div>

                    <button type="submit">ثبت اطلاعات</button>
                </form>

                <div class="forget-password">حساب دارید؟ <a href="{{route('login')}}">وارد شوید!</a></div>
            </div>
        </div>
    </main>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, option)
        });

    </script>
</body>

</html>
