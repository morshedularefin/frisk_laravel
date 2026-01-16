<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageFeature;

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
        PackageFeature::where('package_id', $id)->delete();

        $package = Package::where('id', $id)->first();
        $package->delete();

        return redirect()->route('admin.pricing-plan.index')->with('success', 'Package deleted successfully.');
    }

    public function features($id)
    {
        $package = Package::where('id', $id)->first();
        $package_features = PackageFeature::where('package_id', $id)->get();
        return view('admin.pricing-plan.feature', compact('package', 'package_features'));
    }

    public function feature_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $package_feature = new PackageFeature();
        $package_feature->package_id = $request->package_id;
        $package_feature->name = $request->name;
        $package_feature->availability = $request->availability;
        $package_feature->item_order = $request->item_order;
        $package_feature->save();

        return redirect()->back()->with('success', 'Feature added successfully.');
    }

    public function feature_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $package_feature = PackageFeature::where('id', $id)->first();
        $package_feature->name = $request->name;
        $package_feature->availability = $request->availability;
        $package_feature->item_order = $request->item_order;
        $package_feature->save();
        
        return redirect()->back()->with('success', 'Feature updated successfully.');
    }

    public function feature_destroy(Request $request, $id)
    {
        $package_feature = PackageFeature::where('id', $id)->first();
        $package_feature->delete();

        return redirect()->back()->with('success', 'Feature deleted successfully.');
    }
}
