<?php
    class userController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Proyecto/model/userModel.php");
            $this->model = new userModel();
        }
        public function guardar($id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion){
            $id_Personal = $this->model->insertar($id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion);
            return ($id_Personal!=false) ? header("Location:Create.php?id=".$id_Personal) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return($this->model->index()) ?$this->model->index():false;
        }
        public function update($ID_Personal,$id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion){
            return ($this->model->update($ID_Personal,$id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion)
                    != false) ?header("Location:show.php?id=".$ID_Personal):header("Location:index.php");
        }

        public function delete($ID_Personal){
            return ($this->model->delete($ID_Personal)) ? header("Location:index.php") : 
            header("Location:show.php?id=".$ID_Personal);
        }
        public function search($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:Buscar.php");
        }
       
        public function salario($Salario_Bruto,$horas_extras,$fecha){
            return($this->model->salario($Salario_Bruto,$horas_extras,$fecha) ?$this->model->salario($Salario_Bruto,$horas_extras,$fecha):header("Location:salario.php"));
        }
        
    }

?>