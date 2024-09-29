<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $categories = Category::latest()->get()->map(function ($category) {
                return [
                    'image' => $category->image,
                    'title' => $category->title,
                    'description' => $category->description,
                    'action' => '
                    <a href="' . route('categories.edit', $category->id) . '" class="btn btn-sm btn-primary">Edit</a>
                    <form action="' . route('categories.destroy', $category->id) . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure to delete this category?\');">
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

    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // 'image' => 'required|image',
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
            $cats->image = imageUploadManager($request->file('image'), $cats->slug, 'category', 760, 600);
        }
        $cats->meta_title = $request->meta_title;
        $cats->meta_description = $request->meta_description;
        $cats->meta_keywords = json_encode($request->meta_keywords);
        // dd($cats);
        $cats->save();
        notify()->success('Category Created Successfully!');
        return redirect()->route('categories.index');
    }

    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.pages.category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->slug = slugify($request->title);
        $category->description = $request->description;
        if ($request->hasFile('image')) {
            $category->image = imageUpdateManager($request->file('image'), $category->slug, 'category', 760, 600, $category->image);
        }
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = json_encode($request->meta_keywords);
        $category->save();
        notify()->success('Category Updated Successfully!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        notify()->success('Category Deleted Successfully!');
        return redirect()->route('categories.index');
    }
}
