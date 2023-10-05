<div class="box box-info" >
    <div class="box-body" >
        <div class="row" >
        <div class="col-lg" >

            {{ Form::text('codigo_producto', $produc->codigo_producto, ['class' => 'form-control' . ($errors->has('codigo_producto') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Producto', ]) }}
            {!! $errors->first('codigo_producto', '<div class="invalid-feedback">:message</div>') !!}

        </div>

        <div class="col-lg">

            {{ Form::text('nombre_producto', $produc->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
<br>
        <div class="row">
        <div class="col-lg">

            {{ Form::text('precio_venta', $produc->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-lg">

            {{ Form::text('marca', $produc->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
<br>
        <div class="row">
            <div class="col-lg">
                <div class="custom-file col-md-12">
                    <label for="foto_producto" class="form-label">Imagen</label>
                    {{ Form::file('foto_producto', ['class' => 'custom-file-input' . ($errors->has('foto_producto') ? ' is-invalid' : ''), 'id' => 'foto_producto']) }}
                    {!! $errors->first('foto_producto', '<div class="invalid-feedback">:message</div>') !!}
                    <label class="custom-file-label" for="foto_producto">Subir foto del producto</label>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg">

            {{ Form::text('categoria', $produc->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <br>

        <div class="row">
            <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" onclick="save()" style="background-color: #9ecbe6">
                <i class="fas fa-save"></i> Guardar Producto
            </button>


            <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('/producs') }}" style="background-color: #ff1457"><i
                    class="fas fa-ban"></i> Cancelar</a>
        </div>

