@extends('layouts.panel.main')

@section('page-title', 'مدیریت پست‌ها')
@section('panel-title', 'مدیریت پست‌ها')

@section('content-right')
    <h4 class="card-title">مدیریت نوشته‌های سایت</h4>

    <div class="table-responsive">
        <table class="table table-hover mb-0">

            <thead>
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th>آخرین ویرایش</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @if(auth()->user()->role == 2)
              @foreach($authorPosts as $authorPost)
                
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$authorPost->title}}</td>
                    <td>{{$authorPost->updated_at}}</td>
                    <td><a href="{{route('panel.posts.edit', $authorPost->id)}}">ویرایش</a> |
                        <a href="{{route('panel.posts.delete', ['id'=>$authorPost->id])}}">حذف</a></td>
                </tr>
                
                @endforeach
            @else
            @if(isset($posts))
                @foreach($posts as $post)
                
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td><a href="{{route('panel.posts.edit', $post->id)}}">ویرایش</a> |
                        <a href="{{route('panel.posts.delete', ['id'=>$post->id])}}">حذف</a></td>
                </tr>
                
                @endforeach
            @endif
            @endif
            
            </tbody>
        </table>
    </div>
@endsection