<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class=><a href="<?php echo e(route('condicion-pago.index')); ?>"><i class="fa fa-credit-card"></i> Condiciones de pago</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Condición de pago actual</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('condicion-pago.update', $condicion)); ?>">
                        <?php echo e(csrf_field()); ?> <?php echo e(method_field('PUT')); ?>


                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="<?php echo e(old('name', $condicion->nombre)); ?>" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="dias">Días</label>
                            <input type="number" name="dias" value="<?php echo e(old('dias', $condicion->dias)); ?>" id="dias" class="form-control" placeholder="Ingresar días" required>
                        </div>
                        <button class="btn btn-primary btn-block">Actualizar condición de pago</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>