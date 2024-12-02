@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Pago
@endsection

@section('content')
    <section>
        <div>
            <div>

                <div>
                    <div>
                        <span>{{ __('Create') }} Pago</span>
                    </div>
                    <div style="padding: 20px;">
                        <form method="POST" action="{{ route('pagos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pago.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
