
{{-- new style --}}
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{url('admin/roles/update/'.$role->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-4">
                        <label for="name">Role Name</label>
                        <input class="form-control" type="text" required name="name" id="name" placeholder="Enter Role" value="{{$role['name']}}">
                        </div>
                        <div class="form-group col-1">
                        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-6 p-2">

        <h2 class="text-2xl font-semibold">Role Permissions</h2>
        <div>
            @if($role->permissions)
                @foreach($role->permissions as $role_permission)


                    <form action="{{route('admin.roles.permissions.revoke',[$role->id,$role_Permission->id])}}" method="POST" >
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger " role="button" type="sbmit" >{{$role_permission->name}}</button>
                                </form>
                @endforeach
            @endif
        </div>
        <div>
            <form action="{{route('admin.roles.permissions',$role->id)}}" method="POST">
                        @csrf

                        <div class="form-group col-4">
                        <label for="permission">Permissioin</label>
                        <select class="form-control" type="text" required name="permission" id="permission" placeholder="select permission" >
                                            @foreach($permissions as $permission)
                                                <option value="{{$permission->name}}">{{$permission->name}}</option>
                                            @endforeach
                        </select>
                        </div>
                        <div class="form-group col-1">
                        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
                        </div>
                    </form>
        </div>
    </div>
</x-admin-layout>
