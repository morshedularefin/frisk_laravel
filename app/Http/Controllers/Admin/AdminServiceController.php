<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('item_order','asc')->get();
        return view('admin.service.index', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:services,slug',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name_icon = 'service_icon_'.time().'.'.$request->icon->getClientOriginalExtension();
        $request->icon->move(public_path('uploads/'), $final_name_icon);

        $final_name_photo = 'service_photo_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name_photo);

        $service = new Service();
        $service->icon = $final_name_icon;
        $service->photo = $final_name_photo;
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->item_order = $request->item_order;
        $service->home_page_2 = $request->home_page_2;
        $service->home_page_3 = $request->home_page_3;
        $service->home_page_5 = $request->home_page_5;
        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'Service added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:services,slug,'.$id,
            'short_description' => 'required|string',
            'description' => 'required|string',
        ]);

        $service = Service::where('id', $id)->first();

        if($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_icon = 'service_icon_'.time().'.'.$request->icon->getClientOriginalExtension();
            if($service->icon && file_exists(public_path('uploads/'.$service->icon))) {
                unlink(public_path('uploads/'.$service->icon));
            }
            $request->icon->move(public_path('uploads/'), $final_name_icon);
            $service->icon = $final_name_icon;
        }

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_photo = 'service_photo_'.time().'.'.$request->photo->getClientOriginalExtension();
            if($service->photo && file_exists(public_path('uploads/'.$service->photo))) {
                unlink(public_path('uploads/'.$service->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name_photo);
            $service->photo = $final_name_photo;
        }

        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->item_order = $request->item_order;
        $service->home_page_2 = $request->home_page_2;
        $service->home_page_3 = $request->home_page_3;
        $service->home_page_5 = $request->home_page_5;
        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $service = Service::where('id', $id)->first();

        if($service->icon && file_exists(public_path('uploads/'.$service->icon))) {
            unlink(public_path('uploads/'.$service->icon));
        }

        if($service->photo && file_exists(public_path('uploads/'.$service->photo))) {
            unlink(public_path('uploads/'.$service->photo));
        }

        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully.');
    }
}
