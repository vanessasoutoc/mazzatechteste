@extends('layouts.app')

@section('content')
    @include('doctors.show_fields')

    <div class="form-group">
           <a href="{!! route('doctors.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
