<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/Proyecto/controller/userController.php");
   
    //$obj =new userController();
    //$rows= $obj->salario([0]);
?>

<?php

//$alma = 1; $Sbruto = 0; $Sneto = 0; $Salma = 0; $Sextra = 0; $Sbase = 0;

//foreach($rows as $final){
   // $calbase = $final['Salario_Bruto'];


//}

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">IDENTIFICACION</th>
      <th scope="col">SALARIO BRUTO</th>
      <th scope="col">SALARIO NETO</th>
      <th scope="col">REDUCCION SALARIAL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>NULL</td>
      <td>NULL</td>
      <td>NULL</td>
      <td>NULL</td>
    </tr>
    <a href="/index.php" class="btn btn-primary"><i class="bi bi-arrow-bar-right">REGRESAR</i></a>
  </tbody>
</table>

<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/footer.php");
?>






