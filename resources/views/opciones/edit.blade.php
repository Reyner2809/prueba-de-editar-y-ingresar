
<h1>Aqui podras Editar informacion</h1>

<form action="{{ route('inicio.update', $User)}}" method="POST">
    @csrf

    @method('put')

    <label>
        Nombre 
        <input type="text" name="name" value="{{$User->name}}">
    </label>
<br>
    <label>
        <br>
        email
        <input type="text" name="email" value="{{$User->email}}">
    </label>
    <br>
    
<br><br>

<button type="submit">Actualizar Informacion</button>
</form>




