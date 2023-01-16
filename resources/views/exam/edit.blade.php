@extends('layout.master')


@section('title','Edit Exam')


@section('contant')
    <h1>Edit Exam</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('exam/update/'.$exam->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-4">
        <label for="title">Exam Title</label>
        <input class="form-control" type="text" required name="title" id="title" placeholder="Enter Title" value="{{$exam['title']}}">
        </div>
        <div class="form-group col-1">
        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
        </div>
    </form>

@endsection


