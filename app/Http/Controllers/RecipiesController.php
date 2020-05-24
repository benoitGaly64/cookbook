<?php

namespace App\Http\Controllers;
use App\Recipies;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecipiesController extends Controller
{
    public function index()
    {
        $recipies = DB::table('recipies')
            ->where('user_id', '=', Auth::user()->id)
            ->select('id','title','description','ingredients')
            ->orderBy('title')
            ->paginate(6)
            ;
        
        return view('recipies.index',compact('recipies'));
    }

    public function show($id)
    {
            $recipie = Recipies::find($id);
            
            return view('recipies.show',compact('recipie'));
    }

    public function create()
    {
        return view('recipies.create');
    }

    public function store(request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'quantity' => 'required',
            'ingredients' => 'required',
            'method' => 'required',

        ]);
        $recipie = New Recipies();
        $recipie->title = $request->input('title');
        $recipie->description = $request->input('description');
        $recipie->quantity = $request->input('quantity');
        $recipie->ingredients = $request->input('ingredients');
        $recipie->method = $request->input('method');
        $recipie->preptime = $request->input('preptime');
        $recipie->baking = $request->input('baking');
        $recipie->waittime = $request->input('waittime');
        $recipie->price = $request->input('price');
        $recipie->dificulty = $request->input('dificulty');
        $recipie->user_id = Auth::user()->id;
        
        $recipie->save();
        return redirect('/recipies');

    }

    public function edit($id)
    {
        $recipie = Recipies::find($id);
       
        return view('recipies.edit',compact('recipie'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'quantity' => 'required',
            'ingredients' => 'required',
            'method' => 'required',
        ]);
        $recipie = Recipies::find($id);
        $recipie->title = $request->input('title');
        $recipie->description = $request->input('description');
        $recipie->quantity = $request->input('quantity');
        $recipie->ingredients = $request->input('ingredients');
        $recipie->method = $request->input('method');
        $recipie->preptime = $request->input('preptime');
        $recipie->baking = $request->input('baking');
        $recipie->waittime = $request->input('waittime');
        $recipie->price = $request->input('price');
        $recipie->dificulty = $request->input('dificulty');

        $recipie->save();
        return redirect('/recipies');
    }
}
