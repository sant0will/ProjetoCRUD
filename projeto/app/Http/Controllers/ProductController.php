<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(Product $product)
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('/admin/products/index')->with('products', $products);
    }

     public function new()
    {
        return view('/admin/products/new');
    }

    public function create() {
        $nome  = $_POST['nome'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];

        $p = new Product;
        $p->nome = $nome;
        $p->valor = $valor;
        $p->categoria = $categoria;

        $p->save(); 
        return view('admin/products/index');

    }



    public function edit()
    {
        return view('/admin/products/edit');
    }

    public function print()
    {
        $id = $_GET['id'];
        $product = Product::find($id);

        return view('/admin/products/print')->with('product', $product);
    }
}
