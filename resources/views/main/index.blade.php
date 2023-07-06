@extends('layout.index')

@section('title','this is Main.index')

@section('content')
    @include('include.header')
    @include('include.sidebar')

    <main id="main" class="main">
        <div class="text-danger text-center">
            <h1>Kitchen of IBT</h1>
        </div>
    </main>

    @include('include.footer')
@endsection
