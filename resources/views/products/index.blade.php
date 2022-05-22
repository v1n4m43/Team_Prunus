@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Add Products</h4>
                            <a href="#" style="float: right" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addProduct">
                                <i class="fa fa-plus"></i>Add New Products</a>
                        </div>


                        <form class="input-group" action="" method="GET">
                            <input type="text" class="form-control m-1" name="query" placeholder="Search">
                            <div class="input-group-addon">
                                <span class="input-group-text"> <i class="fa fa-search"> </i> </span>
                            </div>
                        </form>


                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Alert Stock</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>{{ number_format($product->price,2) }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            @if($product -> alert_stock >= $product->quantity)
                                                <span class="badge bg-danger">
                                                    Low Stock > {{ $product->alert_stock }}
                                                </span>
                                            @else
                                                <span class="badge bg-success">
                                                    {{ $product->alert_stock }}
                                                </span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}">
                                                    <i class="fa fa-edit"></i>Edit</a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#deleteProduct{{ $product->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!--Modal of Edit Product Detail-->
                                    <div class="modal right fade" id="editProduct{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="staticBackdropLabel">Edit Product</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    {{ $product->id }}
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('products.update', $product->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="">Product Name</label>
                                                            <input type="text" name="product_name" id="" value="{{$product->product_name}}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Brand</label>
                                                            <input type="text" name="brand" id="" value="{{$product->brand}}"class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Price</label>
                                                            <input type="number" name="price" id="" value="{{$product->price}}"class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Quantity</label>
                                                            <input type="number" name="quantity" id="" value="{{$product->quantity}}"class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Alert Stock</label>
                                                            <input type="number" name="alert_stock" id="" value="{{$product->alert_stock}}"class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Description</label>
                                                            <textarea name="description" id="" cols="30" rows="2" class="form-control">{{$product->description}}</textarea>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary btn-block">Update Product</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--Modal of Delete Product Detail-->
                                    <div class="modal right fade" id="deleteProduct{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="staticBackdropLabel">Delete Product</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    {{ $product->id }}
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <p> Are you sure you want to delete this {{ $product->product_name }} ? </p>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header"><h4> Search Products</h4></div>
                                    <div class="card-body">
                                        ...........
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                                    <!-- Modal of Adding Product -->
                                    <div class="modal right fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="staticBackdropLabel">Add Product</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('products.store') }}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="">Product Name</label>
                                                            <input type="text" name="product_name" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Brand</label>
                                                            <input type="text" name="brand" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Price</label>
                                                            <input type="number" name="price" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Quantity</label>
                                                            <input type="number" name="quantity" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Alert Stock</label>
                                                            <input type="number" name="alert_stock" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Description</label>
                                                            <textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary btn-block">Save Product</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



    <style>
        .modal.right .modal-dialog{
            /*position: absolute; */
            top: 0;
            right: 0;
            margin-right: 19vh;
        }

        .modal.fade:not(.in).right .modal-dialog{
            -webkit-transform: translate3d(25%, 0, 0);
            transform: translate3d(25%, 0, 0);
        }
    </style>




@endsection
