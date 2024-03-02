<?php
session_start();

?>

<html>
    <head>
        <link rel="stylesheet" href="style/style.css">
        <title>search data</title>
    </head>
    <body>
        <div class="container">
            <div>
                <form action="" method="POST">
                    <input type="text" name="registrationno" placeholder="Enter Registrationno to search"/><br>
                    <input type="submit" name="search" value="Search Data">
                </form>
                </div>
                

                <div class="nav">
                    <?php
                        $connection = mysqli_connect("localhost","root", "", "login");
                        $db = mysqli_select_db($connection,'login');

                        if(isset($_POST['search']))
                        {
                            $registrationno = $_POST['registrationno'];
                            $query = "SELECT * FROM users WHERE Registrationno='$registrationno'";
                            $query_run = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>

                                <form action=""method="POST">
                                    <input type="text" name="Username" value="<?php echo $row['Username'] ?>"/><br>
                                    <input type="text" name="Email" value="<?php echo $row['Email'] ?>"/><br>
                                    <input type="text" name="Registrationno" value="<?php echo $row['Registrationno'] ?>"/><br>
                                    <input type="text" name="Telephone" value="<?php echo $row['Telephone'] ?>"/><br>
                                </form>
                                <a href="home.php"> <button class="btn"><b>Back Home</b></button></a>

                            <?php
                            }
                        }
                    ?>
                </div>
        </div>
        


    </body>
</html>