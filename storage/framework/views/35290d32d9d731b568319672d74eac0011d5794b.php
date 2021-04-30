<?php $__env->startSection('header'); ?>
<h1>
    Clientes
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-users"></i> Clientes</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de clientes</h3>
            <a href="<?php echo e(route('cliente.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear cliente
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Razón social</th>
                    <th>Rif</th>
                    <th>Correo electrónico</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <tr>
                        <td><?php echo e($cliente->id); ?></td>
                        <td><?php echo e($cliente->nombre_completo); ?></td>
                        <td><?php echo e($cliente->razon_social); ?></td>
                        <td><?php echo e($cliente->rif); ?></td>
                        <td><?php echo e($cliente->email); ?></td>
                        <td><?php echo e($cliente->telefono); ?></td>
                        <?php if($cliente->inactivo == 1): ?>
                            <td>Acitvo</td>
                        <?php else: ?>
                            <td>Inactivo</td>
                        <?php endif; ?>
                        <td>
                            <a href="<?php echo e(route('cliente.show', $cliente)); ?>"
                                    class="btn btn-xs btn-default"
                                ><i class="fa fa-eye"></i></a>
                            <a href="<?php echo e(route('cliente.edit', $cliente)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('cliente.destroy', $cliente)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este cliente?')"
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