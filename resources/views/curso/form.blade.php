<div>
    <div>
        
        <div>
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $curso?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $curso?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="date" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ old('fecha_inicio', $curso?->fecha_inicio) }}" id="fecha_inicio" placeholder="Fecha Inicio">
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="fecha_fin" class="form-label">{{ __('Fecha Fin') }}</label>
            <input type="date" name="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" value="{{ old('fecha_fin', $curso?->fecha_fin) }}" id="fecha_fin" placeholder="Fecha Fin">
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $curso?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="docente_id" class="form-label">{{ __('Docente Id') }}</label>
            <select name="docente_id" class="form-control @error('docente_id') is-invalid @enderror"
                id="docente_id">
                <option value="">{{ __('Seleccione un docente') }}</option>
                @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}" {{ old('docente_id', $curso?->docente_id) == $docente->id ? 'selected' : '' }}>
                        {{ $docente->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('docente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>