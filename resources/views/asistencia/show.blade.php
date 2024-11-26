@extends('layouts.app')

@section('template_title')
{{ $asistencia->name ?? __('Show') . " " . __('Asistencia') }}
@endsection

@section('content')
<section>
    <div>
        <div>
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <span>{{ __('Show') }} Asistencia</span>
                    </div>
                    <div">
                        <a href="{{ route('asistencias.index') }}"> {{ __('Back') }}</a>
                </div>
            </div>

            <div>

                <div>
                    <strong>Estudiante Id:</strong>
                    {{ $asistencia->estudiante_id }}
                </div>
                <div>
                    <strong>Docente Id:</strong>
                    {{ $asistencia->docente_id }}
                </div>
                <div>
                    <strong>Curso Id:</strong>
                    {{ $asistencia->curso_id }}
                </div>
                <div>
                    <strong>Fecha:</strong>
                    {{ $asistencia->fecha }}
                </div>
                <div>
                    <strong>Estado:</strong>
                    {{ $asistencia->estado }}
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
@endsection