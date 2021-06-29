@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">Agregar una avión</div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('planes.save') }}">
                            @csrf
                            <input type="text" placeholder="Ingresa el nombre" name="name" value="{{ old('name') }}" />
                            
                            <select required type="text" placeholder="status" name="status" value="{{ old('status') }}" >
                            <option value="Activo" >Activo</option>
                            <option value="Inactivo">Inactivo</option>
                            </select>
                            
                            <input type="integer" placeholder="Ingresa el valor" name="value" value="{{ old('value') }}" />
                            <input type="submit" value="Send" />
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
