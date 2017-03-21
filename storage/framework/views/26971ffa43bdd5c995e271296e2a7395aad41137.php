<?php $__env->startSection('content'); ?>

	<h3>Izmena jela</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            
        <?php echo Form::model($proizvod, ['route' => ['admin.product.update', $proizvod->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate'=>'']); ?>

            <br>
            <div class="form-group">
                <?php echo e(Form::label('name', 'Naziv jela')); ?>

                <?php echo e(Form::text('name', $proizvod->name, array('class' => 'form-control', 'required' => ''))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('description', 'Opis')); ?>

                <?php echo e(Form::text('description', $proizvod->description, array('class' => 'form-control'))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('category_id', 'Kategorija')); ?>

                <?php echo e(Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder' => 'Odaberi kategoriju', 'id' => 'mojSelect', 'required' => '', 'onchange' => 'filtriranjePolja2(this);'])); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <?php echo e(Form::label('price', 'Cena', array('id' => 'prva'))); ?>

                <?php echo e(Form::text('price', $proizvod->price, array('class' => 'form-control', 'id' => 'prvaText'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="drugaDiv">
                <?php echo e(Form::label('price2', 'Cena 2', array('id' => 'druga'))); ?>

                <?php echo e(Form::text('price2', $proizvod->price2, array('class' => 'form-control', 'id' => 'drugaText'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="trecaDiv">
                <?php echo e(Form::label('price3', 'Cena 3', array('id' => 'treca'))); ?>

                <?php echo e(Form::text('price3', $proizvod->price3, array('class' => 'form-control', 'id' => 'trecaText'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="cetvrtaDiv">
                <?php echo e(Form::label('price4', 'Cena 4', array('id' => 'cetvrta'))); ?>

                <?php echo e(Form::text('price4', $proizvod->price4, array('class' => 'form-control', 'id' => 'cetvrtaText'))); ?>

            </div>

            <div class="form-group" style="clear:both;">
                <?php echo e(Form::label('image', 'Fotografija')); ?><br>
                <img src="<?php echo e(asset('/images/').'/'.$proizvod->image); ?>" id="picture" style="width:300px;height:300px;">
                <?php echo e(Form::file('image',array('class' => 'form-control', 'onChange' => 'onFileSelected(event)'))); ?>

            </div>

            <div class="form-group col-md-8 col-md-offset-2"  id="idDiv" style="visibility:hidden">
                
                <h6 id="kategorija"><?php echo e($proizvod->category->name); ?></h6>
            </div><br><br><br>

             <?php echo e(Form::submit('Izmeni jelo', array('class' => 'btn btn-success btn-lg'))); ?>

            <?php echo Form::close(); ?>


        </div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo asset('js/mojJS/script2.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>