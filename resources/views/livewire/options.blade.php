<div>
    {{-- Be like water. --}}

    <h2>Hi there</h2>
    <p>{{$num}}</p>

    <button wire:click="add">+</button>

    <input type="text" wire:model.lazy="name">
    {{$name}}

    {{$question_type}}
</div>
