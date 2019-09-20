<!doctype html>
<html>
    <head>
        <title>Log In</title>
        <?php
            include('metadata.php');
        ?>
        <style>
            .login-box {

                margin-top: 100px;
                border: 2px solid grey;
                height: 450px;
                border-radius: 20px;
                background: url('css/signup.jpg');
                opacity: 0.9;
            
            }

            hr {
                background-color: grey;
            }
            .loginsign {

                color: white;
                line-height: 50px;
                
            }

            .loginsign:hover {
                color: red;
            }

            h1 {

                color: grey;
                font-family: creepster;
            }


        </style>
    </head>

    <?php

        include('connect.php'); 
        include('navbar.php');
        if (isset($_SESSION['user_id'])) {
            header('location:index.php');
        }


        $message = "";
            
        $email = $password = "";
        if (isset($_POST['insert']) && $_POST['insert'] == "Log In") {

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $email = checkinput($_POST['email']);
                    $password =  $_POST['password'];

                }


            $sql = "SELECT * from users WHERE email='$email' ";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {

                $data = mysqli_fetch_array($result);
                if (password_verify($password, $data['user_password'])) {
                    $_SESSION['user_id'] = $data['id'];
                
                      header('location:index.php');
                }
                else {
                    $message ="<p style='text-align:center;color:white;'>Incorrect E-mail or Password</p>";

                }

            }
            else {
                $message ="<p style='text-align:center;color:white;'>Incorrect E-mail or Password</p>";

            }
        }

        function checkinput($value) {

            $value = trim($value);
            $value = stripslashes($value);  
            $value = htmlspecialchars($value);
            return $value;
        }


        
    ?>

    <body>

        <?php
                
            if ($message != "") {
            ?>
                <div class="container jumbotron login-box col-md-3 pt-3"> 
                <h1 class="text-center">Log In</h1>
            <?php
                echo $message;
            }

            else {
            ?>
                <div class="container jumbotron login-box col-md-3 pt-5"> 
                <h1 class="text-center">Log In</h1>

            <?php

            }
            ?>
            <hr>
            <form id="loginform" class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                <div class="container center">
                    <input autofocus autocomplete="off" class="form-control" type="email" name="email" placeholder="E-mail" required /> <br>
                    <input class="form-control" type="password" name="password" placeholder="Password" required /> <br>        
                </div>
                <div class="container mt-2 text-center">
                    <input class="btn btn-success center" type="submit" name="insert" value="Log In" />
                    <br>
                    <hr>
                    <div>
                        <a href="#" class="forgot">I think I forgot my password.</a>
                    </div>
                    <a href="signup.php" class="loginsign">Sign Up</a>
                </div>
            </form>
        </div>       
        
        

        <?php
            include('footer.php');
            include('script.php');
        ?>


    </body>
</html>