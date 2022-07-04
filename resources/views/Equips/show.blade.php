@extends('layouts.plantilla')

@section('title', 'Equip '. $equips->name)

@section('content')
<div class="text-center p-5   ">
    {{-- <h1 class="uppercase text-4xl font-bold">Has creat l'equip: </h1> --}}
</div>
<div class="p-5 bg-teal-500  justify-content-center flex-column w-1/2 m-auto ">
    <h2 class="text-sky-100 p-5 text-center uppercase text-3xl font-bold">{{$equips->name}}</h2>
    
   
</div>
<div class="flex justify-between w-1/2 m-auto p-5">
        <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('equips.index')}}">Tornar a equips</a><br>
        <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('equips.edit', $equips)}}">Editar equip</a>
    </div>

@endsection
    
