@extends('layout.master')


@section('title','Edit Question')


@section('contant')
    <h1>Edit Question</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('question/update/'.$question->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-4">
        <label for="exam_id">Exam Number</label>
        <select class="form-control" id="exam_id" name="exam_id" id="exam_id)">
            <option value="{{$question->exam_id}}">{{$question->exam_id}}</option>
        </select>
        <label for="body">Question?</label>
        <input class="form-control" type="text" required name="body" id="body" placeholder="Enter Question" value="{{$question->body}}">
        <label for="title">Question Type</label>
        <select class="form-control" id="question_type" name="question_type" id="question_type" >
            @if($question->question_type==='trueOrFalse')
                <option value="trueOrFalse" selected>True Or False Question</option>
                <option value="MCQ" >MCQ</option>
            @else
                <option value="trueOrFalse" >True Or False Question</option>
                <option value="MCQ" selected>MCQ</option>
            @endif

        </select>
        </div>

        <div class="form-group col-1">
        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
        </div>
    </form>

@endsection


