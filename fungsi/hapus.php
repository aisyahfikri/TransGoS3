
<?php 

 require_once("../pages/confiq.php");
 $plat = $_GET['plat'];
 $sql = "DELETE FROM bus WHERE plat='$plat'";
 if (mysqli_query($db, $sql)) {
    header("Location: ../pages/databus.php");

 } else {
 echo "<script type='text/javascript'>
 alert('Data Gagal Dihapus!');
 </script>";
 }
 mysqli_close($conn);
 

?>