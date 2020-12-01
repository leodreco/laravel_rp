<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <h3><a href="/dashboard">Cleymisoft</a></h3>
    </div>

    <ul class="list-unstyled components">
        
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">Dashboard</a>
        </li>
        
        <li class="{{ Request::segment(1) == 'operaciones' ? 'active' : '' }}">
            <a href="#menuSocioNegocio" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Socio Negocio</a>
            
            <ul class="collapse list-unstyled submenu" id="menuSocioNegocio">
                <li class="">
                    <a href="#menuOperaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                    <ul class="collapse list-unstyled submenu" id="menuOperaciones">
                        <li><a href="/operaciones/cliente">Buscar cliente</a></li>
                        <li><a href="#">Nombre de cliente</a></li>
                        <li><a href="#">Fuera de ruta</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#menuSocioNegocio_DatosMaestros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Datos Maestros</a>
                    <ul class="collapse list-unstyled submenu" id="menuSocioNegocio_DatosMaestros">
                        <li><a href="/datos-maestros/socio">Buscar socio de negocio</a></li>
                        <li><a href="/datos-maestros/giros-de-negocio">Giro de negocio</a></li>
                        <li><a href="/datos-maestros/tipos-de-contribuyente">Tipos de contribuyente</a></li>
                        <li><a href="#">Validar socio de negocio</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#menuSocioNegocio_Informes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Informes</a>
                    <ul class="collapse list-unstyled submenu" id="menuSocioNegocio_Informes">
                        <li><a href="#">Clientes fuera de ruta</a></li>
                        <li><a href="#">Giro de negocio</a></li>
                        <li><a href="#">Tipos de contribuyente</a></li>
                        <li><a href="#">Validar socio de negocio</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="#menuArticulos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Articulos</a>
            <ul class="collapse list-unstyled submenu" id="menuArticulos">
                <li>
                    <a href="#menuArticulos_Operaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                    <ul class="collapse list-unstyled submenu" id="menuArticulos_Operaciones">
                        <li><a href="/articulo/operaciones/lista-blanca">Lista blanca</a></li>
                        <li><a href="#">Promociones</a></li>
                        <li><a href="#">Carga y despacho</a></li>
                        <li><a href="#">Toma de inventario</a></li>
                        <li><a href="#">Verificar precios</a></li>
                        <li><a href="#">Articulos solicitados</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#menuArticulos_DatosMaestros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Datos Maestros</a>
                    <ul class="collapse list-unstyled submenu" id="menuArticulos_DatosMaestros">
                        <li><a href="#">Almacenes</a></li>
                        <li><a href="#">Artículos</a></li>
                        <li><a href="#">Listar proovedores</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#menuArticulos_Informes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Informes</a>
                    <ul class="collapse list-unstyled submenu" id="menuArticulos_Informes">
                        
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>