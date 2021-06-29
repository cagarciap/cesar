@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gobernación de Antioquia</div>

                <div class="card-body">
                    Estadísticas aviones
                    <ul id="errors">
                            <li> Valor comercial total de los aviones activos: {{ $data["active"] }} </li>
                            <li> Valor comercial total de los aviones inactivos: {{ $data["unactive"] }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
