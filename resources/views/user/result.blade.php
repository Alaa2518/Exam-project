
<?php $index = 0 ;?>
{{-- new style --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Result Is') }}
        </h2>
    </x-slot>

    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Your Result Is</h2>

        <p>Solve the fowlling questions for This exam. You should don't move to the questions if you don't solve it. There are two types of questions true or false and MCQ. The MCQ if you finde more than one option correct chose it.</p>
      </div>
    </div>

    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col text-center">
            <p>Your Result Is</p>
            <span data-purecounter-start="0" data-purecounter-end="{{$result}}" data-purecounter-duration="0" class="purecounter">{{$result}}</span>
          </div>


        </div>

      </div>
    </section>


</x-app-layout>

