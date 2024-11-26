@extends('layouts.app')

@section('template_title')
    Cursos
@endsection

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">

                            <span id="card_title">
                                {{ __('Cursos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <<table style="font-size: 15px;">
                                <thead style="font-size: 15px;">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Descripcion</th>
									<th >Fecha Inicio</th>
									<th >Fecha Fin</th>
									<th >Estado</th>
									<th >Docente Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $curso->nombre }}</td>
										<td >{{ $curso->descripcion }}</td>
										<td >{{ $curso->fecha_inicio }}</td>
										<td >{{ $curso->fecha_fin }}</td>
										<td >{{ $curso->estado }}</td>
										<td >{{ $curso->docente_id }}</td>

                                            <td>
                                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cursos.show', $curso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cursos.edit', $curso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cursos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
