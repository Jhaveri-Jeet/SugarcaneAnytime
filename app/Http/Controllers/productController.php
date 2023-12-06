<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view('admin.products', ['products' => products::get()]);
    }

    public function addProductPage()
    {
        return view('admin.addProduct');
    }

    public function editProductPage($id)
    {
        $product = products::where('id', $id)->first();
        return view('admin.editProduct', ['product' => $product]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'currentQuantity' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        // dd($request->all());
        $product = new products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->currentQuantity = $request->currentQuantity;
        $product->image = $imageName;

        $product->save();
        return redirect('/admin/products');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'currentQuantity' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg',
        ]);

        $product = products::where('id', $id)->first();
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->currentQuantity = $request->currentQuantity;

        $product->save();
        return redirect('/admin/products');
    }

    public function delete($id)
    {
        $product = products::where('id', $id)->first();
        $product->delete();

        return back();
    }
}
