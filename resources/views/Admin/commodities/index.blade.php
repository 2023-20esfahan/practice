@extends('Admin.master')

@section('content')
    <div class="side-app">

        <div class="main-container container-fluid">

            <div class="page-header">
                <h1 class="page-title">لیست کالا</h1>
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
                    <th>نام</th>
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
                ajax: "{{ route('commodities.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                ]
            });

        });
    </script>
@endsection
