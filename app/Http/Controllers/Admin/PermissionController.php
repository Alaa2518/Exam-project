<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    //

    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index',compact('permissions'));
    }

    public function create()
    {

        return view('admin.permissions.create');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'name' => 'required|min:3|max:255',
        ]);
        Permission::Create($validate);
        return redirect()->route('admin.permissions.index');
    }


    public function edit($id)
    {
        //
        $permission = Permission::findorFail($id);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate([
            'name' => 'required|min:3|max:255',
        ]);
        $permission = Permission::findorFail($id);

        $permission->update($validate);

        return redirect()->route('admin.permissions.index');

    }


    public function destroy($id)
    {
        //
        Permission::findorFail($id)->delete();
        return redirect()->route('admin.permissions.index');
    }



}
