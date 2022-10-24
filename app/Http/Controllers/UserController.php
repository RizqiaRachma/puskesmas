<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('id', '<>', 4)->get();
        return view('admin.user.index', ['data' => $data]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {

        // dd($request);
        $validated = $request->validate([
            'name'      => 'required|unique:users|max:50',
            'email'     => 'required|unique:users',
            'password'  => 'required',
            'address'   => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kotakab'   => 'required',
            'emergency' => 'required',
        ]);

        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = Hash::make($request->password);
        $save->save();

        if ($save) {
            $user = User::find($save->id);
            dd($user);

            $saveprofile = new Profile();
            $saveprofile->name = $request->name;
            $saveprofile->address = $request->address;
            $saveprofile->kelurahan = $request->kelurahan;
            $saveprofile->kecamatan = $request->kecamatan;
            $saveprofile->kotakab = $request->kotakab;
            $saveprofile->aboutme = $request->aboutme;
            $saveprofile->emergency = $request->emergency;
            $saveprofile->place = $request->place;
            $saveprofile->birthday = $request->birthday;
            $user->profile()->save($saveprofile);

            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                $save->addMediaFromRequest('avatar')->toMediaCollection('avatar');
            }

            $save->assignRole($request->role);
        }

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $roles = Role::all();
        $data = User::with('profile')->findOrFail($id);
        return view('admin.user.edit', ['data' => $data, 'roles' => $roles]);
    }

    public function editprofile()
    {
        // dd(Auth::user()->profile->pluck('address'));
        return view('admin.user.editprofile');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'address' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kotakab' => 'required',
            'emergency' => 'required',
        ]);

        $save = User::with('profile')->findOrFail($id);

        // dd($save->profile);

        $save->update([
            'name' => $request->name,
        ]);

        if ($request->changepassword === '1') {
            $save->update([
                'password' => Hash::make($request->password),
            ]);
        }

        if ($request->changeemail === '1') {
            $validatedemail = $request->validate([
                'email' => 'required|unique:users',
            ]);
            $save->update([
                'email' => $request->email,
            ]);
        }

        if ($save->profile === null) {
            $user = User::find($save->id);
            $saveprofile = new Profile;
            $saveprofile->name = $request->name;
            $saveprofile->address = $request->address;
            $saveprofile->kelurahan = $request->kelurahan;
            $saveprofile->kecamatan = $request->kecamatan;
            $saveprofile->kotakab = $request->kotakab;
            $saveprofile->aboutme = $request->aboutme;
            $saveprofile->emergency = $request->emergency;
            $saveprofile->place = $request->place;
            $saveprofile->birthday = $request->birthday;
            $user->profile()->save($saveprofile);
        } else {
            $save->profile->update([
                'name' => $request->name,
                'address' => $request->address,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kotakab' => $request->kotakab,
                'aboutme' => $request->aboutme,
                'emergency' => $request->emergency,
                'place' => $request->place,
                'birthday' => $request->birthday,
            ]);
        }

        $role = $request->role;

        $save->syncRoles($role);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function changeavatar(Request $request, $id)
    {

        // dd($request->hasFile('avatar'));
        $data = User::findOrFail($id);
        $data->save();
        if ($request->hasfile('avatar')) {
            $data->clearMediaCollectionExcept('avatar', $data->getFirstMedia());
            $data->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('users.editprofile', $id)->with('success', 'Avatar updated successfully.');
    }

    public function changeemail(Request $request, $id)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $save = User::findOrFail($id);
        $save->update([
            'email' => $request->email,
        ]);

        return redirect()->route('users.editprofile', $id)->with('success', 'Email updated successfully.');
    }

    public function changepassword(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => 'required|min:8',
        ]);

        $save = User::findOrFail($id);
        $save->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('users.editprofile', $id)->with('success', 'Password change successfully.');
    }

    public function updateprofile(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kotakab' => 'required',
            'aboutme' => 'required',
            'emergency' => 'required',
            'place' => 'required',
            'birthday' => 'required',
        ]);

        $save = User::with('profile')->findOrFail($id);
        $save->profile->update([
            'name' => $request->name,
            'address' => $request->address,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kotakab' => $request->kotakab,
            'aboutme' => $request->aboutme,
            'emergency' => $request->emergency,
            'place' => $request->place,
            'birthday' => $request->birthday,
        ]);
        return redirect()->route('users.index')->with('success', 'User Profile updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $data = User::with('profile')->with('roles')->findOrFail($id);
        $data->delete();

        $data->profile->delete();
        $data->clearMediaCollectionExcept('avatar', $data->getFirstMedia());

        DB::table('model_has_roles')->where('model_id', $data->id);

        if ($data) {
            return response()->json(['success' => true, 'message' => 'Users deteled success'], 200);
        } else {
            $message = "Users deleted failed!";
        }
        return response()->json([
            'message' => $message,
        ]);
    }

    public function deletednot()
    {
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
