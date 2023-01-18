@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title">لیست حواله ها</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">داشبورد 01</li>
                    </ol>
                </div>
            </div>


            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>نام کالا</th>
                    <th>مقدار</th>
                    <th>شماره بارنامه</th>
                    <th>نام راننده</th>
                    <th>موبایل راننده</th>
                    <th>توضیحات</th>
{{--                    <th>تصویر بارنامه</th>--}}
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>

    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {

            let table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('remittances.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'commodity_id', name: 'commodity_id'},
                    {data: 'amount', name: 'amount'},
                    {data: 'freight_number', name: 'freight_number'},
                    {data: 'driver_name', name: 'driver_name'},
                    {data: 'driver_mobile', name: 'driver_mobile'},
                    {data: 'description', name: 'description'},
                    // {data: 'freight_pic', name: 'freight_pic'},

                ]
            });

        });
    </script>
@endsection
