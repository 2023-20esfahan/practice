@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title">افزودن محصول</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
                    </ol>
                </div>
            </div>
            @include('Admin.errors.error')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">افزودن محصول جدید</div>
                        </div>
                        <form action="{{ route('commodities.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">نام محصول :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="نام محصول">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button class="btn btn-primary">افزودن محصول</button>
                                        <a href="javascript:void(0)" class="btn btn-default float-end">انصراف</a>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
