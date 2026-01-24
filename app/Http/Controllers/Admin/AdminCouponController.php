<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class AdminCouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::get();
        return view('admin.coupon.index', compact('coupons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:coupons,code',
            'value' => 'required|numeric',
            'start_date' => 'required|date',
            'expiry_date' => 'required|date',
            'use_limit' => 'nullable|integer',
        ]);

        $coupon = new Coupon();
        $coupon->code = $request->code;
        $coupon->type = $request->type;
        $coupon->value = $request->value;
        $coupon->start_date = $request->start_date;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->use_limit = $request->use_limit;
        $coupon->status = $request->status;
        $coupon->save();

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:coupons,code,'.$id,
            'value' => 'required|numeric',
            'start_date' => 'required|date',
            'expiry_date' => 'required|date',
            'use_limit' => 'nullable|integer',
        ]);

        $coupon = Coupon::where('id', $id)->first();
        $coupon->code = $request->code;
        $coupon->type = $request->type;
        $coupon->value = $request->value;
        $coupon->start_date = $request->start_date;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->use_limit = $request->use_limit;
        $coupon->status = $request->status;
        $coupon->save();

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $coupon = Coupon::where('id', $id)->first();
        $coupon->delete();

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon deleted successfully.');
    }
}
