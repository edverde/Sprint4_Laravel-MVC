@extends('layouts.plantilla')

@section('title', 'Creacio d\'equips')

@section('content')

<div class="text-center p-5  text-teal-800 ">
    <h1 class="uppercase text-4xl font-bold">Crear equip</h1>
    <p>Crea el teu equip</p>
</div>
    
    
    

    <form action="{{route('equips.create_equips')}}" method="POST" class="max-w-3xl p-8 m-auto">
        {{-- agregar token --}}
        @csrf
        <label>Entitat:<br>
            @error('entitat')            
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror
        </label>
        <input type="text" name="entitat" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('entitat')}}">
        
        
        <label>Nom de l'equip:<br>
            @error('name')        
            <small style="color:red">*{{$message}}</small>
            <br>
            @enderror</label>
            <input type="text" name="name" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name')}}">
        
    <button type="submit" class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" >Crear Equip</button>
        {{-- <button type="submit">Crear equip</button> --}}

    </form>
@endsection


