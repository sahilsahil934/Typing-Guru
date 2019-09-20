<?php

    session_start();
?>
<div class="container-fluid">
<div class="container-fluid main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top">
        <a class="navbar-brand" href="/typinglearner">Typing Learner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                if (isset($_SESSION['user_id'])) {
            
            ?>
            <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Friends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Typing Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Learn</a>
                    </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-dark" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-dark" href="logout.php">Log Out</a>
                </li>
            </ul>
            <?php
                }
            else {
            ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-dark" href="login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-dark" href="signup.php">Sign Up</a>
                </li>
            <?php
            }
            ?>
            </ul>         
        </div>
    </nav>
