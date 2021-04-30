<?php $__env->startSection('header'); ?>
<h1>
    Conexión de clientes
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-link"></i> Conexión de clientes</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de conexiones de clientes</h3>
            <a href="<?php echo e(route('concli.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear conexión de cliente
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Descripción</th>
                    <th>Fecha de emisión</th>
                    <th>Activo</th>
                    <th>Cliente</th>
                    <th>Tipo de conexión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Conexiones_clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conexion_cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <tr>
                        <td><?php echo e($conexion_cliente->id); ?></td>
                        <td><?php echo e($conexion_cliente->descripcion); ?></td>
                        <td><?php echo e($conexion_cliente->fec_emis); ?></td>
                        <td><?php echo e($conexion_cliente->activo); ?></td>
                        <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($conexion_cliente->id_cliente === $cliente->id): ?>  
                                <td><?php echo e($cliente->nombre_completo); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $Tipos_conexiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_conex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($conexion_cliente->id_tipo_cone === $tipo_conex->id): ?>  
                                <td><?php echo e($tipo_conex->nombre); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td>
                            <a href="<?php echo e(route('concli.edit', $conexion_cliente)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('concli.destroy', $conexion_cliente)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar esta conexión de cliente?')"
                                ><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>