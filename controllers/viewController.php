<?php
require_once './models/viewModel.php';

class viewController extends viewModel{
    //Controlador para Obtener la plantilla y mostrarla en el index
    public function get_template_controller(){
        return require_once './views/template.php';
    }

    //Controlador para Obtener la view
    public function get_view_controller(){
        if(isset($_GET['views'])){
            $route = explode('/', $_GET['views']);
            $res = viewModel::get_view_model($route[0]);
        }else{
            $res = 'login';
        }
        return $res;
    }
}