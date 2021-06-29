@extends('layouts.master')
@section('content')
<div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            
            <a href="{{ route('plane.create') }}" type = "button" class="btn btn-default" >Create plane</a>
            <a href="{{ route('plane.list') }}" type = "button" class="btn btn-default" >List planes</a>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Future authentication Links -->
        </ul>
    </div>
</div>
@endsection