<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'password'  => 'confirmed',
        // ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nomor_telepon = $request->nomor_telepon;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        $user->update();

        Alert::Success('Success', 'successfully update!');
        return redirect('profile');
    }
}
