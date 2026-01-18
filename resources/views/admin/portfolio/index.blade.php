@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Portfolios</h1>
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
                            <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Photo *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Title *</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Slug *</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Description *</label>
                                        <textarea class="form-control editor" name="description">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Category *</label>
                                        <input type="text" class="form-control" name="category" value="{{ old('category') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Software</label>
                                        <input type="text" class="form-control" name="software" value="{{ old('software') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Project Start Date</label>
                                        <input type="text" class="form-control datepicker" name="project_start_date" value="{{ old('project_start_date') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Project End Date</label>
                                        <input type="text" class="form-control datepicker" name="project_end_date" value="{{ old('project_end_date') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Client</label>
                                        <input type="text" class="form-control" name="client" value="{{ old('client') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Website</label>
                                        <input type="text" class="form-control" name="website" value="{{ old('website') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Item Order</label>
                                        <input type="text" class="form-control" name="item_order" value="{{ old('item_order') }}">
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
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Order</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($portfolios as $portfolio)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$portfolio->photo) }}" alt="" class="w_150">
                                            </td>
                                            <td>{{ $portfolio->title }}</td>
                                            <td>{{ $portfolio->category }}</td>
                                            <td>{{ $portfolio->item_order }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $portfolio->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $portfolio->id }}"><i class="fas fa-trash"></i></a>
                                            </td>

                <div class="modal fade" id="modal_edit_{{ $portfolio->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('uploads/'.$portfolio->photo) }}" alt="" class="w_100">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Change Photo</label>
                                            <div><input type="file" name="photo"></div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Title *</label>
                                            <input type="text" class="form-control" name="title" value="{{ $portfolio->title }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Slug *</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $portfolio->slug }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Description *</label>
                                            <textarea class="form-control editor" name="description">{{ $portfolio->description }}</textarea>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Category *</label>
                                            <input type="text" class="form-control" name="category" value="{{ $portfolio->category }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Software</label>
                                            <input type="text" class="form-control" name="software" value="{{ $portfolio->software }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Project Start Date</label>
                                            <input type="text" class="form-control datepicker" name="project_start_date" value="{{ $portfolio->project_start_date }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Project End Date</label>
                                            <input type="text" class="form-control datepicker" name="project_end_date" value="{{ $portfolio->project_end_date }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Client</label>
                                            <input type="text" class="form-control" name="client" value="{{ $portfolio->client }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Website</label>
                                            <input type="text" class="form-control" name="website" value="{{ $portfolio->website }}">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="">Item Order</label>
                                            <input type="text" class="form-control" name="item_order" value="{{ $portfolio->item_order }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $portfolio->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="post">
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