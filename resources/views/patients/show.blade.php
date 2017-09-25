@extends('layouts.app')

@section('content')
    @include('patients.show_fields')

    <div class="form-group">
           <a href="{!! route('patients.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
