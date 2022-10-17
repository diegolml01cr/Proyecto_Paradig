<?php
    class userModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }


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
        public function show($ID_Personal){
            $stament = $this->PDO->prepare("SELECT * FROM personal where ID_Personal = :id limit 1");
            $stament->bindParam(":id",$ID_Personal);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM personal");
            return ($stament->execute())?$stament->fetchAll() : false;
        }
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
        public function delete($ID_Personal){
            $stament = $this->PDO->prepare("DELETE FROM personal WHERE ID_Personal = :id");
            $stament->bindParam(":id",$ID_Personal);
            return ($stament->execute()) ? true : false;
        }
         public function search(){
            $stament = $this->PDO->prepare("SELECT * FROM personal where ID_Personal = :id limit 1");
            $stament->bindParam(":id",$ID_Personal);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        
        public function salario($salaraio_bruto,$horas_trabajo,$ID_Personal){
            $stament = $this ->PDO->prepare("SELECT Salario_Bruto, Horas_trabajo, ID_Personal FROM puesto, salario, personal 
            WHERE ID_Personal =:ID_Personal");
            $stament->bindParam(":ID_Personal",$ID_Personal);
            $stament->bindParam(":Salario_Bruto",$id_bufete);
            $stament->bindParam(":Horas_trabajo",$id_bufete);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
      
    }

?>