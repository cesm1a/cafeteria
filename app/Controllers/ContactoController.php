<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        echo view('contactos/header');
        echo view('contactos/centro');
        echo view('contactos/footer');
    }

    public function persona(){
        $data=[
            "titulo" => "SITIO DINAMICO"
        ];
        echo view('contactos/header');
        echo view('contactos/centro', $data);
        echo view('contactos/footer');
    }

}
