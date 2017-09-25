@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Pacientes</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('patients.create') !!}"><i class="glyphicon glyphicon-plus"></i> Novo</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('patients.table')
        
@endsection
