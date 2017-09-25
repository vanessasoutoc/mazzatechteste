{!! Form::open(['route' => ['doctors.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('doctors.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('doctors.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Deseja excluir o registro?')"
    ]) !!}
</div>
{!! Form::close() !!}
