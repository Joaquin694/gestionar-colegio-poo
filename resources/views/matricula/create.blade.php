@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Matricula
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span >{{ __('Create') }} Matricula</span>
                    </div>
                    <div style="padding: 20px;">
                        <form method="POST" action="{{ route('matriculas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('matricula.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
