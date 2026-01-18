@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Features of {{ $package->name }}</h1>
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
                            <form action="{{ route('admin.pricing-plan.feature_store') }}" method="post">
                                @csrf
                                <input type="hidden" name="package_id" value="{{ $package->id }}">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Name *</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Availability *</label>
                                        <select name="availability" class="form-select">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Item Order</label>
                                        <input type="text" class="form-control" name="item_order">
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
                                            <th>Name</th>
                                            <th>Availability</th>
                                            <th>Order</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($package_features as $package_feature)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $package_feature->name }}</td>
                                            <td>
                                                @if($package_feature->availability == 'Yes')
                                                    <span class="badge bg-success">Yes</span>
                                                @else
                                                    <span class="badge bg-danger">No</span>
                                                @endif
                                            </td>
                                            <td>{{ $package_feature->item_order }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $package_feature->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $package_feature->id }}"><i class="fas fa-trash"></i></a>
                                            </td>
            <div class="modal fade" id="modal_edit_{{ $package_feature->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.pricing-plan.feature_update', $package_feature->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $package_feature->name }}">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="">Availability *</label>
                                    <select name="availability" class="form-select">
                                        <option value="Yes" {{ $package_feature->availability == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="No" {{ $package_feature->availability == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="">Item Order</label>
                                    <input type="text" class="form-control" name="item_order" value="{{ $package_feature->item_order }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal_delete_{{ $package_feature->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.pricing-plan.feature_destroy', $package_feature->id) }}" method="post">
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