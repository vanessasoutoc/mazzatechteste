@extends('layouts.app')

@section('content')
    @include('appointments.show_fields')

    <div class="form-group">
           <a href="{!! route('appointments.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection