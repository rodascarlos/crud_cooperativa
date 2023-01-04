<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_contactado') }}
            {{ Form::date('fecha_contactado', $caracteristicaproducto->fecha_contactado, ['class' => 'form-control' . ($errors->has('fecha_contactado') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Contactado']) }}
            {!! $errors->first('fecha_contactado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_presentara') }}
            {{ Form::date('fecha_presentara', $caracteristicaproducto->fecha_presentara, ['class' => 'form-control' . ($errors->has('fecha_presentara') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Presentara']) }}
            {!! $errors->first('fecha_presentara', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario encargado') }}
            {{ Form::select('usuario_id', $usuarios, $caracteristicaproducto->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el usuario encargado']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente contactado') }}
            {{ Form::select('cliente_id', $clientes, $caracteristicaproducto->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el cliente contactado']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::select('producto_id', $productos, $caracteristicaproducto->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el producto']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('nombre', $caracteristicaproducto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios adicionales']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>