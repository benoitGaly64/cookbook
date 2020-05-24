@extends('layouts.default')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col col-auto">Nom</th>
            <th scope="col col-auto">Modifier</th>
            <th scope="col col-auto">supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $categorie)
            <tr>
                <td><div id="name">{{ $categorie->name }}</div></td>
                <td><a id="test">Modifier</a></td>
                <td><a href="/categories/{{$categorie->id}}/delete">Supprimer</a></td>
            </tr>

        @endforeach
    </tbody>
</table>
<script>

    

$("#test").click(function() {
    var catname = $("#name").text();
    $("#name").replaceWith($('<input>').attr({
        id: 'name',
        value: catname
    }));

    var button = $('<a class="btn btn-success"><i class="fas fa-check"></i></a><a class="btn btn-danger"><i class="fas fa-times"></i></a>');
    $("#test").replaceWith(button);
});
</script>
@endsection
