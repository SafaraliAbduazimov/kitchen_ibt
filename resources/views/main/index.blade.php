@extends('layout.index')

@section('title','this is Main.index')

@section('content')
    @include('include.header')
    @include('include.sidebar')

    <main id="main" class="main container mt-6">
        <h1>Kitchen of IBT</h1>
    </main>

    @include('include.footer')
@endsection
