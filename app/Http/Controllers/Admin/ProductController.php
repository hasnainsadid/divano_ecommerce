<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //eikhane amra datatable use korbo....
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->sub_title = $request->sub_title;
        $product->slug = slugify($request->title);
        $product->category_id = $request->category_id;
        $product->is_new = $request->has('is_new') ? 1 : 0;
        $product->materials = json_encode($request->materials);
        $product->brand_name = $request->brand_name;
        $product->price = $request->price;
        $product->special_price = $request->special_price;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = json_encode($request->meta_keywords);
        $product->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $image_name = imageUploadManager($image, $product->slug, 'products', 760, 600);
                $product->images()->create([
                    'image' => $image_name
                ]);
            }
        }

        notify()->success('Product created successfully!');
        return redirect()->route('products.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
