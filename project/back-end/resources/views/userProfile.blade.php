@extends('layouts.front.main')
@section('page-title', $user->name)
@section('content')
@include('partials.headerAndNavbar')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 profile-info" >
                    <div class="profile-wrapper" style="background-image: url({{route('home')}}/img/1349232.jpg);">
                        <!-- <img src="img/1349232.jpg" class="img-fluid" alt="..."> -->
                        <div class="overlay"></div>
                        <img src="{{route('uploads', 'profiles')}}/{{$user->avatar}}"  class="profile-photo"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $user->name }}" >
                        @auth
                        @php
                        if($user->id == auth()->user()->id){
                        @endphp
                        <a href="#"><div class="edit-profile"><i class="fas fa-edit"></i></div></a>
                        @php
                        }
                        @endphp
                        @endauth
                        <div class="profile-bar">
                            
                                <div class="container">
                                    
                                    
                                        <ul class="list-group list-group-horizontal  ">
                                            <li class="list-group-item "><i class="far fa-clock"></i> تاریخ عضویت<div class="profile-value">11مرداد،1400</div></li>
                                            <li class="list-group-item "><i class="far fa-clone"></i> تعداد مطالب<div class="profile-value">{{$user->postsCount()->count()}}</div></li>
                                            <li class="list-group-item "><i class="far fa-star"></i> امتیاز <div class="profile-value">4.2</div></li>
                                            <li class="list-group-item "><i class="far fa-clock"></i> آخرین بازدید <div class="profile-value">1 هفته پیش</div></li>
                                            <li class="list-group-item "><i class="far fa-comments"></i> بازخورد <div class="profile-value">120</div></li>
                                          </ul>
                                          @auth
                                          @php
                                          if($user->id != auth()->user()->id){
                                          @endphp
                                          <button class="btn" type="submit"><i class="fas fa-user-plus"></i> دنبال کردن</button>
                                          @php
                                          }
                                          @endphp
                                          @endauth  
                                    
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row main-profile mb-3">
                <div class="col-12  col-lg-4 mb-3">
                        @auth
                        @php
                        if($user->id == auth()->user()->id){
                        @endphp
                        <div class="wallet">
                        <div class="wallet-icon"><i class="fas fa-wallet"></i></div>
                        <div class="wallet-box">
                            <div class="wallet-text">
                                <p>موجودی کیف پول</p>
                                <div>{{number_format($user->wallet)}} تومان</div>
                            </div>
                            <button type="button" class="btn btn-dark"><i class="fas fa-rocket"></i> افزایش موجودی</button>
                        </div>
                        </div>
                        @php
                        }
                        @endphp
                        @endauth
                    
                    <div class="about-me">
                        <h6>کمی درباره من :)</h6>
                        <p> {{$user->bio}}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="main-left">
                        <div class="nav-background">
                            <nav>
                                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">فعالیت</button>
                                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">بازخوردها</button>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <ul class="list-group activity">
                                    <li class="list-group-item">
                                        <div class="activity-item">
                                            <div class="right-section">
                                                <i class="fas fa-plus-circle add-subject" data-bs-toggle="tooltip" data-bs-placement="top" title="مطلب جدید"></i>
                                                <img src="{{route('home')}}/img/profile.jpg" class="profile-photo">
                                            </div>
                                            
                                            <div class="content">
                                                <div class="activity-type"><i class="fas fa-circle"></i><a href="#"> فرناز میدانشاهی </a>یک مطلب جدید در <a href="#"> تکنولوژی </a>ارسال کرد.</div>
                                                
                                                <h5>یک عنوان تستی برای این مطلب</h5>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد...</p>
                                                <div class="details">
                                                    <span><i class="far fa-clock"></i> 3 روز پیش </span>
                                                    <span class="second"><i class="far fa-comments"></i> 120 دیدگاه </span>
                                                </div>
                                            </div>
                                        </div>
    
                                    </li>
                                    <li class="list-group-item">
                                        <div class="activity-item">
                                            <div class="right-section">
                                                <div class="user-profile"><i class="fas fa-star"></i></div>
                                            </div>
                                            
                                            <div class="content">
                                                <div class="activity-type" style="max-width: none;"><i class="fas fa-circle"></i><a href="#"> فرناز میدانشاهی </a>یک بازخورد برای <a href="#"> علی احمدی </a>ثبت کرد.</div>
                                                 
                                                <div class="details">
                                                    <span><i class="far fa-clock"></i> 3 روز پیش </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="activity-item">
                                            <div class="right-section">
                                                <i class="fas fa-plus-circle add-subject" data-bs-toggle="tooltip" data-bs-placement="top" title="دیدگاه جدید"></i>
                                                <img src="{{route('home')}}/img/profile.jpg" class="profile-photo">
                                            </div>
                                            
                                            <div class="content">
                                                <div class="activity-type"><i class="fas fa-circle"></i><a href="#"> فرناز میدانشاهی </a>یک دیدگاه جدید در <a href="#"> یک عنوان تستی </a>ارسال کرد.</div>
                                                <h5> دیدگاه در «یک عنوان تستی»</h5>
                                                <p>سلام. مطلب خیلی خوبی بود. اگه میشه در مورد نکته آخر بیشتر توضیح بدید.</p>
                                                <div class="details">
                                                    <span><i class="far fa-clock"></i> 5 روز پیش </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                  </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <ul class="list-group activity">
                                    <li class="list-group-item">
                                        <div class="activity-item">
                                            <div class="right-section">
                                                <img src="{{route('home')}}/img/profile2.jpg" class="profile-photo">
                                                <i class="far fa-grin-hearts" data-bs-toggle="tooltip" data-bs-placement="top" title="عالی"></i>
                                            </div>
                                            
                                            <div class="content">
                                                <div class="activity-type"><i class="fas fa-circle"></i><a href="#"> علیرضا احمدی </a> یک بازخورد ثبت کرده است. </div>
                                                <p>بهترین مطالب این سایت جز مطالب ایشون بوده!</p>
                                                <div class="details">
                                                    <span><i class="far fa-clock"></i> 1 روز پیش </span>
                                                </div>
                                            </div>
                                        </div>
    
                                    </li>
                                    <li class="list-group-item">
                                        <div class="activity-item">
                                            <div class="right-section">
                                                <img src="{{route('home')}}/img/profile3.jpg" class="profile-photo">
                                                <i class="far fa-smile-beam" data-bs-toggle="tooltip" data-bs-placement="top" title="خوب"></i>
                                            </div>
                                            
                                            <div class="content">
                                                <div class="activity-type" style="max-width: none;"><i class="fas fa-circle"></i><a href="#"> رضا مولایی </a> یک بازخورد ثبت کرده است. </div>
                                                <p>بد نبود مطالبتون! میتونست بهترم باشه.</p>
                                                <div class="details">
                                                    <span><i class="far fa-clock"></i> 3 روز پیش </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="activity-item">
                                            <div class="right-section">
                                                <img src="{{route('home')}}/img/profile4.jpg" class="profile-photo">
                                                <i class="far fa-meh" data-bs-toggle="tooltip" data-bs-placement="top" title="متوسط"></i>
                                            </div>
                                            
                                            <div class="content">
                                                <div class="activity-type" style="max-width: none;"><i class="fas fa-circle"></i><a href="#"> فاطمه رضایی </a> یک بازخورد ثبت کرده است. </div>
                                                <p>حالا همچی هم خوب نبود :/</p>
                                                <div class="details">
                                                    <span><i class="far fa-clock"></i> 5 روز پیش </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>    
    </main>
@endsection