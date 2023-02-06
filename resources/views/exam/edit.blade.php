


{{-- new style --}}
<x-app-layout>
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
                    <form action="{{url('exam/update/'.$exam->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-4">
                        <label for="title">Exam Title</label>
                        <input class="form-control" type="text" required name="title" id="title" placeholder="Enter Title" value="{{$exam['title']}}">
                        </div>
                        <div class="form-group col-1">
                        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
