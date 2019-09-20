<!doctype html>
<html>
    <head>
        <title>Sign Up</title>
        <?php
            include('metadata.php');
            
        ?>
        <style>
            .signup-box {

                margin-top: 50px;
                border: 2px solid grey;
                border-radius: 20px;
                background: url('css/signup.jpg');
                opacity: 0.9;
                height: 600px;
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

            .name {
                margin-left: 15px;  
                width: 210px;              
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
            
        $fname = $lname = $email = $password = $age = $country = "";
        if (isset($_POST['insert']) && $_POST['insert'] == "Sign Up") {

                if ($_SERVER["REQUEST_METHOD"] == "POST") {


                    $fname = checkinput($_POST['fname']);
                    $lname = checkinput($_POST['lname']);
                    $email = checkinput($_POST['email']);
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $age = checkinput($_POST['age']);
                    $country = checkinput($_POST['country']);

                }

            $sql = "SELECT email from users WHERE email='$email' ";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                $message ="<p style='color:white;'>Email already used.</p>";
                
            }

            else {
                $sql = "INSERT INTO users (fname, lname, email, user_password, age, country) VALUES('$fname', '$lname', '$email', '$password', '$age', '$country')";

                mysqli_query($conn, $sql);
                $_SESSION['user_id'] = mysqli_insert_id($conn);
                header('location:index.php');
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
                <div class="container jumbotron signup-box col-md-4 pt-3"> 
                <h1 class="text-center">Sign Up</h1>
            <?php
                echo $message;
            }

            else {
            ?>
                <div class="container jumbotron signup-box col-md-4 pt-5"> 
                <h1 class="text-center">Sign Up</h1>

            <?php

                }
            ?>

            <hr>
            <form id="signupform" class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="row">
                    <div col="col-md-4">
                        <input autocomplete="off" autofocus  class="form-control name" type="text" name="fname" placeholder="First Name"  required /> <br>
                    </div>
                    <div col="col-md-4">
                        <input autocomplete="off" class="form-control name" type="text" name="lname" placeholder="Last Name" required /> <br>  
                    </div>
                </div>                  
                <input autocomplete="off" class="form-control" type="email" name="email" placeholder="E-mail" required /> <br>
                <input class="form-control" type="password" name="password" placeholder="Password" required /> <br>                    
                <input class="form-control" type="password" name="confirmation" placeholder="Confirm Password" required /> <br>              
                <div class="row">
                    <div class="col-md-3">
                        <input autocomplete="off" autocomplete="off"class="form-control" type="number" min="4" name="age" placeholder="Age" required /> <br>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" id="country" type="text" name="country" placeholder="Country" required /> <br>
                    </div>
                    <div class="container mt-2 text-center">
                        <input class="btn btn-success center" type="submit" name="insert" value="Sign Up" />
                        <br>
                        <hr>
                        <div>
                            <a href="login" class="loginsign">Log In</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
            include('footer.php');
            include('script.php');
        ?>
    </body>
</html>
    