<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        if (Auth::user()->roles->pluck('name')->implode(',') <> 'super-admin') {
            $data = Role::where('name', '<>', 'super-admin')->get();
        } else {
            $data = Role::all();
        }

        return view('admin.role.index', ['data' => $data]);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create', ['permissions' => $permissions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:permissions|max:50',
            'permission' => 'required'
        ]);

        $save = new Role;
        $save->name = $request->name;
        $save->save();

        // $role = Role::findOrFail($request->name);

        $permission = $request->input('permission');

        $save->givePermissionTo($permission);

        return redirect()->route('role.index')->with('success', 'Roles created successfully.');
    }

    public function edit($id)
    {
        $permissions = Permission::all();
        $data = Role::findOrFail($id);
        $cek = $data->permissions->pluck('name')->toArray();
        // dd($data->permissions);
        return view('admin.role.edit', ['data' => $data, 'permissions' => $permissions, 'cek' => $cek]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:permissions|max:50',
        ]);

        $data = Role::findOrFail($id);

        $data->update([
            'name' => $request->name,
        ]);

        $permission = $request->input('permission');

        $data->syncPermissions($permission);

        return redirect()->route('roles.index')->with('success', 'Roles updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $data = Role::findOrFail($id);
        $data->delete();

        DB::table('role_has_permissions')->where('role_id', $id)->delete();
        if ($data) {
            return response()->json(['success' => true, 'message' => 'Role deteled success'], 200);
        } else {
            $message = "Role deleted failed!";
        }
        return response()->json([
            'message' => $message,
        ]);
    }

    public function deletednot()
    {
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
