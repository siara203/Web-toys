<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // show product
    public function getproducts()
    {
        $users = User::all();
        $products = Product::all();
        return view('backend.products', compact('products', 'users'));
    }

    // show add product form
    public function getproductadd()
    {
        $users = User::all();
        return view('backend.productadd', compact('users'));
    }

    // add product
    public function postproductadd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'sku' => 'required',
            'image' => 'required|image|mimes:jpeg,png,gif,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path('images/products');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
        } else {
            $fileName = 'noname.jpg';
        }


        $product = new Product([
            'name' => $request->name,
            'price' => $request->price,
            'sku' => $request->sku,
            'image' => $fileName,
        ]);
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    //delete product
    public function deleteproduct($id)
    {
        $product = Product::findOrFail($id);
        $imagePath = public_path('images/products/' . $product->image);
    
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        $product->delete();
    
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    // Edit product
    public function postproductedit(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'sku' => 'required',
            'image' => 'image|mimes:jpeg,png,gif,jpg|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'sku' => $request->sku,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/products'), $fileName);
            $data['image'] = $fileName;

            $previousImagePath = public_path('images/products/' . $product->image);
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }

        $product->update($data);

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    // show edit product form
    public function getproductedit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $users = User::all();
        return view('backend.productedit', compact('product', 'users'));
    }
}
