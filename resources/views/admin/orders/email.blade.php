<!DOCTYPE html>
<html>
<head>
    <title>Admin Sektor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
	<h2>Broj porudžbine:&nbsp;<strong>{{ $ord->id }}</strong></h2>
	<h3>Stavke narudžbine</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered " style="border: 1px solid black; border-collapse: collapse;">
				<thead>
					<th style="text-align:center; border: 1px solid black;">#</th>
					<th style="text-align:center; border: 1px solid black;">Naziv jela</th>
					<th style="text-align:center; border: 1px solid black;">Opis</th>
					<th style="text-align:center; border: 1px solid black;">Cena</th>
					<th style="text-align:center; border: 1px solid black;">Veličina</th>
				</thead>

				<tbody>
					@foreach ($test as $orderItem)
						<tr>
							<td style="vertical-align:middle; border: 1px solid black;">{{ $i++ }}</td>
							<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->product->name }}</td>
							<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->product->description }}</td>
							@if($orderItem->product->price2 == 0)
								<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->product->price }}</td>
							@elseif($orderItem->size == 'small')
								<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->product->price }}</td>
							@elseif($orderItem->size == 'medium')
								<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->product->price2 }}</td>
							@elseif($orderItem->size == 'large')
								<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->product->price3 }}</td>
							@endif
							<td style="vertical-align:middle; border: 1px solid black;">{{ $orderItem->size }}</td>
						</tr>
					@endforeach

				</tbody>
			</table>
			<div>
				<h3 class="pull-right">Ukupno:&nbsp;<span class="label label-lg label-success pull-right">{{ $ord->price }}</span></h3>
			</div>
			<br><br>
			

			<div class="col-md-5">
				<h3>Podaci o naručiocu</h3>
				<table class="table table-bordered" style="border: 1px solid black; border-collapse: collapse;">
					<thead>
						<th style="text-align:center; width:250px; border: 1px solid black;">Ime i prezime</th>
						<th style="text-align:center; width:150px; border: 1px solid black;">Telefon</th>
						<th style="text-align:center; width:150px; border: 1px solid black;">Email</th>
					</thead>

					<tbody>
							<tr>
								<td style="vertical-align:middle; border: 1px solid black;">{{ $ord->name }}&nbsp;{{ $ord->name }}</td>
								<td style="vertical-align:middle; border: 1px solid black;">{{ $ord->telephone }}</td>
								<td style="vertical-align:middle; border: 1px solid black;">{{ $ord->email }}</td>
							</tr>
					</tbody>
				</table>
			</div>

			<div class="col-md-7">
				<h3>Podaci za dostavu</h3>
				<table class="table table-bordered" style="border: 1px solid black; border-collapse: collapse;">
					<thead>
						<th style="text-align:center; border: 1px solid black;">Adresa</th>
						<th style="text-align:center; border: 1px solid black;">Stan</th>
						<th style="text-align:center; border: 1px solid black;">Sprat</th>
						<th style="text-align:center; border: 1px solid black;">Napomena</th>
					</thead>

					<tbody>
							<tr>
								<td style="vertical-align:middle; width:250px; border: 1px solid black;">{{ $ord->address }}</td>
								<td style="vertical-align:middle; width:50px; border: 1px solid black;">{{ $ord->stan }}</td>
								<td style="vertical-align:middle; width:50px; border: 1px solid black;">{{ $ord->sprat }}</td>
								<td style="vertical-align:middle; width:150px; border: 1px solid black;">{{ $ord->napomena }}</td>
							</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>

</body>
</html>