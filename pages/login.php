<?php
ob_start();
session_start();
 require 'confiq.php';

 
$db = mysqli_connect("localhost","root","","transgo_new");
// Check connection
if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}


 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // if($_SERVER['REQUEST_METHOD'] == 'POST') {

     $email = $_POST["email"];
     $sandi = $_POST["sandi"];
 
     $query_sql = "SELECT * FROM user WHERE email = '$email'";
     $result = mysqli_query($db, $query_sql);
 
     //cek username
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
 //cek password 
        if(md5($sandi) == $row["sandi"]) {
            header("location: dashboard.php");
            //  exit;
        } else {
            echo("error");
        }
    }     
}
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link href="style_login.css" rel="stylesheet" />
</head>

<body>

    <div class="d-flex justify-content-center align-items-center"
        >
        <form class="login" action="login.php" method="POST" style="margin-left: 620px;"> </form>
        <h1 class="display-5" style="font-family: IM FELL French Canon; color: #fff; font-size: 34px;">
        </h1>

        <div class="card">
            <form style="padding: 4.8px 4.8px;  position: relative; margin: 15px;
            z-index: 1;"  method="POST">
                <fieldset>
                    <legend>Login</legend> 

                    <div class="mb-3">
                        <label for="Masukkan Email" class="form-label" style="
                        width: 400px;
                        margin: 10px auto;
                        border-radius: 5px; font-family: IM FELL French Canon;">Email</label>
                        <input type="text" name="email" id="Masukkan Email" class="form-control" style=" font-family: Petrona;"
                            placeholder="Masukkan Email">
                    </div>
                    <div class="mb-3">
                        <label for="Masukkan Password" class="form-label"
                            style="font-family: IM FELL French Canon;">Password</label>
                        <input type="password" name="sandi" id="Masukkan Password" class="form-control" style="font-family: Petrona;"
                            placeholder="Masukkan Password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                            <label class="form-check-label" for="disabledFieldsetCheck">
                                Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn" style="display: block;
                    margin: auto;
                    text-transform: uppercase;
                    background-color: #4D3BAB;
                    padding: 8px 180px;
                    color: #fff;
                    border-radius: 5px;
                    border: none;
                    "><a  style="color: #ffff; text-decoration: none;"
                    style="font-family:IM FELL French Canon">Login</a></button>
        </fieldset>
        <!-- <span class="d-flex justify-content-center align-items-center">Belum Memiliki Akun? <a href="Register.php"
            style="color: #0E1DFB; text-decoration: none; font-weight: bold;">
            Register</a></span> -->
            </form>
        </div>
    </div>

    
</body>

</html>