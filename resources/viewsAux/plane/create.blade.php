@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create plane</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" action="{{ route('plane.save') }}">
                        @csrf
                        <input type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" validate="required|alpha" />
                        <label for="planes">En que estado esta el avion?:</label>
                        <select name="state" id="state" value="{{ old('state') }}">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                        <input type="text" placeholder="Enter price" name="price" value="{{ old('price') }}" validate="required|numeric" />
                        <input type="submit" value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection