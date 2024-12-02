@extends('layouts.app')

@section('template_title')
    Docentes
@endsection

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">

                            <span id="card_title">
                                {{ __('Docentes') }}
                            </span>

                             <div>
                                <a href="{{ route('docentes.create') }}" data-placement="left">
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

                    <div style="padding: 20px;">
                        <div>
                            <table style="font-size: 15px;">
                                <thead style="font-size: 15px;">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre </th>
									<th >Apellido</th>
									<th >Email</th>
									<th >Telefono</th>
									<th >Departamento</th>
									<th >Fecha Contratacion</th>
									<th >Estado Empleo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $docente->nombre }}</td>
										<td >{{ $docente->apellido }}</td>
										<td >{{ $docente->email }}</td>
										<td >{{ $docente->telefono }}</td>
										<td >{{ $docente->departamento }}</td>
										<td >{{ $docente->fecha_contratacion }}</td>
										<td >{{ $docente->estado_empleo }}</td>

                                            <td>
                                                <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
                                                    <a href="{{ route('docentes.show', $docente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a href="{{ route('docentes.edit', $docente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $docentes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
