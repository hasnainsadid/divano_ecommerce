@extends('admin.layouts.app')
@section('title', 'Product List')
@section('content')
    <div class="row">
        <div class="col-lg-11 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 bg-transparent"
                    style="display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="mb-0">Category List</h5>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="category-table" class="table table-bordered table-hover text-center text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl no</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script>
        $(document).ready(function() {
            $('#category-table').DataTable({
                processing: false,
                serverSide: false,
                ajax: "{{ route('categories.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, row, meta) {
                            return '<img class="rounded-circle img-responsive" src="{{ asset('') }}' + data + '" width="90" height="90">';
                        },
                    },
                    {
                        data: 'title',
                        name: 'title',
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
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script> --}}
@endpush
