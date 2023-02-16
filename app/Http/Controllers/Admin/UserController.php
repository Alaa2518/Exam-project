<?php

namespace App\Http\Controllers\Admin;

use App\Imports\UsersImport;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }
        if($request->role === 'user'){
            $user->assignRole($request->role);
            $user->update(['code' => Str::random(5)]);
            return redirect('/sendEmail/' . $user->id);
        }
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            $user->update(['code' => null]);

            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission does not exists.');
    }

    public function destroy(User $user)
    {
        if ($user->hasRole('superAdmin')) {
            return back()->with('message', 'you are super admin.');
        }
        $user->delete();

        return back()->with('message', 'User deleted.');
    }


    public function importUsers(){
        return view('admin.users.import');

    }

    public function uploadUsers(Request $request){
        $request->validate(['file' => ['required', 'mimes:csv,xlsx']]);
        Excel::import(new UsersImport,$request->file);
        return redirect()->route('admin.users.index')->with('message','users added');
    }

}
