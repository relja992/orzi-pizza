@extends('admin.layout.admin')

@section('content')

	<h3>Dodavanje jela</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'admin.product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <br>
            <div class="form-group">
                {{ Form::label('name', 'Naziv jela') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'4')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Opis') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Kategorija') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Odaberi kategoriju', 'onchange' => 'java_script_:show(this.options[this.selectedIndex].value)']) }}
            </div>

            <div class="form-group">
                {{ Form::label('price', 'Cena (Pizza 24cm)') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>
            <div class="col-md-6 col-md-offset-3" id="hiddenDiv" style="border-style:solid; border-width:1px;">
                <h6>** Ne popunjavati za ostala jela</h6>
                <div class="form-group">
                    {{ Form::label('price2', 'Pizza 32cm') }}
                    {{ Form::text('price2', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('price3', 'Pizza 45cm') }}
                    {{ Form::text('price3', null, array('class' => 'form-control')) }}
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br>
            <div class="form-group">
                {{ Form::label('image', 'Fotografija') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Dodaj jelo', array('class' => 'btn btn-success')) }}
            {!! Form::close() !!}

        </div>
	</div>

@endsection