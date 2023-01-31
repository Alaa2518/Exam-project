{{-- @extends('layout.master')


@section('title','Show Exam')


@section('contant')

    <h1 class="mt-5">Exam Details</h1>
    <p class="lead">
        <h3>Exam Number:{{$exam->id}}</h3>
        <h3>Exam Title:{{$exam->title}}</h3>

    </p>

    <h3>Questions</h3>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Question Type</th>
                    <th scope="col">Opetion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exam->questions as $question)
                            <tr>
                            <th scope="row"><a href="{{url('question/show/'.$question->id)}}">Show Q:{{$question->id}}</a></th>
                            <td>{{$question->question_type}}</td>
                            <td>
                                <a class="btn btn-primary col-4" href="{{url('question/edit/'.$question->id)}}" role="button" >Edit</a>
                                <form action="{{url('question/delete/'.$question->id)}}" method="POST" >
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                            </td>
                            </tr>

                @endforeach
            </tbody>
            </table>

            <a class="btn btn-primary " href="{{url('question/create/'.$exam->id)}}" role="button" >Add New Question</a>


@endsection --}}

{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Exam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="lead">
        <h3>Exam Number:{{$exam->id}}</h3>
        <h3>Exam Title:{{$exam->title}}</h3>

    </p>

    <h3>Questions</h3>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Question Type</th>
                    <th scope="col">Opetion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exam->questions as $question)
                            <tr>
                            <th scope="row"><a href="{{url('question/show/'.$question->id)}}">Show Q:{{$question->id}}</a></th>
                            <td>{{$question->question_type}}</td>
                            <td>
                                <a class="btn btn-primary col-4" href="{{url('question/edit/'.$question->id)}}" role="button" >Edit</a>
                                <form action="{{url('question/delete/'.$question->id)}}" method="POST" >
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                            </td>
                            </tr>

                @endforeach
            </tbody>
            </table>

            <a class="btn btn-primary " href="{{url('question/create/'.$exam->id)}}" role="button" >Add New Question</a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

