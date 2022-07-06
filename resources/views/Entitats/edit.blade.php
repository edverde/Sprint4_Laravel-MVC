@extends('layouts.plantilla')

@section('title', 'Edició d\'entitats')

@section('content')

<h2 class="text-teal-800 p-5 text-center uppercase text-3xl font-bold">Edició de l'entitat: {{$entitats->nom_club}}</h2>

<form action="{{route('entitats.update', $entitats)}}" method="POST" class="max-w-3xl p-8 m-auto">
    {{-- agregar token --}}
    @csrf
    {{-- directiva para poder pasar el put --}}
    @method('put')

    {{-- <label>Entitat:<br>
        @error('entitat')
        <small style="color:red">*{{$message}}</small><br>
        @enderror
    </label>
    <input type="text" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="entitat" value="{{old('entitat', $entitats->entitat_id) }}">  --}}

    <label>Nom de l'entitat:<br>
        @error('nom')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
        <input type="text" name="nom" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name', $entitats->nom_club)}}">
    <br>
    
    <button type="submit" class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800">Editar Entitat</button>
</form>
@endsection


