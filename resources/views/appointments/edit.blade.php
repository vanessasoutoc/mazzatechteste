@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Alterar Agendamento</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">


            {!! Form::model($appointment, ['route' => ['appointments.update', $appointment->id], 'method' => 'patch']) !!}
@include('appointments.fields')
            

            {!! Form::close() !!}
        </div>
@endsection