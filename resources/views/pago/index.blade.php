@extends('layouts.app')

@section('template_title')
Pagos
@endsection

@section('content')
<div>
    <div>
        <div>
            <div>
                <div>
                    <div style="display: flex; padding: 20px; justify-content: space-between; align-items: center; padding: 20px;">

                        <span id="card_title">
                            {{ __('Pagos') }}
                        </span>

                        <div>
                            <a href="{{ route('pagos.create') }}"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div style="background-color: red; border-radius: 5px;">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body" style="padding: 20px;">
                    <div>
                    <table style="font-size: 15px;">
                                <thead style="font-size: 15px;">
                                <tr>
                                    <th>No</th>

                                    <th>Estudiante Id</th>
                                    <th>Monto</th>
                                    <th>Fecha Pago</th>
                                    <th>Concepto</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pagos as $pago)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $pago->estudiante_id }}</td>
                                        <td>{{ $pago->monto }}</td>
                                        <td>{{ $pago->fecha_pago }}</td>
                                        <td>{{ $pago->concepto }}</td>
                                        <td>{{ $pago->estado }}</td>

                                        <td>
                                            <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('pagos.show', $pago->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('pagos.edit', $pago->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                        class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $pagos->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection