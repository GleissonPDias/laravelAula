<?php

namespace App\Http\Controllers;

use App\Models\Food;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index() {
        return view('food.index', ['allFood' => Food::all()]);
    }
    public function create() {
        return view('food.create');
    }
    public function store(Request $request){
        Food::create($request->all());  //dd mostra os dados na tela: dump and die; nesse caso exibe tudo que vai vir no request
        return redirect('/food'); 
    }
    public function edit(Food $food){
        return view('food.edit', ['food' => $food]);
    }
    public function update(Food $food, Request $request){
        $food->update($request->all());
        return redirect('/food');
    }
    public function destroy(Food $food){
        $food->delete();
        return redirect('/food');
    }
}
