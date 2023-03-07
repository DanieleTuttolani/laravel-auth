@extends('layouts.app')

@section('content')

<div class="container">

    @forelse ($projects as $proj)
    <div class="col rounded p-4 bg-primary m-5 text-light">
        <ul>
            <li class="my-4">Nome:  {{$proj->title}} </li>
            <li class="my-4">Descrizione:  {{$proj->description}} </li>
            <li class="my-4">Link GitHub:  {{$proj->proj_link}} </li>
            <li class="my-4">Img-str:  {{$proj->img}} </li>
            <li class="my-4">Collaboratori:  {{$proj->collab}} </li>
        </ul>
    </div>
    
    @empty
    <h1>Al Momento non ho progetti da mostrare</h1>
    @endforelse
    
    @endsection
</div>