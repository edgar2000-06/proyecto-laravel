<?php $__env->startSection('header'); ?>
<h1>
    Clientes
    <small>Ver</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('cliente.index')); ?>"><i class="fa fa-users"></i>Clientes</a></li>
    <li class="active"><i class="fa fa-eye"></i> Ver</li>
</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Detalles del cliente</h3>
            <a href="<?php echo e(route('cliente.create')); ?>" class="btn btn-xs btn-danger pull-right">
                <i class="fa fa-times"></i>  Eliminar cliente
            </a>
            <a href="<?php echo e(route('cliente.edit', $cliente)); ?>" class="btn btn-xs btn-primary pull-right">
                <i class="fa fa-pencil"></i>  Editar cliente
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Razón social</th>
                    <th>Rif</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($cliente->nombre_completo); ?></td>
                    <td><?php echo e($cliente->razon_social); ?></td>
                    <td><?php echo e($cliente->rif); ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Dirección fiscal</th>
                    <th>Dirección de entrega</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($cliente->direccion_fiscal); ?></td>
                    <td><?php echo e($cliente->direccion_entrega); ?></td>
                    <td><?php echo e($cliente->email); ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Agente de retencion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($cliente->telefono); ?></td>
                    <?php if($cliente->inactivo == 1): ?>
                        <td>Acitvo</td>
                    <?php else: ?>
                        <td>Inactivo</td>
                    <?php endif; ?>
                    <?php if($cliente->agente_retencion == 1): ?>
                        <td>Acitvo</td>
                    <?php else: ?>
                        <td>Inactivo</td>
                    <?php endif; ?>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>% descuento global</th>
                    <th>Zona</th>
                    <th>Tipo de cliente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($cliente->porc_dec_global); ?></td>
                    <?php $__currentLoopData = $Zonas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cliente->id_zona === $zona->id): ?>  
                            <td><?php echo e($zona->nombre); ?></td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $Tipos_clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cliente->id_tipo_cliente === $tipo_cliente->id): ?>  
                            <td><?php echo e($tipo_cliente->nombre); ?></td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Segmento</th>
                    <th>Vendedor</th>
                    <th>Condición de pago</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $__currentLoopData = $Segmentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segmento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cliente->id_segmento === $segmento->id): ?>  
                            <td><?php echo e($segmento->nombre); ?></td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $Vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cliente->id_vendedor === $vendedor->id): ?>  
                            <td><?php echo e($vendedor->nombre_completo); ?></td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $Condiciones_de_pagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condicion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cliente->id_condicionDePago === $condicion->id): ?>  
                            <td><?php echo e($condicion->nombre); ?></td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>