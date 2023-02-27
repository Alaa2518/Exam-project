
<?php $index = 0 ;?>
{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Exam') }}
        </h2>
    </x-slot>

    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Exam {{$exam->id}} {{$exam->title}}</h2>

        <p>Solve the fowlling questions for This exam. You should don't move to the questions if you don't solve it. There are two types of questions true or false and MCQ. The MCQ if you finde more than one option correct chose it.</p>
      </div>
    </div>

    <section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        {{-- <div class="row"> --}}
            <form action="{{route('user.exam.result',$exam->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- <ul class="list-group"> --}}

                        @foreach ($exam->questions as $question)
                        <div class="row">
                            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                                <h3>Q {{++$index}}:</h3>
                                <p class="fst-italic">
                                {{$question->body}}
                                </p>
                                {{-- <ul>
                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                </ul> --}}
                                <table class="table table-hover table-success bg-success">
                                    <thead >
                                        <tr >
                                        <th scope="col" >Option</th>
                                        <th scope="col" >Choice </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($question->question_type==='trueOrFalse')

                                                @foreach ($question->options as $option)

                                                    <tr>

                                                        <td>False</td>
                                                        <td>
                                                            <input class="form-check-input" type="radio" name="{{$option->id}}" value="False" id="true_Option_{{$option->id}}"  >
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>True</td>
                                                        <td>
                                                        <input class="form-check-input" type="radio" name="{{$option->id}}" value="True" id="true_Option_{{$option->id}}">
                                                        </td>
                                                    </tr>
                                                    @break
                                                @endforeach
                                            @else
                                                @foreach($question->options as $option)
                                                    <tr>

                                                        <td>{{$option->option}}</td>
                                                        <td>
                                                            <input id="true_{{$option->id}}" name="{{$option->id}}" type="checkbox" value="True">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        @endif
                                    </tbody>
                                    </table>

                            </div>

                        </div>
                            {{-- <li class="list-group-item">(Q{{$question->id}}): {{$question->body}}


                            </li> --}}
                        @endforeach
                    {{-- </ul> --}}

                    <div class="text-center row">
                        <div class="col-12"><input class="btn btn-outline-success col-2 " type="submit" name="submit" id='submit' placeholder="Submit Exam" ></div>

                    </div>
                </form>


        {{-- </div> --}}

      </div>
    </section>

</x-app-layout>

