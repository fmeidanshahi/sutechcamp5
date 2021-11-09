@extends('layouts.front.main')
@section('page-title', $post->title)

@section('content')
@include('partials.headerAndNavbar')
<main>
    @include('partials.modal.rating')
    

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card single-post" data-aos="zoom-in">
                        <div class="post-img">
                            <img src="{{route('uploads', 'thumbnails')}}/{{$post->thumbnail}}" class="card-img-top" alt="تصویر مطلب">
                            <div class="overlay"></div>
                            <div class="post-btns">
                                <a href="#" class="post-btn" data-bs-toggle="modal" data-bs-target="#share-post"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="به اشتراک گذاری">
                                    <i class="fas fa-share-square"></i>
                                </a>
                                @auth
                                <a href="#" class="post-btn" data-bs-toggle="modal" data-bs-target="#rating_stars"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="امتیازدهی">
                                    <i class="fas fa-star"></i>
                                </a>
                                @endauth
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$post->title}}</h4>
                            <div class="card-text">
                                {!! $post->the_content() !!}

                                

                            </div>
                        </div>
                    </div>

                    <section class="posts-section" data-aos="zoom-in">
                        <div class="section-intro">
                            <h3>مطالب مرتبط</h3>
                        </div>
                        <div class="related-posts mt-4 ">
                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>

                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>
                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>
                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>
                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>
                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>
                            <div class="related-post-wrapper ">
                                <div class="related-post" style="background-image: url({{route('home')}}/img/profile2.jpg);"></div>
                                <div class="post-title">
                                    <h5>عنوان تستی</h5>
                                    <p>نویسنده</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="card mt-4 comment-section" data-aos="zoom-in">
                        <div class="section-header">
                            <h4>دیدگاه‌ها</h4>
                            <p>یک دیدگاه برای این پست بزارید!</p>
                        </div>

                        <div class="commtent-box">
                            @auth
                                <img src="{{route('uploads', 'profiles')}}/{{auth()->user()->avatar}}" alt="" class="comment-user">
                                <div class="comment-editor">
                                    <form action="{{route('comment.new')}}" method="POST">
                                    @csrf
                                        <textarea name="comment" id="editor"></textarea>
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                        <button type="submit" class="btn btn-dark mt-3 float-end">ثبت کن!</button>
                                    </form>
                                </div>
                            @else
                            <!-- Not logged in -->
                                <p>
                                    برای ثبت دیدگاه
                                    <a href="{{route('login')}}">وارد شوید</a>
                                    و یا
                                    <a href="{{route('register')}}">یا ثبت‌نام کنید!</a>
                                </p>

                            @endauth
                        </div>

                        <div class="comments-container">

                            <div class="comment-wrapper">
                                @foreach($comments as $comment)
                                <div class="commtent-box">
                                    <img src="{{route('uploads', 'profiles')}}/{{$comment->user->avatar}}" alt="" class="comment-user">
                                    <div class="comment-text">
                                        <h6 class="comment-author">{{$comment->user->name}}</h6>
                                        <div class="comment-date">{{$comment->created_at}}</div>
                                        <div class="content">
                                            
                                            {{$comment->comment}} 
                                           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 sidebar">
                    <div class="card author" data-aos="zoom-in">
                        <img src="{{route('uploads', 'profiles')}}/{{$post->user->avatar}}" class="article-writer" alt="نوسینده مطلب">
                        <h5 class="author-name">{{$post->user->name}}</h5>

                        <div class="card-body">
                            <h6 class="card-subtitle">درباره نویسنده</h6>
                            <p class="bio">{{$post->user->bio}}</p>

                            <h6 class="card-subtitle mt-4 mb-3">آمار نویسنده</h6>
                            <div class="author-stats">
                                <div class="author-stat">
                                    <span class="num">{{$post->user->postsCount()->count()}}</span>
                                    <span class="text">مطلب</span>
                                </div>
                                <div class="author-stat">
                                    <span class="num">@if($post->rate == 0) - @else{{$post->rate}}@endif</span>
                                    <span class="text">امتیاز کل</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if($post->type == 1)
                    <div class="card donate" data-aos="zoom-in">
                        <h5 class="card-title">
                            <i class="fas fa-donate"></i>
                            حمایت از نویسنده
                        </h5>

                        <div class="card-text">
                            <p>
                                این مطلب رایگان بود! درصورتی که برای شما مفید بود میتوانید از نویسنده این مطلب حمایت
                                کنید.
                            </p>

                            <form action="{{route('post.supportTheAuthor')}}" method="POST">
                                @csrf
                                <input type="number" name="money" id="" class="form-control"
                                    placeholder="...مبلغ حمایت را وارد کنید">
                                <small class="form-error">مبلغ حمایت حداقل باید ۱۰۰۰ تومان باشد.</small>

                                <button type="submit" id="pay_donation" class="blue-btn mt-3">بفرست بره!</button>
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
                    @endif

                </div>
            </div>
        </div>

        <div class="section-break-md"></div>
</main>
@endsection

@section('footer')
    <script src="{{route('home')}}/js/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('#pay_donation').click(function () {
                $('#payment_success').fadeIn().css({display: 'flex'}).delay(3000).fadeOut();
            });
        });
        CKEDITOR.replace('editor');
    </script>
@endsection