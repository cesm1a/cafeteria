<?php
namespace App\Models;
use CodeIgniter\Model;

class categoriasModel extends Model
{
    public function mostraCategorias(){
        $objeto=$this->db->query('select * from t_categories');
        return $objeto->getResult();
    }

    public function mostrarProductos(){
        $objeto=$this->db->query('select * from productos');
        return $objeto->getResult();
    }

    public function validarUser($c,$p){
        $objeto=$this->db->query("SELECT * FROM user where correo='".$c."' and clave='".$p."'");
        return $objeto->getResult();
    }

    public function recuperaProducto($id){
        $objeto=$this->db->query("SELECT * FROM productos where ID=$id");
        return $objeto->getResult();
    }

    public function validarPersona($id_doc){
        $objeto=$this->db->query("SELECT * FROM empleados where documentoid=$id_doc");
        return $objeto->getResult();
    }

    public function addProducto($data){
    
        $db = \Config\Database::connect();
        $db->table('productos')->insert($data);
        
    }

    public function addVenta($data){
    
        $db = \Config\Database::connect();
        $db->table('ventas')->insert($data);
        
    }

    public function consultarStock($id){
        $objeto=$this->db->query("SELECT Stock FROM productos where ID=$id");
        return $objeto->getResult();
    }

    public function restarStock($id, $cant,  $stock){
       $cac=$stock-$cant;
        $db = \Config\Database::connect();
        $builder =$db->table('productos');
        $builder->set('Stock', $cac, false);
        $builder->where('ID', $id);
        $builder->update();
   
    }

    public function actualizarProducto($id, $data){
    
        $db = \Config\Database::connect();
        $builder = $db->table('productos')->where('ID', $id);
        $builder->update($data);
        
    }

    public function eliminarproducto($id){
    
        $db = \Config\Database::connect();
        $builder = $db->table('productos')->where('ID', $id);
        $builder->delete();
        
    }


    
  

}