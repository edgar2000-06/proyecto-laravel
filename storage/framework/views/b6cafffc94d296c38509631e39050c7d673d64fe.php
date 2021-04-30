<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('user.index')); ?>"><i class="fa fa-users"></i> Usuarios</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuario actual (N° <?php echo e($user->id); ?>)</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('user.update', $user)); ?>">
                        <?php echo e(csrf_field()); ?> <?php echo e(method_field('PUT')); ?>

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="<?php echo e(old('name', $user->name)); ?>" id="name" class="form-control" placeholder="Ingresar nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="NombreDeCampo">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingresar contraseña">
                            <span class="help-block">Dejar en blanco si no quieres cambiar la contraseña</span>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="NombreDeCampo">Repetir contraseña</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repite la contraseña">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="is_admin" class="NombreDeCampo">Administrador</label><br>
                            <?php if($user->is_admin == 1): ?>
                                <input type="hidden" name="is_admin" value="0">
                                <input type="checkbox" name="is_admin" id="is_admin" value="1" checked>
                            <?php else: ?>
                                <input type="hidden" name="is_admin" value="0">
                                <input type="checkbox" name="is_admin" id="is_admin" value="1">
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-primary btn-block">Actualizar usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>