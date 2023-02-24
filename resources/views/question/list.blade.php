


{{-- New Style for this page --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Questions') }}

        </h2>
    </x-slot>

    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>All Qusetions</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>


    <section id="pricing" class="pricing">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            @foreach ($questions as $question)
            <div class="col-lg-3 col-md-6 mb-3">
            <div class="box featured">
              <h3>Question {{$question->id}}</h3>
              <ul>
                <li>{{$question->exam['title']}} <a href="{{url('question/show/'.$question->id)}}">See More</a></li>

                <li>{{$question['question_type']}}</li>

                <li><form action="{{url('question/delete/'.$question->id)}}"  method="POST" >
                    @csrf
                    @method('delete')
                        <button class="btn btn-outline-danger col-4" role="button" type="sbmit" >Delete</button>
                    </form>
                </li>
              </ul>
              <div class="btn-wrap">
                <a class="btn-buy" href="{{url('question/edit/'.$question->id)}}" role="button" >Edit</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section>




</x-app-layout>


