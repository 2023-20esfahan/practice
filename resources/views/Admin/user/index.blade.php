@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title"> لیست کاربران</h1>

@include('Admin.user.messages')                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">

                        لیست کاربران</li>
                    </ol>
                </div>

            </div>
            @if ($users->count() == 0)
                    <p>
                        کاربری برای نمایش وجود ندارد
                        .</p>
                @else

            <table class="table">
  <thead>
    <tr>
      <th scope="col">آیدی کاربری</th>
      <th scope="col">نام کاربری</th>
      <th scope="col">ایمیل</th>
      <th scope="col">عکس</th>
      <th scope="col">مدیریت کاربر</th>
    </tr>
  </thead>
  <tbody>

  @foreach($users as $user)

    <tr>
      <th >{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td><img src="{{!! json_decode($user->image) !!}}" alt="" class="img-fluid  w-20"> </td>
      <!-- <td>{{json_decode($user->image)}}</td> -->
      <td>
        <div class="d-flex">
      <a class=" m-1 btn btn-success" href="{{route('users.show',$user->id)}}" role="submit">
                                        مشاهده
                                    </a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        {{ method_field('DELETE') }}
    {{ csrf_field() }}    <button class=" m-1 btn btn-danger" onclick="return confirm('آیا از حذف کاربر اطمینان دارید؟');">حذف</button>
</form>
                                    <a class=" m-1 btn btn-warning" href="{{route('users.edit', $user->id)}}" role="submit">
                                        ویرایش
                                    </a>

</div>
</td>
    </tr>
    @endforeach
@endif
        </div>

    </div>


@endsection
