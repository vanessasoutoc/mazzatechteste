
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
<!-- Submit Field -->
<div class="form-group col-sm-12">
{!! Form::text('doctor_id', null, ['class' => 'form-control','id' => 'doctor_id','style'=>'display:none']) !!}
{!! Form::text('patient_id', null, ['class' => 'form-control','id' => 'patient_id','style'=>'display:none']) !!}
	{!! Form::label('Médico') !!}
	{!! Form::text('doctor', @$appointment->doctor->name, ['type'=>'select','class' => 'form-control','id' => 'doctor']) !!}
	{!! Form::label('Paciente') !!}
	{!! Form::text('patient', @$appointment->patient->name, ['class' => 'form-control', 'id' => 'patient']) !!}
	
	{!! Form::label('Data Consulta') !!}
	{!! Form::text('appointment_date', @$appointment->appointment_date, ['class' => 'form-control appointmentdate', 'id'=>'appointmentdate'] )!!}
	<br>
	{!! Form::submit('Adicionar', ['class' => 'btn btn-primary pull-right']) !!}
	<a href="{!! route('appointments.index') !!}" class="btn btn-default pull-right">Cancelar</a>
</div>
@section('scripts')


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">



	$(function(){
		var date = <?php echo json_encode(@$appointment->appointment_date); ?>;
		console.log(date);

		$('#appointmentdate').datetimepicker({
			format: 'DD/MM/YYYY HH:mm',
			defaultDate: date
		});
		

		$('#doctor').autocomplete({
			source: function (request, response) {
				var name = $('#doctor').val();
				$.ajax({
					url: "/doctorsjson",
					data: {'name':request.doctor}
				}).error(function(err){
					alert(err);
				}).success(function(data) {
     
                response($.map(data, function(value,key){
       
                	return {
                		label:value.id +' '+ value.name,
                		value:value.id +' '+ value.name
                	}   
                }))
            });   
			},
			select: function(event, ui){

				var label = ui.item.label;
				var value = ui.item.value;

				 var code = $('#doctor').val();
		
				 code = code.substr(0, code.indexOf(' '))

				 $("#doctor_id").val(code);
			},
			minLength: 5,
			delay: 100

		});
		
		$('#patient').autocomplete({
			source: function (request, response) {
				var name = $('#patient').val();
				$.ajax({
					url: "/patientsjson",
					data: {'name':request.patient}
				}).error(function(err){
					alert(err);
				}).success(function(data) {
      
                response($.map(data, function(value,key){
  
                	return {
                		label:value.id +' '+ value.name,
                		value:value.id +' '+ value.name
                	}   
                }))
            });   
			},
			select: function(event, ui){

				var label = ui.item.label;
				var value = ui.item.value;

				 var code = $('#patient').val();
		
				 code = code.substr(0, code.indexOf(' '))

				 $("#patient_id").val(code);
			},
			minLength: 5,
			delay: 100

		});

	});

</script>

@endsection
