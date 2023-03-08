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
        <div class="btn-wrapper p-4">
            {{-- go back --}}
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary mx-2">indietro</a>
            {{-- edit --}}
            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-secondary">Modifica</a>
            {{-- delete --}}
        </div>
    </div>
</div>
    {{-- todo aggiungi i bottoni per aggiornare eliminare e indietro--}}


@endsection
