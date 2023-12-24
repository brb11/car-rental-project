<?PHP
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Green books</title>

        <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->
        <!-- <link rel="stylesheet" href="css/all.min.css"> -->
        <link rel="stylesheet" href="assets/login style.css">
        <link rel="stylesheet" href="assets/css/login.css">

    </head>
    <body>
        <?php
        require('admin/includes/config.php');
        if (isset($_POST['login']))
        {

        $username = $_POST['username'];
        $password =md5($_POST['password']);
      
        if (empty($username) | empty($password))
            {
            echo "This Filed Are Reguired";
        
            }else
            {
                $query = "select * from users where email =:email AND password =:password";
                $stm =$dbh->prepare($query);
                $stm->execute( array("email" =>$username,"password"=>$password)); 
                if ($stm->rowCount()==1)
                {
                   $_SESSION['alogin']=$stm->fetch();
                   if($_SESSION['alogin']['active'] == 1)
                   {
                        if ($_SESSION['alogin']['role_id'] == 1)
                        {
                        header("location:admin/dashboard.php");
                        }else{
                            header("location:index.php");
                        }
                   }
                   else{
                    echo "<script>
                        alert('Your account still not Active ..');
                        window.open('login.php','_self');
                        </script> ";
                        "<div class='alert alert-danger'></div>";
                   }
                } 
                else{
                
                    echo "<script>
                        alert('Email or password is wrong .. ..');
                        window.open('login.php','_self');
                        </script> ";
                        "<div class='alert alert-danger'></div>";
                }
            } 
        }
       ?>
<!-- login form start -->
    <section class="login">
        <div>
            <form action="" method="post">
               
                <a href="login.php"><h3>login</h3></a>
                <span>username</span>
                <input type="email" name="username" class="box" placeholder="Enter your email" id="" required>
                <span>password</span>
                <input type="password" name="password" class="box" placeholder="Enter your password" id="" required>
                <div class="checkbox">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me"> remember me</label>
                </div>
                <input type="submit" value="sign in"  name="login" class="btn">
                <p>forget password ? <a href="#">click here</a></p>
                <p>don't have an account ? <a href="sign.php">create one</a></p>
            </form>
        </div>
    </section>
