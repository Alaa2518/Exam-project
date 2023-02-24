

{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Question') }}
        </h2>
    </x-slot>
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Exam :{{$question->exam->title}}</h2>
        <p>Q {{$question->id}}: {{$question->body}}?</p>
        <p>Question type:{{$question->question_type}}</p>

      </div>
    </div>

        <section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">

        <table class="table table-bordered table-primary ">
                <thead>
                    <tr>
                    <th scope="col" class="col-1">#</th>
                    <th scope="col" class="col-8">Option</th>
                    <th scope="col" class="col-1">Ture or False</th>
                    <th scope="col" class="col-5">Delete Option</th>


                    </tr>
                </thead>
                <tbody>

                    <?php $index = 0;?>
                    @foreach ($question->options as $onption)

                            <tr>
                            <th scope="row" class="col-1">{{++$index}}</th>
                            <td class="col-8">{{$onption->option}}</td>
                            <td class="col-1">{{$onption->isTrue}}</td>
                            <td class="col-5">

                                <form action="{{url('options/delete/'.$onption->id.'/'.$question->id)}}" method="POST" style="width:100%;" >
                                @csrf
                                @method('delete')
                                    <button style="width:100%;" class="btn btn-outline-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                            </td>
                            </tr>

                    @if ($onption->option === 'true')
                        <tr>
                        <th scope="row" class="col-1">2</th>
                        <td class="col-8">False</td>
                        <td class="col-1">False</td>
                        <td class="col-5">
                            <form action="{{url('options/delete/'.$onption->id.'/'.$question->id)}}" method="POST" style="width:100%;" >
                                @csrf
                                @method('delete')
                                    <button style="width:100%;" class="btn btn-outline-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                        </td>
                    </tr>
                    @endif
                    @if ($onption->option === 'false')
                        <tr>
                        <th scope="row" class="col-1">2</th>
                        <td class="col-6">True</td>
                        <td class="col-3">False</td>
                        <td class="col-5">
                            <form action="{{url('options/delete/'.$onption->id.'/'.$question->id)}}" method="POST" style="width:100%;" >
                                @csrf
                                @method('delete')
                                    <button style="width:100%;" class="btn btn-outline-danger " role="button" type="sbmit" >Delete</button>
                                </form>
                        </td>
                    </tr>
                @endif

                @endforeach
            </tbody>
            </table>

        </div>

      </div>
    </section>

</x-app-layout>





