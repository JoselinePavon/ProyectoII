<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $servicio->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_cliente') }}
            {{ Form::text('direccion_cliente', $servicio->direccion_cliente, ['class' => 'form-control' . ($errors->has('direccion_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Cliente']) }}
            {!! $errors->first('direccion_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referencias') }}
            {{ Form::text('referencias', $servicio->referencias, ['class' => 'form-control' . ($errors->has('referencias') ? ' is-invalid' : ''), 'placeholder' => 'Referencias']) }}
            {!! $errors->first('referencias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_telefono') }}
            {{ Form::text('numero_telefono', $servicio->numero_telefono, ['class' => 'form-control' . ($errors->has('numero_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero Telefono']) }}
            {!! $errors->first('numero_telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_servicio') }}
            {{ Form::text('tipo_servicio', $servicio->tipo_servicio, ['class' => 'form-control' . ($errors->has('tipo_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Servicio']) }}
            {!! $errors->first('tipo_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <br>

        <div class="row">
            <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" onclick="save()" style="background-color: #9ecbe6">
                <i class="fas fa-save"></i> Guardar Producto
            </button>

            <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('home3')}}" style="background-color: #ff1457"><i
                    class="fas fa-ban"></i> Cancelar</a>
        </div>

    </div>

</div>

