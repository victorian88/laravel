<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <style>
.active{
    text-decoration: none;
    color:green;
}
        </style>
    <title>Mi sitio</title>
</head>

<body>
   
    <header>
<?php function activeMenu($url){

return request()-> is($url) ? 'active' : '';
} ?>

        <nav>
            <a class="{{ activeMenu('/')}}" href=" {{ route('home') }}">Inicio</a>
            <a class=" {{ activeMenu('contactos') }}" href=" {{ route('contactos') }}"> Contacto </a>
        </nav>
    </header>

@yield('contenido')

<footer> Copyright {{date('Y')}} </footer>
</body>



</html>