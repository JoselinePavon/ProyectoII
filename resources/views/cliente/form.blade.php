<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de quien recibe']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_cliente') }}
            {{ Form::text('direccion_cliente', $cliente->direccion_cliente, ['class' => 'form-control' . ($errors->has('direccion_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Direccion de contacto']) }}
            {!! $errors->first('direccion_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_telefono') }}
            {{ Form::text('numero_telefono', $cliente->numero_telefono, ['class' => 'form-control' . ($errors->has('numero_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero Telefono']) }}
            {!! $errors->first('numero_telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="row">
        <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" onclick="save()" style="background-color: #9ecbe6">
            <i class="fas fa-save"></i> Enviar formulario
        </button>

        <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('/home3')}}" style="background-color: #ff1457"><i
                class="fas fa-ban"></i> Cancelar</a>
    </div>
</div>
