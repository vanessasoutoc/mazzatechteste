

<!-- Submit Field -->
<div class="form-group col-sm-12">

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
	{!! Form::submit('Salvar', ['class' => 'btn btn-primary pull-right']) !!}
	<a href="{!! route('patients.index') !!}" class="btn btn-default pull-right">Voltar</a>
</div>
@section('scripts')
<script type="text/javascript">
	$(function(){
      $('#datetimepicker1').datetimepicker({
        	format: 'DD/MM/YYYY',
        	//defaultDate: moment('2017-02-05', 'Y-m-d')->format('d/m/Y'),
        });
    });

</script>
	
@endsection
