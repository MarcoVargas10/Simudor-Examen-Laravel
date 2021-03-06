@extends('plantilla/base')

@section('content')
@php
    $var=0;
@endphp

<div class="block mx-auto my-1 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center pt-2">
        Registro de Exámen
    </h1>

    <form class="mt-4"  method="POST" action="{{route('examenNuevo.registrar')}}">
        @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Materia" id="materia" name="materia">
      
        
        <select id="tipo-pregunta" name="tipo-pregunta">
            <option>Tipo pregunta</option>
            <option value="true" id="true">texto</option>
            <option value="false" id="false">true o false</option>
        </select>

        @function tipoPregunta(){
            @if('tipo-pregunta'=='texto')
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
                    p-2 my-2 focus:bg-white" placeholder="Pregunta 1" id="pregunta1" name="pregunta1">
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
                    p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta1" name="respuesta1">
                @else
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
                    p-2 my-2 focus:bg-white" placeholder="Pregunta 1" id="pregunta1" name="pregunta1">
                    <label><input type="radio" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
                    p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta1" name="respuesta1" value="Verdadero">True</label>

                    <label><input type="radio" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
                    p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta1" name="respuesta1" value="Falso">False</label>
                @endif
        }
        tipoPregunta();
                
        <div></div>


        <p><input type="submit" value="Enviar datos"></p>
<!--         <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
            p-2 my-2 focus:bg-white" placeholder="Pregunta 1" id="pregunta1" name="pregunta1">
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
            p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta1" name="respuesta1">
 -->            
        
          
        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 2" id="pregunta2" name="pregunta2">
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta2" name="respuesta2">

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 3" id="pregunta3" name="pregunta3">
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta3" name="respuesta3">

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 4" id="pregunta4" name="pregunta4">
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta4" name="respuesta4">

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 5" id="pregunta5" name="pregunta5">
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta5" name="respuesta5">
        
        

        <button type="submit" class="rounded-md bg-red-500 w-full text-lg text-white font-semibold 
        p-2 my-3 hover:bg-indigo-800">
            Registrar Exámen
        </button>

    </form>

</div>

@endsection