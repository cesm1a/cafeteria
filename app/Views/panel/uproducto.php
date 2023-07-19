<?php foreach ($datos as $v):?>
    
<body>
<!-- Begin Page Content -->
<div class="container-fluid">

   <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Crear Nuevo Producto</h6>
    </div>
    <div class="card-body">

  <div class="container">
    <h2>Formulario de Productos</h2>
    <form action="<?php echo base_url();?>/updateProducto" method="post">
    <input type="hidden" value="<?= $v->ID ?>" name="id">
    <div class="form-group">
    <label for="Nombre del Producto">Nombre del Producto</label>
    <input type="text" value="<?=$v->Nombre_producto?>" class="form-control" name="Nombre_producto" id="Nombre_producto" required>
    </div>
    <div class="form-group">
    <label for="Referencia">Referencia:</label>
    <input type="text" value="<?=$v->Referencia?>" class="form-control" name="Referencia" id="Referencia" required>
    </div>
    
    <div class="form-group">
    <label for="Precio">Precio:</label>
    <input type="text" value="<?=$v->Precio?>" class="form-control" name="Precio" id="Precio" required>
    </div>

    <div class="form-group">
    <label for="Peso">Peso:</label>
    <input type="text" value="<?=$v->Peso?>" class="form-control" name="Peso" id="Peso" required>
    </div>
    <div class="form-group">
    <label for="direccion">Categoria:</label>
    <input type="text" value="<?=$v->Categoria?>" class="form-control" name="Categoria" id="Categoria" required>
    </div>
    <div class="form-group">
    <label for="ciudad">Stock:</label>
    <input type="text" value="<?=$v->Stock?>" class="form-control" name="Stock" id="Stock" required>
    </div>
    <div class="form-group">
    <label for="ciudad">Fecha:</label>
    <input type="date" value="<?=$v->Fecha_creacion?>" class="form-control" name="Fecha_creacion" id="Fecha_creacion" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
  </tbody>

  <?php endforeach ?>