@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Novo Médico</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'doctors.store']) !!}

            @include('doctors.fields')

        {!! Form::close() !!}
    </div>
@endsection
