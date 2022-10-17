<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $data = Permission::all();

        return view('admin.permission.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:permissions|max:50',
        ]);

        $save = new Permission;
        $save->name = $request->name;
        $save->save();

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    public function edit($id)
    {
        $data = Permission::findOrFail($id);
        return view('admin.permission.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:permissions|max:50',
        ]);

        $data = Permission::findOrFail($id);

        $data->update([
            'name' => $request->name,
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $data = Permission::findOrFail($id);
        $data->delete();
        if ($data) {
            return response()->json(['success' => true, 'message' => 'Permission deteled success'], 200);
        } else {
            $message = "Permission deleted failed!";
        }
        return response()->json([
            'message' => $message,
        ]);
    }

    public function deletednot()
    {
        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
