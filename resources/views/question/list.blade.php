


{{-- New Style for this page --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Questions') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container">
                            @foreach ($questions as $question)

                                <div class="jumbotron mt-3">
                                <h1>Question Number {{$question->id}}</h1>
                                <p class="lead">{{$question['question_type']}}
                                    <a href="{{url('question/show/'.$question->id)}}">See More</a>
                                </p>
                                <p>
                                    {{$question->exam['title']}}
                                </p>
                                <div class="row float-right">
                                <a class="btn btn-primary col-4" href="{{url('question/edit/'.$question->id)}}" role="button" >Edit</a>
                                    <form action="{{url('question/delete/'.$question->id)}}" method="POST" class="col-4">
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


