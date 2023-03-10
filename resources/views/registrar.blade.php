@extends('layout.vistas')

@section('registrar')
    <div class="row justify-content-around">
        <div class="col-4"><img src="{{ asset('img/logo.jpg') }}" alt="Imagen de registro"></div>
        
    </div>
   <div class="row justify-content-around">
        <div class="col-md-4">
        <form action=" " method="post">
            {{-- CROSS SITE REQUEST FORGERY --}}
            @csrf
            <div class="form-group mb-2">
                <label for="name" class="mb-1">Nombre</label>
                <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name" placeholder="ingresa tu Nombre" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="username" class="mb-1">Nombre de usuario</label>
                <input type="text" class="form-control @error('username') border-danger @enderror" id="username" name="username" placeholder="ingresa tu Nombre de usuario" value="{{ old('username') }}">
                @error('username')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group mb-2">
                <label for="email" class="mb-1">Email</label>
                <input type="text" class="form-control @error('email') border-danger @enderror" id="email" name="email" placeholder="ingresa tu email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="password" class="mb-1">Password</label>
                <input type="password" class="form-control @error('password') border-danger @enderror" id="password" name="password" placeholder="Ingresa tu password">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="password_confirmation" class="mb-1">Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repite password">
            </div>

            <div class="d-grid gap-1">
                <button type="submit" class="btn btn-success">Crear Cuenta</button>
            </div>
        </form>
        </div>
   </div>
@endsection

@section('footer')
    <div>
        <article class="text-center">Este es el contenido del registrar</article>
    </div>
@endsection