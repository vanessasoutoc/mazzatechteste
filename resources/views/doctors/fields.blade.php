

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
      
        {!! Form::label('Nome') !!}
        {!! Form::text('name', @$name, ['class' => 'form-control']) !!}
        {!! Form::label('CRM') !!}
        {!! Form::text('crm', @$crm, ['class' => 'form-control']) !!}
        {!! Form::label('Nº Telefone') !!}
        {!! Form::text('cellphone', @$crm, ['class' => 'form-control']) !!}
        <br>
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary pull-right']) !!}
        
        <a href="{!! url('/doctors') !!}" class="btn btn-default pull-right">Voltar</a>
    </div>

     
