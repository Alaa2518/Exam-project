@extends('layout.master')


@section('title','Show Exams')


@section('contant')
    <h1>All Exams</h1>


 <div class="container">
    @foreach ($exams as $exam)



        <div class="jumbotron mt-3">
        <h1>Exam Number {{$exam->id}}</h1>
        <p class="lead">{{$exam['title']}}
            <a href="{{url('exam/show/'.$exam->id)}}">See More</a>
        </p>
        <div class="row float-right">
        <a class="btn btn-primary col-4" href="{{url('exam/edit/'.$exam->id)}}" role="button" >Edit</a>
            <form action="{{url('exam/delete/'.$exam->id)}}" method="POST" class="col-4">
            @csrf
            @method('delete')
                <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
            </form>
        </div>
        </div>

    @endforeach
</div>


@endsection
