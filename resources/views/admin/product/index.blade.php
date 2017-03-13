@extends('admin.layout.admin')

@section('content')

	<h3>Sva jela</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th style="text-align:center">#</th>
					<th style="text-align:center">Naziv</th>
					<th style="text-align:center">Opis</th>
					<th style="text-align:center"></th>
					<th style="text-align:center">Cene</th>
					<th style="text-align:center"></th>
					<th style="text-align:center">Slika</th>
					<th style="text-align:center">Kategorija</th>
					<th style="text-align:center"></th>
				</thead>

				<tbody>
					@foreach($categories as $category)

						@foreach ($products as $product)

							@if($product->category_id == $category->id)
							<tr>
								<td style="vertical-align:middle">{{ $product->id }}</td>
								<td style="vertical-align:middle">{{ $product->name }}</td>
								<td style="vertical-align:middle">{{ substr(strip_tags($product->description), 0, 50) }}{{ strlen(strip_tags($product->description)) > 50 ? "..." : "" }}</td>
								<td style="vertical-align:middle">{{ $product->price }}</td>

								@if($category->slug == 'pizza')
									<td style="vertical-align:middle">{{ $product->price2 }}</td>
									<td style="vertical-align:middle">{{ $product->price3 }}</td>
								@else
									<td></td>
									<td></td>
								@endif

								<td style="vertical-align:middle"><img src="{{ asset('/images/').'/'.$product->image }}" alt="" style="width:50px;height:50px;border-radius: 20%;"></td>
								<td style="vertical-align:middle">{{ $product->category->name }}</td>
								<td style="vertical-align:middle"><a href="{{ route('admin.product.index', $product->id) }}" class="btn btn-primary btn-sm">Izmeni</a></td>
								<td style="vertical-align:middle"><a href="{{ route('admin.product.destroy', $product->id) }}" class="btn btn-danger btn-sm">Obriši</a></td>
							</tr>
							@endif

						@endforeach

					@endforeach

				</tbody>
			</table> <br><br><br><br><br>

			
		</div>
	</div>

@endsection