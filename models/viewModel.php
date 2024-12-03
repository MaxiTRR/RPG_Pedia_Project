<?php

class viewModel{
    //Modelo para obtener las Vistas
    protected static function get_view_model($views){
        $white_list = ["home"];

        //Chequea que la view pasada por parametro exista dentro de la lista de Views
        if(in_array($views, $white_list)){
            if(is_file("./views/contents/".$views."-view.php")){
                $content ="./views/contents/".$views."-view.php";
            }else{
                $content = '404';
            }
        }elseif($views == 'login' || $views == 'index'){
            $content = 'login';
        }else{
            $content = '404';
        }
        return $content;
    }
}