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

                <?php echo e(Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Odaberi kategoriju', 'required' => '', 'onchange' => 'filtriranjePolja(this);'])); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <?php echo e(Form::label('price', 'Cena', array('id' => 'prva'))); ?>

                <?php echo e(Form::text('price', null, array('class' => 'form-control', 'id' => 'prvaText'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="drugaDiv">
                <?php echo e(Form::label('price2', 'Cena 2', array('id' => 'druga'))); ?>

                <?php echo e(Form::text('price2', null, array('class' => 'form-control', 'id' => 'drugaText'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="trecaDiv">
                <?php echo e(Form::label('price3', 'Cena 3', array('id' => 'treca'))); ?>

                <?php echo e(Form::text('price3', null, array('class' => 'form-control', 'id' => 'trecaText'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="cetvrtaDiv">
                <?php echo e(Form::label('price4', 'Cena 4', array('id' => 'cetvrta'))); ?>

                <?php echo e(Form::text('price4', null, array('class' => 'form-control', 'id' => 'cetvrtaText'))); ?>

            </div>

            <div class="form-group" style="clear:both;">
                <?php echo e(Form::label('image', 'Fotografija')); ?>

                <?php echo e(Form::file('image',array('class' => 'form-control' , 'required' => ''))); ?>

            </div>

             <?php echo e(Form::submit('Dodaj jelo', array('class' => 'btn btn-success btn-lg'))); ?>

            <?php echo Form::close(); ?>


        </div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo asset('js/mojJS/script.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>