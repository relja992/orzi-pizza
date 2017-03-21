@extends('admin.layout.admin')

@section('content')

	<h3>Izmena jela</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            
        {!! Form::model($proizvod, ['route' => ['admin.product.update', $proizvod->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <br>
            <div class="form-group">
                {{ Form::label('name', 'Naziv jela') }}
                {{ Form::text('name', $proizvod->name, array('class' => 'form-control', 'required' => '')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Opis') }}
                {{ Form::text('description', $proizvod->description, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Kategorija') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder' => 'Odaberi kategoriju', 'id' => 'mojSelect', 'required' => '', 'onchange' => 'filtriranjePolja2(this);']) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                {{ Form::label('price', 'Cena', array('id' => 'prva')) }}
                {{ Form::text('price', $proizvod->price, array('class' => 'form-control', 'id' => 'prvaText')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="drugaDiv">
                {{ Form::label('price2', 'Cena 2', array('id' => 'druga')) }}
                {{ Form::text('price2', $proizvod->price2, array('class' => 'form-control', 'id' => 'drugaText')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="trecaDiv">
                {{ Form::label('price3', 'Cena 3', array('id' => 'treca')) }}
                {{ Form::text('price3', $proizvod->price3, array('class' => 'form-control', 'id' => 'trecaText')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2" style="display:none" id="cetvrtaDiv">
                {{ Form::label('price4', 'Cena 4', array('id' => 'cetvrta')) }}
                {{ Form::text('price4', $proizvod->price4, array('class' => 'form-control', 'id' => 'cetvrtaText')) }}
            </div>

            <div class="form-group" style="clear:both;">
                {{ Form::label('image', 'Fotografija') }}<br>
                <img src="{{ asset('/images/').'/'.$proizvod->image }}" id="picture" style="width:300px;height:300px;">
                {{ Form::file('image',array('class' => 'form-control' , 'required' => '', 'onChange' => 'onFileSelected(event)')) }}
            </div>

            <div class="form-group col-md-8 col-md-offset-2"  id="idDiv" style="visibility:hidden">
                
                <h6 id="kategorija">{{ $proizvod->category->name }}</h6>
            </div><br><br><br>

             {{ Form::submit('Izmeni jelo', array('class' => 'btn btn-success btn-lg')) }}
            {!! Form::close() !!}

        </div>
	</div>

@endsection

@section('script')
    <script src="{!! asset('js/mojJS/script2.js') !!}"></script>
@endsection