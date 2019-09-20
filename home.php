<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
      <p class="whitep" id="improve"></p>
      <p class="whitep" id="speed"></p>
      <a href="#keyboard" id="myspeed" class="btn btn-dark test" data-toggle="modal">Test my speed</a>
    </div>


    <?php
        include("footer.php");
        include('script.php');
    ?>

    </body>
</html>