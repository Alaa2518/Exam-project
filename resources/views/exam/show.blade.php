

{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Exam') }}
        </h2>
    </x-slot>
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Show Exam {{$exam->id}} Page</h2>
        <p>Exam Title: {{$exam->title}} </p>

      </div>
    </div>
    <section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">

        <table class="table table-bordered table-primary ">

                <thead>
                    <tr>
                    <th scope="col" class="col-1">#</th>
                    <th scope="col" class="col-9">Question</th>
                    <th scope="col" class="col-1">Type</th>
                    <th scope="col" class="col-4">Opetion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exam->questions as $question)
                            <tr>
                            <th scope="row" class="col-1"><a href="{{url('question/show/'.$question->id)}}">Show Q:{{$question->id}}</a></th>
                            <td class="col-9">{{$question->body}}</td>
                            <td class="col-1">{{$question->question_type}}</td>
                            <td class="col-4">
                                <a class="btn btn-outline-success  mb-2" style="width:100%;" href="{{url('question/edit/'.$question->id)}}" role="button" >Edit</a>
                                <form action="{{url('question/delete/'.$question->id)}}" method="POST" style="width:100%;" >
                                @csrf
                                @method('delete')
                                    <button style="width:100%;" class="btn btn-outline-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                            </td>
                            </tr>

                @endforeach
            </tbody>
            </table>

            <a class="btn btn-success " href="{{url('question/create/'.$exam->id)}}" role="button" >Add New Question</a>

        </div>

      </div>
    </section>

</x-app-layout>

