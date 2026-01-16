<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class AdminPricingController extends Controller
{
    public function index()
    {
        $packages = Package::orderBy('item_order','asc')->get();
        return view('admin.pricing-plan.index', compact('packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:packages,name',
            'price' => 'required|numeric',
        ]);

        $package = new Package();
        $package->name = $request->name;
        $package->price = $request->price;
        $package->duration = $request->duration;
        $package->description = $request->description;
        $package->button_text = $request->button_text;
        $package->button_link = $request->button_link;
        $package->item_order = $request->item_order;
        $package->save();

        return redirect()->route('admin.pricing-plan.index')->with('success', 'Package added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:packages,name,'.$id,
            'price' => 'required|numeric',
        ]);

        $package = Package::where('id', $id)->first();
        $package->name = $request->name;
        $package->price = $request->price;
        $package->duration = $request->duration;
        $package->description = $request->description;
        $package->button_text = $request->button_text;
        $package->button_link = $request->button_link;
        $package->item_order = $request->item_order;
        $package->save();
        
        return redirect()->route('admin.pricing-plan.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $package = Package::where('id', $id)->first();
        $package->delete();

        return redirect()->route('admin.pricing-plan.index')->with('success', 'Package deleted successfully.');
    }
}
