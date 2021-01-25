<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::with('categories','manufactures')->orderByDesc('id')->get();
//       dd($products);
       return view('admin.products.main',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
//
        return view('admin.products.create', compact('manufacturers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image' => 'required',
        ]);
        $path = null;
        $data = $request->all();
        if ($request->file('image')) {
            $path = $request->file('image')->store('public/products');
            $data['image'] = $path;
        }

        dd($data);

        $products = new Product($data);

        $products->save();


        return  redirect('/product')->with('message', 'Created successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
//        dd($products);
        return view('admin.products.edit', compact('product','manufacturers', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'image' => 'nullable',
        ]);

        $products = Product::find($id);

        $path = null;
        if ($request->file('image')) {
            $path = $request->file('image')->store('public/new');
            @unlink('storage/'. $products->image);
        }

        $data = $request->all();
        $data['image'] = $path;

//        dd($data);
        $products->update($data);

        return redirect('/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->back();
    }
}
