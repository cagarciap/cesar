@extends('layouts.master')
@section($data['planes'])
@section('content')
<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">
            @foreach($data["planes"] as $plane)
            <div class="vertical-list">
                <b>id:{{ $plane->getId() }} </b>
                <br>
                @if($plane->state=="activo")    
                    <b  style="color:green;">
                    <a>Name: {{ $plane->getName() }} </a>
                    </b>
                @else
                    <b  style="color:red;">
                    <a>Name: {{ $plane->getName() }} </a>
                    </b>
                @endif
                    <br>
                    <a>State: {{ $plane->getState() }} " </a>
                    <br>
                    <a>Price: {{ $plane->getPrice() }}</a>
            </div>
            
            </b>
            <br></br>

            @endforeach
        </ul>
    </div>
</div>

@endsection



