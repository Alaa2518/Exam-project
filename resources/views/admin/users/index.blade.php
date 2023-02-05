<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="btn btn-primary " href="{{url('admin/role/create/')}}" role="button" >Add New Role</a>
                    <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-primary col-4" href="{{url('admin/role/edit/'.$user->id)}}" role="button" >Roles</a>
                                <a class="btn btn-primary col-4" href="{{url('admin/role/edit/'.$user->id)}}" role="button" >Permission</a>

                                <form action="{{url('admin/users/delete/'.$user->id)}}" method="POST" >
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                            </td>
                            </tr>

                @endforeach
            </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
