<?php

use Librerias\Controlador\Pantalla as Pantalla;

class InterfazUsuario extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $pantalla = new Pantalla();
        $pantalla->evento();
//        $this->load->view('Prototipos/prototipo_login');
    }
}
