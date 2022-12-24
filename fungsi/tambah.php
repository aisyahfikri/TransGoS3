<?php 

 include '../pages/confiq.php';

 $gambar = $_FILES['gambar']['name'];

 $imagePath = 'gambar_bus/' . $gambar;
 $tmp_name = $_FILES['gambar']['tmp_name'];
 
 move_uploaded_file($tmp_name, $imagePath);

 $plat = $_POST['plat'];
 $nama = $_POST['nama'];
 $kursi = $_POST['kursi'];
 $kelas = $_POST['kelas'];
 $harga = $_POST['harga'];
 $kernet = $_POST['kernet'];
 $fasilitas = $_POST['fasilitas'];

  if (isset($kernet)) {
    $sql = mysqli_query($db, "SELECT id FROM user WHERE nama = '$kernet' AND level = 3 ");
    
    if ($data = mysqli_fetch_assoc($sql)) {

       $id_kernet = $data['id'];
       $sql1 = "INSERT INTO `bus`(`gambar`, `nama`, `plat`, `kursi`, `fasilitas`, `kelas`, `harga`, `kernet`) 
       VALUES ('$gambar','$nama','$plat','$kursi','$fasilitas','$kelas','$harga','$id_kernet')";

    if (mysqli_query($db, $sql1)) {
      echo "<script type='text/javascript'>
      alert('Data Berhasil Dimasukan!');
      location.replace('../pages/databus.php');
        </script>";
      } else {
      echo "<script type='text/javascript'>
      alert('Data Gagal Dimasukan!');
      location.replace('../pages/databusedit.php');
      </script>";
      }
      mysqli_close($db);
       
    }
    
  }


 

	?>
