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

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Option</th>
            <th scope="col">Ture or False</th>
            <th scope="col">Delete Option</th>

            </tr>
        </thead>
        <tbody>
            <?php $index = 0;?>
            @foreach ($question->options as $onption)
                        <tr>
                            <th scope="row">{{++$index}}</th>
                            <td>{{$onption->option}}</td>
                            <td>{{$onption->isTrue}}</td>
                            <td><form action="{{url('options/delete/'.$onption->id.'/'.$question->id)}}" method="POST" class="col-4">
            @csrf
            @method('delete')
                <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
            </form></td>
                        </tr>
                    @if ($onption->option === 'true')
                    <tr>
                        <th scope="row">2</th>
                        <td>False</td>
                        <td>False</td>
                        <td><form action="{{url('options/delete/'.$onption->id.'/'.$question->id)}}" method="POST" class="col-4">
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                    </td>
                    </tr>
                    @endif
                    @if ($onption->option === 'false')
                        <tr>
                        <th scope="row">2</th>
                        <td>True</td>
                        <td>False</td>
                        <td>
                            <form action="{{url('options/delete/'.$onption->id.'/'.$question->id)}}" method="POST" class="col-4">
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                        </td>
                    </tr>
                    @endif
            @endforeach
        </tbody>
</table>


@endsection

