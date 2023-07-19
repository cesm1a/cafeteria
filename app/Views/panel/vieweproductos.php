
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Gestion Productos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre Producto</th>
                        <th>Referencia</th>
                        <th>Precio</th>
                        <th>Peso</th>
                        <th>Categoria</th>
                        <th>Stock</th>       
                        <th>Admin</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Nombre Producto</th>
                        <th>Referencia</th>
                        <th>Precio</th>
                        <th>Peso</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Admin</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($datos as $v):?>
                    <tr>
                        <td><?= $v->Nombre_producto ?></td>
                        <td><?= $v->Referencia ?></td>
                        <td><?= number_format($v->Precio) ?></td>
                        <td><?= $v->Peso ?></td>
                        <td><?= $v->Categoria ?></td>
                        <td><?= $v->Stock ?></td>               
                        <td>
                        <table>
					<tr>
					<td>
                        <form action="<?php echo base_url();?>/eliminarproducto" method="post">
                            <input type="hidden" value="<?=$v->ID?>" name="id">
                            <button type="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
					<td>
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url();?>/nproductos">New</a></td>
				   <td>
                    <form action="<?php echo base_url();?>/actualizarproducto" method="post">
                        <input type="hidden" value="<?=$v->ID?>" name="id">
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                       </form></td>	

                       <td>
                       <form action="<?php echo base_url();?>/venta" method="post">
                        <input type="hidden" value="<?=$v->ID?>" name="id">
                        <button type="submit" class="btn btn-success btn-sm">venta</button>
                       </form>
                       </td>
                    </td>	

                    </tr>
					</table>    
                    </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

                </div>
                </div>