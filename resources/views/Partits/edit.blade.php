@extends('layouts.plantilla')

@section('title', 'Edició de partits')

@section('content')
   
<h2 class="text-teal-800 p-5 text-center uppercase text-3xl font-bold">Edició de partits: <br>{{$partits->equip_local}} VS {{$partits->equip_visitant}}</h2>
<form action="{{route('partits.update', $partits)}}" method="POST" class="max-w-3xl p-8 m-auto">
    {{-- agregar token --}}
    @csrf
    {{-- directiva para poder pasar el put --}}
    @method('put')

    <label>Equip local:<br>
        @error('equip_local')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
    <select name="equip_local" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        <option>{{$partits->equip_local}}</option>
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
    <select name="equip_visitant" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">  <option>{{$partits->equip_visitant}}</option>
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
    <input type="date" name="data_partit" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('date', $partits->data_partit)}}">
    
    <label>Hora del partit:<br>
        @error('hora_partit')            
        <small style="color:red">*{{$message}}</small>
        <br>
        @enderror
    </label>
    <input type="time" name="hora_partit" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('time', $partits->hora_partit)}}"><br>
    
    <button type="submit" class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800">Editar partit</button>
</form>

@endsection

