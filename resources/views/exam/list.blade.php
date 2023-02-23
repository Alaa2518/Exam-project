
{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Exams') }}
        </h2>
    </x-slot>

    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>All Exams</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>


    <section id="pricing" class="pricing">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            @foreach ($exams as $exam)
            <div class="col-lg-3 col-md-6 mb-3">
            <div class="box">
              <h3>Exam {{$exam->id}}</h3>
              <ul>
                <li>{{$exam['title']}}</li>

                <li><form action="{{url('exam/delete/'.$exam->id)}}" method="POST" >
                    @csrf
                    @method('delete')
                        <button class="btn btn-outline-danger col-4" role="button" type="sbmit" >Delete</button>
                    </form>
                </li>
              </ul>
              <div class="btn-wrap">
                <a class="btn-buy" href="{{url('exam/edit/'.$exam->id)}}" role="button" >Edit</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section>

</x-app-layout>
