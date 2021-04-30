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
        <li><a href="<?php echo e(route('cliente.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de clientes</a></li>
        <?php if(auth()->user()->is_admin): ?>
        <li><a href="<?php echo e(route('cliente.create')); ?>"><i class="fa fa-pencil"></i>Crear nuevo cliente</a></li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>Contactos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('contacto.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de contactos</a></li>
        <li><a href="<?php echo e(route('contacto.create')); ?>"><i class="fa fa-pencil"></i>Crear nuevo contacto</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Conexiones</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('concli.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de conexiones</a></li>
        <li><a href="<?php echo e(route('concli.create')); ?>"><i class="fa fa-pencil"></i>Crear nueva conexión</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>Tipos de conexiones</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('tipcon.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de tipos de conexiones</a></li>
        <li><a href="<?php echo e(route('tipcon.create')); ?>"><i class="fa fa-pencil"></i>Crear nuevo tipo de conexión</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>Tipos de clientes</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('tipcli.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de tipos de clientes</a></li>
        <?php if(auth()->user()->is_admin): ?>
        <li><a href="<?php echo e(route('tipcli.create')); ?>"><i class="fa fa-pencil"></i>Crear nuevo tipo de cliente</a></li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-black-tie"></i> <span>Vendedores</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('vendedor.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de vendedores</a></li>
        <?php if(auth()->user()->is_admin): ?>
        <li><a href="<?php echo e(route('vendedor.create')); ?>"><i class="fa fa-pencil"></i>Crear nuevo vendedor</a></li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-credit-card"></i> <span>Condiciones de pagos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('condicion-pago.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de condiciones de pagos</a></li>
        <?php if(auth()->user()->is_admin): ?>
        <li><a href="<?php echo e(route('condicion-pago.create')); ?>"><i class="fa fa-pencil"></i>Crear nueva condición de pago</a></li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Segmentos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('segmento.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de segmentos</a></li>
        <?php if(auth()->user()->is_admin): ?>
        <li><a href="<?php echo e(route('segmento.create')); ?>"><i class="fa fa-pencil"></i>Crear nuevo segmento</a></li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-map"></i> <span>Zonas</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('zona.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de zonas</a></li>
        <?php if(auth()->user()->is_admin): ?>
        <li><a href="<?php echo e(route('zona.create')); ?>"><i class="fa fa-pencil"></i>Crear un nueva zona</a></li>
        <?php endif; ?>
      </ul>
    </li> 
    <?php if(auth()->user()->is_admin): ?>
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i><span>Usuarios</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(route('user.index')); ?>"><i class="fa fa-eye"></i>Ver tabla de usuarios</a></li>
        <li><a href="<?php echo e(route('user.create')); ?>"><i class="fa fa-pencil"></i>Crear un nuevo usuario</a></li>
      </ul>
    </li>
    <?php endif; ?>
</ul>