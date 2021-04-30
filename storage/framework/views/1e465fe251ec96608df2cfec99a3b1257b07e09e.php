<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('concli.index')); ?>"><i class="fa fa-link"></i> Conexión de clientes</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Conexión de cliente Actual (N° <?php echo e($conexion_cliente->id); ?>)</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('concli.update', $conexion_cliente)); ?>">
                        <?php echo e(csrf_field()); ?> <?php echo e(method_field('PUT')); ?>

                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" value="<?php echo e(old('descripcion', $conexion_cliente->descripcion)); ?>" id="descripcion" class="form-control" placeholder="Ingresar descripción" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="activo">Activo</label>
                            <input type="numb" name="activo" value="<?php echo e(old('activo', $conexion_cliente->activo)); ?>" id="activo" class="form-control" placeholder="Ingresar Activo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha de emisión</label>
                            <input type="date" name="fecha" value="<?php echo e(old('fecha', $conexion_cliente->fec_emis)); ?>" id="fecha" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="id_cliente">Cliente</label>
                            <select name="id_cliente" id="id_cliente" class="form-control">
                                <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cliente['id']); ?>"><?php echo e($cliente['nombre_completo']); ?></option>
                                <?php if($conexion_cliente->id_cliente === $cliente->id): ?>  
                                    <option value="<?php echo e($cliente['id']); ?>" selected><?php echo e($cliente['nombre_completo']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="id_tipo_cone">Tipo de conexión</label>
                            <select name="id_tipo_cone" id="id_tipo_cone" class="form-control">
                                <?php $__currentLoopData = $Tipos_conexiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_conex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tipo_conex['id']); ?>"><?php echo e($tipo_conex['nombre']); ?></option>
                                <?php if($conexion_cliente->id_tipo_cone === $tipo_conex->id): ?>  
                                    <option value="<?php echo e($tipo_conex['id']); ?>" selected><?php echo e($tipo_conex['nombre']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6"><br>
                            <button class="btn btn-primary btn-block">Actualizar conexión de clientes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>