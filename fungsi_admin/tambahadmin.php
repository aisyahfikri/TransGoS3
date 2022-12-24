<?php
include '../pages/confiq.php';

  $name = $_POST['nama'];
  $email = $_POST['email'];
  $sandi = md5($_POST['sandi']);
  $alamat = $_POST['alamat'];
  $gender = $_POST['gender'];
  $no_hp = $_POST['no_hp'];
  $nik = $_POST['nik'];
  $level = $_POST['level'];

  // var_dump($name);
  // var_dump($email);
  // var_dump($sandi);
  // var_dump($alamat);
  // var_dump($gender);
  // var_dump($no_hp);
  // var_dump($nik);
  // var_dump($level);

  // $sql =  mysqli_query($db, "INSERT INTO user VALUES('$name' , '$email' , '$sandi' , '$alamat', '$gender', '$no_hp', '$nik', '$level')");
  $sql1 = "INSERT INTO `user`(`nama`, `email`, `sandi`, `alamat`, `gender`, `no_hp`, `nik`, `level`) VALUES ('$name','$email','$sandi','$alamat','$gender','$no_hp','$nik','$level')";
  // var_dump(mysqli_query($db, $sql1));

  if (mysqli_query($db, $sql1)) {
    echo "<script type='text/javascript'>
 alert('Data Berhasil Dimasukan!');
 location.replace('../pages/adminprofile.php');
   </script>";
  } else {
    echo "<script type='text/javascript'>
 alert('Data Gagal Dimasukan!');
 location.replace('../pages/addadmin.php');
 </script>";
  }
  mysqli_close($db);

?>