@extends('layout.master')


@section('title','Show Question')


@section('contant')


    <h1 class="mt-5">QuestionDetails</h1>
    <p class="lead">
        <h3>Question Number:{{$question->id}}</h3>
        <h3>Exam Title:{{$question->exam->title}}</h3>
        <h3>Question type:{{$question->question_type}}</h3>

    </p>

@endsection

