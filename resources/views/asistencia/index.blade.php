@extends('layouts.app')

@section('template_title')
    Asistencias
@endsection

@section('content')
<div>
    <div>
        <div>
            <div>
                <div>
                    <div
                        style="display: flex; padding: 20px; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Asistencias') }}
                        </span>

                        <div>
                            <a href="{{ route('asistencias.create') }}" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div style="background-color: red; border-radius: 5px;">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div style="padding: 20px;">
                    <div>
                    <table style="font-size: 15px;">
                                <thead style="font-size: 15px;">
                                <tr>
                                    <th>No</th>

                                    <th>Estudiante Id</th>
                                    <th>Docente Id</th>
                                    <th>Curso Id</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asistencias as $asistencia)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $asistencia->estudiante_id }}</td>
                                        <td>{{ $asistencia->docente_id }}</td>
                                        <td>{{ $asistencia->curso_id }}</td>
                                        <td>{{ $asistencia->fecha }}</td>
                                        <td>{{ $asistencia->estado }}</td>

                                        <td>
                                            <form action="{{ route('asistencias.destroy', $asistencia->id) }}"
                                                method="POST">
                                                <a href="{{ route('asistencias.show', $asistencia->id) }}"></i>
                                                    {{ __('Show') }}</a>
                                                <a href="{{ route('asistencias.edit', $asistencia->id) }}"><i></i>
                                                    {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i></i>
                                                    {{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $asistencias->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection


