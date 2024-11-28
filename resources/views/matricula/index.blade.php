@extends('layouts.app')

@section('template_title')
Matriculas
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">

                        <span id="card_title">
                            {{ __('Matriculas') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('matriculas.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
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
                                    <th>Fecha</th>
                                    <th>Tipo</th>
                                    <th>Monto</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($matriculas as $matricula)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $matricula->estudiante_id }}</td>
                                        <td>{{ $matricula->fecha }}</td>
                                        <td>{{ $matricula->tipo }}</td>
                                        <td>{{ $matricula->monto }}</td>
                                        <td>{{ $matricula->estado }}</td>

                                        <td>
                                            <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('matriculas.show', $matricula->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('matriculas.edit', $matricula->id) }}"><i
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
            {!! $matriculas->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection