@extends('layouts.plantilla')

@section('title', 'Equips')

@section('content')
<nav>
    <a href={{route('equips.create')}}>Crear curso</a>
</nav>
<h1>Estoy en la pafina principal de equips </h1>
<ul>
    <hr>
    @foreach ($equips as $equip)
    <li>{{$equip->id}}</li>    
    <li><a href="{{route('equips.show' , $equip->id)}}">{{$equip->name}}</a></li> 
    <hr>
    @endforeach 
</ul>
{{$equip->link}}
@endsection