<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show',compact('products'));
    }

    public function store(Request $request)
    {
        $products = Product::create([
            'id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);
        return redirect('products')->with('status', 'Producto '.$request->input('name').' creado');
    }

    public function destroy($id)
    {
        $products = Product::find($id)->delete();
            return redirect('products')->with('status', 'Producto '.$id.' eliminado');
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit',compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id)->update([
            'id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);
        Return redirect('products')->with('status','Se ha actualizado correctamente '.$request->input('name'));
    }

}
