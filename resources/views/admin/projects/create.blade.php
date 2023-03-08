@extends('layouts.app')
@section('content')
<h1>Crea</h1>
<div class="my-container container">
    <div class="">
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
            {{-- title --}}
            <div class="row g-3 align-items-center my-3 ">
                <div class="col-auto">
                  <label for="title" class="col-form-label">Titolo</label>
                </div>
                <div class="col">
                  <input type="text" id="title" name="title" class="form-control" value="" aria-describedby="passwordHelpInline">
                </div>
              </div>
              {{-- descrzione --}}
              <div class="row g-3 align-items-center my-3">
                <div class="col-auto">
                  <label for="description" class="col-form-label">descrizione</label>
                </div>
                <div class="col">
                  <textarea type="text" id="description" name="description" class="form-control"aria-describedby="passwordHelpInline"></textarea>
                </div>
              </div>
              {{-- link git --}}
              <div class="row g-3 align-items-center my-3">
                <div class="col-auto">
                  <label for="proj_link" class="col-form-label">Link Github</label>
                </div>
                <div class="col">
                  <input type="text" id="proj_link" name="proj_link" class="form-control" value="" aria-describedby="passwordHelpInline">
                </div>
              </div>
              {{--img  --}}
              <div class="row g-3 align-items-center my-3">
                <div class="col-auto">
                  <label for="img" class="col-form-label">Url immagini</label>
                </div>
                <div class="col">
                  <input type="text" id="img" name='img' class="form-control" value="" aria-describedby="passwordHelpInline">
                </div>
              </div>
              {{-- collab --}}
              <div class="row g-3 align-items-center my-3">
                <div class="col-auto">
                  <label for="collab" class="col-form-label">Collaboratori</label>
                </div>
                <div class="col">
                  <input type="text" id="collab" name="collab" class="form-control" value="" aria-describedby="passwordHelpInline">
                </div>
              </div>

              <button class="btn btn-success">invia</button>
        </form>
        
    </div>
</div>
@endsection