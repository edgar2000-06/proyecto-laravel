<?php $__env->startSection('header'); ?>
<h1>
    Usuarios
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-users"></i> Usuarios</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de usuarios</h3>
            <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear usuario
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Admin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <?php if($user->is_admin == 1): ?>
                            <td>Administrador</td>
                        <?php else: ?>
                            <td>No administrador</td>
                        <?php endif; ?>
                        <td>
                            <a href="<?php echo e(route('user.edit', $user)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('user.destroy', $user)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este usuario?')"
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