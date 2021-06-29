@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gobernación de Antioquia</div>

                <div class="card-body">
                    Lista de aviones
                    <ul id="errors">
                    @foreach($data["planes"] as $planes)
                        @if ($planes->status=="Activo")
                            <b  style="color:green;"><li>{{ $planes->getId() }} - {{ $planes->getName() }} : {{ $planes->getStatus() }} : {{ $planes->getValue()}}</li></b>
                        @else
                            <b style="color:red;"><li>{{ $planes->getId() }} - {{ $planes->getName() }} : {{ $planes->getStatus() }} : {{ $planes->getValue()}}</li></b>
                        @endif                    
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
