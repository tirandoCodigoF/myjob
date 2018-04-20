<?php 

session_start();
$_SESSION=array();
session_destroy();

echo "<meta http-equiv='refresh' content='0';>";
echo "<script type='text/javascript'> alert('La Sesion Fue Cerrada Correctamente');
window.location='index.php';
</script>"
 ?>