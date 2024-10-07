<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $products = Product::with('category', 'images')->latest()->get()->map(function ($product){
                return [
                    'image' => $product->images->first()->image,
                    'title' => $product->title,
                    'category_name' => $product->category->title,
                    'brand_name' => $product->brand_name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'action' => '<a href="'. route('products.edit', $product->id). '" class="btn btn-sm btn-primary">Edit</a> 
                    <form action="' . route('products.destroy', $product->id) . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure to delete this category?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>',
                ];
            });
            // dd($products);
            return DataTables::of($products)->addIndexColumn()->make(true);
        }
        return view('admin.pages.product.index');
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
        $product->sku = $request->sku;
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
        $product = Product::find($id);
        return view('admin.pages.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->sub_title = $request->sub_title;
        $product->slug = slugify($request->title);
        $product->sku = $request->sku;
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

        notify()->success('Product edited successfully!');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        notify()->success('Product deleted successfully!');
        return redirect()->route('products.index');
    }
}
