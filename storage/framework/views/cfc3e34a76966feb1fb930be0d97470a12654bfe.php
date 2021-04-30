<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('user.index')); ?>"><i class="fa fa-users"></i> Usuarios</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nuevo</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo usuario</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('user.index')); ?>">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="alert alert-danger"><?php echo e($error); ?></p><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password" class="NombreDeCampo">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Ingresar contraseña" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="is_admin" class="NombreDeCampo">Administrador</label><br>
                            <input type="hidden" name="is_admin" value="0">
                            <input type="checkbox" name="is_admin" id="is_admin" value="1">
                        </div>
                        <div class="col-md-3"><br>
                        <button class="btn btn-primary btn-block">Crear usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>