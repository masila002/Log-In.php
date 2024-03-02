<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="box form-box">

            <?php
            include("php/config.php");
            if(isset($_POST['username'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $registrationno = $_POST['registrationno'];
                $telephone = $_POST['telephone'];
                $password = $_POST['password'];

                // verify if the email is unique

                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                if(mysqli_num_rows($verify_query) !=0 ){
                    echo "<div class = 'message'>
                                <p>This email is used, Try another one</p>
                            <div> <br>";
                    echo "<a href= 'javascript:self.history.back()'><buttonclass='btn> Go Back </button>";
                }
                else {
                    mysqli_query($con,"INSERT INTO users(Username,Email,Registrationno,Telephone,Password) VALUES('$username','$email','$registrationno','$telephone','$password')") or die("Error Occured");

                    echo "<div class = 'message'>
                                <p>Registration Successfully</p>
                            <div> <br>";
                    echo "<a href= 'index.php'><buttonclass='btn> Log in </button>";
                }
            }
            else {
            ?>

                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="Username">User Names</label>
                        <input type="text" name="username" id="username" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="field input">
                        <label for="Registrationno">Registration No</label>
                        <input type="text" name="registrationno" id="registrationno" required>

                    </div>

                    <div class="field input">
                        <label for="Telephone">Telephone</label>
                        <input type="number" name="telephone" id="telephone" required>
                    </div>

                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="field">
                        
                        <input type="submit" name="submit" value="Sign Up" required>
                    </div>

     
                </form>
                <div class="links">
                    Are you a registered member? <a href="index.php"><button><strong>Sign in</strong></button></a>
                 </div>
            </div>
            <?php  }  ?>
        </div>
        

    </body>
</html>