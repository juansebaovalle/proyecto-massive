<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


if (!empty($nombre) || !empty($email) || !empty($telefono) || !empty($asunto) ||
!empty($mensaje)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "formu_contacto"; 

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.myslqi_connect_error());
    }
    else{
        $SELECT = "SELECT telefono FROM contacto WHERE telefono = ? LIMIT 1";
        $INSERT = "INSERT INTO contacto (nombre,email,telefono,asunto,mensaje) VALUES (?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $telefono); 
        $stmt->bind_result($telefono_db);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows; 
        if($rnum == 0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssiss", $nombre, $email, $telefono, $asunto, $mensaje); 
            $stmt->execute();
            echo "Mensaje enviado.";
            $stmt->close();
        }
        else{
            echo "Alguien registró antes este número de teléfono.";
        }
        $conn->close();
    }

}
else {
    echo "Todos los datos son obligatorios.";
    die();
}
?>
