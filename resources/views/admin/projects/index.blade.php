@extends('layouts.app')

@section('content')

<div class="container">

    @forelse ($projects as $proj)
    <a href="{{url('admin/projects/show' , $proj->id)}}">
        <div class="col rounded p-4 bg-primary m-5 text-light">
            <ul>
                <li class="my-4">Nome:  {{$proj->title}} </li>
                <li class="my-4">Descrizione:  {{$proj->description}} </li>
                <li class="my-4">Link GitHub:  {{$proj->proj_link}} </li>
                <li class="my-4">Img-str:  {{$proj->img}} </li>
                <li class="my-4">Collaboratori:  {{$proj->collab}} </li>
            </ul>
            <div class="text-center">
                <i class="fa-solid fa-hand-point-up fa-bounce fs-2"></i>
                <h2>Clicca per visualizzare</h2>
            </div>
        </div>
    </a>
    @empty
    <h1>Al Momento non ho progetti da mostrare</h1>
    @endforelse
    
    @endsection
</div>