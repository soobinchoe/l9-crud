<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $products = Product::all();
        return view("products.index", compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::all();
        return view("products.create", compact(['companies']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name'=>['min:1'],
            'description'=>['required'],
            'price'=>['required'],
            'company_id'=>['required'],
        ];

        $validated = $request->validate($rules);

        $newProductData = [
            'name'=>$validated['name'],
            'description'=>$validated['description'],
            'price'=>$validated['price'],
            'company_id'=>$validated['company_id'],
        ];
        $newProduct = Product::create($newProductData);
        return redirect()->route('products.index')
            ->with('success', "Product { $newProduct->name} created successfully. ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('products.show', compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        $companies = Company::all();
        return view("products.edit", compact(['product', 'companies']));
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
        //
        $rules = [
            'name'=>['min:1'],
            'description'=>['required'],
            'price'=>['required'],
            'company_id'=>['required'],
        ];

        $validated = $request->validate($rules);

        $newProductData = [
            'name'=>$validated['name'],
            'description'=>$validated['description'],
            'price'=>$validated['price'],
            'company_id'=>$validated['company_id'],
        ];
        $product = Product::find($id)->update($newProductData);

        return redirect()->route('products.index')
            ->with('success', "Product { $newProductData[name]} updated successfully. ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
