@extends('admin.layout.admin')

@section('content')

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
					@foreach ($orders as $order)

						<tr>
							<td style="vertical-align:middle">{{ $order->id }}</td>
							<td style="vertical-align:middle">{{ date('M j, Y', strtotime($order->created_at)) }}</td>
							<td style="vertical-align:middle">{{ $order->name }} {{ $order->surname }}</td>
							<td style="vertical-align:middle">{{ $order->address }}/{{ $order->stan }}</td>
							<td style="vertical-align:middle">{{ $order->price }}</td>
							<td style="vertical-align:middle"><a href="{{ route('orders.details', $order->id) }}" class="btn btn-primary btn-sm">Detalji</a></td>
						</tr>

					@endforeach

				</tbody>
			</table> <br><br><br><br><br>

			
		</div>
	</div>

@endsection