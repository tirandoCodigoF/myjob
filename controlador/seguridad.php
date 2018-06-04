//  <?php 
//         include "../vista/validar.php";
//  session_start(); 
// if (!isset($_SESSION['sesion_usuario'])) {
//   header("Location:index.php");
// }
// init_set(error_reporting('error_log(ingresa)'));

require_once("../clases/clases.php");

$objClases=new Clases();

$respuesta=$objClases->login($_POST["usuario"],$_POST["pass"]);
if ($respuesta!=1) {
echo "<script type='text/javascript'> alert('No Existe El Usuario');
window.location='index.php';
</script>";
}

        ?>