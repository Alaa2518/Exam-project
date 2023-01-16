@extends('layout.master')


@section('title','Show Exam')


@section('contant')


    <h1 class="mt-5">Exam Details</h1>
    <p class="lead">
        <h3>Exam Number:{{$exam->id}}</h3>
        <h3>Exam Title:{{$exam->title}}</h3>

    </p>

@endsection

