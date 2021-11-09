

@extends('layouts.panel.main')
@section('page-title', 'افزودن کاربر')
@section('panel-title', 'افزودن کاربر جدید')

@section('content-right')
    <h5>شروع کنید! :)</h5>
    @include('partials.notifications')
    @include('partials.errors')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label>نام:</label>
            <input name="name" value="{{old('name', isset($user) ? $user->name : '')}}" type="text" class="form-control">
            <label>ایمیل:</label>
            <input name="email" value="{{old('email', isset($user) ? $user->email : '')}}" type="email" class="form-control">
            <label>پسورد:</label>
            <input name="password" value="{{old('password',$user->password)}}" type="password" class="form-control"> {{--type:password--}}

            {{--Ex: selected based on old|$user->role --}}
            <label>نقش کاربر:</label>
            <select name="role" class="form-control">
                <option value="3" {{old('role', isset($user) ? $user->role == 3 ? ' selected' :'' : '')}} > کاربر معمولی </option>
                <option value="2" {{old('role', isset($user) ? $user->role == 2 ? ' selected' :'' : '')}} >نویسنده</option>
                <option value="1" {{old('role', isset($user) ? $user->role == 1 ? ' selected' :'' : '')}} >مدیر کل</option>
            </select>
            <label>کیف پول</label>
            <input name="wallet" value="{{old('wallet', isset($user) ? $user->wallet : 0)}}" type="number" class="form-control">
            <label>تصویر پروفایل:</label>
            <input name="avatar" type="file" required class="form-control">
            <label>معرفی مختصر:</label>
            <textarea name="bio" cols="30" rows="5" class="form-control" >{{old('bio', isset($user) ? $user->bio : '')}}</textarea>
            <br>
            <button class="btn btn-success">ثبت کاربر</button>
        </div>
    </form>
@endsection