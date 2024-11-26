@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Curso
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span>{{ __('Create') }} Curso</span>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('cursos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('curso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
