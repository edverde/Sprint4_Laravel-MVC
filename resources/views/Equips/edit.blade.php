@extends('layouts.plantilla')

@section('title', 'Edició d\'equips')

@section('content')

    
    {{-- <div class="p-5 bg-teal-500  justify-content-center flex-column w-1/2 m-auto "> --}}
        <h2 class="text-teal-800 p-5 text-center uppercase text-3xl font-bold">Edició de l'equip: {{$equips->name}}</h2>
        
       
    {{-- </div> --}}
    
    

    <form action="{{route('equips.update', $equips)}}" method="POST" class="max-w-3xl p-8 m-auto">
        {{-- agregar token --}}
        @csrf
        {{-- directiva para poder pasar el put --}}
        @method('put')
        <label>Entitat:<br>
        </label>
        <input type="text" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="entitat" value="{{old('entitat', $equips->entitat_id) }}">

        @error('entitat')
        <small style="color:red">*{{$message}}</small><br>
        @enderror

        
            {{-- <input type="text" name="entitat" value="{{old('entitat', $equips->entitat_id) }}"><br> --}}
            {{-- @error('entitat')
            <input type="text" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="entitat" value="{{old('entitat', $equips->entitat_id) }}">
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror --}}
        
        <label>Nom del equip:<br></label>
            <input type="text" name="name" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name', $equips->name)}}">

            @error('name')            
            <small style="color:red">*{{$message}}</small>
            <br>
            @enderror
        <br>
        <button type="submit" class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800">Editar Equip</button>

    </form>
@endsection


