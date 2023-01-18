@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title">فرم حواله ورود به انبار</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">فرم حواله</li>
                    </ol>
                </div>
            </div>
            @include('Admin.errors.error')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">فرم حواله ورود به انبار</div>
                        </div>
                        <form action="{{ route('remittances.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">نام اقلام :</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="form-label">اقلام مورد نظر خود را انتخاب کنید</label>
                                            <select name="commodity_id" class="form-control select2 form-select" data-placeholder="انتخاب یکی">
                                                <option label="انتخاب"></option>
                                                @foreach($commodities as $commodity)
                                                    <option value="{{$commodity->id}}">{{$commodity->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">نوع :</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="form-label">نوع درج بارنامه را انتخاب کنید</label>
                                            <select name="type" class="form-control select2 form-select" data-placeholder="انتخاب یکی">
                                                <option label="انتخاب"></option>
                                                <option label="1">حواله ورود اقلام</option>
                                                <option label="2">حواله خروج اقلام</option>
                                                <option label="3">حواله کسری اقلام</option>
                                                <option label="4">حواله اضافه اقلام</option>
                                                <option label="5">حواله پاشیدنی اقلام</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">مقدار(کیلوگرم) :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="amount" class="form-control" placeholder="مقدار(کیلوگرم)">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">شماره بارنامه :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="freight_number" class="form-control" placeholder="شماره بارنامه">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">نام راننده :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="driver_name" class="form-control" placeholder="نام راننده">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-3 form-label"> موبایل راننده :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="driver_mobile" class="form-control" placeholder="موبایل راننده">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 form-label mb-4"> توضیحات :</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>

                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 form-label mb-4">بارگذاری بارنامه :</label>
                                    <div class="col-md-9">
                                        <input type="file" name="freight_pic" class="form-control">

{{--                                        <input id="demo" type="file" name="file"--}}
{{--                                               accept=".jpg, .png, image/jpeg, image/png">--}}
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
