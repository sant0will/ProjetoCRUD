<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{
   
    public function index(){
        $categories = Category::all();
        return view('categories.index')->with('categories', $categories);

    }

    
    public function create(){
        return view('categories.create');
    }

    
    public function store(Request $request){
       $category = $this->validate(request(), [
          'nome' => 'required'
          ]);

       Category::create($category);

       return redirect('categories')->with('message', 'Categoria Adicionada!');
    }

  
    public function show($id){
         $category = Category::find($id);
        return view('categories.show',compact('category','id'));    }

    
    public function edit($id){
        //
    }

   
    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        Category::findOrFail($id)->delete();
        return redirect('categories')->with('message', 'Categoria Deletada!');    }
}
