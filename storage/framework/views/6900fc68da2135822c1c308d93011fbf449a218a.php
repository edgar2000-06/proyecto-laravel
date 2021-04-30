<?php $__env->startSection('header'); ?>
<h1>
    Tipos de conexiones
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-bars"></i> Tipos de conexiones</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de tipos de conexiones</h3>
        <?php if(auth()->user()->is_admin): ?>
            <a href="<?php echo e(route('tipcon.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear tipo de conexión
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
                    <?php if(auth()->user()->is_admin): ?>
                    <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Tipos_conexiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoconexion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tipoconexion->id); ?></td>
                        <td><?php echo e($tipoconexion->nombre); ?></td>
                        <td>
                        <?php if(auth()->user()->is_admin): ?>
                            <a href="<?php echo e(route('tipcon.edit', $tipoconexion)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('tipcon.destroy', $tipoconexion)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este tipo de conexión?')"
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