<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{route('home')}}/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="{{route('home')}}/css/all.min.css">
    <link rel="stylesheet" href="{{route('home')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{route('home')}}/css/slick.css">
    <link rel="stylesheet" href="{{route('home')}}/css/slick-theme.css">
    <link rel="stylesheet" href="{{route('home')}}/css/aos.css">
    <link rel="stylesheet" href="{{route('home')}}/css/social-media.css">
    <link rel="stylesheet" href="{{route('home')}}/css/rating-stars.css">
    <link rel="stylesheet" href="{{route('home')}}/css/custom.css">
</head>

<body dir="rtl">
<div class="modal fade" id="share-post" tabindex="-1" aria-labelledby="sharePostLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sharePostLable">به اشتراک گذاری مطلب</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            <div class="sharing-links">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
            </div>
            
        </div>
        
      </div>
    </div>
  </div>


    @yield('content')

    <footer>
        <div class="footer-header">
            <div class="container">
                <div class="text">
                    <i class="fab fa-whatsapp"></i>
                    <span>
                        پاسخگوی سوالات شما در واتس‌اپ هستیم
                    </span>
                </div>
                <div class="buttons">
                    <a href="#" class="whatsapp-btn">چت در واتس‌اپ</a>
                </div>
            </div>
        </div>
        <div class="footer-main container">
            <div class="row">
                <div class="col-12 col-lg-4 footer-section">
                    <h4 class="footer-title">
                        درباره ما
                    </h4>
                    <p class="footer-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <div class="social-media-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-google-plus-square"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 footer-section">
                    <h4 class="footer-title">
                        پیوندها
                    </h4>
                    <ul class="friend-links">
                        <li class="friend-link-item">
                            <a href="#" class="friend-link">
                                <i class="fas fa-link"></i>
                                <span>انجمن علمی کامپیوتر</span>
                            </a>
                        </li>
                        <li class="friend-link-item">
                            <a href="#" class="friend-link">
                                <i class="fas fa-link"></i>
                                <span>وبسایت وزارت علوم و فناوری اطلاعات</span>
                            </a>
                        </li>
                        <li class="friend-link-item">
                            <a href="#" class="friend-link">
                                <i class="fas fa-link"></i>
                                <span>انجمن علمی کامپیوتر</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-5 footer-section">
                    <div style="width: 100%" class="map">
                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87%20%D8%B5%D9%86%D8%B9%D8%AA%DB%8C%20%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2+(%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87%20%D8%B5%D9%86%D8%B9%D8%AA%DB%8C%20%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-copy-right container">
            <div class="row">
                <div class="col-12 text-center text-md-start col-md-6">
                    <p>تمام حقوق برای وب‌سایت سوتک کمپ محفوظ میباشد.</p>
                </div>
                <div class="col-12 text-center text-md-end col-md-6">
                    <code>&lt;/&gt; w/ 💙 for SUTCamp</code>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{route('home')}}/js/bootstrap.bundle.js"></script>
    <script src="{{route('home')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{route('home')}}/js/slick.min.js"></script>
    <script src="{{route('home')}}/js/aos.js"></script>
    
    

    <script>
        AOS.init();
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option)
        });


        $('.trending-posts').slick({
            rtl: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            autoplay: false,
            arrows: false,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 460,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.related-posts').slick({
            rtl: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            autoplay: false,
            arrows: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 460,
                    settings: {
                        slidesToShow:2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        

        
    </script>
    @yield('footer')
</body>

</html>