<h1 class="page-header">Sporlife Tabla Comprador</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Persona&a=Crud">Agregar Persona</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th >Telefono</th>
            <th >Codigo postal</th>
            <th >Correo</th>
            <th >Tarjeta</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->cp; ?></td>
            <td><?php echo $r->correo; ?></td>
            <td><?php echo $r->tarjeta; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Comprador&a=Crud&idcomprador=<?php echo $r->idcomprador; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Comprador&a=Eliminar&idcomprador=<?php echo $r->idcomprador; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
