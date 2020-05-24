@extends('layouts.default')

@section('content')
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Mes recettes</h5>
        <a href="/recipies/create" class="btn btn-primary">Ajouter une recette</a>
        <div class="row">
          @foreach($recipies as $recipie)
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" card-img-top" src="default-recipie.png" alt="card image"></p>
                                    <h4 class="card-title">{{$recipie->title}}</h4>
                                    <p class="card-text">{{$recipie->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4 scroll">
                                    <h4 class="card-title">{{$recipie->title}}</h4>
                                    <p class="card-text">{!! $recipie->ingredients !!}</p>
                                    <a href="/recipies/{{$recipie->id}}/show" class="btn btn-primary">Voir la recette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            @endforeach
        </div>
        {{$recipies->links()}}
    </div>
</section>
<!-- Team -->

@endsection
