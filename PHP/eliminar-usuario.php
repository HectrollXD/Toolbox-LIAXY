<?php
    include ("conexion_root.php");
    $datos = array();
    $errores = array();
    $usu = $_POST['usuario'];

    $QueryString = "DELETE FROM Usuarios WHERE NUsuario = '$usu'";
    $Query = $ConnectionString -> query($QueryString);
    if(! $Query){
        $errores['eliminar'] = "Hubo un error al eliminar el usuario.";
    }

    if(empty($errores)){
        $datos['exito'] = true;
        $datos['mensaje'] = "Se ha eliminado el usuario satisfactoriamente";
    }
    else{
        $datos['exito'] = false;
        $datos['errores'] = $errores;
    }
    echo json_encode($datos);
?>