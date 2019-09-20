<!DOCTYPE html>
<html>
    <head>
        <title>Typing Learner</title>
        <?php
            include('metadata.php');
        ?>

    </head>

    <body>

    <?php
        include("navbar.php");

    ?>
     <div class="jumbotron container text-center" id="mainpage">
     <h1 class="white" id="invisible"></h1>

    <?php
        if (isset($_SESSION['user_id'])) {

    ?>
        <a href="type.php" id="myspeed" class="btn btn-dark test">Test my speed</a>

    <?php
    } else {
        
    ?>
      <h1 class="white" id="invisible"></h1>
      <p class="whitep" id="improve"></p>
      <p class="whitep" id="speed"></p>
      <a href="type.php" id="myspeed" class="btn btn-dark test">Test my speed</a>
    </div>
    <?php
    }
    ?>


    <?php
        include("footer.php");
        include('script.php');
    ?>

    </body>
</html>