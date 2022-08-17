@extends('layout.app')

@section('Title', 'Tu Muro')

@section('Contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-4/12 lg:w-6/12 px-5">
                <img src=" {{ asset('img/usuario.svg') }}" alt="imagen usuario" class="text-gray-700 text-2xl">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
