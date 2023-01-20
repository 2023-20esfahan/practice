@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title">  ایجاد کاربر جدید</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> 
                            
                         ایجاد کاربر جدید</li>
                    </ol>
                    </div>
                    </div>
                    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="mb-3">
  <label for="username" class="form-label">نام کاربری </label>
  <input type="username" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="نام کاربری" name="name">
@error('name') 
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="mb-3">
  <label for="email" class="form-label"> ایمیل</label>
  <input class="form-control @error('email') is-invalid @enderror"" id="email" rows="3" name="email">
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

  <button type="submit" class="btn btn-success">ارسال</button>
  </div>  
  
</form>         

              
@endsection

