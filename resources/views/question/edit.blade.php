


{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>

<div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Update Question</h2>
        <p>Add Header of Question and its options if of type MCQ enter number of options between 3 to 10 if this option true cklick on the check else don't cklick it if type of Question true or false CKlick on the true or false.If you don't change type of question if the old type of MCQ you can't change the number of them.</p>
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

        <form action="{{url('question/update/'.$question->id)}}" method="POST" class="php-email-form">
        @csrf
        @method('PUT')
        <input type="hidden" id="exam_id" name="exam_id" value="{{$question->exam_id}}">
        <div class="row">
            <div class="form-group mt-3">
                <textarea class="form-control" name="body" id="body" rows="5" placeholder="Enter Question" required="">{{$question->body}}</textarea>
            </div>
            <div class="form-group mt-3">

                <select class="form-control" id="question_type" name="question_type" id="question_type" >
                        <option value="{{\App\Enums\QuestionTypeEnum::TRUE_OR_FALSE}}" {{ $question->question_type === \App\Enums\QuestionTypeEnum::TRUE_OR_FALSE ? "selected" : "" }} >True Or False Question</option>
                        <option value="{{\App\Enums\QuestionTypeEnum::MCQ}}"  {{ $question->question_type === \App\Enums\QuestionTypeEnum::MCQ ? "selected" : "" }} >MCQ</option>

                </select>
            </div>
                    {{-- add dynamic part to update  --}}
                    <div class="form-group mt-3 " id='old_opions_div'>
                        @if($question->question_type=== \App\Enums\QuestionTypeEnum::TRUE_OR_FALSE)
                        {{-- chose if true of false --}}
                            @foreach ($question->options as $option)


                                    <label class="form-label" for="true"><input  type="radio"  type="radio" name="trueOrFalse" value="true" id="true" @if ($option->option === 'true') checked @endif>
                                        True</label>

                                    <label class="form-label" for="false"><input  type="radio" name="trueOrFalse" value="false" id="false" @if ($option->option === 'false') checked @endif >
                                            False</label>

                            @endforeach
                        @else

                        <table class="table table-Success table-borderless table-hover ">
                            <thead >
                            <tr class="row">
                            <th scope="col" class="col-11">Option</th>
                            <th scope="col" class="col-1">True</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1;?>
                            @foreach ($question->options as $option)
                                        <tr class="row ">
                                            {{-- <th scope="row">{{$index}}</th> --}}
                                            <td class="col-11 ">
                                                <input  id={{$index}} name="option {{$index}}" type="text" required  class="form-control" value="{{$option->option}}">
                                            </td>
                                            <td class="col-1 ">
                                                <input  id="true_{{$index}}" name="true_Option_{{$index++}}" type="checkbox" value="true" @if($option->isTrue === 'True') checked @endif>
                                            </td>
                                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                        @endif
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
{{-- javascript to add new options  --}}
    <script src="{{asset('import/assets/js/editOptionsform.js')}}"></script>
</x-app-layout>
