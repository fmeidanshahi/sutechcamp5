@extends('layouts.front.main')
@section('page-title', 'مطلب')
@section('header-left')
<div class="user-bar">
                        <div class="avatar">
                            <img src="{{route('home')}}/img/profile.jpg" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="user-info">
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
                            <div class="account-type">اشتراک عادی</div>
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
@endsection

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">

                <div class="card single-post" data-aos="zoom-in">
                    <div class="post-img">
                        <img class="card-img-top" src="{{route('home')}}/img/post.jpg" alt="Card image cap">
                        <div class="overlay"></div>
                        <div class="post-btns">
                            <div class="post-btn" data-toggle="tooltip" data-placement="top"
                                 title="به اشتراک گذاری">
                                <i class="fas fa-share-square"></i>
                                <!-- <span>اشتراک گذاری</span> -->
                            </div>
                            <div class="post-btn" data-toggle="tooltip" data-placement="top" title="امتیازدهی">
                                <i class="fas fa-star"></i>
                                <!-- <span>اشتراک گذاری</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">یک عنوان تستی برای این مطلب</h3>
                        <div class="card-text">
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید
                                داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان
                                مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.

                            </p>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید
                                داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان
                                مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <div class="need-vip">
                                <div class="vip-box">
                                    <div class="icons">
                                        <i class="fas fa-frown-open"></i>
                                    </div>
                                    <div class="text">
                                        برای خواندن ادامه این مطلب بایستی حساب خود را ارتقا دهید!
                                    </div>
                                    <button class="upgrade-btn" href="button" data-bs-toggle="modal"
                                            data-bs-target="#account_upgrade">
                                        <i class="fas fa-crown"></i>
                                        <span>ارتقاء حساب</span>
                                    </button>
                                </div>
                                <div class="blurred-bg">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                        است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی
                                        می باشد. کتابهای زیادی در شصت و سه درصد گذشته.
                                    </p>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                        است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی
                                        می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                        جامعه و
                                        متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                                        علی
                                        الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می
                                        توان
                                        امید
                                        داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                        وزمان
                                        مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                                        موجود
                                        طراحی اساسا مورد استفاده قرار گیرد.
                                    </p>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                        است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی
                                        می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                        جامعه و
                                        متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                                        علی
                                        الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 sidebar">
                <div class="card author" data-aos="zoom-in">
                    <img src="{{route('home')}}/img/profile.jpg" class="article-writer" alt="عکس نویسنده">
                    <h5 class="author-name">عباس مهربانیان</h5>

                    <div class="card-body">
                        <h6 class="card-subtitle">
                            درباره نویسنده
                        </h6>
                        <p class="bio">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <h6 class="card-subtitle mt-4 mb-3">
                            آمار نویسنده
                        </h6>
                        <div class="author-stats">
                            <div class="author-stat">
                                <span class="num">۳۱۵</span>
                                <span class="text">مطلب</span>
                            </div>
                            <div class="author-stat">
                                <span class="num">۴.۲</span>
                                <span class="text">امتیاز کل</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card donate" data-aos="zoom-in">
                    <h5 class="card-title mb-3">
                        <i class="fas fa-donate"></i>
                        حمایت از نویسنده
                    </h5>

                    <div class="card-text">
                        <p>
                            این مطلب رایگان بود! درصورتی که برای شما مفید بود میتوانید از نویسنده این مطلب حمایت
                            کنید.
                        </p>
                        <form action="">
                            <input type="number" name="" id="" class="form-control"
                                   placeholder="مبلغ حمایت را وارد کنید...">
                            <small class="form-error">مبلغ حمایت حداقل باید ۱۰۰۰ تومان باشد.</small>
                            <button id="paydonation" type="button" class="blue-btn">
                                بفرست بره!
                            </button>
                        </form>
                    </div>
                    <div id="payment_success" class="success-overlay">
                        <div class="content">
                            <i class="fas fa-smile-wink"></i>
                            <h4>مرسی!</h4>
                            <p>براش فرستادیم!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-break-md"></div>
</main>
@endsection