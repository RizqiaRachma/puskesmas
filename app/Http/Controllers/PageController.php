<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $data = Page::all();

        return view('admin.pages.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
        ]);

        // dd($request);
        $save = new Page;
        $save->type = $request->type;
        $save->name = $request->name;
        $save->slug = Str::slug($request->name, '-');
        $save->body = $request->body;
        $save->user_id = Auth::user()->id;
        $save->status = '1';
        $save->save();

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $save->addMediaFromRequest('thumbnail')->toMediaCollection('thumbnail');
        }

        return redirect()->route('page.index')->with('success', 'Pages created successfully.');
    }

    public function edit($id)
    {
        $data = Page::where('id', $id)->first();

        return view('admin.pages.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
        ]);

        $save = Page::findOrFail($id);

        $save->update([
            'type' => $request->type,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'body' => $request->body,
            'user' => Auth::user()->id,
        ]);

        if ($request->hasfile('thumbnail')) {
            $save->clearMediaCollectionExcept('thumbnail', $save->getFirstMedia());
            $save->addMediaFromRequest('thumbnail')->toMediaCollection('thumbnail');
        }

        return redirect()->route('page.index')->with('success', 'Pages created successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $data = Page::findOrFail($id);
        $data->delete();
        $data->clearMediaCollectionExcept('thumbnail', $data->getFirstMedia());

        return redirect()->route('page.index')->with('success', 'Page deleted successfully.');
    }
}
