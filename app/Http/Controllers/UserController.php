<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //get posts
        $posts  = User::all();


        //render view with posts
        return view('admin.apps.user-data', compact('posts'));
    }

    public function hapus($id)
    {
        $post   = User::find($id);
        $post->delete();

        return redirect('/user-data');
    }

    public function input()
    {
        return view('admin.apps.user-input');
    }

    public function input_proses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = new User([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);

        $user->save();

        return redirect()->route('user-data')->with('success', 'Data berhasil di tambahkan!');
    }

    public function register()
    {
        $data['title'] = 'Register';
        return view('admin/authentication/sign-up', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = new User([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);

        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please Login!');
    }



    public function login()
    {
        return view('admin/authentication/login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email'      => 'required',
            'password'   => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'password' => 'Wrong email or password',
            ]);
        }
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
