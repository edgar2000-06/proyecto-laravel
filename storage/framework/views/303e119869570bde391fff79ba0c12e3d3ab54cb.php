<?php $__env->startSection('header'); ?>
<h1>
    Vendedores
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-black-tie"></i> Vendedores</li>
</ol><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de vendedores</h3>
        <?php if(auth()->user()->is_admin): ?>
            <a href="<?php echo e(route('vendedor.create')); ?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear vendedor
            </a>
        <?php endif; ?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>C.I.</th>
                    <th>Correo electrónico</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>% comición de venta</th>
                    <th>% comición de cobro</th>
                    <?php if(auth()->user()->is_admin): ?>
                    <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($vendedor->id); ?></td>
                        <td><?php echo e($vendedor->nombre_completo); ?></td>
                        <td><?php echo e($vendedor->cedula); ?></td>
                        <td><?php echo e($vendedor->email); ?></td>
                        <td><?php echo e($vendedor->telefono); ?></td>
                        <td><?php echo e($vendedor->direccion); ?></td>
                        <td><?php echo e($vendedor->porceComisionVenta); ?></td>
                        <td><?php echo e($vendedor->porceComisionCobro); ?></td>
                        <td>
                        <?php if(auth()->user()->is_admin): ?>
                            <a href="<?php echo e(route('vendedor.edit', $vendedor)); ?>"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="<?php echo e(route('vendedor.destroy', $vendedor)); ?>"
                                style="display: inline">
                                <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este vendedor?')"
                                ><i class="fa fa-times"></i></button>
                            </form>
                        <?php endif; ?>
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