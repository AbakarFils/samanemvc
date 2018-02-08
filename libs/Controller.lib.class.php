<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/

class Controller{
        protected $view;
        public function __construct(){
            $this->view = new View();
        }
    /**
     * permet de charger un model
     * @param $name le nom du model à charger
     */
    function  loadModel($name)
    {
        $file ='model/'.$name.'.php'; //spécification du model dans le dossier model.
            require_once($file);
            if(!isset($this->$name))
            {
                $this->$name =new $name;
            }
    }
    }

?>
