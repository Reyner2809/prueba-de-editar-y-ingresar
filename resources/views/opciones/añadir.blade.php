
<h1>Aqui podras añadir informacion</h1>

<form action="{{ route('añadir.store')}}" method="POST">
    @csrf
    <label>
        Nombre 
        <input type="text" name="name">
    </label>
<br>
    <label>
        <br>
        email
        <input type="text" name="email">
    </label>
    <br>
    
    <label>
        <br>
        Contraseña
        <input type="password" name="password">
    </label>
<br><br>

<button type="submit">Enviar Informacion</button>
</form>




