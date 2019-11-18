@extends('layouts.app')

@section('title','Dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Category / Item</p>
                            {{-- <h3 class="title">{{ $categoryCount }}/{{ $itemCount }}
                            </h3> --}}
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="#pablo">Total Categories and Items</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">slideshow</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Slider Count</p>
                            {{-- <h3 class="title">{{ $sliderCount }}</h3> --}}
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                {{-- <i class="material-icons">date_range</i> <a href="{{ route('slider.index') }}">Get More Details...</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Reservation</p>
                            {{-- <h3 class="title">{{ $products->count() }}</h3> --}}
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Not Confirmed Reservation
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Contact</p>
                            {{-- <h3 class="title">{{ $contactCount }}</h3> --}}
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Productos Pendientes</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        {{-- <th>User Name</th> --}}
                                        <th>Description</th>
                                        <th>Details</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Otra Categoria</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key=>$product)
                                        @if ($product->check == false)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/product/'.$product->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                                <td>{{ $product->category->name }}</td>
                                                {{-- <td>{{ $product->user->nickname }}</td> --}}
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->details }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td align="center">
                                                    <span class="label label-danger">No Publicado</span>
                                                    <form id="status-form-{{ $product->id }}" action="{{ route('product.check',$product->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                                document.getElementById('status-form-{{ $product->id }}').submit();
                                                            }else {
                                                                event.preventDefault();
                                                            }"><i class="material-icons">done</i>
                                                    </button>
                                                </td>
                                                <td>{{ $product->other_category }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <form id="delete-form-{{ $product->id }}" action="{{ route('product.destroy',$product->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                                document.getElementById('delete-form-{{ $product->id }}').submit();
                                                            }else {
                                                                event.preventDefault();
                                                            }"><i class="material-icons">delete</i>
                                                    </button>

                                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm">
                                                        <i class="material-icons">mode_edit</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
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
