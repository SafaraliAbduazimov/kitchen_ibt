@extends('layout.index')

@section('title','this is customers.index')

@section('content')

    @include('include.header')
    @include('include.sidebar')
    <main id="main" class="main">
        <div class="">
            <table class="table table-bordered mt-5" id="datatable_id">
                <thead>
                    <tr>
                        <th scope="col">
                            <input type="text"data-column="0" class="form-control p-2" id="id" placeholder="id">
                        </th>
                        <th scope="col">
                            <input type="text"data-column="0" class="form-control p-2" id="full_name" placeholder="full_name">
                        </th>
                        <th scope="col">
                            <input type="text"data-column="0" class="form-control p-2" id="address" placeholder="address">
                        </th>
                        <th scope="col">
                            <input type="text"data-column="0" class="form-control p-2" id="phone" placeholder="phone">
                        </th>
                        <th scope="col">
                            <input type="text"data-column="0" class="form-control p-2" id="email" placeholder="email">
                        </th>
                        <th scope="col">
                            <input type="text"data-column="0" class="form-control p-2" id="password" placeholder="password">
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <th scope="row">{{$row->full_name}}</th>
                        <th scope="row">{{$row->address}}</th>
                        <th scope="row">{{$row->phone}}</th>
                        <th scope="row">{{$row->email}}</th>
                        <th scope="row">{{$row->password}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('include.footer')
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            var table = $('#datatable_id').DataTable();
            $("#id").on('keyup', function() {
                table.column([0]).search($(this).val()).draw();
            });
            $("#full_name").on('keyup', function() {
                table.column([1]).search($(this).val()).draw();
            });
            $("#address").on('keyup', function() {
                table.column([2]).search($(this).val()).draw();
            });
            $("#phone").on('keyup', function() {
                table.column([3]).search($(this).val()).draw();
            });
            $("#email").on('keyup', function() {
                table.column([4]).search($(this).val()).draw();
            });
            $("#password").on('keyup', function() {
                table.column([5]).search($(this).val()).draw();
            });
        });
    </script>
@endsection
