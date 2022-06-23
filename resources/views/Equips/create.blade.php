@extends('layouts.plantilla')

@section('title', 'Creacio d\'equips')

@section('content')

    <h1>Estoy en la pagina de creacion de qeuipos </h1>
    
    
    

    <form action="{{route('equips.create_equips')}}" method="POST">
        {{-- agregar token --}}
        @csrf
        <label>
            club:<br>
            <input type="text" name="entitat" value="{{old('entitat')}}"><br>
        </label>
        @error('entitat')
            
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror
        <label>
            Nom del equip:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label><br>
        @error('name')
        
        <small style="color:red">*{{$message}}</small>
        <br>
    @enderror
        <button type="submit">Crear equip</button>

    </form>
@endsection


