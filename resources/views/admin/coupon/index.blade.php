@extends('admin.layouts.master')

@section('main_content')

@include('admin.layouts.top')

@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Coupons</h1>
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
                            <form action="{{ route('admin.coupon.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Code *</label>
                                        <input type="text" class="form-control" name="code">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Type *</label>
                                        <select class="form-select" name="type">
                                            <option value="Fixed">Fixed</option>
                                            <option value="Percentage">Percentage</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Value *</label>
                                        <input type="text" class="form-control" name="value">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Use Limit</label>
                                        <input type="number" class="form-control" name="use_limit">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Start Date *</label>
                                        <input type="text" class="form-control datepicker" name="start_date">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Expiry Date *</label>
                                        <input type="text" class="form-control datepicker" name="expiry_date">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Status</label>
                                        <select class="form-select" name="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
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
                                            <th>Code</th>
                                            <th>Type</th>
                                            <th>Value</th>
                                            <th>Start Date</th>
                                            <th>Expiry Date</th>
                                            <th>Use Limit</th>
                                            <th>Status</th>
                                            <th class="w_100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($coupons as $coupon)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $coupon->code }}</td>
                                            <td>{{ $coupon->type }}</td>
                                            <td>{{ $coupon->value }}</td>
                                            <td>{{ $coupon->start_date }}</td>
                                            <td>{{ $coupon->expiry_date }}</td>
                                            <td>{{ $coupon->use_limit }}</td>
                                            <td>
                                                @if($coupon->status == 'Active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_{{ $coupon->id }}"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_delete_{{ $coupon->id }}"><i class="fas fa-trash"></i></a>
                                            </td>
                <div class="modal fade" id="modal_edit_{{ $coupon->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.coupon.update', $coupon->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Code *</label>
                                        <input type="text" class="form-control" name="code" value="{{ $coupon->code }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Type *</label>
                                        <select class="form-select" name="type">
                                            <option value="Fixed" {{ $coupon->type == 'Fixed' ? 'selected' : '' }}>Fixed</option>
                                            <option value="Percentage" {{ $coupon->type == 'Percentage' ? 'selected' : '' }}>Percentage</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Value *</label>
                                        <input type="text" class="form-control" name="value" value="{{ $coupon->value }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Use Limit</label>
                                        <input type="number" class="form-control" name="use_limit" value="{{ $coupon->use_limit }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Start Date *</label>
                                        <input type="text" class="form-control datepicker" name="start_date" value="{{ $coupon->start_date }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Expiry Date *</label>
                                        <input type="text" class="form-control datepicker" name="expiry_date" value="{{ $coupon->expiry_date }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Status</label>
                                        <select class="form-select" name="status">
                                            <option value="Active" {{ $coupon->status == 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="Inactive" {{ $coupon->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_delete_{{ $coupon->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.coupon.destroy', $coupon->id) }}" method="post">
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