@extends('layouts.plantilla')

@section('title', 'Creacio d\'equips')

@section('content')

<div class="text-center p-5   ">
    <h1 class="uppercase text-4xl font-bold">Crear equip</h1>
    <p>Crea el teu equip</p>
</div>
    
    
    

    <form action="{{route('equips.create_equips')}}" method="POST" class="text-center">
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
    <button type="submit" class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" >Crear Equip</button>
        {{-- <button type="submit">Crear equip</button> --}}

    </form>
@endsection


