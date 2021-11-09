<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="{{route('home')}}/css/style.css">
</head>

<body dir="rtl">
    <video autoplay muted loop poster="{{route('home')}}/img/poster.jpg" class="back-footage">
        <source src="{{route('home')}}/videos/footage.mp4" type="video/mp4">
    </video>
    <div class="back-overlay"></div>
    <main>
        <div class="card login">
            <div class="content">
                <h1>ورود</h1>
                <p>برای ورود به حساب خود ایمیل و رمزعبور خود را وارد کنید.</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="ایمیل خود را وارد کنید..." autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    <div class="form-group row">
                
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="رمزعبور خود را وارد کنید...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <button type="submit">ورود به حساب</button>
                </form>

                <div class="forget-password">حساب ندارید؟ <a href="{{route('register')}}">ثبت نام کنید!</a></div>
            </div>
        </div>
    </main>
</body>

</html>

