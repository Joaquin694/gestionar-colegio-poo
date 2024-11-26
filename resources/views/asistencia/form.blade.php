<div >
    <div >

        <div>
            <label for="estudiante_id" class="form-label">{{ __('Estudiante') }}</label>
            <select name="estudiante_id" class="form-control @error('estudiante_id') is-invalid @enderror"
                id="estudiante_id">
                <option value="">{{ __('Seleccione un estudiante') }}</option>
                @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}" {{ old('estudiante_id', $asistencia?->estudiante_id) == $estudiante->id ? 'selected' : '' }}>
                        {{ $estudiante->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div>
            <label for="docente_id" class="form-label">{{ __('Docente') }}</label>
            <select name="docente_id" class="form-control @error('docente_id') is-invalid @enderror" id="docente_id">
                <option value="">{{ __('Seleccione un docente') }}</option>
                @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}" {{ old('docente_id', $asistencia?->docente_id) == $docente->id ? 'selected' : '' }}>
                        {{ $docente->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('docente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div>
            <label for="curso_id" class="form-label">{{ __('Curso') }}</label>
            <select name="curso_id" class="form-control @error('curso_id') is-invalid @enderror" id="curso_id">
                <option value="">{{ __('Seleccione un curso') }}</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id', $asistencia?->curso_id) == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('curso_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
                value="{{ old('fecha', $asistencia?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div>
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror"
                value="{{ old('estado', $asistencia?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>