<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $data = Menu::where('parent', '0')->get();

        return view('admin.menu.index', ['data' => $data]);
    }

    public function create()
    {
        $menus = Menu::All();
        $pages = Page::all();

        return view('admin.menu.create', ['menus' => $menus, 'pages' => $pages]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:menus|max:50',
        ]);

        // dd($request);

        if ($request->page == 0) {
            $link = '#';
        } else {
            $link = $request->page;
        }
        $save = new Menu;
        $save->name = $request->name;
        $save->slug = $slug;
        $save->user_id  = Auth::user()->id;
        $save->parent   = $request->parent;
        $save->save();

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit($id)
    {
        $data = Menu::where('id', $id)->first();
        $menus = Menu::All();
        $pages = Page::all();

        return view('admin.menu.edit', ['menus' => $menus, 'pages' => $pages, 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
        ]);

        $save = Menu::findOrFail($id);

        if ($request->page == 0) {
            $link = '#';
        } else {
            $link = $request->page;
        }

        $save->update([
            'parent' => $request->parent,
            'name' => $request->name,
            'link' => $link,
            'user' => Auth::user()->id,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $data = Menu::findOrFail($id);
        $data->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
