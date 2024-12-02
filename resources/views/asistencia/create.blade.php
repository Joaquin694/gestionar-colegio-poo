@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Asistencia
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span class="card-title">{{ __('Create') }} Asistencia</span>
                    </div>
                    <div style="padding: 20px;">
                        <form method="POST" action="{{ route('asistencias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('asistencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
