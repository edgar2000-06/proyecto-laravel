<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('concli.index')); ?>"><i class="fa fa-link"></i> Conexión de clientes</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nueva</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva conexión de clientes</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('concli.index')); ?>">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="alert alert-danger"><?php echo e($error); ?></p><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" value="<?php echo e(old('descripcion')); ?>" id="descripcion" class="form-control" placeholder="Ingresar descripción" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="activo">Activo</label>
                            <input type="numb" name="activo" value="<?php echo e(old('activo')); ?>" id="activo" class="form-control" placeholder="Ingresar Activo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha de emisión</label>
                            <input type="date" name="fecha" value="<?php echo e(old('fecha')); ?>" id="fecha" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cliente">Cliente</label>
                            <select name="cliente" id="cliente" class="form-control">
                                <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cliente['id']); ?>"><?php echo e($cliente['nombre_completo']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo-conex">Tipo de conexión</label>
                            <select name="tipo-conex" id="tipo-conex" class="form-control">
                                <?php $__currentLoopData = $Tipos_conexiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_conex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tipo_conex['id']); ?>"><?php echo e($tipo_conex['nombre']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6"><br>
                        <button class="btn btn-primary btn-block">Crear conexión de clientes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>