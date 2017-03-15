@extends('admin.layout.admin')

@section('content')

	<h3>Stavke narudžbine</h3><br><br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<th style="text-align:center">#</th>
					<th style="text-align:center">Naziv jela</th>
					<th style="text-align:center">Opis</th>
					<th style="text-align:center">Cena</th>
					<th style="text-align:center">Tip</th>
				</thead>

				<tbody>
					@foreach ($test as $orderItem)
						<tr>
							<td style="vertical-align:middle">{{ $i++ }}</td>
							<td style="vertical-align:middle">{{ $orderItem->product->name }}</td>
							<td style="vertical-align:middle">{{ $orderItem->product->description }}</td>
							@if($orderItem->product->price2 == 0)
								<td style="vertical-align:middle">{{ $orderItem->product->price }}</td>
							@elseif($orderItem->size == 'small')
								<td style="vertical-align:middle">{{ $orderItem->product->price }}</td>
							@elseif($orderItem->size == 'medium')
								<td style="vertical-align:middle">{{ $orderItem->product->price2 }}</td>
							@elseif($orderItem->size == 'large')
								<td style="vertical-align:middle">{{ $orderItem->product->price3 }}</td>
							@endif
							<td style="vertical-align:middle">{{ $orderItem->size }}</td>
						</tr>
					@endforeach

				</tbody>
			</table>
			<div>
				<h3 class="pull-right">Ukupno:&nbsp;<span class="label label-lg label-success pull-right">{{ $ord->price }}</span></h3>
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
								<td style="vertical-align:middle">{{ $ord->name }}&nbsp;{{ $ord->name }}</td>
								<td style="vertical-align:middle">{{ $ord->telephone }}</td>
								<td style="vertical-align:middle">{{ $ord->email }}</td>
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
								<td style="vertical-align:middle; width:250px">{{ $ord->address }}</td>
								<td style="vertical-align:middle; width:50px">{{ $ord->stan }}</td>
								<td style="vertical-align:middle; width:50px">{{ $ord->sprat }}</td>
								<td style="vertical-align:middle; width:150px">{{ $ord->napomena }}</td>
							</tr>
					</tbody>
				</table>
			</div>

		</div>
		@if($ord->status == 'na čekanju')
				<div class="">
					<a href="{{ route('admin.orders.updatee', $ord->id) }}" class="btn btn-success btn-lg pull-right">Potvrdi naružbinu</a>
				</div>
			@elseif($ord->status == 'odobrena')
				<div>
					<h3 class="pull-right"><span class="label label-lg label-success pull-right">Poslato na dostavu</span></h3>
				</div>
			@endif
	</div>

@endsection