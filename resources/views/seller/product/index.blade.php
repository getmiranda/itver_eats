@extends('layouts.app')

@section('title', 'Products Seller')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Tus Productos</h4>
                            {{-- <p class="product">Here is a subtitle for this table</p> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" style="width:100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Category Name</th>
                                    <th>User Name</th>
                                    <th>Description</th>
                                    <th>Details</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>Check</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($user->products as $key=>$product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/product/'.$product->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->user->nickname }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->details }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->availability }}</td>
                                            <td>{{ $product->check }}</td>
                                            <td>{{ $product->created_at }}</td>
                                            <td>{{ $product->updated_at }}</td>
                                            <td>
                                                {{-- Edit button  --}}
                                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>

                                                {{-- Delete button  --}}
                                                <form id="delete-form-{{ $product->id }}" action="{{ route('product.destroy', $product->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $product->id }}').submit();
                                                    }else {
                                                        event.preventDefault();
                                                    }">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
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
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
