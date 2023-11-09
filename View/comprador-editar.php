<h1 class="page-header">
    <?php echo $alm->idcomprador != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Comprador">Compradores</a></li>
  <li class="active"><?php echo $alm->idcomprador != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Comprador&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcomprador" value="<?php echo $alm->idcomprador; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->idcomprador != null ? $alm->nombre : "" ; ?>" class="form-control" placeholder="Ingrese su nombre " data-validacion-tipo="requerido|Nombre" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $alm->idcomprador != null ? $alm->apellido : ""  ; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|Apllido" />
    </div>
    
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="direccion" value="<?php echo $alm->idcomprador != null ? $alm->direccion : "" ; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|Direccion" />
    </div>
    
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="number" name="telefono" value="<?php echo $alm->telefono ; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|Telefono" />
    </div>
    
    <div class="form-group">
        <label>Codigo postal</label>
        <input type="number" name="cp" value="<?php echo $alm->cp ; ?>" class="form-control" placeholder="Ingrese su codigo postal" data-validacion-tipo="requerido|Cp" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->idcomprador != null ? $alm->correo : "" ; ?>" class="form-control" placeholder="Ingrese su correo" data-validacion-tipo="requerido|Correo" />
    </div>
    
    <div class="form-group">
        <label>Tarjeta</label>
        <input type="number" name="tarjeta" value="<?php echo $alm->tarjeta; ?>" class="form-control" placeholder="Ingrese su tarjeta" data-validacion-tipo="requerido|Tarjeta" />
    </div>
    

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
