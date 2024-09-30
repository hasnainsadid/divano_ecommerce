@extends('admin.layouts.app')
@section('title', 'Product List')
@section('content')
    <div class="row">
        <div class="col-lg-11 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 bg-transparent"
                    style="display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="mb-0">Product List</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="product-table" class="table table-bordered table-hover text-center text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl no</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#product-table').DataTable({
                processing: false,
                serverSide: false,
                ajax: "{{ route('products.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            return "<img src='" + data + "' width='70' height='70'>";
                        }
                    },
                    {
                        data: 'title',
                        name: 'title',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'category_name',
                        name: 'category_name',
                        orderable: true,
                        searchable: true
                    },{
                        data: 'brand_name',
                        name: 'brand_name',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'description',
                        name: 'description',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'price',
                        name: 'price',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
