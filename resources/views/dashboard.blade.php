@extends('layout.base')

@section('title', 'ProfiTrack Home')



@section('content')
<div class="row mt-3">
  <div class="col-md-8 mb-3 ">
    <div class="card bg-transparent border-0">
      <div class="card-body">
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action text-white" style="background-color: #F26619;">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Pertes</h5>
          <small>Consulter</small>
        </div>
        <p class="mb-1">0 FCFA</p>
      </a>
      <hr class="bg-transparent">
      <a href="#" class="list-group-item list-group-item-action text-white" style="background-color: #24D26D;">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Bénéfices</h5>
          <small>Consulter</small>
        </div>
        <p class="mb-1">0 FCFA</p>
      </a>
    </div>
  </div>
</div>
@endsection
