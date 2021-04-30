<ul class="sidebar-menu">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>Clientes</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('cliente.index') }}"><i class="fa fa-eye"></i>Ver tabla de clientes</a></li>
        @if (auth()->user()->is_admin)
        <li><a href="{{ route('cliente.create') }}"><i class="fa fa-pencil"></i>Crear nuevo cliente</a></li>
        @endif
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>Contactos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('contacto.index') }}"><i class="fa fa-eye"></i>Ver tabla de contactos</a></li>
        <li><a href="{{ route('contacto.create') }}"><i class="fa fa-pencil"></i>Crear nuevo contacto</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Conexiones</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('concli.index') }}"><i class="fa fa-eye"></i>Ver tabla de conexiones</a></li>
        <li><a href="{{ route('concli.create') }}"><i class="fa fa-pencil"></i>Crear nueva conexión</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>Tipos de conexiones</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('tipcon.index') }}"><i class="fa fa-eye"></i>Ver tabla de tipos de conexiones</a></li>
        <li><a href="{{ route('tipcon.create') }}"><i class="fa fa-pencil"></i>Crear nuevo tipo de conexión</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>Tipos de clientes</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('tipcli.index') }}"><i class="fa fa-eye"></i>Ver tabla de tipos de clientes</a></li>
        @if (auth()->user()->is_admin)
        <li><a href="{{ route('tipcli.create') }}"><i class="fa fa-pencil"></i>Crear nuevo tipo de cliente</a></li>
        @endif
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-black-tie"></i> <span>Vendedores</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('vendedor.index') }}"><i class="fa fa-eye"></i>Ver tabla de vendedores</a></li>
        @if (auth()->user()->is_admin)
        <li><a href="{{ route('vendedor.create') }}"><i class="fa fa-pencil"></i>Crear nuevo vendedor</a></li>
        @endif
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-credit-card"></i> <span>Condiciones de pagos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('condicion-pago.index') }}"><i class="fa fa-eye"></i>Ver tabla de condiciones de pagos</a></li>
        @if (auth()->user()->is_admin)
        <li><a href="{{ route('condicion-pago.create') }}"><i class="fa fa-pencil"></i>Crear nueva condición de pago</a></li>
        @endif
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Segmentos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('segmento.index') }}"><i class="fa fa-eye"></i>Ver tabla de segmentos</a></li>
        @if (auth()->user()->is_admin)
        <li><a href="{{ route('segmento.create') }}"><i class="fa fa-pencil"></i>Crear nuevo segmento</a></li>
        @endif
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-map"></i> <span>Zonas</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('zona.index') }}"><i class="fa fa-eye"></i>Ver tabla de zonas</a></li>
        @if (auth()->user()->is_admin)
        <li><a href="{{ route('zona.create') }}"><i class="fa fa-pencil"></i>Crear un nueva zona</a></li>
        @endif
      </ul>
    </li> 
    @if (auth()->user()->is_admin)
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i><span>Usuarios</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('user.index') }}"><i class="fa fa-eye"></i>Ver tabla de usuarios</a></li>
        <li><a href="{{ route('user.create') }}"><i class="fa fa-pencil"></i>Crear un nuevo usuario</a></li>
      </ul>
    </li>
    @endif
</ul>