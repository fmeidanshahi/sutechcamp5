@extends('layouts.panel.main')
@section('page-title', 'افزودن نوشته')
@section('panel-title', 'افزودن پست جدید')

@section('content-right')
    <h5>خلق کنید! :)</h5>
    @include('partials.notifications')
    @include('partials.errors')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label>عنوان:</label>
            <input name="title" value="{{old('title', isset($post) ? $post->title : '')}}" type="text" class="form-control">
            <label>نامک:</label>
            <input name="slug" value="{{old('slug', isset($post) ? $post->slug : '')}}" type="text" class="form-control">
            <label>دسته‌بندی:</label>
            <select name="category_id" class="form-control">
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}" {{old('category_id', isset($post) ? $post->category_id == $category->id ? ' selected' :'' : '')}}>{{$category->name}}</option>
                                                      
                @endforeach
            </select>
            {{--Ex: radio: type (reg/vip) --}}
            <label>نوع محتوا:</label>
            <input type="radio" name="type" id="reg" value="1" {{old('type', isset($post) ? $post->type == 1 ? ' checked' :'' : '')}}>
            <label for="reg">عادی</label>
            <input type="radio" name="type" id="vip" value="2" {{old('type', isset($post) ? $post->type == 2 ? ' checked' :'' : '')}}>
            <label for="vip">ویژه</label>

            <br>
            <!-- <input name="type" value="1" hidden type="text"> -->
            <label>محتوا:</label>
            <textarea name="content" id="editor" cols="30" rows="5" class="form-control">{{old('content', isset($post) ? $post->content : '')}}</textarea>
            <label>تصویر شاخص:</label>
            <input name="thumbnail" type="file" required class="form-control" value="{{old('thumbnail', isset($post) ? $post->thumbnail : '')}}">
            <br>
            <input name="user_id" value="{{Auth::user()->id}}" hidden type="text">
            <button class="btn btn-success">ثبت نوشته</button>
        </div>
    </form>
@endsection

