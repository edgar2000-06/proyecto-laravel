<?php $__env->startSection('header'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo e(route('cliente.index')); ?>"><i class="fa fa-users"></i> Clientes</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nuevo</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo cliente</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo e(route('cliente.index')); ?>">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="alert alert-danger"><?php echo e($error); ?></p><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-4">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="raz-soc">Razón social</label>
                            <input type="text" name="raz-soc" value="<?php echo e(old('raz-soc')); ?>" id="raz-soc" class="form-control" placeholder="Ingresar razón social" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rif">Rif</label>
                            <input type="text" name="rif" value="<?php echo e(old('rif')); ?>" id="rif" class="form-control" placeholder="Ingresar rif" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="direc-fisc">Dirección fiscal</label>
                            <input type="text" name="direc-fisc" value="<?php echo e(old('direc-fisc')); ?>" id="direc-fisc" class="form-control" placeholder="Ingresar dirección fiscal" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="direc-ent">dirección de entrega</label>
                            <input type="text" name="direc-ent" value="<?php echo e(old('direc-ent')); ?>" id="direc-ent" class="form-control" placeholder="Ingresar dirección de entrega" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" value="<?php echo e(old('telefono')); ?>" id="telefono" class="form-control" placeholder="Ingresar número telefónico" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="porcentaje">Porcentaje de descuento global</label>
                            <input type="numb" name="porcentaje" value="<?php echo e(old('porcentaje')); ?>" id="porcentaje" class="form-control" placeholder="Ingresar porcentaje de descuento global" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="zona">Zona</label>
                            <select name="zona" id="zona" class="form-control">
                                <?php $__currentLoopData = $Zonas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($zona['id']); ?>"><?php echo e($zona['nombre']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipo-cliente">Tipo de cliente</label>
                            <select name="tipo-cliente" id="tipo-cliente" class="form-control">
                                <?php $__currentLoopData = $Tipos_clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tipo_cliente['id']); ?>"><?php echo e($tipo_cliente['nombre']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="segmento">Segmento</label>
                            <select name="segmento" id="segmento" class="form-control">
                                <?php $__currentLoopData = $Segmentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segmento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($segmento['id']); ?>"><?php echo e($segmento['nombre']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="vendedor">Vendedor</label>
                            <select name="vendedor" id="vendedor" class="form-control">
                                <?php $__currentLoopData = $Vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($vendedor['id']); ?>"><?php echo e($vendedor['nombre_completo']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="condicion-pago">Condición de pago</label>
                            <select name="condicion-pago" id="condicion-pago" class="form-control">
                                <?php $__currentLoopData = $Vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($vendedor['id']); ?>"><?php echo e($vendedor['nombre_completo']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inactivo" class="NombreDeCampo">Activo</label><br>
                            <input type="hidden" name="inactivo" value="0">
                            <input type="checkbox" name="inactivo" id="inactivo" value="1">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="agente-ret" class="NombreDeCampo">Agente de retención</label><br>
                            <input type="hidden" name="agente-ret" value="0">
                            <input type="checkbox" name="agente-ret" id="agente-ret" value="1">
                        </div>
                        <div class="col-md-4"><br>
                        <button class="btn btn-primary btn-block">Crear cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>