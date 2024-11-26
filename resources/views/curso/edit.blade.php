@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Curso
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span>{{ __('Update') }} Curso</span>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('cursos.update', $curso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('curso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
