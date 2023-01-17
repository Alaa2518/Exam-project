@extends('layout.master')


@section('title','Questions')


@section('contant')
    <h1>Questions</h1>

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


@endsection
