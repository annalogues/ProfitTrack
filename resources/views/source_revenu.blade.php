@extends('layout.base')


@section('title', 'Source de Revenu')
    

@section('content')
    
<div class="row mt-3">
    
    <div class="col-md-4 mb-5 my-5">
        <form>
            <div class="my-5 ">
                <label class="form-label text-white">Source de Revenu</label>
                <input type="text" class="form-control" placeholder="Nom Source de Revenu......." >
                <div class="form-tex text-warning">Entrer ou definisser le nom qui correspond le mieux à votre source de revenu.</div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%">Ajouter</button>
        </form>
    </div>
        <div class="col"></div>
        <div class="col-md-4 mb-3 ">
            <div class="list-group">
                <hr class="bg-transparent">
                <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Compte Streaming</h5>
                  </div>
                </a>
                <hr class="bg-transparent">
                <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Compte Streaming</h5>
                  </div>
                </a>
                <hr class="bg-transparent">
                <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Compte Streaming</h5>
                  </div>
                </a>
                <hr class="bg-transparent">
                <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Compte Streaming</h5>
                  </div>
                </a>
                <hr class="bg-transparent">
                
              </div>
    
        </div>
  </div>

@endsection