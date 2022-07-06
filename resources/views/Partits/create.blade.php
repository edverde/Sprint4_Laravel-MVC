@extends('layouts.plantilla')

@section('title', 'Creacio de partits')

@section('content')

<div class="text-center p-5  text-teal-800 ">
    <h1 class="uppercase text-4xl font-bold">Crear partit</h1>
    <p>Crea el teu partit</p>
</div>
<form action="{{route('partits.create_partits')}}" method="POST" class="max-w-3xl p-8 m-auto">
    {{-- agregar token --}}
    @csrf

    <label>Equip local:<br>
        @error('equip_local')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
    <select name="equip_local" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{--old('equip_local')--}}">
        @foreach ($equips as $equip)
        <option value="{{$equip->id}}">{{$equip->name}}</option>
        @endforeach    
    </select>

    <label>Equip visitant:<br>
        @error('equip_visitant')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
    <select name="equip_visitant" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{--old('equip_visitant')--}}">
        @foreach ($equips as $equip)
        <option value="{{$equip->id}}">{{$equip->name}}</option>
        @endforeach    
    </select>

    <label>Data del partit:<br>
        @error('data_partit')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
    <input type="date" name="data_partit" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('data')}}">
    
    <label>Hora del partit:<br>
        @error('hora_partit')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
    <input type="time" name="hora_partit" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('hora')}}">
    
    <button type="submit" class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" >Crear Partit</button>    
</form>
@endsection

