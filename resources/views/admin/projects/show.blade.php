@extends('layouts.app')


@section('content')
<div class="my-bgc vh-100 p-5">
    <div class="mx-auto  bg-secondary text-light p-3 rounded" style="max-width: 700px">
        <div class="col">
            <p>
                <strong>Nome: {{$project->title}}</strong>
            </p>
            <p>
                <strong>descrizione: {{$project->description}}</strong>
            </p>
            <p>
                <strong>Link github: {{$project->proj_link}}</strong>
            </p>
            <p>
                <strong>Collaboratori: {{$project->Collaboratori}}</strong>
            </p>
        </div>
        <div class="col">
            <img  class="img-fluid rounded" src="http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcQkrjYxSfSHeCEA7hkPy8e2JphDsfFHZVKqx-3t37E4XKr-AT7DML8IwtwY0TnZsUcQ" alt="">
        </div>
    </div>
</div>
    {{-- todo aggiungi i bottoni per aggiornare eliminare --}}
@endsection
