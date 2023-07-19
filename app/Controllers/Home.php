<?php

namespace App\Controllers;
use App\Models\categoriasModel;

class Home extends BaseController
{
    public function index()
    {
     
        echo view('login/formlog');
      
    }

    public function nproductos(){
        echo view('contactos/header');
        echo view('panel/panel.php');
        echo view('panel/productos');
        echo view('contactos/footer');
    }

    public function venta(){
        echo view('contactos/header');
        echo view('panel/panel.php');
        echo view('panel/ventas');
        echo view('contactos/footer');
    }

    public function guardaVenta(){ 
        $data = array(    
         'idproducto' => $_POST['id'],
         'cantidadproducto' => $_POST['Cantidad'],
  
        );
 
         $Categoria = new categoriasModel();
         $dato=$Categoria->consultarStock($_POST['id']);
         $stock=0;
         foreach ($dato as $v) {
            $stock=$v->Stock;
        }
        
    
         
         if($stock >= $_POST['Cantidad']){

            $r=$Categoria->restarStock($_POST['id'], $_POST['Cantidad'], $stock);

            $Categoria->addVenta($data);

            $this->listaproductos();
         }else{
        echo"<h2>La cantidad de Stok es insuficiente</h2>";

            $this->listaproductos();
         }
        
     }

 

    public function addProducto(){ 
       $data = array(    
        'Nombre_producto' => $_POST['Nombre_producto'],
        'Referencia' => $_POST['Referencia'],
        'Precio' => $_POST['Precio'],
        'Peso' => $_POST['Peso'],
        'Categoria' => $_POST['Categoria'],
        'Stock' => $_POST['Stock'],
        'Fecha_creacion' => $_POST['Fecha_creacion']
       );

        $Categoria = new categoriasModel();
        $Categoria->addProducto($data);
        $this->listaproductos();
    }


    public function listaproductos(){
        $Categoria = new categoriasModel();
        $dato = $Categoria->mostrarProductos();
        //print_r($data);
        $data = [
            "datos"=> $dato
        ];
        echo view('contactos/header');
        echo view('panel/panel.php');
        echo view('panel/vieweproductos',$data);
        echo view('contactos/footer');
    }


    public function prueba(){
        $Categoria = new categoriasModel();
        $dato = $Categoria->mostraCategorias();
        //print_r($data);
        $data = [
            "datos"=> $dato
        ];

        return view('vistaprueba',$data);
    }
    
    public function formulario(){
        return view('formulario');
    }

    public function eliminarproducto(){
        $Categoria = new categoriasModel();
        $dato = $Categoria->eliminarproducto($_POST['id']);
       //echo $_POST['id'];
       $this->listaproductos();
    }

    public function actualizarproducto(){

       
        //modulo elimar empleados..!

        $Categoria = new categoriasModel();
        $dato = $Categoria->recuperaProducto($_POST['id']);
        //print_r($data);
        $data = [
            "datos"=> $dato
        ];

       // print_r($dato);

        echo view('contactos/header');
        echo view('panel/panel.php');
        echo view('panel/uproducto',$data);
        echo view('contactos/footer');

        
    }

    public function updateProducto(){
        $data = array(    
            'Nombre_producto' => $_POST['Nombre_producto'],
            'Referencia' => $_POST['Referencia'],
            'Precio' => $_POST['Precio'],
            'Peso' => $_POST['Peso'],
            'Categoria' => $_POST['Categoria'],
            'Stock' => $_POST['Stock'],
            'Fecha_creacion' => $_POST['Fecha_creacion']
           );
        $Categoria = new categoriasModel();
        $dato = $Categoria->actualizarProducto($_POST['id'], $data);
       //echo $_POST['id'];
       $this->listaproductos();
    }

    public function enviarPost()
    {
       // print_r($_POST);
       $Categoria=new categoriasModel();
       //$dato=$Categoria->mostraCategorias();
       $dato=$Categoria->validarUser($_POST['user'], $_POST['clave']);
       // print_r($dato);
       $nivel=0;
       foreach ($dato as $row) 
        {
        $nivel=$row->acceso;
        }
            if($dato == null)
            {
            $this->index();
            }else
            {
                echo view('contactos/header');
                echo view('panel/panel.php');
                echo view('contactos/footer.php');
                
            }
      
    }

    
}
