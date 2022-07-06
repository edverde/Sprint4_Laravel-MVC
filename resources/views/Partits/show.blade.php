@extends('layouts.plantilla')

@section('title', 'Partit'. $partits)

@section('content')

<div class="text-center p-5"></div>
<h2 class="text-teal-800 p-5 pt-10 mb-10 text-center uppercase text-3xl font-bold">{{$partits->equip_local}} VS {{$partits->equip_visitant}}</h2>
<div class="flex justify-between w-1/2 m-auto p-5 mt-20">
    <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('partits.index')}}">Tornar a partits</a><br>
    <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('partits.edit', $partits)}}">Editar partit</a>
</div>

@endsection