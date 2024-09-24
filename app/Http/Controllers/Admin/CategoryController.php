<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (request()->ajax()) {
        $categories = Category::latest()->get()->map(function ($category) {
            return [
                // 'DT_RowIndex' => ,
                'image' => $category->image,
                'title' => $category->title,
                'description' => $category->description,
                'action' => '
                    <a href="' . route('categories.edit', $category->id) . '" class="btn btn-sm btn-primary">Edit</a>
                    <form action="' . route('categories.destroy', $category->id) . '" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                ',
            ];
        });

        return DataTables::of($categories)->addIndexColumn()->make(true);
    }

    return view('admin.pages.category.index');
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $cats = new Category();
        $cats->title = $request->title;
        $cats->slug = slugify($request->title);
        $cats->description = $request->description;
        if ($request->hasFile('image')) {
            $cats->image = imageUploadManager($request->file('image'), '', 'category', 760, 600);
        }
        $cats->meta_title = $request->meta_title;
        $cats->meta_description = $request->meta_description;
        $cats->meta_keywords = json_encode($request->meta_keywords);
        // dd($cats);
        $cats->save();
        notify()->success('Category Created Successfully!');
        return redirect()->route('categories.index');
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
