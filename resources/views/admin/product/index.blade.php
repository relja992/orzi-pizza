@extends('admin.layout.admin')

@section('content')

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
					
					@foreach ($products as $product)
						
						<tr>
							<th>{{ $product->id }}</th>
							<td>{{ $product->name }}</td>
							<td>{{ substr(strip_tags($product->description), 0, 50) }}{{ strlen(strip_tags($product->description)) > 50 ? "..." : "" }}</td>
							<td>{{ $product->cena }}</td>
							<td>{{ $product->image }}</td>
							<td>{{ $product->category->name }}</td>
							<td><a href="{{ route('admin.product.index', $product->id) }}" class="btn btn-primary btn-sm">Izmeni</a></td>
							<td><a href="{{ route('admin.product.destroy', $product->id) }}" class="btn btn-primary btn-sm">Obriši</a></td>
						</tr>

					@endforeach

				</tbody>
			</table> <br><br><br><br><br>

			<ul>
			    @forelse($products as $product)
			    <li>
			        <h4>Naziv jel:{{$product->name}}</h4>
			        <h4>Kategorija:{{count($product->category)?$product->category->name:"N/A"}}</h4>
			        <form action="{{route('admin.product.destroy',$product->id)}}"  method="POST">
			           {{csrf_field()}}
			           {{method_field('DELETE')}}
			           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			         </form>

			    </li>

			        @empty

			        <h3>No products</h3>

			    @endforelse
			</ul>
		</div>
	</div>

@endsection