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
            <input type="text" name="entitat" value="{{old('entitat', $equips->entitat_id)}}"><br>
            @error('entitat')
            
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror
        </label>
        <label>
            Nom del equip:<br>
            <input type="text" name="name" value="{{old('name', $equips->name)}}">
            <br>
            @error('name')
            
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror
        </label><br>
        <button type="submit">editar equip</button>

    </form>
@endsection


