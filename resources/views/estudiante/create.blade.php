@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Estudiante
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span class="card-title">{{ __('Create') }} Estudiante</span>
                    </div>
                    <div  style="padding: 20px;">
                        <form method="POST" action="{{ route('estudiantes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estudiante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
