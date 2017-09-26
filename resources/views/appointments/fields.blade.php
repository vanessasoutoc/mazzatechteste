

<!-- Submit Field -->
<div class="form-group col-sm-12">

	{!! Form::label('Médico') !!}
	{!! Form::text('doctor_id', @$appointment->doctor->name, ['class' => 'form-control','id' => 'doctor']) !!}
	{!! Form::label('Paciente') !!}
	{!! Form::text('patient_id', @$appointment->patient->name, ['class' => 'form-control', 'id' => 'patient']) !!}
	
	{!! Form::label('Data Consulta') !!}
	{!! Form::text('appointment_date', @$appointment_date, ['class' => 'form-control appointmentdate', 'id'=>'appointmentdate'] )!!}
	<br>
	{!! Form::submit('Adicionar', ['class' => 'btn btn-primary pull-right']) !!}
	<a href="{!! route('appointments.index') !!}" class="btn btn-default pull-right">Cancelar</a>
</div>
@section('scripts')
<script type="text/javascript">
$(function(){
	var date = $('input[name="appointment_date"]').val();
	     
})

 $('#appointmentdate').datetimepicker({
        	format: 'DD/MM/YYYY HH:mm',
       		defaultDate: date
        });
	
	
  
    
</script>
	
@endsection
