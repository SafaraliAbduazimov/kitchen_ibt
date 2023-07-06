@extends('layout.index')

@section('title','this is customers.index')

@section('content')
    @include('include.header')
    @include('include.sidebar')

    <main id="main" class="main">
        <div class="text-danger text-center">
            <h1>Customers</h1>
        </div>
    </main>

    @include('include.footer')
@endsection
