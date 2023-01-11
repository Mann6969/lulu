<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Permission_roles;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'name' => 'required|max:50|unique:roles'
            ]);
            $roles = new Role;
            $roles->name = $request->name;
            $roles->save();
            // $id = $roles->id;
            // $per = $request->permission;
            // // dd($per);
            // foreach($per as $value) {
            //     // die($value);
            //     // dd($value);
            //     $temp = new Permission_roles;
            //     $temp->role_id = $id;
            //     $temp->permission_id = $value;
            //     $temp->save();
            //     // die($temp);
            // }
            // die('12');
            // $hell=Permission_roles::all();
            // dd($hell);
            // Many to many relation between Roles and Permissions
            $roles->permissions()->sync($request->permission);
            return redirect (route('role.index'))->with('message','Roles Created Successfully');
        } catch (\Throwable $th) {
            return redirect (route('role.create'))->with('message','Please Try Again');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        return view('admin.role.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:50'
        ]);
        $role = role::find($id);
        $role->name = $request->name;
        $role->save();
        // Many to many relation between Roles and Permissions
        $role->permissions()->sync($request->permission);
        return redirect (route('role.index'))->with('message','Roles Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = role::find($id);
        $roles->permissions()->detach();
        $roles->delete();
        return redirect (route('role.index'))->with('message','Role Deleted Successfully');
    }
}
