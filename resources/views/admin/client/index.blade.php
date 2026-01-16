@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Clients</h1>
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
                            <form action="{{ route('admin.client.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Photo *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">URL</label>
                                        <input type="text" class="form-control" name="url" value="{{ old('url') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Home Page 2</label>
                                        <select name="home_page_2" class="form-select">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Home Page 5</label>
                                        <select name="home_page_5" class="form-select">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">About Page</label>
                                        <select name="about_page" class="form-select">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
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
                                            <th>URL</th>
                                            <th>Home Page 2</th>
                                            <th>Home Page 5</th>
                                            <th>About Page</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clients as $client)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$client->photo) }}" alt="" class="w_200">
                                            </td>
                                            <td>{{ $client->url }}</td>
                                            <td>
                                                @if($client->home_page_2 == 'Yes')
                                                    <span class="badge bg-success">Yes</span>
                                                @else
                                                    <span class="badge bg-danger">No</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($client->home_page_5 == 'Yes')
                                                    <span class="badge bg-success">Yes</span>
                                                @else
                                                    <span class="badge bg-danger">No</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($client->about_page == 'Yes')
                                                    <span class="badge bg-success">Yes</span>
                                                @else
                                                    <span class="badge bg-danger">No</span>
                                                @endif
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $client->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $client->id }}"><i class="fas fa-trash"></i></a>
                                            </td>

                <div class="modal fade" id="modal_edit_{{ $client->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.client.update', $client->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('uploads/'.$client->photo) }}" alt="" class="w_200">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Change Photo</label>
                                            <div><input type="file" name="photo"></div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">URL</label>
                                            <input type="text" class="form-control" name="url" value="{{ $client->url }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Home Page 2</label>
                                            <select name="home_page_2" class="form-select">
                                                <option value="Yes" {{ $client->home_page_2 == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="No" {{ $client->home_page_2 == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Home Page 5</label>
                                            <select name="home_page_5" class="form-select">
                                                <option value="Yes" {{ $client->home_page_5 == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="No" {{ $client->home_page_5 == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">About Page</label>
                                            <select name="about_page" class="form-select">
                                                <option value="Yes" {{ $client->about_page == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="No" {{ $client->about_page == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $client->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.client.destroy', $client->id) }}" method="post">
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