@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Agendamentos do Dia</div>

                <div class="panel-body">
                @foreach($appontmentsday as $appointment)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Paciente: <b>{!! $appointment->patient->name !!}</b>
                                <div class="pull-right">
                                {!! date('d/m/Y H:i', strtotime($appointment->appointment_date)) !!}
                                </div>
                            <br>
                            Médico: <b>{!! $appointment->doctor->name !!}</b>
                          
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
