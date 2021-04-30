<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('contacto.index')); ?>"><i class="fa fa-users"></i> Contactos</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nuevo</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo contacto</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('contacto.index')); ?>">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="alert alert-danger"><?php echo e($error); ?></p><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" value="<?php echo e(old('telefono')); ?>" id="telefono" class="form-control" placeholder="Ingresar número telefónico" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="celular">Celular</label>
                            <input type="tel" name="celular" value="<?php echo e(old('celular')); ?>" id="celular" class="form-control" placeholder="Ingresar número celular" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" value="<?php echo e(old('cargo')); ?>" id="cargo" class="form-control" placeholder="Ingresar Cargo" required>
                        </div>
                        <div class="form-group col-md-6 cliente">
                            <label for="cliente">Cliente</label>
                            <select name="cliente" id="cliente" class="form-control">
                                <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cliente['id']); ?>"><?php echo e($cliente['nombre_completo']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button class="btn btn-primary btn-block">Crear contacto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    $(document).ready(function() {
        $('#cliente').select2();
    });
</script>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>