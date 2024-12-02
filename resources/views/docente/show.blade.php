@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? __('Show') . " " . __('Docente') }}
@endsection

@section('content')
    <section>
        <div>
            <div>
                <div>
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;"  style="padding: 20px;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Docente</span>
                        </div>
                        <div>
                            <a href="{{ route('docentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div>
                        
                                <div>
                                    <strong>Nombre:</strong>
                                    {{ $docente->nombre }}
                                </div>
                                <div>
                                    <strong>Apellido:</strong>
                                    {{ $docente->apellido }}
                                </div>
                                <div>
                                    <strong>Email:</strong>
                                    {{ $docente->email }}
                                </div>
                                <div>
                                    <strong>Telefono:</strong>
                                    {{ $docente->telefono }}
                                </div>
                                <div>
                                    <strong>Departamento:</strong>
                                    {{ $docente->departamento }}
                                </div>
                                <div>
                                    <strong>Fecha Contratacion:</strong>
                                    {{ $docente->fecha_contratacion }}
                                </div>
                                <div>
                                    <strong>Estado Empleo:</strong>
                                    {{ $docente->estado_empleo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
