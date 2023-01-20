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
      <th scope="col">مدیریت کاربر</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th >{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>   
        <div class="d-flex">                     
      <form action="{{ route('users.destroy', $user) }}" method="POST">{{ method_field('DELETE') }}
    {{ csrf_field() }}    <button class="m-1 btn btn-danger" onclick="return confirm('آیا از حذف کاربر اطمینان دارید؟');">حذف</button>
</form>  
      <a class="m-1 btn btn-warning" href="{{route('users.edit', $user->id)}}" role="button" >
                                        ویرایش
                                    </a>

                                    </div>

</td>
    </tr>
        </div>

    </div>


@endsection
