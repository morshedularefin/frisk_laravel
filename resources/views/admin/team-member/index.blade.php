@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Team Members</h1>
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
                            <form action="{{ route('admin.team-member.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Photo *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Name *</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Slug *</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Position *</label>
                                        <input type="text" class="form-control" name="position" value="{{ old('position') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Biography *</label>
                                        <textarea class="form-control h_200" name="biography">{{ old('biography') }}</textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">YouTube</label>
                                        <input type="text" class="form-control" name="youtube" value="{{ old('youtube') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">LinkedIn</label>
                                        <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}">
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
                                            <th>Slug</th>
                                            <th>Position</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($team_members as $team_member)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$team_member->photo) }}" alt="" class="w_100">
                                            </td>
                                            <td>{{ $team_member->name }}</td>
                                            <td>{{ $team_member->slug }}</td>
                                            <td>{{ $team_member->position }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $team_member->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $team_member->id }}"><i class="fas fa-trash"></i></a>
                                            </td>

                <div class="modal fade" id="modal_edit_{{ $team_member->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.team-member.update', $team_member->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('uploads/'.$team_member->photo) }}" alt="" class="w_100">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Change Photo</label>
                                            <div><input type="file" name="photo"></div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Name *</label>
                                            <input type="text" class="form-control" name="name" value="{{ $team_member->name }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Slug *</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $team_member->slug }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Position *</label>
                                            <input type="text" class="form-control" name="position" value="{{ $team_member->position }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="">Biography *</label>
                                            <textarea class="form-control h_200" name="biography">{{ $team_member->biography }}</textarea>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ $team_member->email }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $team_member->phone }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Facebook</label>
                                            <input type="text" class="form-control" name="facebook" value="{{ $team_member->facebook }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Twitter</label>
                                            <input type="text" class="form-control" name="twitter" value="{{ $team_member->twitter }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">YouTube</label>
                                            <input type="text" class="form-control" name="youtube" value="{{ $team_member->youtube }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">LinkedIn</label>
                                            <input type="text" class="form-control" name="linkedin" value="{{ $team_member->linkedin }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="">Instagram</label>
                                            <input type="text" class="form-control" name="instagram" value="{{ $team_member->instagram }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $team_member->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.team-member.destroy', $team_member->id) }}" method="post">
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