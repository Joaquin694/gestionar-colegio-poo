@extends('layouts.app')

@section('template_title')
{{ $curso->name ?? __('Show') . " " . __('Curso') }}
@endsection

@section('content')
<section>
    <div>
        <div>
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center;"  style="padding: 20px;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Curso</span>
                    </div>
                    <div>
                        <a href="{{ route('cursos.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div>

                    <div>
                        <strong>Nombre:</strong>
                        {{ $curso->nombre }}
                    </div>
                    <div>
                        <strong>Descripcion:</strong>
                        {{ $curso->descripcion }}
                    </div>
                    <div>
                        <strong>Fecha Inicio:</strong>
                        {{ $curso->fecha_inicio }}
                    </div>
                    <div>
                        <strong>Fecha Fin:</strong>
                        {{ $curso->fecha_fin }}
                    </div>
                    <div>
                        <strong>Estado:</strong>
                        {{ $curso->estado }}
                    </div>
                    <div>
                        <strong>Docente Id:</strong>
                        {{ $curso->docente_id }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection