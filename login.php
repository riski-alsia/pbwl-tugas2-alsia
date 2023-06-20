<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="bg-login" style="display: flex; height: 100vh; justify-content: center;
    align-items: center; background-color: #BDB76B;">
    <div class="box-login" style="width: 300px; min-height: 200px; 
    border: 1px solid black; background-color: #556B2F; padding: 15px;">
        <h2>LOGIN</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-login">
            <input type="text" name="pass" placeholder="Password"class="input-login">
            <input type="submit" name="login" value="Login" class="button-login" style="padding: 8px 15px;background-color: green; color: white; 
            font-size: 15px;">
        </form>
    <?php
        if(isset($_POST['login'])){
            session_start();
            $user=$_POST["user"];
            $pass=$_POST["pass"];
            $cek = $user AND $pass;
            if ($user=="alsia" AND $pass=="alsia123"){
                $d = ($cek);
                $_SESSION ['status_login'] = true;
                $_SESSION['a_global'] = $d;
                $_SESSION['id'] = $d->admin_id;

               
                header("location:http://localhost/pbwl-tugas2-alsia/dashboard");

            }
            else{
                echo '<script>alert("username atau password anda salah!!")</script>';
            }
        }
?>

    </div>
    
</body>
</html>
