<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{


    public function index()
    {

        $products = Product::orderBy('created_at', 'desc')->get();

        return view('product_page', compact('products'));
    }

    public function create()
    {
        return view('product-create');
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validatedData = $request->validate([
                'name' => 'required',
                'subtitle' => 'required',
                'description' => 'required',
                'price' => 'required',
                'details' => 'required',
                'benefits' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Creating a new product
            $product = new Product();
            $product->name = $request->input('name');
            $product->subtitle = $request->input('subtitle');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->details = $request->input('details');
            $product->benefits = $request->input('benefits');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('product-image'), $imageName);
                $product->image = $imageName;  // Correct field assignment
            }

            $product->save();

            return redirect()->route('product.create')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


    public function show($id){

        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
      try{
        //validation
        $request->validate([

            'image' => 'required',
        ]);
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
      }catch(\Exception $e){
        return redirect()->back()->with('error', 'Error: '.$e->getMessage());
      }
    }







}
