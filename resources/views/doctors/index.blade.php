@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Médicos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('doctors.create') !!}"><i class="glyphicon glyphicon-plus"></i> Novo</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('doctors.table')
        
@endsection
