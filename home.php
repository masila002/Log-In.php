<?php 

session_start();

include ("php/config.php");
if(!isset ($_SESSION['valid'])){
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Home</title>
    </head>
    <body>
        <div class="nav">
           
            
                <a href="logout.php"> <button class="btn">Log out</button></a>
                <a href="search.php"> <button class="btn"><b>Search</b></button></a>
            </div>
        </div>
        <main>
            <div class="main-box top">
                
                        <p><b>Hello  welcome to the dashboard.</b> <br>
                        Feel free to navigate around and search.
                    </p>
                    
                
                </div>
                
    

                  
            </div>
            
        </main>
    </body>
</html>
