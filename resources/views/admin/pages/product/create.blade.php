@extends('admin.layouts.app')
@section('title', 'Add New Product')

@section('content')
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 bg-transparent">
                    <h5 class="mb-0">Add New Product</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Product Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" placeholder="Enter Product Title"
                                    required>
                            </div>
                        </div>

                        <!-- Subtitle -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Product Subtitle <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sub_title"
                                    placeholder="Enter Product Subtitle" required>
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Product Category <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                @php
                                    $categories = App\Models\Category::all();
                                @endphp
                                <select name="category_id" class="form-select" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Is New Arrival -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">New Arrival? <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="is_new" name="is_new">
                                    <label class="form-check-label" for="is_new">Is New Arrival?</label>
                                </div>
                            </div>
                        </div>

                        <!-- Materials -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Product Materials <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="materials" data-role="tagsinput" placeholder="Enter Product Subtitle" required>
                            </div>
                        </div>

                        <!-- Brand Name -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Brand Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="brand_name" placeholder="Enter Brand Name"
                                    required>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Price <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" step="0.01" class="form-control" name="price"
                                    placeholder="Enter Price" required>
                            </div>
                        </div>

                        <!-- Special Price -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Special Price</label>
                            <div class="col-sm-9">
                                <input type="number" step="0.01" class="form-control" name="special_price"
                                    placeholder="Enter Special Price">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" required></textarea>
                            </div>
                        </div>

                        <!-- Discount -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Discount</label>
                            <div class="col-sm-9">
                                <input type="number" step="0.01" class="form-control" name="discount"
                                    placeholder="Enter Discount">
                            </div>
                        </div>

                        {{-- discount_type  --}}
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Discount Type</label>
                            <div class="col-sm-9">
                                <select name="discount_type" class="form-select">
                                    <option disabled selected>Select Discount Type</option>
                                    <option value="percent">Percent</option>
                                    <option value="flat">Flat</option>
                                </select>
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Image Upload</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image[]" multiple>
                            </div>
                        </div>

                        <!-- Meta Data -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Meta Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Meta Keywords</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="meta_keywords" data-role="tagsinput" placeholder="Meta Keywords">
                            </div>
                        </div>

                        <!-- Meta Description -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Meta Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="meta_description" rows="3" placeholder="Meta Description"></textarea>
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="row">
                            <div class="col-sm-9 offset-sm-3">
                                <div class="d-flex align-items-center gap-3 my-4">
                                    <button type="submit" class="btn btn-primary px-4">Add New Product</button>
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
