@extends('layout.master')


@section('title','create question')


@section('contant')



<h1>Create Question</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Exam Form -->




    <form action="{{url('question/store')}}" method="POST">
        @csrf
        <div class="form-group col-4">
        <label for="exam_id">Exam Number</label>
        <select class="form-control" id="exam_id" name="exam_id" id="exam_id)">
            <option value="{{$id}}">{{$id}}</option>

        </select>
        <label for="body">Question?</label>
        <input class="form-control" type="text" required name="body" id="body" placeholder="Enter Question" value="{{old('body')}}">
        <label for="title">Question Type</label>
        <select class="form-control" id="question_type" name="question_type" id="question_type">
            <option value=""></option>
            <option value="trueOrFalse">True Or False Question</option>
            <option value="MCQ">MCQ</option>
        </select>
        </div>
        <div  id="options" class="form-group col-4">

        </div>
        <div class="form-group col-1">
        <input class="btn btn-primary" type="submit" name="submit"  placeholder="submit" >
        </div>
    </form>
    {{-- live wire componate --}}


    {{-- @livewire('options',['question_type'=>$question_type])  --}}

    {{-- javeScript coode to add options form  --}}
    <script>
        function makeOptions(div,number){

            for (let i =1 ;i<=number;i++ ){
                let input =  document.createElement('input');
                input.id = i ;
                input.name = "option "+i;
                input.type = "text";
                input.placeholder = 'enter input ';
                input.classList.add('form-control');
                div.appendChild(input);

                let checkbox =  document.createElement('input');
                checkbox.id = "true_"+i ;
                checkbox.value = 'true';
                checkbox.name = "true_Option_"+i;
                checkbox.type = "checkbox";
                checkbox.classList.add('form-check-input');
                div.appendChild(checkbox);

                let label = document.createElement('label');
                let forAt =document.createAttribute('for');
                forAt.value = "true_"+i;
                label.setAttributeNode(forAt);
                label.innerHTML  = "check If true";
                div.appendChild(label);

            }
        }

        function MCQ (){
                let div = document.getElementById("options");// get div to add options
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
                textbox.min = 3;
                textbox.max = 10;
                textbox.classList.add("form-control");
                div.appendChild(textbox);
                textbox.addEventListener('keyup',function(){
                    if (textbox.value >= 3 &&textbox.value < 11){
                        // div.innerHTML = "";
                        makeOptions(div , textbox.value); // this fuction to make the options input filde
                    }
                    else {
                        label.innerHTML  = "Enter Number Of Options Between 3 to 10";
                    }

                });



        }
        function trueOrFalse(){
            let div = document.getElementById("options");
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
        let mcq =false ;
        let trueFalse =false;
        let option =document.getElementById('question_type');
        option.addEventListener('click',function(){
            if(option.value === "MCQ"&& !mcq){
                MCQ();
                mcq =true;
                trueFalse=false;
            }
            else if(option.value === "trueOrFalse"&& !trueFalse){
                trueOrFalse();
                trueFalse = true ;
                mcq=true ;
            }
            else {
                trueFalse =false ;
                mcq = false;
                let div = document.getElementById("options");// get div to add options
                div.innerHTML = "";
            }
            });
    </script>
@endsection


