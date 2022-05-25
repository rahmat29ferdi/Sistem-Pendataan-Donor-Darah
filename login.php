<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css">
  <?php
  include "connect.php";
  
  if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    $data =  "SELECT * FROM daftar WHERE email='$user' AND password='$pass'";
    $result = mysqli_query($con, $data);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_rs'] = $row['id'];
        header("Location: beranda.html");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }

    

  }

  ?>
</head>
<body>
  <div class="container">
    <div class="container-left">
      <img src="img/logo.svg" alt="form-login">
      <h1>BloodPlus - Pemesanan Darah</h1>
      <p>Order dan cek stock darah yang tersedia di Rumah Sakit terdekat.</p>
    </div>
    <div class="container-right">
      <h1>Silahkan Login</h1>
      <form action="" method="POST">
        <div class="input">
          <label for="b">Username</label>
          <input type="text" name='username'>
        </div>        
        <div class="input">
          <label for="a">Password</label>
          <input type="password" name='pass'>
        </div>
        <button name='submit'>Masuk</button>
        <a href="register.php" >Daftar</a>
      </form> 
        
    </div>
  </div>
</body>
</html>