@extends('layout.master')


@section('title','Show Question')


@section('contant')


    <h1 class="mt-5">QuestionDetails</h1>
    <p class="lead">
        <h4>Exam Title:{{$question->exam->title}}</h4>
        <h4>Question Number:{{$question->id}}</h4>
        <h4>Question type:{{$question->question_type}}</h4>
        <p><h6>Question?</h6>
            {{$question->body}}
        </p>
    </p>

@endsection

