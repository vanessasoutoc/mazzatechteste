<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Home</a>
    <a href="{!! url('/appointments') !!}">Agendamentos</a>
      <a href="{!! url('/doctors') !!}">Médicos</a>
      <a href="{!! url('/patients') !!}">Pacientes</a>

</li>
