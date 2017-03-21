@extends('admin.layout.admin')

@section('content')

	<h3>Dodavanje jela</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'admin.product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <br>
            <div class="form-group">
                {{ Form::label('name', 'Naziv jela') }}
                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Opis') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Kategorija') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Odaberi kategoriju', 'required' => '', 'onchange' => 'filtriranjePolja(this);']) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                {{ Form::label('price', 'Cena', array('id' => 'prva')) }}
                {{ Form::text('price', null, array('class' => 'form-control', 'id' => 'prvaText')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="drugaDiv">
                {{ Form::label('price2', 'Cena 2', array('id' => 'druga')) }}
                {{ Form::text('price2', null, array('class' => 'form-control', 'id' => 'drugaText')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="trecaDiv">
                {{ Form::label('price3', 'Cena 3', array('id' => 'treca')) }}
                {{ Form::text('price3', null, array('class' => 'form-control', 'id' => 'trecaText')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="cetvrtaDiv">
                {{ Form::label('price4', 'Cena 4', array('id' => 'cetvrta')) }}
                {{ Form::text('price4', null, array('class' => 'form-control', 'id' => 'cetvrtaText')) }}
            </div>

            <div class="form-group" style="clear:both;">
                {{ Form::label('image', 'Fotografija') }}
                {{ Form::file('image',array('class' => 'form-control' , 'required' => '')) }}
            </div>

             {{ Form::submit('Dodaj jelo', array('class' => 'btn btn-success btn-lg')) }}
            {!! Form::close() !!}

        </div>
	</div>

@endsection

@section('script')
    <script src="{!! asset('js/mojJS/script.js') !!}"></script>
@endsection