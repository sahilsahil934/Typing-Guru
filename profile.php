<!doctype html>
<html>
    <head>
        <title>My Profile</title>
        <?php
            include('metadata.php');
        ?>
        <style>
            .profile {
                margin-top: 30px;
            }

            .password-box {

                margin-top: 100px;
                border: 2px solid grey;
                height: 450px;
                border-radius: 20px;
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

                .password-header {

                color: grey;
                font-family: creepster;
                }
        </style>
                            
                            
    </head>

    <body>

        <?php

          $message = "";

          include('navbar.php');
          include('connect.php'); 
          if (isset($_SESSION['user_id']) == false) {
            header('location:login.php');
        }

        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id='$user_id' ";
        $result = mysqli_query($conn, $sql);

        $data = mysqli_fetch_array($result);

        $sql = "SELECT * FROM records WHERE user_id='$user_id' ";
        $result = mysqli_query($conn, $sql);


        // edit detail form

        $fname = $lname = $email = $age = $country = "";
        
        if (isset($_POST['insert']) && $_POST['insert'] == "Change") {

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $fname = checkinput($_POST['fname']);
                    $lname = checkinput($_POST['lname']);
                    $email = checkinput($_POST['email']);
                    $age =  checkinput($_POST['age']);
                    $country = checkinput($_POST['country']);

                }


            $sql = "UPDATE users SET fname='$fname', lname='$lname', email='$email', age='$age', country='$country' WHERE id='$user_id' ";

            mysqli_query($conn, $sql);

            header('location:profile.php');

        }

        function checkinput($value) {

            $value = trim($value);
            $value = stripslashes($value);  
            $value = htmlspecialchars($value);
            return $value;
        }

        // change password form

        $old_password = $new_password = $confirm_new_password = "";
        
            if (isset($_POST['insert']) && $_POST['insert'] == "Change Password") {
        
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                    $old_password = $_POST['old_password'];
                    $new_password = $_POST['new_password'];
                    $confirm_new_password = $_POST['confirm_new_password'];
        
                }
        
                $sql = "SELECT * from users WHERE id='$user_id' ";

                $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) == 1) {
            
                            $data = mysqli_fetch_array($result);
                            if (password_verify($old_password, $data['user_password'])) {

                                if ($new_password == $confirm_new_password) { 
                                
                                    $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                                    $message ="<p style='text-align:center;color:black;'>Password Successfully Changed</p>";
                                    $sql = "UPDATE users SET  user_password='$new_password' WHERE id='$user_id' ";
                                    mysqli_query($conn, $sql);
                                    header('location:index.php');
                                }

                                else  {
                                    $message = "<p style='text-align:center;color:red;'>New Password doesn't match</p>";
                                }
                            }
                            else {
    
                                    $message ="<p style='text-align:center;color:red;'>Incorrect Password</p>";
       
                                }
               
                            
            
                        }
                        else {
                            $message ="<p style='text-align:center;color:black;'>Sorry Please Refresh and make sure your password is changed.</p>";
            
                        }
        
                }

        ?>

        <div id="detail" class="container jumbotron profile">
            <div class="text-center"><img  width="120" src="https://lh6.googleusercontent.com/-Jl-9lp4OEqY/AAAAAAAAAAI/AAAAAAAAEIc/xXgSeY1AKBw/photo.jpg?size=120" style="display: inline;"></div>

                <div class="table-responsive" style="display: block;">
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr><th colspan="2">               
                                <?php echo "<p style='margin:auto;'>".$data['fname']. " ". $data['lname']."</p>"; ?>
                                <button  id="edit-profile" style="position:relative;" class="btn btn-danger btn-sm float-right ml-2">Edit Details</button>
                                <button  id="change-password" style="position:relative;" class="btn btn-danger btn-sm float-right">Change Password</button>                                
                                </th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>E-mail</td>
                                <td><?php echo $data['email']; ?></td>
                            </tr>
    
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td><?php echo $data['age']; ?></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><?php echo $data['country']; ?></td>
                            </tr>
                            <?php
                                if (mysqli_num_rows($result) > 0) {

                            ?>

                            <tr>
                            <td>Higest Speed</td>
                                <td><?php echo $data['email']; ?></td>
                            </tr>
    
                            </tr>
                            <tr>
                                <td>Lowest Speed</td>
                                <td><?php echo $data['age']; ?></td>
                            </tr>
                            <tr>
                                <td>Average Speed</td>
                                <td><?php echo $data['country']; ?></td>
                            </tr>

                            <?php 
                                }
                                else {

                            ?>
                            <tr>
                            <td>Higest Speed</td>
                                <td>No records yet</td>
                            </tr>
    
                            </tr>
                            <tr>
                                <td>Lowest Speed</td>
                                <td>No records yet</td>
                            </tr>
                            <tr>
                                <td>Average Speed</td>
                                <td>No records yet</td>
                            </tr>
                        <?php
                                }
                        ?>
                        </tbody>
                    </table>
                </div>


        </div>


        <div style="display:none;" id="edit" class="container jumbotron profile pt-3">
            <h1> Edit Profile </h1>
            <hr>
            <div class="text-center">
                    
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                <h6>Upload photo</h6>
                    <div class="row">
                        <div class="container col-md-3">
                            <input type="file" class="form-control">
                        </div>
                    </div>
            </div>

                <div class="table-responsive" style="display: block;">
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr><th colspan="2">    
                            <button  id="edit-change-password" style="position:relative;" class="btn btn-danger btn-sm float-right">Change Password</button>                                
                                           
                                </th>
                            </tr>
                        </thead>
                        <tbody> 
                        <form id="edit-personal" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" method="post">
                            <tr>
                                <td>First Name</td>
                                <td>   
                                   <input class="form-control" type="text" name="fname" value="<?php echo $data['fname']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>   
                                   <input class="form-control" type="text" name="lname" value="<?php echo $data['lname']; ?>">
                                </td>
                            </tr>
    
                            <tr>
                                <td>E-mail</td>
                                <td>   
                                   <input class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>">
                                </td>
                            </tr>
    
                            <tr>
                                <td>Age</td>
                                <td>   
                                   <input class="form-control" type="number" min="4" name="age" value="<?php echo $data['age']; ?>">
                                </td>
                            </tr>
    
                            <tr>
                                <td>Country</td>
                                <td>   
                                   <input class="form-control" type="text" name="country" value="<?php echo $data['country']; ?>">
                                </td>
                            </tr>
                            <tr>
                            <td> </td>
                            <td>
                                <a class="float-right ml-2" href="profile.php">Cancel</a>
                                <input type="reset" class="btn btn-danger btn-sm ml-2 float-right" value="Reset"></button>
                                <input type="submit" class="btn btn-danger btn-sm float-right" name="insert" value="Change"></button>
                            </td>
                            </tr>
                        </form>

        
                        </tbody>
                    </table>
                </div>
        </div>


        <?php
              
            if ($message != "") {
            ?>
                <div  id="edit-password" class="container jumbotron password-box col-md-3 pt-3"> 
                <h1 class="password-header text-center">Change Password</h1>
            <?php
                echo $message;
            }

            else {
            ?>
                <div style="display:none;" id="edit-password" class="container jumbotron password-box col-md-3 pt-5"> 
                <h1 class="password-header text-center">Change Password</h1>

            <?php

            }
            ?>
            <hr>
            <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                <div class="container center">
                    <input autofocus class="form-control" type="password" name="old_password" placeholder="Old Password" required /> <br>        
                    <input class="form-control" type="password" name="new_password" placeholder="New Password" required /> <br>
                    <input class="form-control" type="password" name="confirm_new_password" placeholder="Confirm New Password" required /> <br>        
        
                </div>
                <div class="container mt-2 text-center">
                    <input class="btn btn-success center" type="submit" name="insert" value="Change Password" /> <br>
                    <a class="mt-2" href="profile.php">Cancel</a>
                    <br>
                    <hr>
                    <div>
                        <a href="#" class="forgot">I think I forgot my password.</a>
                    </div>
                </div>
            </form>
        </div>       
        

        <?php
            include('footer.php');
            include('script.php');
        ?>
        <script>

        <?php 

        if ($message == "<p style='text-align:center;color:red;'>Incorrect Password</p>" || $message == "<p style='text-align:center;color:red;'>New Password doesn't match</p>") {
        
        ?>

            hide('detail');
            hide('edit');
            show('edit-password');
        
        <?php

        }

        ?>
</script>
    </body>
</html>



