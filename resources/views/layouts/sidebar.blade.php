<nav id="sidebar">
    <div class="sidebar-header">
        <h3><a href="/dashboard">Cleymisoft</a></h3>
    </div>

    <ul class="list-unstyled components">
        
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">Dashboard</a>
        </li>
        
        <li class="{{ Request::segment(1) == 'operaciones' ? 'active' : '' }}">
            <a href="#menuOperaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
            <ul class="collapse list-unstyled submenu" id="menuOperaciones">
                <li><a href="/operaciones/cliente">Buscar Cliente</a></li>
                <li><a href="#">Nombre de Cliente</a></li>
                <li><a href="#">Autorizar Fuera de Ruta</a></li>
            </ul>
        </li>
        
        <li class="{{ Request::segment(1) == 'datos-maestros' ? 'active' : '' }}">
            <a href="#menuDatosMaestros" data-toggle="collapse" aria-expanded="false"class="dropdown-toggle">Datos Maestros</a>
            <ul class="collapse list-unstyled submenu" id="menuDatosMaestros">
                <li>
                    <a href="/datos-maestros/socio">Buscar socio de negocio</a>
                </li>
                <li>
                    <a href="/datos-maestros/giros-de-negocio">Giros de negocio</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Informes</a>
        </li>
    </ul>
</nav>