<?php 
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'quiztm2');?>
<html>
<head>
  <title>Login</title>
  <style>
	  *{
		  margin: 0;
		  padding: 0;
		  box-sizing; border-box;
	  }
	  body{
		  min-height; 100vh;
		  background; #ee;
		  display: flex;
		  font-family: sans-serif;
	  }
	  .container{
		  margin: auto;
		  width: 20%;
		  max-width: 90%;
	  }
	  .container form{
		  width: 120%;
		  height: 50%;
		  padding: 20px;
		  background: white;
		  border-radius: 4px;
		  box-shadow: 0 8px 16px rgba(0,0,0,.3);
	  }
	  .container form h1{
		  text-align: center;
		  margin-bottom: 24px;
		  color: #222;
	  }
	  .container form .form-control{
		  width: 100%;
		  height: 40px;
		  background: white;
		  border-radius: 4px;
		  border: 1px solid silver;
		  margin: 10px 0 10px 0;
		  padding: 0 10px;
	  }
      .container form .btn{
          margin-top: 20px;
          width: 100%;
          height: 50px;
          border: 1px solid;
          background: #2691d9;
          border-radius: 25px;
          font-size: 18px;
          color: #e9f4fb;
          font-weight: 700;
          cursor: pointer;
          outline: none;
      }
  </style>
</head>
<body>
	<div class="container">
		<form method="post" action="">
			<h1>Login</h1>
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" name="username" required>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password" required>
			</div>
            <input type="checkbox" name="remember" value="remember">
            <label for="remember"> Remember Me</label><br>
			<button type="submit" name="login" class="btn">Login</button>
		</form>
	</div>
    <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $cek_user = mysqli_query($connection, "SELECT * FROM login WHERE username = '$username'");
            $row = mysqli_num_rows($cek_user);

            if( $row === 1){
                //jalankan seleksi prosedur password
                $fetch_password = mysqli_fetch_assoc($cek_user);
                $cek_password = $fetch_password['password'];
                if( $cek_password <> $password){
                    echo"<script>alert('Password Salah!');</script>";
                } else{
                    $_SESSION['login'] = true;
					//cek remember me
					if( isset($_POST['remember'])) {
						//buat cookie
						setcookie('login', 'true', time() + 300);
					}
                    echo"<script>document.location.href='home.php'</script>";
                }
            } else{
                echo"<script>alert('Username Salah atau Akun Anda Belum Terdaftar!');</script>";
            }
        }
    ?>
</body>
</html>

