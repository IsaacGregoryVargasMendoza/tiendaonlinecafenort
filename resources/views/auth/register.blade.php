@extends('layouts.guest')

@section('container')
<div class="container w-75 bg-color mt-2 rounded shadow">
<div class="row ">
<div class="col bg-white p-3 ps-5 pe-5 rounded-end">
<h2 class="fw-bold text-center py-3">Registrar Nuevo Usuario</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <x-jet-label for="name" class="form-label text-start" value="Nombre" />
        <x-jet-input id="name" class="form-control form-control-sm" type="text" name="name" :value="old('name')" required autofocus/>
    </div>

    <div class="mt-4">
        <x-jet-label for="email" class="form-label text-start" value="Correo electronico" />
        <x-jet-input id="email" class="form-control form-control-sm" type="email" name="email" :value="old('email')" required/>
    </div>

    <div class="mt-4">
        <x-jet-label for="password" class="form-label text-start" value="Contraseña" />
        <x-jet-input id="password" class="form-control form-control-sm" type="password" name="password" required/>
    </div>

    <div class="mt-4">
        <x-jet-label for="password_confirmation" class="form-label text-start" value="Confirmar Contraseña" />
        <x-jet-input id="password_confirmation" class="form-control form-control-sm" type="password" name="password_confirmation" required/>
    </div>

    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms"/>

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>
    @endif

    <div class="flex items-center justify-center mt-4">
        <x-jet-button class="ml-4 btn-primary">
            {{ __('Register') }}
        </x-jet-button>
    </div>
    </div>
    </div>
</div> 
</form>
@endsection
