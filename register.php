  <?php 
  include 'connect.php';
  if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $cpass = $_POST['psw-repeat'];
    mysqli_query($con, "INSERT INTO daftar (email, password, rpt_pass) VALUES ('$email', '$pass', '$cpass')");
    echo"<script>
      alert('Register berhasil');
      document.location.href = 'index.php';
    </script>";
  }
  ?>
  
  <link rel="stylesheet" href="css/register.css">
  <div class="container">
    <h1>Daftar Akun</h1>
    <hr>
    <form action="" method="POST">
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Email" name="email" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Konfirmasi Password" name="psw-repeat" id="psw-repeat" required>
      <hr>

      <button type="submit" name="submit" class="registerbtn">Register <a href="index.php"></a>
      </button>
    </div>
  </form>

  <div class="container signin">
    <p>Sudah memiliki akun? <a href="index.php">Sign in</a>.</p>
  </div>
</form>
