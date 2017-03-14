<?php $__env->startSection('content'); ?>

	<h3>Narudžbine</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th style="text-align:center">#</th>
					<th style="text-align:center">Datum</th>
					<th style="text-align:center">Naručilac</th>
					<th style="text-align:center">Adresa</th>
					<th style="text-align:center">Cena</th>
					<th style="text-align:center"></th>
				</thead>

				<tbody>
					<?php foreach($orders as $order): ?>

						<tr>
							<td style="vertical-align:middle"><?php echo e($order->id); ?></td>
							<td style="vertical-align:middle"><?php echo e(date('M j, Y', strtotime($order->created_at))); ?></td>
							<td style="vertical-align:middle"><?php echo e($order->name); ?> <?php echo e($order->surname); ?></td>
							<td style="vertical-align:middle"><?php echo e($order->address); ?>/<?php echo e($order->stan); ?></td>
							<td style="vertical-align:middle"><?php echo e($order->price); ?></td>
							<td style="vertical-align:middle"><a href="<?php echo e(route('orders.details', $order->id)); ?>" class="btn btn-primary btn-sm">Detalji</a></td>
						</tr>

					<?php endforeach; ?>

				</tbody>
			</table> <br><br><br><br><br>

			
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>