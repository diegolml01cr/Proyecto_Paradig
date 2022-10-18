<?php
/**
 * Clase principal donde se va efectuar los cambios en el Crud
 */

    class userController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Proyecto/model/userModel.php");
            $this->model = new userModel();
        }
        
        /**
         *Funcion que guarda los datos insertados
         *Datos
         * $id_departamento
         * $id_puesto
         * $id_bufete
         * $Nombre
         * $Apellidos
         * $Telefono
         * $Email
         * $Direccion
         */
        public function guardar($id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion){
            $id_Personal = $this->model->insertar($id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion);
            return ($id_Personal!=false) ? header("Location:Create.php?id=".$id_Personal) : header("Location:create.php");
        }
        /**
         * Funcion que muestra un dato especifico mediante el id de cada dato insertado
         * $id
         */
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        /**
         * Funcion que muestra los datos insertados
         *Datos
         * $id_departamento
         * $id_puesto
         * $id_bufete
         * $Nombre
         * $Apellidos
         * $Telefono
         * $Email
         * $Direccion
         */
        public function index(){
            return($this->model->index()) ?$this->model->index():false;
        }
        
        /**
         * Funcion que actualiza los datos ingresados
         * Datos
         * $id_departamento
         * $id_puesto
         * $id_bufete
         * $Nombre
         * $Apellidos
         * $Telefono
         * $Email
         * $Direccion
         */
        public function update($ID_Personal,$id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion){
            return ($this->model->update($ID_Personal,$id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion)
                    != false) ?header("Location:show.php?id=".$ID_Personal):header("Location:index.php");
        }
        /**
         *Funcion que elimina un dato especifico mediante su id
         * $id
         */
        public function delete($ID_Personal){
            return ($this->model->delete($ID_Personal)) ? header("Location:index.php") : 
            header("Location:show.php?id=".$ID_Personal);
        }

        public function search($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:Buscar.php");
        }
        /**
         * Funcion que muestra los datos del salario bruto, horas de trabajo y el id del personal ingresado
         * Datos
         * $salaraio_bruto
         * $
         * $ID_Personal
         */
        public function salario($Salario_Bruto,$horas_extras,$fecha){
            return($this->model->salario($Salario_Bruto,$horas_extras,$fecha) ?$this->model->salario($Salario_Bruto,$horas_extras,$fecha):header("Location:salario.php"));
        }
        
    }

?>