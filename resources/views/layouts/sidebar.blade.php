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
                        <li><a href="/articulo/operaciones/promociones">Promociones</a></li>
                        <li><a href="/articulo/operaciones/carga-y-despacho">Carga y despacho</a></li>
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
                        <li><a href="#">Stock mínimo</a></li>
                        <li><a href="#">Promociones vigentes</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        {{--VENTAS--}}
        <li class="">
            <a href="#menuVentas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ventas</a>
            <ul class="collapse list-unstyled submenu" id="menuVentas">
                <li>
                    <a href="#menuVentas_Operaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                    <ul class="collapse list-unstyled submenu" id="menuVentas_Operaciones">
                        <li><a href="#">Nuevo pedido</a></li>
                        <li><a href="#">Autorizar notas de crédito</a></li>
                        <li><a href="#">Aplicar notas de crédito</a></li>
                        <li><a href="#">Seguimiento a las notas de crédito</a></li>
                        <li><a href="#">Pedidos retenidos</a></li>
                        <li><a href="#">Solicitudes de reprogramación</a></li>
                        <li><a href="#">Mesas y marcas</a></li>
                        <li><a href="#">Interface Unilever</a></li>
                        <li><a href="#">Intreface protisa</a></li>
                        <li><a href="#">Intreface colgate</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#menuVentas_DatosMaestros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Datos Maestros</a>
                    <ul class="collapse list-unstyled submenu" id="menuVentas_DatosMaestros">
                        <li><a href="#">Supervisores</a></li>
                        <li><a href="#">Vendedores</a></li>
                        <li><a href="#">Categorias</a></li>
                        <li><a href="#">Familias</a></li>
                        <li><a href="#">Proveedores por periodo</a></li>
                        <li><a href="#">Categorías por periodo</a></li>
                        <li><a href="#">Mesas</a></li>
                        <li><a href="#">Canales por Sede</a></li>
                        <li><a href="#">Cartera de clientes x Vendedor</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#menuVentas_Informes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Informes</a>
                    <ul class="collapse list-unstyled submenu" id="menuVentas_Informes">
                        <li><a href="#">Avance</a></li>
                        <li><a href="#">Equipos de frio</a></li>
                        <li><a href="#">Seguimiento</a></li>
                        <li><a href="#">Seguimiento por proveedor</a></li>
                        <li><a href="#">Seguimiento por categoria</a></li>
                        <li><a href="#">Seguimiento a los pedidos facturados</a></li>
                        <li><a href="#">Seguimiento a las devoluciones</a></li>
                        <li><a href="#">Resumen de ventas x fecha de digitación</a></li>
                        <li><a href="#">Resumen de ventas proyectado</a></li>
                        <li><a href="#">Resumen de ventas supervisor x Fecha de de digitación</a></li>
                        <li><a href="#">Ver sucesos</a></li>
                        <li><a href="#">Mis pedidos</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        {{--COMPRAS--}}
        <li class="">
            <a href="#menuCompras" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Compras</a>
            <ul class="collapse list-unstyled submenu" id="menuCompras">
                <li>
                    <a href="#menuCompras_FacturacionElectronica" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Facturación electronica</a>
                    <ul class="collapse list-unstyled submenu" id="menuCompras_FacturacionElectronica">
                        <li><a href="#">Carga FFEE</a></li>
                        <li><a href="#">En proceso</a></li>
                        <li><a href="#">Consulta FFEE</a></li>
                        <li><a href="#">Recepciones abiertas</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        {{--CONTABLE--}}
        <li class="">
            <a href="#menuContable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contable</a>
            <ul class="collapse list-unstyled submenu" id="menuContable">
                <li>
                    <a href="#menuContable_Operaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                    <ul class="collapse list-unstyled submenu" id="menuContable_Operaciones">
                        <li><a href="#">Series de documentos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#menuContable_DatosMaestros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Datos Maestros</a>
                    <ul class="collapse list-unstyled submenu" id="menuContable_DatosMaestros">
                        <li><a href="#">Plan de cuentas</a></li>
                        <li><a href="#">Domicilios Sunat</a></li>
                        <li><a href="#">DDJJ SAP</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#menuContable_Informes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Informes</a>
                    <ul class="collapse list-unstyled submenu" id="menuContable_Informes">
                        <li><a href="#">Saldo inicial de inventario</a></li>
                        <li><a href="#">Cuentas especiales</a></li>
                        <li><a href="#">Documentos emitidos por serie y tipo de documento</a></li>
                        <li><a href="#">Últimos documentos impresos por serie y tipo de documento</a></li>
                        <li><a href="#">Reporte de letras de clientes</a></li>
                        <li><a href="#">Pagos a proveedores</a></li>
                        <li><a href="#">Venta de alcohol</a></li>
                        <li><a href="#">Detracción</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        {{--REPARTO--}}
        <li class="">
            <a href="#menuReparto" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reparto</a>
            <ul class="collapse list-unstyled submenu" id="menuReparto">
                <li>
                    <a href="#menuReparto_Operaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                    <ul class="collapse list-unstyled submenu" id="menuReparto_Operaciones">
                        <li><a href="#">Dibujar ruta</a></li>
                        <li><a href="#">Verificación de unidades</a></li>
                        <li><a href="#">Programar</a></li>
                        <li><a href="#">Hoja de reparto</a></li>
                        <li><a href="#">Liquidación Tdoy</a></li>
                        <li><a href="#">Autoventa</a></li>
                        <li><a href="#">Liquidación reparto</a></li>
                        <li><a href="#">Crear guias</a></li>
                        <li><a href="#">No programar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#menuReparto_DatosMaestros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Datos Maestros</a>
                    <ul class="collapse list-unstyled submenu" id="menuReparto_DatosMaestros">
                        <li><a href="#">Usuario Tdoy</a></li>
                        <li><a href="#">Parametros de apoyo</a></li>
                        <li><a href="#">Matriz de apoyo al reparto</a></li>
                        <li><a href="#">Motivos de trasladao</a></li>
                        <li><a href="#">Choferes</a></li>
                        <li><a href="#">Vehiculos</a></li>
                        <li><a href="#">Plantilla para la verificación del vehículo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#menuReparto_Informes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Informes</a>
                    <ul class="collapse list-unstyled submenu" id="menuReparto_Informes">
                        <li><a href="#">Avance Tdoy</a></li>
                        <li><a href="#">Calculo de apoyos</a></li>
                        <li><a href="#">Pedidos abiertos</a></li>
                        <li><a href="#">Hojas de reparto pendientes de liquidación</a></li>
                        <li><a href="#">Liquidaciones pendientes</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>