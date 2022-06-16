@extends('layouts.plantilla')

@section('title', 'Edició d\'equips')

@section('content')

    <h1>Estoy en la pagina de edición de equipos </h1>
    
    
    

    <form action="{{route('equips.update', $equips)}}" method="POST">
        {{-- agregar token --}}
        @csrf
        {{-- directiva para poder pasar el put --}}
        @method('put')
        
        <label>
            club:<br>
            <input type="text" name="entitat" value="{{$equips->entitat_id}}"><br>
        </label>
        <label>
            Nom del equip:<br>
            <input type="text" name="name" value="{{$equips->name}}">
        </label><br>
        <button type="submit">editar equip</button>

    </form>
@endsection


