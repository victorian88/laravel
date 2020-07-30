@extends('layouts')


@section('contenido')

<h1>Contactos</h1>
<form action="contacto" method="post">
<p>
<label for="nombre">
Nombre
    <input type="text" name="nombre">
</label>
</p>
<p><label for="nombre">
    Email
        <input type="email" name="email">
    </label> </p>
    <p><label for="mensaje">
Mensaje

<textarea name="mensaje" id="" cols="20" rows="5"></textarea>
    </label> </p>
    <input type="submit" value="Enviar">

</form>

@stop