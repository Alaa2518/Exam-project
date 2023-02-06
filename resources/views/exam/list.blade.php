
{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Exams') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
    @foreach ($exams as $exam)



        <div class="jumbotron mt-3">
        <h1>Exam Number {{$exam->id}}</h1>
        <p class="lead">{{$exam['title']}}
            <a href="{{url('exam/show/'.$exam->id)}}">See More</a>

        </p>

        <div class="row float-right">


        <a class="btn btn-primary col-4" href="{{url('exam/edit/'.$exam->id)}}" role="button" >Edit</a>
            <form action="{{url('exam/delete/'.$exam->id)}}" method="POST" class="col-2">
            @csrf
            @method('delete')
                <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
            </form>
        </div>
        </div>

    @endforeach
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
