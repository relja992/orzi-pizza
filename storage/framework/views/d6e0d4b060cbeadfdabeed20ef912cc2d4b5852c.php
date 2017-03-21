<?php $__env->startSection('content'); ?>

	<h3>Sva jela</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th style="text-align:center">#</th>
					<th style="text-align:center">Naziv</th>
					<th style="text-align:center">Opis</th>
					<th style="text-align:center">Cene</th>
					<th style="text-align:center"></th>
					<th style="text-align:center"></th>
					<th style="text-align:center"></th>
					<th style="text-align:center">Slika</th>
					<th style="text-align:center">Kategorija</th>
					<th style="text-align:center"></th>
				</thead>

				<tbody>
					<?php foreach($categories as $category): ?>

						<?php foreach($products as $product): ?>

							<?php if($product->category_id == $category->id): ?>
							<tr>
								<td style="vertical-align:middle"><?php echo e($product->id); ?></td>
								<td style="vertical-align:middle"><?php echo e($product->name); ?></td>
								<td style="vertical-align:middle"><?php echo e(substr(strip_tags($product->description), 0, 50)); ?><?php echo e(strlen(strip_tags($product->description)) > 50 ? "..." : ""); ?></td>
								<td style="vertical-align:middle"><?php echo e($product->price); ?></td>

								<?php if($category->slug == 'pizza'): ?>
									<td style="vertical-align:middle"><?php echo e($product->price2); ?></td>
									<td style="vertical-align:middle"><?php echo e($product->price3); ?></td>
									<td></td>
								<?php elseif($category->slug == 'grill-kg'): ?>
									<td style="vertical-align:middle"><?php echo e($product->price2); ?></td>
									<td style="vertical-align:middle"><?php echo e($product->price3); ?></td>
									<td style="vertical-align:middle"><?php echo e($product->price4); ?></td>
								<?php else: ?>
									<td></td>
									<td></td>
									<td></td>
								<?php endif; ?>

								<td style="vertical-align:middle"><img src="<?php echo e(asset('/images/').'/'.$product->image); ?>" alt="" style="width:50px;height:50px;border-radius: 20%;"></td>
								<td style="vertical-align:middle"><?php echo e($product->category->name); ?></td>
								<td style="vertical-align:middle"><a href="<?php echo e(route('admin.product.show', $product->id)); ?>" class="btn btn-primary btn-sm">Izmeni</a></td>
							</tr>
							<?php endif; ?>

						<?php endforeach; ?>

					<?php endforeach; ?>

				</tbody>
			</table> <br><br><br><br><br>

			
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>