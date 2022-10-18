<?php
/**
 * Clase que se encarga de la construccion de la conexion con el Data Base
 * con el archivo db.php en la carpeta config
 */

    class userModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        /**
         * Funcion que recrea un proceso almacenado que inserta datos a el registro 
         * Datos
         *$id_departamento
         *$id_puesto
         *$id_bufete
         *$Nombre
         *$Apellidos
         *$Telefono
         *$Email
         *$Direccion
         */
        public function insertar($id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion){
            $stament = $this->PDO->prepare("INSERT INTO personal VALUES(null,:id_departamento,:id_puesto,:id_bufete,:Nombre,:Apellidos,:Telefono,:Email,:Direccion)");
            $stament->bindParam(":id_departamento",$id_departamento);
            $stament->bindParam(":id_puesto",$id_puesto);
            $stament->bindParam(":id_bufete",$id_bufete);
            $stament->bindParam(":Nombre",$Nombre);
            $stament->bindParam(":Apellidos",$Apellidos);
            $stament->bindParam(":Telefono",$Telefono);
            $stament->bindParam(":Email",$Email);
            $stament->bindParam(":Direccion",$Direccion);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

         /**
         * Funcion que recrea un proceso almacenado que muestra un dato especifico del registro
         * $id
         */

        public function show($ID_Personal){
            $stament = $this->PDO->prepare("SELECT * FROM personal where ID_Personal = :id limit 1");
            $stament->bindParam(":id",$ID_Personal);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        /**
         * Funcion que recrea un proceso almacenado que muestra los datos insertados en el regsitro
         */

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM personal");
            return ($stament->execute())?$stament->fetchAll() : false;
        }

         /**
         *  Funcion que recrea un proceso almacenado que actualiza los datos ingresados en el registro
         */

        public function update($ID_Personal,$id_departamento,$id_puesto,$id_bufete,$Nombre,$Apellidos,$Telefono,$Email,$Direccion){
            $stament = $this->PDO->prepare("UPDATE personal SET id_departamento = :id_departamento,id_puesto = :id_puesto, id_bufete = :id_bufete,Nombre = :Nombre,Apellidos = :Apellidos,Telefono = :Telefono,Email = :Email,Direccion = :Direccion WHERE ID_Personal = :id");
            $stament->bindParam(":id_departamento",$id_departamento);
            $stament->bindParam(":id_puesto",$id_puesto);
            $stament->bindParam(":id_bufete",$id_bufete);
            $stament->bindParam(":Nombre",$Nombre);
            $stament->bindParam(":Apellidos",$Apellidos);
            $stament->bindParam(":Telefono",$Telefono);
            $stament->bindParam(":Email",$Email);
            $stament->bindParam(":Direccion",$Direccion);
            $stament->bindParam(":id",$ID_Personal);
            
            return ($stament->execute()) ?$ID_Personal : false;

        }

        /**
         *Funcion que recrea un proceso almacenado que elimina un dato especifico del registro
         */

        public function delete($ID_Personal){
            $stament = $this->PDO->prepare("DELETE FROM personal WHERE ID_Personal = :id");
            $stament->bindParam(":id",$ID_Personal);
            return ($stament->execute()) ? true : false;
        }

        /**
         * Funcion que recrea un proceso almacenado que busca un dato especifico del registro
         */

         public function search(){
            $stament = $this->PDO->prepare("SELECT * FROM personal where ID_Personal = :id limit 1");
            $stament->bindParam(":id",$ID_Personal);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        
        /**
         * Funcion que recrea un proceso almacenado que muestra los datos del salario bruto, horas de trabajo y el id del personal ingresado
         * Datos
         * $salaraio_bruto
         * $horas_trabajo
         * $ID_Personal
         */
        
        public function salario($Salario_Bruto,$horas_trabajo,$ID_Personal){
            $stament = $this ->PDO->prepare("SELECT Salario_Bruto, Horas_trabajo, ID_Personal FROM puesto, salario, personal 
            WHERE ID_Personal =:ID_Personal");
            $stament->bindParam(":ID_Personal",$ID_Personal);
            $stament->bindParam(":Salario_Bruto",$Salario_Bruto);
            $stament->bindParam(":Horas_trabajo",$id_bufete);
            return ($stament->execute()) ? $stament->fetch() : false ;
         }
         
    }

?>