<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;

class AdminAwardController extends Controller
{
    public function index()
    {
        $awards = Award::orderBy('item_order','asc')->get();
        return view('admin.award.index', compact('awards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
            'tag' => 'required|string|max:255',
        ]);

        $award = new Award();
        $award->title = $request->title;
        $award->description = $request->description;
        $award->year = $request->year;
        $award->tag = $request->tag;
        $award->url = $request->url;
        $award->item_order = $request->item_order;
        $award->save();

        return redirect()->route('admin.award.index')->with('success', 'Award added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
            'tag' => 'required|string|max:255',
        ]);

        $award = Award::where('id', $id)->first();
        $award->title = $request->title;
        $award->description = $request->description;
        $award->year = $request->year;
        $award->tag = $request->tag;
        $award->url = $request->url;
        $award->item_order = $request->item_order;
        $award->save();

        return redirect()->route('admin.award.index')->with('success', 'Award updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $award = Award::where('id', $id)->first();
        $award->delete();

        return redirect()->route('admin.award.index')->with('success', 'Award deleted successfully.');
    }
}
