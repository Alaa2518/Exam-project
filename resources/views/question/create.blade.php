@extends('layout.master')


@section('title','create question')


@section('contant')



<h1>Create Question</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Exam Form -->




    <form action="{{url('question/store')}}" method="POST">
        @csrf

        <div class="form-group col-4">
        <label for="exam_id">Exam Number</label>
        <select class="form-control" id="exam_id" name="exam_id" id="exam_id)">
            <option value="{{$id}}">{{$id}}</option>

        </select>
        <label for="title">Question Type</label>
        <select class="form-control" id="question_type" name="question_type" id="question_type">
            <option value="trueOrFalse">True Or False Question</option>
            <option value="MCQ">MCQ</option>
        </select>
        </div>
        <div class="form-group col-1">
        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
        </div>
    </form>
@endsection


