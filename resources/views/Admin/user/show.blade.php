@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title"> لیست کاربران</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> 
                            
                        لیست کاربران</li>
                    </ol>
                </div>
                
            </div>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">آیدی کاربری</th>
      <th scope="col">نام کاربری</th>
      <th scope="col">ایمیل</th>
      <th scope="col">عکس</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th >{{$user->id}} </th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td><img src="{{ Storage::url($user->image) }}" alt="" class="img-fluid  w-20"> </td>

    </tr>
        </div>

    </div>


@endsection
