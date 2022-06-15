@extends('layouts.plantilla')

@section('title', 'Equip '. $equips->name)

@section('content')

<h1>Bienvenido al equipo: {{$equips->name}}</h1>
<a href="{{route('equips.index')}}">Volver a cursos</a>

@endsection
    
