<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{
    
    public function index(){
        $products = Product::all();
        return view('products.index')->with('products', $products);

    }

    public function create(){
        $categories = Category::all();
        return view('products.create')->with('categories', $categories);
    }

    public function store(Request $request){
       $product = $this->validate(request(), [
          'nome' => 'required',
          'valor' => 'required|numeric',
          'categoria' => 'required|numeric'
          ]);

       Product::create($product);

       return redirect()->back()->with('message', 'Produto Adicionado!');
   }

    public function show($id){
        $product = Product::find($id);
        return view('products.show',compact('product','id'));
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit',compact('product','id'))->with('categories', $categories);
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);

        $product->nome = $request->get('nome');
        $product->valor = $request->get('valor');
        $product->categoria = $request->get('categoria');
        $product->save();

        return redirect()->back()->with('message', 'Produto Alterado com Sucesso!');
        
    }

    public function destroy($id){   
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Produto Deletado!');
    }
}
