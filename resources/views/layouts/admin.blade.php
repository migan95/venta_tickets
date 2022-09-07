@section('header')
CSS
@show

@section('menu')
<nav class="menu">
    <ul>
        <li><a href="#">Usuarios</a> </li>
        <li><a href="#">Eventos</a> </li>
        <li><a href="#">Tickets</a> </li>
        <li><a href="logout">Logout</a> </li>
    </ul>
</nav>
@show

<h1>Sistema de Venta de tickets - @yield('titulo')</h1>

@section('contenido')
<h2>Esto es el contenido por defecto si no se llena la sección.</h2>
@show

<br>
@section('footer')
scripts
@show
