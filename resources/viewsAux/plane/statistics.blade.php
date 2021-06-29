@extends('layouts.master')
@section('content')
<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">
           
        Suma de precios aviones activos: {{$data['activo']}}
        <br></br>
        Suma de precios aviones inactivos: {{$data['inactivo']}}
            </div>
            

            
        </ul>
    </div>
</div>

@endsection

