<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Options extends Component
{

    public $num = 1;
    public $name;
    public $question_type;
    public function render()
    {
        return view('livewire.options');
    }
    public function add(){
        ++$this->num  ;
    }
}
