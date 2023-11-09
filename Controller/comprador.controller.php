<?php
require_once 'Model/comprador.php';

class CompradorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Comprador();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/comprador.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Comprador();
        
        if(isset($_REQUEST['idcomprador'])){
            $alm = $this->model->getting($_REQUEST['idcomprador']);
        }
        
        require_once 'View/header.php';
        require_once 'View/comprador-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Comprador();
        
        $alm->idcomprador = $_REQUEST['idcomprador'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellido = $_REQUEST['apellido'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->cp = $_REQUEST['cp'];
        $alm->correo = $_REQUEST['correo'];
        $alm->tarjeta = $_REQUEST['tarjeta'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idcomprador > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idcomprador > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcomprador']);
        header('Location: index.php');
    }
}
