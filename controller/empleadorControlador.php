
<?php 
  if(isset($_POST['BTN_CREAR_EMPLEADO'])){
     echo 'CREAR EMPLEADO CON INFORMACION <br>';
    echo 'Nombre: '. $_POST['TXT_NOMBRE'].'<br>';
    echo 'Apellido: '. $_POST['TXT_APELLIDO'].'<br>';
    echo 'Pais: '. $_POST['TXT_PAIS'].'<br>';
    echo 'Edad '. $_POST['TXT_EDAD'].'<br>';
    
  }


?>