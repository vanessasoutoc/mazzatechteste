@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Alterar Paciente</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch']) !!}

            @include('patients.fields')

            {!! Form::close() !!}
        </div>
@endsection
