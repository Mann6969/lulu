<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\models\User;
use App\models\Role;
class UseradminController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $roles = Role::all();
        // die($users); 
        return view ('admin.Adduser.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.Adduser.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $request['password'] = Hash::make($request->Password);
        $user = User::create($request->all());
        $user->roles()->sync($request->role);
        return redirect(route('user.index'))->with('message','Added Admin User Successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.Adduser.edit',compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ]);
        // die($id);
        // dd($request->name);
        $user = User::where('id',$id)->update($request->except('_token','_method','role'));
        // $user->name = $request->name;
        // $user->email = $request->email;
        // ->update($request->except('_token','_method','role'));
        // dd($user);
        User::find($id)->roles()->sync($request->role);
        return redirect(route('user.index'))->with('message','User updated successfully');
    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->roles()->detach();
        $users->delete();
        return redirect(route('user.index'))->with('message','Admin User Deleted Successfully');
    }
}
