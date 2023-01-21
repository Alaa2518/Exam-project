@extends('layout.master')


@section('title','Edit Question')


@section('contant')
    <h1>Edit Question</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('question/update/'.$question->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-4">
        <label for="exam_id">Exam Number</label>
        <select class="form-control" id="exam_id" name="exam_id" id="exam_id)">
            <option value="{{$question->exam_id}}">{{$question->exam_id}}</option>
        </select>
        <label for="body">Question?</label>
        <input class="form-control" type="text" required name="body" id="body" placeholder="Enter Question" value="{{$question->body}}">
        <label for="title">Question Type</label>
        <select class="form-control" id="question_type" name="question_type" id="question_type" >
            @if($question->question_type==='trueOrFalse')
                <option value="trueOrFalse" selected>True Or False Question</option>
                <option value="MCQ" >MCQ</option>
            @else
                <option value="trueOrFalse" >True Or False Question</option>
                <option value="MCQ" selected>MCQ</option>
            @endif
        </select>


        </div>
        {{-- add dynamic part to update  --}}

        <div class="col-12" id='old_opions_div'>
            @if($question->question_type==='trueOrFalse')
            {{-- chose if true of false --}}
                @foreach ($question->options as $option)
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="option" id="true" @if ($option->option === 'true') checked @endif>
                    <label class="form-check-label" for="true">
                        True
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="option" id="false" @if ($option->option === 'false') checked @endif >
                    <label class="form-check-label" for="false">
                        False
                    </label>
                    </div>
                @endforeach
            @else
                {{--   else the question of type MCQ --}}
            <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Option</th>
            <th scope="col">Ture or False</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1;?>
            @foreach ($question->options as $option)
                        <tr>
                            <th scope="row">{{$index}}</th>
                            <td>
                                <input id={{$index}} name="option {{$index}}" type="text" required  class="form-control" value="{{$option->option}}">
                            </td>
                            <td>
                                <input id="true_{{$index}}" name="true_Option_{{++$index}}" type="checkbox" value="true" @if($option->isTrue === 'True') checked @endif>

                            </td>
                        </tr>
            @endforeach
        </tbody>
        </table>
            @endif

        </div>
        <div class="col-12 d-none" id="options">

        </div>
        <div class="form-group col-1">
        <input class="btn btn-primary" type="submit" name="submit" id='submit' placeholder="submit" >
        </div>
    </form>
{{-- javascript to add new options  --}}
    <script>
        const oldDiv = document.getElementById('old_opions_div');
        const oldQuestionType = document.getElementById('question_type').value;
        let isOldType = true ;

        // functions start
        function makeOptions(div,number){

            const tabel = document.createElement('table');
            tabel.classList.add('table');
            tabel.classList.add('table-striped');
            tabel.classList.add('table-bordered');

            div.appendChild(tabel);
            const thead = document.createElement('thead');
            thead.classList.add('thead-dark')
            tabel.appendChild(thead);
            const tr = document.createElement('tr');
            thead.appendChild(tr);
            const th1 = document.createElement('th');
            th1.innerHTML = '#';
            th1.scope = 'col';
            const th2 = document.createElement('th');
            th2.innerHTML = 'Option';
            th2.scope = 'col';
            const th3 = document.createElement('th');
            th3.innerHTML = 'If True';
            th3.scope = 'col';
            tr.appendChild(th1);
            tr.appendChild(th2);
            tr.appendChild(th3);
            const tbody = document.createElement('tbody');
            tabel.appendChild(tbody);
            for (let i =1 ;i<=number;i++ ){
                let tr_i =document.createElement('tr');
                tbody.appendChild(tr_i);

                let th_i = document.createElement('th');
                th_i.innerHTML = i;
                th_i.scope = 'row';
                tr_i.appendChild(th_i);

                let td1 = document.createElement('td');
                tr_i.appendChild(td1);

                let input =  document.createElement('input');
                input.id = i ;
                input.name = "option "+i;
                input.type = "text";
                input.required = true;
                input.placeholder = 'enter input ';
                input.classList.add('form-control');
                td1.appendChild(input);

                let td2 = document.createElement('td');
                tr_i.appendChild(td2);
                // checkbox if this option true or false
                let checkbox =  document.createElement('input');
                checkbox.id = "true_"+i ;
                checkbox.value = 'true';
                checkbox.name = "true_Option_"+i;
                checkbox.type = "checkbox";
                // checkbox.classList.add('form-check-input');
                td2.appendChild(checkbox);

            }
        }

        function MCQ (){
                let div = document.getElementById("options");// get div to add options
                div.classList.remove('d-none');
                div.innerHTML = "";
                let label = document.createElement("label"); // helep you to add option
                let forAt =document.createAttribute('for');
                forAt.value = 'option' ;
                label.setAttributeNode(forAt);
                label.innerHTML  = "Enter Number Of Options";
                div.appendChild(label);

                // create text box ;
                let textbox = document.createElement('input');
                textbox.id = 'optionsNumber';
                textbox.name = 'MCQ_number';
                textbox.type = 'number';
                textbox.required = true;
                textbox.min = 3;
                textbox.max = 10;
                textbox.classList.add("form-control");
                div.appendChild(textbox);
                textbox.addEventListener('keyup',function(){
                    if (textbox.value >= 3 &&textbox.value < 11){

                        makeOptions(div , textbox.value); // this fuction to make the options input filde
                        textbox.type = 'hidden';
                        label.remove();
                    }
                    else {
                        label.innerHTML  = "Enter Number Of Options Between 3 to 10";
                    }
                });
        }
        function trueOrFalse(){
            let div = document.getElementById("options");
            div.classList.remove('d-none');
            div.innerHTML = "";
            for (let i =1 ;i<=2;i++ ){
                let input =  document.createElement('input');
                let label = document.createElement('label');
                let forAt =document.createAttribute('for');
                input.name = "trueOrFalse";
                input.type = "radio";
                input.classList.add('ustom-control-input');
                if (i==1){
                    input.id = "true" ;
                    input.value = 'true';
                    forAt.value = "true";
                    label.innerHTML  = "True";
                }
                else{
                    input.id = "false" ;
                    input.value = 'false';

                    forAt.value = "false";
                    label.innerHTML  = "False";
                }

                label.setAttributeNode(forAt);
                div.appendChild(input);
                div.appendChild(label);

            }
        }


        // functions  end

        document.getElementById('question_type').addEventListener('change',function(){
                let newQuestionType = document.getElementById('question_type').value;
                if( oldQuestionType!==newQuestionType){
                    oldDiv.classList.add('d-none');
                    isOldType = false ;
                    if(newQuestionType === 'trueOrFalse'){
                        trueOrFalse();
                    }else {
                        MCQ();
                    }
                }else {
                    oldDiv.classList.remove('d-none');
                    isOldType = true ;
                }

        });

        document.getElementById('submit').addEventListener('submit',function(){
            if (!isOldType){
                oldQuestionType.innerHTML = "";
            }
        });
    </script>

@endsection


