<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioPhoto;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('item_order','asc')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:portfolios,slug',
            'description' => 'required|string',
            'category' => 'required|max:255',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'portfolio_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $portfolio = new Portfolio();
        $portfolio->photo = $final_name;
        $portfolio->title = $request->title;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->category = $request->category;
        $portfolio->software = $request->software;
        $portfolio->project_start_date = $request->project_start_date;
        $portfolio->project_end_date = $request->project_end_date;
        $portfolio->client = $request->client;
        $portfolio->website = $request->website;
        $portfolio->item_order = $request->item_order;
        $portfolio->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:portfolios,slug,'.$id,
            'description' => 'required|string',
            'category' => 'required|max:255',
        ]);

        $portfolio = Portfolio::where('id', $id)->first();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'portfolio_'.time().'.`'.$request->photo->getClientOriginalExtension();
            if($portfolio->photo && file_exists(public_path('uploads/'.$portfolio->photo))) {
                unlink(public_path('uploads/'.$portfolio->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name);
            $portfolio->photo = $final_name;
        }

        $portfolio->title = $request->title;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->category = $request->category;
        $portfolio->software = $request->software;
        $portfolio->project_start_date = $request->project_start_date;
        $portfolio->project_end_date = $request->project_end_date;
        $portfolio->client = $request->client;
        $portfolio->website = $request->website;
        $portfolio->item_order = $request->item_order;
        $portfolio->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $portfolio = Portfolio::where('id', $id)->first();

        if($portfolio->photo && file_exists(public_path('uploads/'.$portfolio->photo))) {
            unlink(public_path('uploads/'.$portfolio->photo));
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio deleted successfully.');
    }

    public function photos($id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        $portfolio_photos = PortfolioPhoto::orderBy('item_order','asc')->where('portfolio_id', $id)->get();
        return view('admin.portfolio.photo', compact('portfolio', 'portfolio_photos'));
    }

    public function photo_store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'portfolio_photo_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $portfolio_photo = new PortfolioPhoto();
        $portfolio_photo->portfolio_id = $request->portfolio_id;
        $portfolio_photo->photo = $final_name;
        $portfolio_photo->save();

        return redirect()->back()->with('success', 'Photo added successfully.');
    }

    public function photo_update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $portfolio_photo = PortfolioPhoto::where('id', $id)->first();

        $final_name = 'portfolio_photo_'.time().'.'.$request->photo->getClientOriginalExtension();
        if($portfolio_photo->photo && file_exists(public_path('uploads/'.$portfolio_photo->photo))) {
            unlink(public_path('uploads/'.$portfolio_photo->photo));
        }
        $request->photo->move(public_path('uploads/'), $final_name);

        $portfolio_photo->photo = $final_name;
        $portfolio_photo->save();
        
        return redirect()->back()->with('success', 'Photo updated successfully.');
    }

    public function photo_destroy(Request $request, $id)
    {
        $portfolio_photo = PortfolioPhoto::where('id', $id)->first();
        if($portfolio_photo->photo && file_exists(public_path('uploads/'.$portfolio_photo->photo))) {
            unlink(public_path('uploads/'.$portfolio_photo->photo));
        }
        $portfolio_photo->delete();

        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }
}
