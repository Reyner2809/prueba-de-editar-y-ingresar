<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Prueba - @yield('titulo')</title>
    </head>
    <body class="bg-gray-100">
       <header>
        <div>
<h1 >
    <center><p class="text-2xl"> Usuarios</p></center>
</h1>
<br><br>
   <center> <a class="text-gray-700 text-2xl" href="{{ route('añadir.index')}}">Añadir</a></center>

<center><table class=" bg-gray-300 p-xl shadow-lg md:items-center"></center>
   
    <thead>
        <tr class="bg-gray-400 text-2xl md:items-center">
        <th>id</th>
        <th>nombre</th>
        <th>email</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $Users as $User )
        <tr>
            <td>{{$User->id}} </td>
            <td>{{$User->name}} </td>
            <td>{{$User->email}} </td>  
            <td></td> 
            <td><a href="{{ route('añadir.edit', $User)}}">Editar</a> </td>  
            <td></td>
            <td></td>
            <td>            
        @endforeach 
    </td>
    </tr>
    </tbody>    
</table>



        </div>
       </header>
       <main>
        <h2>
            @yield('titulo')
        </h2>
        @yield('contenido')
       </main>
    </body>
</html>