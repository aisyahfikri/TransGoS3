<?php 
 
 include ("../pages/confiq.php");
 if (!empty($_POST['plat'])) {
 
     $plat = $_POST['plat'];
     // $gambar_bus = $_POST['gambar'];
     $jumlah_kursi = $_POST['kursi'];
     $nama_bus = $_POST['nama'];
     $kelas = $_POST['kelas'];
     $harga_tiket = $_POST['harga'];
     $fasilitas = $_POST['fasilitas'];
 
 
  $sql = "UPDATE bus SET nama = '$nama_bus', plat= '$plat', kursi = '$jumlah_kursi', fasilitas = '$fasilitas', kelas = '$kelas', harga = '$harga_tiket' where plat = '$plat'";
  if (mysqli_query($db, $sql)) {
         echo "<script type='text/javascript'>
         alert('Data Berhasil Diedit!');
         location.replace('../pages/databus.php');
           </script>";
         } else {
         echo "<script type='text/javascript'>
         alert('Data Gagal Dimasukan!');
         location.replace('../pages/databusedit.php');
         </script>";
         
         }
         mysqli_close($conn);
        
       }
 
       if (!empty($_POST['email'])) {
 
         $email = $_POST['email'];
         // $gambar_bus = $_POST['gambar'];
         $nama = $_POST['nama'];
         // $email = $_POST['email'];
         $alamat = $_POST['alamat'];
         $no_hp = $_POST['no_hp'];
        
      $sql = "UPDATE user SET nama = '$nama', $email='email', $no_hp ='no_hp',";
      if (mysqli_query($db, $sql)) {
             echo "<script type='text/javascript'>
             alert('Data Berhasil Diedit!');
             location.replace('../pages/databus.php');
               </script>";
             } else {
             echo "<script type='text/javascript'>
             alert('Data Gagal Dimasukan!');
             location.replace('../pages/databusedit.php');
             </script>";
             
             }
             mysqli_close($conn);
            // header("Location:input.php");
           }
 
 
 
 
 ?>