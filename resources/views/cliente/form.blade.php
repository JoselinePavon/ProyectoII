<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3 style="border-bottom: 2px solid #1e84b8; color: #1e84b8; text-align: center;">Datos del cliente</h3>
                </div>
                <div style="text-align: center;">
                    <img src="https://cdn-icons-png.flaticon.com/512/7542/7542547.png" width="95px" height="85px" style="display: block; margin: 0 auto;">
                </div>

                <div class="form-group">
                    {{ Form::label('nombre_cliente') }}
                    {{ Form::text('nombre_cliente', null, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de quien recibe']) }}
                    {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('direccion_cliente') }}
                    {{ Form::text('direccion_cliente', null, ['class' => 'form-control' . ($errors->has('direccion_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Direccion de contacto']) }}
                    {!! $errors->first('direccion_cliente', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('numero_telefono') }}
                    {{ Form::text('numero_telefono',  null, ['class' => 'form-control' . ($errors->has('numero_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero Telefono']) }}
                    {!! $errors->first('numero_telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div>
                    <h3 style="border-bottom: 2px solid #1e84b8; color: #1e84b8; text-align: center;">Datos de la tarjeta</h3>
                </div>
                <div style="text-align: center;">
                    <img src="https://www.neothek.com/images/formas_pago/tarjetasDebito.jpg" width="180px" height="85px" style="display: block; margin: 0 auto;">
                </div>

                <div class="form-group">
                    {{ Form::label('Nombre del titular') }}
                    {{ Form::text('nombre_titular',  null, ['class' => 'form-control' . ($errors->has('nombre_titular') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del titular']) }}
                    {!! $errors->first('nombre_titular', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('Numero de tarjeta') }}
                    {{ Form::text('numero_tarjeta', null,['class' => 'form-control' . ($errors->has('numero_tarjeta') ? ' is-invalid' : ''), 'placeholder' => 'Numero de tarjeta']) }}
                    {!! $errors->first('numero_tarjeta', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('Fecha de caducidad') }}
                    {{ Form::text('fecha_caducidad',  null, ['class' => 'form-control' . ($errors->has('fecha_caducirdad') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de caducidad']) }}
                    {!! $errors->first('fecha_caducirdad', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('CVV') }}
                    {{ Form::text('cvv', null, ['class' => 'form-control' . ($errors->has('cvv') ? ' is-invalid' : ''), 'placeholder' => 'CVV']) }}
                    {!! $errors->first('cvv', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" onclick="realizarPago()" style="background-color: #9ecbe6">
                <i class="fas fa-save"></i> Pagar
            </button>

            <a class="btn btn-outline-light btn-xs col-md-4" href="{{ url('/shop') }}" style="background-color: #ff1457"><i class="fas fa-ban"></i> Cancelar</a>
        </div>

    </div>
</div>


