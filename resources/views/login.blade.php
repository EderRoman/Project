@extends('layout.vistas')

@section('login')
<div class="container text-center">
  <div class="row justify-content-start">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      Two of two columns
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      Three of two columns
    </div>
    <div class="col-4">
      Four of two columns
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-4">
      Five of two columns
    </div>
    <div class="col-4">
      Six of two columns
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-4">
      Seven of two columns
    </div>
    <div class="col-4">
      Eight of two columns
    </div>
  </div>
  <div class="row justify-content-between">
    <div class="col-4">
      Nine of two columns
    </div>
    <div class="col-4">
      Ten of two columns
    </div>
  </div>
  <div class="row justify-content-evenly">
    <div class="col-4">
      Eleven of two columns
    </div>
    <div class="col-4">
      Twelve of two columns
    </div>
  </div>
</div>
@endsection

@section('footer')
    <div>
        <article class="text-center">Este es el contenido del login</article>
    </div>
@endsection