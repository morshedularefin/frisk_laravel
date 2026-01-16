<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class AdminClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('admin.client.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'client_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $client = new Client();
        $client->photo = $final_name;
        $client->url = $request->url;
        $client->home_page_2 = $request->home_page_2;
        $client->home_page_5 = $request->home_page_5;
        $client->about_page = $request->about_page;
        $client->save();

        return redirect()->route('admin.client.index')->with('success', 'Client added successfully.');
    }

    public function update(Request $request, $id)
    {
        $client = Client::where('id', $id)->first();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'client_'.time().'.'.$request->photo->getClientOriginalExtension();
            if($client->photo && file_exists(public_path('uploads/'.$client->photo))) {
                unlink(public_path('uploads/'.$client->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name);
            $client->photo = $final_name;
        }

        $client->url = $request->url;
        $client->home_page_2 = $request->home_page_2;
        $client->home_page_5 = $request->home_page_5;
        $client->about_page = $request->about_page;
        $client->save();

        return redirect()->route('admin.client.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $client = Client::where('id', $id)->first();

        if($client->photo && file_exists(public_path('uploads/'.$client->photo))) {
            unlink(public_path('uploads/'.$client->photo));
        }

        $client->delete();

        return redirect()->route('admin.client.index')->with('success', 'Client deleted successfully.');
    }
}
