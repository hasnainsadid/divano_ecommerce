@extends('admin.layouts.app')
@section('title', 'Add New Category')
@section('content')
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 bg-transparent">
                    <h5 class="mb-0">Add New Category</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Enter Category Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title"
                                    placeholder="Enter Category Title" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input40" class="col-sm-3 col-form-label">Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" required></textarea>
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
                                <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">
                            </div>
                            <div class="col-md-6">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords" data-role="tagsinput" placeholder="Meta Keywords">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Meta Description"></textarea>
                            </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Add New Category</button>
                                    <button type="reset" class="btn btn-light px-4">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
