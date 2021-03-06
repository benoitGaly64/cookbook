@extends('layouts.default')

@section('content')

<div class="container">

    {!! Form::open(['action' => ['RecipiesController@update',$recipie->id], 'method' => 'POST']) !!}
    <h1 class="text-center">{!! Form::text('title', $recipie->title, ['class' => 'form-control', 'placeholder' => 'Titre']) !!}</h1>
    {!! Form::text('description', $recipie->description, ['class' => 'form-control', 'placeholder' => 'description']) !!}
    <div class="row text-center justify-content-around">
        <div class="col-mg-auto">
            <i class="fas fa-user fa-2x icon-color"></i>
            <p> {!! Form::selectRange('quantity', 1, 200,$recipie->quantity,  ['class' => 'form-control', 'placeholder' => 'Quantité']) !!} </p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-clock fa-2x icon-color"></i>
            <p> {!! Form::text('preptime', $recipie->preptime, ['class' => 'form-control', 'placeholder' => 'Preparation']) !!} </p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-fire fa-2x icon-color"></i>
           <p> {!! Form::text('baking', $recipie->baking, ['class' => 'form-control', 'placeholder' => 'cuisson']) !!} </p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-pause fa-2x icon-color"></i>
            <p> {!! Form::text('waittime', $recipie->waittime, ['class' => 'form-control', 'placeholder' => 'attente']) !!} </p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-dollar-sign fa-2x icon-color"></i>
            <p> {!! Form::text('price', $recipie->price, ['class' => 'form-control', 'placeholder' => 'budget']) !!} </p>
        </div>
        <div class="col-mg-auto">
            <i class="fas fa-grimace fa-2x icon-color"></i>
            <p> {!! Form::text('dificulty', $recipie->dificulty, ['class' => 'form-control', 'placeholder' => 'difficulté']) !!} </p>
        </div>
    </div>
    <div class="row">
        <div class="col bg-secondary text-white align-middle">
            <p><strong>Ingrédients :</strong></p>
            <p>{{Form::textarea('ingredients', $recipie->ingredients, ['id' => 'ingredients','class' => 'form-control', 'placeholder' => 'Vos ingredients'])}}</p>
              
        </div>
    </div>
    <div class="row">
        <div class="col border border-secondary">
            <p><strong>Recette : </strong></p>
            <p>{{Form::textarea('method', $recipie->method, ['id' => 'method','class' => 'form-control', 'placeholder' => 'Votre recette'])}}
              
        </div>
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-lg btn-primary']) !!}
    {!! Form::close() !!}

</div>
<script>
    $(document).ready(function () {
        $('#method').summernote();
        $('#ingredients').summernote();
    });
</script>
@endsection