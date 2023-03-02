


{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>


    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Edit Exam</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section id="contact" class="contact">


      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-clipboard-check"></i>
                <h4>Exam Title:</h4>
                <p>Enter Exam Name.</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{url('exam/update/'.$exam->id)}}" method="POST"  class="php-email-form">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="form-group mt-3">

                    <textarea class="form-control" name="title" rows="5" placeholder="Title" required="">{{$exam['title']}}</textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your exam title has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center">
                <button type="submit">Add Exam </button>

            </div>
            </form>

          </div>

        </div>

      </div>
    </section>

</x-app-layout>
