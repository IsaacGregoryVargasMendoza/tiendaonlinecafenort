@extends('layouts.guest')

@section('container')
<div class="container w-75 bg-color mt-5 rounded shadow">
    <div class="row ">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
            
        </div>
        <div class="col bg-white p-3 ps-5 pe-5 rounded-end">
            <div class="text-end">
                <img class="devesoft" src="/imagenes/devesoft.png" alt="logo">
            </div>

            <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mt-4">
                    <x-jet-label for="email" class="form-label" value="Correo Electronico" />
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" class="form-label" value="Contraseña" />
                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" name="connected" class="form-check-input">
                    <label for="connected" class="form-check-label" name="connected">Mantenerme conectado</label>
                </div>

                <div class="my-3">
                    <!-- <span>No tienes cuenta? <a href="{{ route('register') }}">Registrate</a></span><br> -->
                    <span>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                Recuperar contraseña
                            </a>
                        @endif
                    </span>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection