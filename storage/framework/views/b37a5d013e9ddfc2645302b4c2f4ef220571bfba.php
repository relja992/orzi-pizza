<?php $__env->startSection('content'); ?>

	<h3>Dodavanje jela</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <?php echo Form::open(['route' => 'admin.product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']); ?>

            <br>
            <div class="form-group">
                <?php echo e(Form::label('name', 'Naziv jela')); ?>

                <?php echo e(Form::text('name', null, array('class' => 'form-control', 'required' => ''))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('description', 'Opis')); ?>

                <?php echo e(Form::text('description', null, array('class' => 'form-control'))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('category_id', 'Kategorija')); ?>

                <?php echo e(Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Odaberi kategoriju', 'required' => ''])); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('price', 'Cena (Pizza 24cm)')); ?>

                <?php echo e(Form::text('price', null, array('class' => 'form-control', 'required' => ''))); ?>

            </div>
            <div class="col-md-6 col-md-offset-3" id="hiddenDiv" style="border-style:solid; border-width:1px;">
                <h6>** Ne popunjavati za ostala jela</h6>
                <div class="form-group">
                    <?php echo e(Form::label('price2', 'Pizza 32cm')); ?>

                    <?php echo e(Form::text('price2', null, array('class' => 'form-control'))); ?>

                </div>

                <div class="form-group">
                    <?php echo e(Form::label('price3', 'Pizza 45cm')); ?>

                    <?php echo e(Form::text('price3', null, array('class' => 'form-control'))); ?>

                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br>
            <div class="form-group">
                <?php echo e(Form::label('image', 'Fotografija')); ?>

                <?php echo e(Form::file('image',array('class' => 'form-control'))); ?>

            </div>

             <?php echo e(Form::submit('Dodaj jelo', array('class' => 'btn btn-success'))); ?>

            <?php echo Form::close(); ?>


        </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>