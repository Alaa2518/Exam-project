<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    public function create(){

        return view('admin.roles.create');
    }

    public function store(Request $request)
    {

        $validate =$request->validate([
            'name' => 'required|min:3|max:255',
        ]);
        Role::Create($validate);

        return redirect()->route('admin.roles.index');
    }

    public function edit($id)
    {
        //
        $permissions = Permission::all();
        $role = Role::findorFail($id);

        return view('admin.roles.edit', compact('role','permissions'));
    }

    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate([
            'name' => 'required|min:3|max:255',
        ]);
        $role = Role::findorFail($id);

        $role->update($validate);

        return redirect()->route('admin.roles.index');

    }


    public function destroy($id)
    {
        //
        Role::findorFail($id)->delete();
        return redirect()->route('admin.roles.index');
    }


    public function givePermission(Request $request ,Role $role){
        if ($role->hasPermissionTo($request->permission)){

            return back()->with('message', 'permission Exist.');

        }
        $role->givePermissionTo($request->permission);
        return back()->with('message', 'permission added.');

    }

    public function revokePermission(Role $role ,Permission $permission){
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('message', 'permission revoked.');

        }
        return back()->with('message', 'permission not exists.');

    }
}
