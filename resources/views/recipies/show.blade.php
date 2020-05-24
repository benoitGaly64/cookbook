@extends('layouts.default')

@section('content')

<div class="container">

    <h1 class="text-center">{{$recipie->title}}</h1>
    <div class="row text-center justify-content-around">
        <div class="col-mg-auto">
            <i class="fas fa-user fa-2x icon-color"></i>
            <p>{{$recipie->quantity}}</p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-clock fa-2x icon-color"></i>
            <p>@if ($recipie->preptime == null) - @else {{$recipie->preptime}} @endif</p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-fire fa-2x icon-color"></i>
           <p>@if ($recipie->baking == null) - @else {{$recipie->baking}} @endif </p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-pause fa-2x icon-color"></i>
            <p>@if ($recipie->waittime == null) - @else {{$recipie->waittime}} @endif</p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-dollar-sign fa-2x icon-color"></i>
            <p>@if ($recipie->price == null) - @else {{$recipie->price}} @endif</p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-grimace fa-2x icon-color"></i>
            <p>@if ($recipie->dificulty == null) - @else {{$recipie->dificulty}} @endif</p>
        </div>
    </div>
    <div class="row">
        <div class="col-mg-auto bg-secondary text-white align-middle">
            <p><strong>Ingrédients :</strong></p>
            </p>
            {!! $recipie->ingredients !!}
        </div>
        <div class="col border border-secondary">
            <p><strong>Recette : </strong></p>
            {!! $recipie->method !!}
        </div>
    </div>
    <a href="/recipies/{{ $recipie->id }}/edit"> <i class="fas fa-marker fa-3x"></i></a>
    <i class="far fa-trash-alt fa-3x"></i>
</div>
@foreach ($recipie->categories as $item)
    {{$item->name}}
@endforeach




@endsection
