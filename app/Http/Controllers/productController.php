<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\products;

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

    public function insert(ProductRequest $request)
    {

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $product = new products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->currentQuantity = $request->currentQuantity;
        $product->image = $imageName;

        $product->save();
        return redirect('/admin/products');
    }

    public function update(ProductRequest $request, $id)
    {
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
