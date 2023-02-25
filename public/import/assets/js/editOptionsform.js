let oldDiv = document.getElementById('old_opions_div');
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
                    document.getElementById("options").innerHTML ="";
                }
        });
        document.getElementById('submit').addEventListener('submit',function(){
            if (!isOldType){
                console.log(oldDiv);
                oldDiv.innerHTML = "";
            }
        });
