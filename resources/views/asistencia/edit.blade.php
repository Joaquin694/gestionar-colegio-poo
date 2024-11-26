@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Asistencia
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span>{{ __('Update') }} Asistencia</span>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('asistencias.update', $asistencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('asistencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
