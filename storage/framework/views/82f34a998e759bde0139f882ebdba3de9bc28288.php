<?php $__env->startSection('content'); ?>

	<h3>Sva jela</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Naziv</th>
					<th>Opis</th>
					<th>Cena</th>
					<th>Slika</th>
					<th>Kategorija</th>
					<th></th>
				</thead>

				<tbody>
					
					<?php foreach($products as $product): ?>
						
						<tr>
							<th><?php echo e($product->id); ?></th>
							<td><?php echo e($product->name); ?></td>
							<td><?php echo e(substr(strip_tags($product->description), 0, 50)); ?><?php echo e(strlen(strip_tags($product->description)) > 50 ? "..." : ""); ?></td>
							<td><?php echo e($product->cena); ?></td>
							<td><?php echo e($product->image); ?></td>
							<td><?php echo e($product->category->name); ?></td>
							<td><a href="<?php echo e(route('admin.product.index', $product->id)); ?>" class="btn btn-primary btn-sm">Izmeni</a></td>
							<td><a href="<?php echo e(route('admin.product.destroy', $product->id)); ?>" class="btn btn-primary btn-sm">Obriši</a></td>
						</tr>

					<?php endforeach; ?>

				</tbody>
			</table> <br><br><br><br><br>

			<ul>
			    <?php $__empty_1 = true; foreach($products as $product): $__empty_1 = false; ?>
			    <li>
			        <h4>Naziv jel:<?php echo e($product->name); ?></h4>
			        <h4>Kategorija:<?php echo e(count($product->category)?$product->category->name:"N/A"); ?></h4>
			        <form action="<?php echo e(route('admin.product.destroy',$product->id)); ?>"  method="POST">
			           <?php echo e(csrf_field()); ?>

			           <?php echo e(method_field('DELETE')); ?>

			           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			         </form>

			    </li>

			        <?php endforeach; if ($__empty_1): ?>

			        <h3>No products</h3>

			    <?php endif; ?>
			</ul>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>