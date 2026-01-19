@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Posts</h1>
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
                            <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Photo *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Select Post Category *</label>
                                        <select name="post_category_id" class="form-select">
                                            @foreach($post_categories as $post_category)
                                                <option value="{{ $post_category->id }}">{{ $post_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Title *</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Slug *</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Short Description *</label>
                                        <textarea class="form-control h_100" name="short_description">{{ old('short_description') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Description *</label>
                                        <textarea class="form-control editor" name="description">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Tags</label>
                                        <select name="tags[]" class="form-select select2_multiple" multiple="multiple"></select>
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
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$post->photo) }}" alt="" class="w_150">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->post_category->name }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $post->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $post->id }}"><i class="fas fa-trash"></i></a>
                                            </td>

                <div class="modal fade" id="modal_edit_{{ $post->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('uploads/'.$post->photo) }}" alt="" class="w_150">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Change Photo</label>
                                            <div><input type="file" name="photo"></div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Select Post Category *</label>
                                            <select name="post_category_id" class="form-select">
                                                @foreach($post_categories as $post_category)
                                                    <option value="{{ $post_category->id }}" {{ $post->post_category_id == $post_category->id ? 'selected' : '' }}>{{ $post_category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Title *</label>
                                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Slug *</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Short Description *</label>
                                            <textarea class="form-control h_100" name="short_description">{{ $post->short_description }}</textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Description *</label>
                                            <textarea class="form-control editor" name="description">{{ $post->description }}</textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Tags</label>
                                            <select name="tags[]" class="form-select select2_multiple" multiple="multiple">
                                                @php
                                                    $tag_array = explode(',', $post->tags);
                                                @endphp
                                                @foreach($tag_array as $tag)
                                                    <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $post->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.post.destroy', $post->id) }}" method="post">
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