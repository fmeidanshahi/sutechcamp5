@extends('layouts.front.main')
@section('page-title', 'صفحه اصلی')

@section('content')
@include('partials.headerAndNavbar')
    <main>
        <div class="container posts-container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-12 mb-5 col-md-6 col-lg-4">
                    <a href="{{route('posts.single', $post->slug)}}">
                        <div class="card post"data-aos="zoom-in">
                            <div class="post-img">
                                <img src="{{route('uploads', 'thumbnails')}}/{{$post->thumbnail}}" class="card-img-top" alt="...">
                                <div class="overlay"></div>
                            </div>
                            <div class="post-info">
                                <div class="info-box right animate__animated animate__faster animate__fadeInUp">
                                    <i class=" far fa-eye"></i>
                                    <span>{{$post->views}}</span>
                                </div>
                                <img src="{{route('uploads', 'profiles')}}/{{$post->user->avatar}}"  class="article-writer" alt="نوسینده مطلب"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $post->user->name }}">
                                <div class="info-box left animate__animated animate__faster animate__fadeInUp">
                                    <i class="far fa-comments"></i>
                                    <span>{{$post->commentsCount()->count()}}</span>
                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}@php echo $post->type == 1 ? '<span class="badge free-badge">رایگان!</span>' : '' @endphp</h5>
                                <p class="card-text">{{$post->excerpt()}}</p>
                            </div>
                        </div>
                    </a>  
                </div>
                @endforeach
            </div>
        </div>
        
        <nav aria-label="صفحه">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link">...</a></li>
                <li class="page-item"><a class="page-link" href="#">12</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="section-break"></div>
        <section class="container">
            <div class="section-intro">
                <h3>داغ ترین مطالب</h3>
                <p>شما نیز این مطالب دنبال کنید!</p>
            </div>
            <div class="trending-posts">
                @foreach($trendingPosts as $trendingPost)
                <div class="trending-post-wrapper">
                    <div class="trending-post"data-aos="zoom-in" style="background-image: url({{route('uploads', 'thumbnails')}}/{{$trendingPost->thumbnail}});">
                        
                            
                            <div class="post-text">
                                <div class="buttons">
                                    <a href="#" class="category">{{$trendingPost->category->name}}</a>
                                </div>
                                <div class="post-title">
                                    <p>{{$trendingPost->title}}</p>
                                </div>
                            </div>
                        
                        <img src="{{route('uploads', 'profiles')}}/{{$trendingPost->user->avatar}}" class="article-writer" alt="نوسینده مطلب"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="{{$trendingPost->user->name}}">
                        
                    </div>
                </div>
                @endforeach
                
            </div>
        </section>
        <div class="section-break-md"></div>
    </main>
@endsection