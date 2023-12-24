

<?php
    require('admin/includes/config.php');  
    $db = mysqli_connect("localhost","root","","car_rentall");

     if(isset($_POST["passIns"]) && isset($_POST["nameIns"]) && isset($_POST["emailIns"]))
{
    $pass= $_POST["passIns"];
$name = $_POST["nameIns"];
$emailIns = $_POST["emailIns"];
    //if("users.name" == $_POST["nameDel"] && )
    $quary = "INSERT INTO users (name,password,email) VALUES ('$name', '$pass', '$emailIns')";

    //$result = mysqli_query($db , $quary);
    //echo "gfd";
    if($db->query($quary) === TRUE)
    {
        //delete($result);
        echo "done ..";
    }
    else
    {
        echo "Can not added ..!";
    }
}
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

<!-- bottom navbar start -->
    <!-- <nav class="bottom-navbar">
        <a href="index.php" class="fas fa-home"></a>
        <a href="featured.php" class="fas fa-list"></a>
        <a href="arrivals.php" class="fas fa-tags"></a>
        <a href="reviews.php" class="fas fa-comments"></a>
        <a href="blogs.php" class="fas fa-blog"></a>
    </nav> -->
<!-- bottom navbar end -->


<?php
                            if (isset($_POST['submit'])) {
                               
                                $name = trim($_POST['name']);
                                $email = trim(($_POST['email']));
                                $password = md5(($_POST['password']));
                                try{
                                    $sql = "INSERT INTO users (name,email,password) values (?,?,?) ";
                                    $stm =$dbh->prepare($sql);
                                    $stm->execute(array($name,$email,$password));
                                }
                                catch(PDOException $e){
                                    echo "Email is enterd befor ..";
                                }


                                    if ($stm->rowCount())
                                     {

                                        
                                        echo "<script>
                                        alert('Account created successfull');
                                        window.open('login.php','_self');
                                         </script> ";
                                        
                                     } 
    
                                    else
                                     {
                                        echo "<script>
                                        alert('Something went wrong. Please try again');
                                        window.open('index.php','_self');
                                         </script> ";
                                        "<div class='alert alert-danger'></div>";
                                     }
                                    } 
                            ?>
 <script >
function valid()
{
if(document.submit.password.value!= document.submit.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.submit.confirmpassword.focus();
return false;
}
return true;
}
</script>

<!-- login form start -->
<section class="login">
    <div>
    <form name="submit" method="post" onSubmit="return valid();">
            <a href="#"><h3>sign in</h3></a>
            <span>Full Name</span>
            <input type="text" name="name" class="box" placeholder="Enter your Full Name" id="" required>
            <span>email</span>
            <input type="email" name="email" class="box" placeholder="Enter your  email" id="" required>
            <span>password</span>
            <input type="password" name="password" class="box"   placeholder="enter your password" id="" required>
            <input type="password" name="confirmpassword" class="box"   placeholder="Config password" id="" required>
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" name="submit" value="sign in" id="submit" class="btn">
            <p>forget password ? <a href="#">click here</a></p>
            <p>you have an account ? <a href="login.php">click here</a></p>
        </form>
    </div>
</section>
<!-- login form end -->