
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ventas Producto</h6>
    </div>
    <div class="card-body">
  <div class="container">
    <h2>Formulario de Ventas</h2>
    <form action="<?php echo base_url();?>/guardaVenta" method="post">
    
    <input type="hidden" value="<?=$_POST['id']?>" name="id">
      <div class="form-group">
        <label for="Cantidad">Cantidad Venta Producto #:<?=$_POST['id']?></label>
        <input type="text" class="form-control" name="Cantidad" id="Cantidad" required>
      </div>

    

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  </tbody>