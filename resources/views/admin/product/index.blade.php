@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Products</h1>
            <div class="ml-auto">
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <!-- Add Modal -->
            <div class="modal fade" id="modal_add" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Photo *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Name *</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Slug *</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Category *</label>
                                        <select name="product_category_id" class="form-select">
                                            @foreach($product_categories as $product_category)
                                                <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Regular Price *</label>
                                        <input type="text" class="form-control" name="regular_price" value="{{ old('regular_price') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Sale Price *</label>
                                        <input type="text" class="form-control" name="sale_price" value="{{ old('sale_price') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Short Description *</label>
                                        <textarea class="form-control h_100" name="short_description">{{ old('short_description') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Description *</label>
                                        <textarea class="form-control editor" name="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Add Modal -->
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Regular Price</th>
                                            <th>Sale Price</th>
                                            <th>Photo Gallery</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$product->photo) }}" alt="" class="w_150">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->product_category->name }}</td>
                                            <td>${{ $product->regular_price }}</td>
                                            <td>${{ $product->sale_price }}</td>
                                            <td>
                                                <a href="{{ route('admin.product.photos', $product->id) }}" class="btn btn-primary btn-sm">Photo Gallery</a>
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $product->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $product->id }}"><i class="fas fa-trash"></i></a>
                                            </td>

                <div class="modal fade" id="modal_edit_{{ $product->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('uploads/'.$product->photo) }}" alt="" class="w_150">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Change Photo</label>
                                            <div><input type="file" name="photo"></div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Name *</label>
                                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Slug *</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $product->slug }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Category *</label>
                                            <select name="product_category_id" class="form-select">
                                                @foreach($product_categories as $product_category)
                                                    <option value="{{ $product_category->id }}" {{ $product_category->id == $product->product_category_id ? 'selected' : '' }}>{{ $product_category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Regular Price *</label>
                                            <input type="text" class="form-control" name="regular_price" value="{{ $product->regular_price }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Sale Price *</label>
                                            <input type="text" class="form-control" name="sale_price" value="{{ $product->sale_price }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Short Description *</label>
                                            <textarea class="form-control h_100" name="short_description">{{ $product->short_description }}</textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Description *</label>
                                            <textarea class="form-control editor" name="description">{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $product->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.product.destroy', $product->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Do you want to delete this item?</label>
                                </div>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    </section>
</div>

@endsection