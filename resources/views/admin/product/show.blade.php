@extends('layouts.app')

@section('title','Contact')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('uploads/product/'.$product->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <div class="col-md-12">
                                <h4 class="card-title">{{ $product->name }}</h4>
                            </div>
                            <div class="card-content col-md-12">
                                <div class="col-md-2">
                                    <p class="card-text">{{ $product->category->name }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text">{{ $product->description }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text">{{ $product->details }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text">${{ $product->price }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text">
                                        @if ($product->availability == 1)
                                            <span class="label label-success">Disponible</span>
                                        @else
                                            <span class="label label-danger">No disponible</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text">
                                        @if ($product->check == 1)
                                            <span class="label label-success">Verificado</span>
                                        @else
                                            <span class="label label-danger">No verificado</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12">
                                <h4 class="card-title">Detalles del vendedor</h4>
                            </div>
                            <div class="card-content col-md-12">
                                <div class="col-md-4">
                                    <p class="card-text">{{ $product->vendedor }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="card-text">{{ $product->email }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="card-text">{{ $product->phone }}</p>
                                </div>



                                <p class="card-text"><small class="text-muted">Última modificación: {{ $product->updated_at }}</small></p>

                                <a href="{{ route('product.index') }}" class="btn btn-danger btn-sm">
                                    <i class="material-icons">arrow_back</i>
                                </a>
                                {{-- Boton de check --}}
                                <form id="status-form-{{ $product->id }}" action="{{ route('product.check',$product->id) }}" style="display: none;" method="POST">
                                    @csrf
                                    </form>
                                    <button type="button" class="btn btn-success btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                            event.preventDefault();
                                                document.getElementById('status-form-{{ $product->id }}').submit();
                                            }else {
                                                event.preventDefault();
                                            }"><i class="material-icons">done</i>
                                    </button>

                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
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
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
