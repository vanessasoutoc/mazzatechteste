<!-- Id Field -->
<div class="form-group">
    {!! Form::label('Médico', 'Médico:') !!}
    <p>{!! $appointment->doctor->name !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Paciente', 'Paciente:') !!}
    <p>{!! $appointment->patient->name !!}</p>
</div>

<!-- Crm Field -->
<div class="form-group">
    {!! Form::label('Data', 'Data:') !!}
    <p>{!! \Carbon\Carbon::parse($appointment->appointment_date)->format('d/m/Y H:i:s') !!}</p>
</div>

<!-- Created At Field 
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $appointment->created_at !!}</p>
</div>

<!-- Updated At Field
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $appointment->updated_at !!}</p>
</div>

