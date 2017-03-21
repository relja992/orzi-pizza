<!DOCTYPE html>
<html>
<head>
    <title>Admin Sektor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
</head>
<body>
	<h2>Broj porudžbine:&nbsp;<strong><?php echo e($ord->id); ?></strong></h2>
	<div class="row">
		<div class="col-md-12">
			
			<p>Vaša narudžbina je primljena. Isporučićemo je u roku od 45 min. U suprotnom je dobijate gratis.</p>

		</div>
	</div>

</body>
</html>