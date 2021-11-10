<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('panel.users.index', ['users'=>User::all()]);
    }

    public function new() {
        return view('panel.users.form');
    }

    public function add() {
        $data = $this->validate(request(), [
            'name'   => 'required|min:3',
            'email'  => 'required|email',
            'password'=> 'required',
            'role'   => 'required',
            'wallet'   => 'required',
            'bio'   => 'required|max:500',
            'avatar' => 'required'
        ]);
//        dd($data);
        
        $user = User::create($data);
        $user->password = Hash::make($data['password']);
        //if ($user instanceof User){}

        // checks...
        // set guarded values to Model
        $user->wallet = request('wallet');
        $user->role   = request('role');
        
        $file_name =pathinfo(request()->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME). '-' .time(). '.' . request()->file('avatar')->extension();
        //$file_name = time() . '.' . request()->file('avatar')->extension();
        request()->file('avatar')->move(public_path('uploads/profiles'), $file_name);
        $user->avatar = $file_name;

        $user->save();

        return redirect()->back()->with(['success'=>true]);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('panel.users.form')->with(['user'=>$user]);
    }

    public function update($id) {
        $data = $this->validate(request(), [
            'name'   => 'required|min:3',
            'email'  => 'required|email',
            'password'=> 'required', //Ex.
            'role'   => 'required',
            'wallet'   => 'required',
            'bio'   => 'required|max:500',
            //'avatar'   => 'required',
        ]);
        $user = User::find($id);

        $user->role   = request('role');
        $user->wallet   = request('wallet');
        $user->password = request(Hash::make($data['password']));
        $user->avatar = request('avatar');

        $user->update($data);
        return redirect()->route('panel.users')->with(['success'=>true]);
    }

    public function delete( User $user ) {
        //dd($user);
        $user->delete();
        return redirect()->route('panel.users')->with(['success'=>true]);
    }
}

