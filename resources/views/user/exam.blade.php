

{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Exam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="lead">
                        <h3>Exam Number:{{$exam->id}}</h3>
                        <h3>Exam: {{$exam->title}}</h3>
                    </p>
                    <h3>Questions</h3>
                    <form action="{{route('user.exam.result',$exam->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        @foreach ($exam->questions as $question)
                            <li class="list-group-item">(Q{{$question->id}}): {{$question->body}}

                                <table class="table table-secondary">
                                    <thead class="thead-light">
                                        <tr>
                                        {{-- <th scope="col">#</th> --}}
                                        <th scope="col">Option</th>
                                        <th scope="col">choose correct answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($question->question_type==='trueOrFalse')
                                            {{-- chose if true of false --}}
                                                @foreach ($question->options as $option)

                                                    <tr>
                                                        {{-- <th scope="row">{{$option->id}}</th> --}}
                                                        <td>False</td>
                                                        <td>
                                                            <input class="form-check-input" type="radio" name="{{$option->id}}" value="False" id="true_Option_{{$option->id}}"  >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <th scope="row">{{$option->id}}</th> --}}
                                                        <td>True</td>
                                                        <td>
                                                        <input class="form-check-input" type="radio" name="{{$option->id}}" value="True" id="true_Option_{{$option->id}}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                @foreach($question->options as $option)
                                                    <tr>
                                                        {{-- <th scope="row">{{$option->id}}</th> --}}
                                                        <td>{{$option->option}}</td>
                                                        <td>
                                                            <input id="true_{{$option->id}}" name="{{$option->id}}" type="checkbox" value="True">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        @endif
                                    </tbody>
                                    </table>
                            </li>
                        @endforeach
                    </ul>

                    <div class="form-group col-1">
                    <input class="btn btn-primary" type="submit" name="submit" id='submit' placeholder="submit" >
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

