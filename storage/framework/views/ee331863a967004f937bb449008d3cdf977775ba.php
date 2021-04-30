<?php $__env->startSection('header'); ?>
<h1>
    Condidiones de pago
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-credit-card"></i> Condidiones de pago</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de condidiones de pago</h3>
        <?php if(auth()->user()->is_admin): ?>
            <a href="<?php echo e(route('condicion-pago.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear condidión de pago
            </a>
        <?php endif; ?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Días</th>
                    <?php if(auth()->user()->is_admin): ?>
                    <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Condiciones_de_pagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condicion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($condicion->id); ?></th>
                        <td><?php echo e($condicion->nombre); ?></td>
                        <td><?php echo e($condicion->dias); ?></td>
                        <td>
                        <?php if(auth()->user()->is_admin): ?>
                            <a href="<?php echo e(route('condicion-pago.edit', $condicion)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('condicion-pago.destroy', $condicion)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar esta condición de pago?')"
                                ><i class="fa fa-times"></i></button>
                            </form>
                        <?php endif; ?>
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