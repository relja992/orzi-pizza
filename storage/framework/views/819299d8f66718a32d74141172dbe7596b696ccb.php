<?php $__env->startSection('content'); ?>

	<h3>Stavke narudžbine</h3><br><br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<th style="text-align:center">#</th>
					<th style="text-align:center">Naziv jela</th>
					<th style="text-align:center">Opis</th>
					<th style="text-align:center">Prilozi</th>
					<th style="text-align:center">Cena</th>
					<th style="text-align:center">Tip</th>
				</thead>

				<tbody>
					<?php foreach($test as $orderItem): ?>
						<tr>
							<td style="vertical-align:middle"><?php echo e($i++); ?></td>
							<td style="vertical-align:middle"><?php echo e($orderItem->product->name); ?></td>
							<td style="vertical-align:middle"><?php echo e($orderItem->product->description); ?></td>
							<td style="vertical-align:middle"><?php echo e($orderItem->prilozi); ?></td>
							<?php if($orderItem->product->price2 == 0): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price); ?></td>
							<?php elseif($orderItem->size == 'small'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price); ?></td>
							<?php elseif($orderItem->size == 'medium'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price2); ?></td>
							<?php elseif($orderItem->size == 'large'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price3); ?></td>
							<?php elseif($orderItem->size == '200g'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price); ?></td>
							<?php elseif($orderItem->size == '300g'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price2); ?></td>
							<?php elseif($orderItem->size == '500g'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price3); ?></td>
							<?php elseif($orderItem->size == '1kg'): ?>
								<td style="vertical-align:middle"><?php echo e($orderItem->product->price4); ?></td>
							<?php endif; ?>
							<td style="vertical-align:middle"><?php echo e($orderItem->size); ?></td>
						</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
			<div>
				<h3 class="pull-right">Ukupno:&nbsp;<span class="label label-lg label-success pull-right"><?php echo e($ord->price); ?></span></h3>
			</div>
			<br><br><br><br>
			

			<div class="col-md-5">
				<h3>Podaci o naručiocu</h3><br>
				<table class="table table-bordered">
					<thead>
						<th style="text-align:center; width:250px">Ime i prezime</th>
						<th style="text-align:center; width:150px">Telefon</th>
						<th style="text-align:center; width:150px">Email</th>
					</thead>

					<tbody>
							<tr>
								<td style="vertical-align:middle"><?php echo e($ord->name); ?>&nbsp;<?php echo e($ord->name); ?></td>
								<td style="vertical-align:middle"><?php echo e($ord->telephone); ?></td>
								<td style="vertical-align:middle"><?php echo e($ord->email); ?></td>
							</tr>
					</tbody>
				</table>
			</div>

			<div class="col-md-7">
				<h3>Podaci za dostavu</h3><br>
				<table class="table table-bordered">
					<thead>
						<th style="text-align:center">Adresa</th>
						<th style="text-align:center">Stan</th>
						<th style="text-align:center">Sprat</th>
						<th style="text-align:center">Napomena</th>
					</thead>

					<tbody>
							<tr>
								<td style="vertical-align:middle; width:250px"><?php echo e($ord->address); ?></td>
								<td style="vertical-align:middle; width:50px"><?php echo e($ord->stan); ?></td>
								<td style="vertical-align:middle; width:50px"><?php echo e($ord->sprat); ?></td>
								<td style="vertical-align:middle; width:150px"><?php echo e($ord->napomena); ?></td>
							</tr>
					</tbody>
				</table>
			</div>

		</div>
		<?php if($ord->status == 'na čekanju'): ?>
				<div class="">
					<a href="<?php echo e(route('admin.orders.updatee', $ord->id)); ?>" class="btn btn-success btn-lg pull-right">Potvrdi naružbinu</a>
				</div>
			<?php elseif($ord->status == 'odobrena'): ?>
				<div>
					<h3 class="pull-right"><span class="label label-lg label-success pull-right">Poslato na dostavu</span></h3>
				</div>
			<?php endif; ?>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>