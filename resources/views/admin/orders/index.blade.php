@extends('admin.layout.admin')

@section('content')

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
					@foreach ($orders as $order)

						<tr>
							<td style="vertical-align:middle">{{ $order->id }}</td>
							<td style="vertical-align:middle">{{ date('h:m', strtotime($order->created_at)) }}&nbsp;&nbsp;&nbsp;&nbsp;{{ date('j.n.Y.', strtotime($order->created_at)) }}</td>
							<td style="vertical-align:middle">{{ $order->name }} {{ $order->surname }}</td>
							<td style="vertical-align:middle">{{ $order->address }}/{{ $order->stan }}</td>
							<td style="vertical-align:middle">{{ $order->price }}</td>
							@if($order->status == 'odobrena')
								<td style="vertical-align:middle"><h4><span class="label label-lg label-success">Odobreno</span></h4></td>
							@elseif($order->status != 'odobreno')
								<td style="vertical-align:middle"><h4><span class="label label-warning">Na čekanju</span></h4></td>
							@endif
							<td style="vertical-align:middle"><a href="{{ route('admin.orders.details', $order->id) }}" class="btn btn-primary btn-sm">Detalji</a></td>
						</tr>

					@endforeach

				</tbody>
			</table> <br><br><br><br><br>

			
		</div>
	</div>

@endsection