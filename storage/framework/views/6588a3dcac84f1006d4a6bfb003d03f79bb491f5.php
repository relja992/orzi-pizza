<?php $__env->startSection('content'); ?>

	<h2>Narudžbine</h2><br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<th style="text-align:center; width:100px">Broj naružbine</th>
					<th style="text-align:center">Vreme i datum</th>
					<th style="text-align:center">Naručilac</th>
					<th style="text-align:center">Adresa</th>
					<th style="text-align:center">Cena</th>
					<th style="text-align:center; width:100px">Status</th>
					<th style="text-align:center"></th>
				</thead>

				<tbody>
					<?php foreach($orders as $order): ?>

						<tr>
							<td style="vertical-align:middle"><?php echo e($order->id); ?></td>
							<td style="vertical-align:middle"><?php echo e(date('h:m', strtotime($order->created_at))); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(date('j.n.Y.', strtotime($order->created_at))); ?></td>
							<td style="vertical-align:middle"><?php echo e($order->name); ?> <?php echo e($order->surname); ?></td>
							<td style="vertical-align:middle"><?php echo e($order->address); ?>/<?php echo e($order->stan); ?></td>
							<td style="vertical-align:middle"><?php echo e($order->price); ?></td>
							<?php if($order->status == 'odobrena'): ?>
								<td style="vertical-align:middle"><h4><span class="label label-lg label-success">Odobreno</span></h4></td>
							<?php elseif($order->status != 'odobreno'): ?>
								<td style="vertical-align:middle"><h4><span class="label label-warning">Na čekanju</span></h4></td>
							<?php endif; ?>
							<td style="vertical-align:middle"><a href="<?php echo e(route('admin.orders.details', $order->id)); ?>" class="btn btn-primary btn-sm">Detalji</a></td>
						</tr>

					<?php endforeach; ?>

				</tbody>
			</table> 

			<div class="text-center"><?php echo $orders->links();; ?></div>

			
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>