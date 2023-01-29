@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title">   ویرایش کاربر  </h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">

                          ویرایش کاربر</li>

                    </ol>
                    @include('Admin.user.messages')
                    </div>
                    </div>
                    <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
  <label for="username" class="form-label">نام کاربری </label>
  <input type="username" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="نام کاربری" name="name">
@error('name')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="mb-3">
  <label for="email" class="form-label"> ایمیل</label>
  <input class="form-control @error('email') is-invalid @enderror" id="email" rows="3" name="email" value="{{$user->email}}">
  @error('email')
<div class="alert alert-danger">{{$message}}</div>
@enderror

  </div>
<div class="mb-3">
  <label for="password" class="form-label"> رمز عبور </label>
  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="رمز عبور" name="password">
  @error('password')
<div class="alert alert-danger">{{$message}}</div>
@enderror

  </div>
  <div class="mb-3">
  <label for="image" class="form-label"> تصویر  </label>
  <input type="file" value="{{$user->image}}"class="form-control @error('image') is-invalid @enderror text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" id="image" placeholder="تصویر " name="image">
  @error('image')
<div class="alert alert-danger">{{$message}}</div>
@enderror

  <div class="mb-3">

  <button type="submit" class="btn btn-success">ارسال</button>
  </div>

</form>


@endsection

