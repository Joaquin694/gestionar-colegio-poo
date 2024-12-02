@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Docente
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span>{{ __('Create') }} Docente</span>
                    </div>
                    <div  style="padding: 20px;">
                        <form method="POST" action="{{ route('docentes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('docente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
