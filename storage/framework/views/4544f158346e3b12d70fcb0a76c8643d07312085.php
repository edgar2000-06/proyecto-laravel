<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class=><a href="<?php echo e(route('segmento.index')); ?>">Segmentos</a></li>
    <li class="active">Nuevo</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva segmento</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('segmento.index')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <button class="btn btn-primary btn-block">Crear segmento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>