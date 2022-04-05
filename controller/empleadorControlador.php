<?php include('./conexionControlador.php') ?>
<?php 
  if(isset($_POST['BTN_CREAR_EMPLEADO'])){ 

    $cedula = $_POST['TXT_CEDULA'] ;
    $nom = $_POST['TXT_NOMBRE'];
    $apellido = $_POST['TXT_APELLIDO'];
    $pais = $_POST['TXT_PAIS'];
    $edad= $_POST['TXT_EDAD'];   
    $objConexion = new conexion();
    $query = "INSERT INTO empleado (id,cedula,nombre,apellido,edad,pais,estado) VALUES (NULL,'$cedula','$nom','$apellido','$edad','$pais','ACTIVO')";
             
    // echo $query;
    // return;
    $objConexion->ejecutar($query);
    header('Location: ../views/crearEmpleado.php');
  }


?>