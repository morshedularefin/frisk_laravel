@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Testimonials</h1>
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
                            <form action="{{ route('admin.testimonial.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Name *</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="">Designation *</label>
                                    <input type="text" class="form-control" name="designation">
                                </div>
                                <div class="mb-3">
                                    <label for="">Comment *</label>
                                    <textarea class="form-control h_200" name="comment"></textarea>
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
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Comment</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->designation }}</td>
                                            <td>{!! nl2br($testimonial->comment) !!}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $testimonial->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $testimonial->id }}"><i class="fas fa-trash"></i></a>
                                            </td>
                                            <div class="modal fade" id="modal_edit_{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Item</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="">Name *</label>
                                                                <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Designation *</label>
                                                                <input type="text" class="form-control" name="designation" value="{{ $testimonial->designation }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Comment *</label>
                                                                <textarea class="form-control h_200" name="comment">{{ $testimonial->comment }}</textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="modal_delete_{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Item</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" method="post">
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