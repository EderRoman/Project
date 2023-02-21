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

@section('login_contenido')
    <div class="row justify-content-around">
        <div class="col-3"><img src="{{ asset('img/logo.jpg') }}" alt="Imagen de registro"></div>
        
    </div>
    <div class="col-4"></div>
    <br>
   <div class="row justify-content-around">
        <div class="col-md-3">
        <form action="" method="post">
            {{-- CROSS SITE REQUEST FORGERY --}}
            @csrf
            <div class="form-group mb-3">
                <label for="email" class="mb-1">Email</label>
                <input type="text" class="form-control @error('email') border-danger @enderror" id="email" name="email" placeholder="ingresa tu email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password" class="mb-1">Password</label>
                <input type="password" class="form-control @error('password') border-danger @enderror" id="password" name="password" placeholder="Ingresa tu password">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Iniciar Sesion</button>
            </div>
        </form>
    </div>
   </div>
@endsection