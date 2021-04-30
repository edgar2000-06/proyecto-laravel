<?php $__env->startSection('header'); ?>
<h1>
    <?php echo e(auth()->user()->name); ?>

    <small>Perfil</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-user"></i> Perfil</li>
</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Detalles de <?php echo e(auth()->user()->name); ?></h3>
            <a href="<?php echo e(route('perfil.edit')); ?>" class="btn btn-xs btn-primary pull-right">
                <i class="fa fa-pencil"></i>  Editar perfil
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e(auth()->user()->name); ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e(auth()->user()->email); ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php if(auth()->user()->is_admin == 1): ?>
                        <td>Administrador</td>
                    <?php else: ?>
                        <td>No administrador</td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>