<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category.index', ['allCategory' => Category::all()]);
    }
    public function create() {
        return view('category.create');
    }
    public function store(Request $request){
        Category::create($request->all());  //dd mostra os dados na tela: dump and die; nesse caso exibe tudo que vai vir no request
        return redirect('/category'); 
    }
    public function edit(Category $category){
        return view('category.edit', ['category' => $category]);
    }
    public function update(Category $category, Request $request){
        $category->update($request->all());
        return redirect('/category');
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect('/category');
    }
    public function show(Category $category){
        return view('category.show', ['category' => $category]);
    }
}
