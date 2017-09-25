

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::open(array('action' => 'DoctorController@store')) !!}
        {!! Form::label('Nome') !!}
        {!! Form::text('name', @$name, ['class' => 'form-control']) !!}
        {!! Form::label('CRM') !!}
        {!! Form::text('crm', @$crm, ['class' => 'form-control']) !!}
        {!! Form::label('Nº Telefone') !!}
        {!! Form::text('cellphone', @$crm, ['class' => 'form-control']) !!}
        <br>
        {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
        {!! Form::close() !!}
        <a href="{!! route('doctors.index') !!}" class="btn btn-default pull-right">Cancel</a>
    </div>


