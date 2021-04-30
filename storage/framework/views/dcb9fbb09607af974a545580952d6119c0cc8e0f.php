<?php $__env->startSection('header'); ?>
<h1>
    Contactos
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-users"></i> Contactos</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de contactos</h3>
            <a href="<?php echo e(route('contacto.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear contacto
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Correo electrónico</th>
                    <th>Cargo</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <tr>
                        <td><?php echo e($contacto->id); ?></td>
                        <td><?php echo e($contacto->nombre_completo); ?></td>
                        <td><?php echo e($contacto->telefono); ?></td>
                        <td><?php echo e($contacto->celular); ?></td>
                        <td><?php echo e($contacto->email); ?></td>
                        <td><?php echo e($contacto->cargo); ?></td>
                        <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($contacto->id_cliente === $cliente->id): ?>  
                                <td><?php echo e($cliente->nombre_completo); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td>
                            <a href="<?php echo e(route('contacto.edit', $contacto)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('contacto.destroy', $contacto)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este contacto?')"
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