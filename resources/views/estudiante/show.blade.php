@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? __('Show') . " " . __('Estudiante') }}
@endsection

@section('content')
    <section>
        <div>
            <div>
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center;"  style="padding: 20px;">
                        <div>
                            <span>{{ __('Show') }} Estudiante</span>
                        </div>
                        <div>
                            <a href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div>
                        
                                <div>
                                    <strong>Nombre:</strong>
                                    {{ $estudiante->nombre }}
                                </div>
                                <div>
                                    <strong>Apellido:</strong>
                                    {{ $estudiante->apellido }}
                                </div>
                                <div>
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $estudiante->fecha_nacimiento }}
                                </div>
                                <div>
                                    <strong>Direccion:</strong>
                                    {{ $estudiante->direccion }}
                                </div>
                                <div>
                                    <strong>Telefono:</strong>
                                    {{ $estudiante->telefono }}
                                </div>
                                <div>
                                    <strong>Email:</strong>
                                    {{ $estudiante->email }}
                                </div>
                                <div>
                                    <strong>Fecha Matricula:</strong>
                                    {{ $estudiante->fecha_matricula }}
                                </div>
                                <div>
                                    <strong>Estado Matricula:</strong>
                                    {{ $estudiante->estado_matricula }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
