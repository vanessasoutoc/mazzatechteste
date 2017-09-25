

<!-- Submit Field -->
<div class="form-group col-sm-12">

{!! Form::open(array('action' => 'PatientController@store')) !!}
	{!! Form::label('Nome') !!}
	{!! Form::text('name', @$name, ['class' => 'form-control']) !!}
	{!! Form::label('CPF') !!}
	{!! Form::text('cpf', @$cpf, ['class' => 'form-control']) !!}
	{!! Form::label('Nº Telefone') !!}
	{!! Form::text('cellphone', @$cellphone, ['class' => 'form-control']) !!}
		{!! Form::label('E-mail') !!}
	{!! Form::text('email', @$email, ['class' => 'form-control']) !!}
		{!! Form::label('Aniversário') !!}

		
		{!! Form::text('birth', @$birth, ['class' => 'form-control'] )!!}

	<br>
	{!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
	{!! Form::close() !!}
	<a href="{!! route('patients.index') !!}" class="btn btn-default pull-right">Cancel</a>
</div>
