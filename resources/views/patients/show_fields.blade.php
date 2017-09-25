<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $patient->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $patient->name !!}</p>
</div>

<!-- Cpf Field -->
<div class="form-group">
    {!! Form::label('cpf', 'Cpf:') !!}
    <p>{!! $patient->cpf !!}</p>
</div>

<!-- Cellphone Field -->
<div class="form-group">
    {!! Form::label('cellphone', 'Cellphone:') !!}
    <p>{!! $patient->cellphone !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $patient->email !!}</p>
</div>

<!-- Birth Field -->
<div class="form-group">
    {!! Form::label('birth', 'Birth:') !!}
    <p>{!! \Carbon\Carbon::parse($patient->birth)->format('d/m/Y') !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $patient->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $patient->updated_at !!}</p>
</div>

