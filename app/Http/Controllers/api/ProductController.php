<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }


    public function store(Request $request)
    {
        Product::create($request->all());
    }


    public function show($id)
    {
        return Product::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $productSelect = Product::findOrFail($id);
        $productSelect->update($request->all());
    }


    public function destroy($id)
    {
        $productSelect = Product::findOrFail($id);
        $productSelect->delete();
    }
}
