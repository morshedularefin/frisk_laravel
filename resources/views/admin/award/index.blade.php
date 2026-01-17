@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Awards</h1>
            <div class="ml-auto">
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <!-- Add Modal -->
            <div class="modal fade" id="modal_add" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.award.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Title *</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Description *</label>
                                        <textarea class="form-control h_100" name="description"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Year *</label>
                                        <input type="text" class="form-control" name="year">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Tag *</label>
                                        <input type="text" class="form-control" name="tag">
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
                                            <th>Title</th>
                                            <th>Year</th>
                                            <th>Tag</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($awards as $award)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $award->title }}</td>
                                            <td>{{ $award->year }}</td>
                                            <td>{{ $award->tag }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $award->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $award->id }}"><i class="fas fa-trash"></i></a>
                                            </td>
                <div class="modal fade" id="modal_edit_{{ $award->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.award.update', $award->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Title *</label>
                                        <input type="text" class="form-control" name="title" value="{{ $award->title }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Description *</label>
                                        <textarea class="form-control h_100" name="description">{{ $award->description }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Year *</label>
                                        <input type="text" class="form-control" name="year" value="{{ $award->year }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Tag *</label>
                                        <input type="text" class="form-control" name="tag" value="{{ $award->tag }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $award->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.award.destroy', $award->id) }}" method="post">
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