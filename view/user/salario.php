<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/Proyecto/controller/userController.php");
   
    $obj =new userController();
    $rows= $obj->salario();
?>

<?php

$alma = 1; $Sbruto = 0; $Sneto = 0; $Salma = 0; $Sextra = 0; $Sbase = 0;

foreach($rows as $final){
    $calbase = $final['Salario_Bruto'];


}

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>$rows</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/footer.php");
?>






