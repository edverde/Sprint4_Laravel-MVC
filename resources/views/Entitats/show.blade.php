@extends('layouts.plantilla')

@section('title', 'Entitat '. $entitats->name)

@section('content')

<div class="text-center p-5   ">   
</div>
<h2 class="text-teal-800 p-5 pt-10 mb-10 text-center uppercase text-3xl font-bold">{{$entitats->nom_club}}</h2> 
<div class="flex justify-between w-1/2 m-auto p-5 mt-20">
    <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('entitats.index')}}">Tornar a entitats</a><br>
    <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('entitats.edit', $entitats)}}">Editar entitat</a>
</div>

@endsection
    
