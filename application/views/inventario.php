<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitácora Electrónica de Obra</title>
</head>

<body>
<div class="container">
<br>
<br>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Producto
    </button>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('Inventario/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp" placeholder="Descripcion del producto">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" aria-describedby="emailHelp" placeholder="Precio del producto">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row) {?>
                <tr>
                  <th scope="row"><?php echo $row->id; ?></th>
                  <td><?php echo $row->descripcion; ?></td>
                  <td><?php echo $row->precio; ?></td>
                  <td> 
                    <a href="<?php echo site_url('Inventario/edit');?>/<?php echo $row->id;?>" data-toggle="modal" data-backdrop="false" data-target="#newProduct2">
                       <i class="fas fa-pencil-alt" style="font-size: 15px;"></i>     
                  </a>
			                         
                    <a href="<?php echo site_url('Inventario/delete');?>/<?php echo $row->id;?>">
                       <i class="fas fa-trash-alt" style="font-size: 25px;"></i>
                    </a> 
                  </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
     
    <div class="modal fade" id="newProduct2" tabindex="-1" role="dialog" aria-labelledby="newProductLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newProductLabel2">Editar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('Inventario/update')?>/<?php echo $row->id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" value="<?php echo $row->descripcion; ?>" name="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>
                        <input type="text" class="form-control" value="<?php echo $row->precio; ?>" name="precio">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" value="save">Actualizar</button>
                </form>
            </div>
            </div>
        </div>
    </div>

</body>