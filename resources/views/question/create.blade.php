
{{-- new stryle  --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Question') }}
        </h2>
    </x-slot>

<div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Create New Question</h2>
        <p>Add Header of Question and its options if of type MCQ enter number of options between 3 to 10 if this option true cklick on the check else don't cklick it if type of Question true or false CKlick on the true or false.</p>
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

        <div class="row mt-5 text-center">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-question"></i>

                <h4><label for="body">Question</label> </h4>
                <p>Enter your question</p>
              </div>

              <div class="email">
                <i class="bi bi-type"></i>
                <h4><label for="question_type">Question Type</label> </h4>
                <p>chose Question type</p>
              </div>


            </div>


          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="{{url('question/store')}}" method="POST" class="php-email-form">
        @csrf
        <input type="hidden" id="exam_id" name="exam_id" value="{{$id}}">
        <div class="row">
            <div class="form-group mt-3">

                <textarea class="form-control" name="body" id="body" rows="5" placeholder="Enter Question" required="">{{old('body')}}</textarea>

            </div>
            <div class="form-group mt-3">

                <select class="form-control" id="question_type" name="question_type" id="question_type">
                    <option value="">Chose Qusetion</option>
                    <option value="trueOrFalse">True Or False Question</option>
                    <option value="MCQ">MCQ</option>
                </select>
            </div>
            <div class="form-group mt-3" id="options">

            </div>


                <div class="text-center">
                <button type="submit">Submit Question</button>

                </div>
        </div>

    </form>

        </div>

      </div>
    </div>
</section>

    {{-- javeScript coode to add options form  --}}
    <script src="{{asset('import/assets/js/createOptionsform.js')}}"></script>
</x-app-layout>


