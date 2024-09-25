@extends('admin.layouts.app')
@section('title', 'Add New Category')
@section('content')
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 bg-transparent" style="display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="mb-0">Edit Category</h5>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary">All Categories</a>
                </div>
                <div class="card-body p-4">
                    <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Enter Category Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title"
                                value="{{ old('title', $category->title) }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input40" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" rows="3">{{old('description', $category->description)}}</textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Image Upload</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{old('meta_title', $category->meta_title)}}">
                            </div>
                            <div class="col-md-6">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords" data-role="tagsinput" value="{{old('meta_keywords', json_decode($category->meta_keywords))}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{old('meta_description', $category->meta_description)}}</textarea>
                            </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-flex justify-content-centeralign-items-center my-4">
                                    <button type="submit" class="btn btn-primary px-4">Update Category</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
