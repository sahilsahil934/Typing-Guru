<!DOCTYPE html>
<html>
    <head>
        <title>Typing Learner</title>
        <?php
            include('metadata.php');
        ?>
    <style>

        .paragraph {
            border-radius: 20px;
            margin-bottom: 10px;
            text-align: center;
            line-height: 70px;
        }
        .paragraph-field {
            position: relative;
            margin-top: 70px;
            border-radius: 20px;
        }

        .typing-text {
            font-size: 30px;
        }

        .time-box {
            float: right;
            background: lightgreen;
            width: 200px;
            height: 50px;
            line-height: 50px;
            font-size: 25px; 
            text-align: center;
            border-radius: 5px;
        }
    </style>
    </head>

    <body>

    <?php

        include("connect.php");
        include("navbar.php");

    ?>

    <div class="container jumbotron list">
        <h2>Select One</h2>
        <ul>
            <?php

                $sql = "SELECT * from paragraph";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_array($result)) {

                        ?><li><?php $row['title'] ?> </li>

                    <?php
                    }
                }
                
            ?>
        </ul>
    </div>

    <div class="container jumbotron paragraph-field">
        <div class="paragraph">
            <p> there is vast number of living organism in the biosphere and they have great diversity in shape size and form so it not </p>
        </div>
        <form class="form-group">
            <input class="form-control typing-text" type="text" />
        </form>
        <div class="time-box">
            Time: <span id="seconds">60</span> Seconds
        </div>
    </div>


    <?php
        include("footer.php");
        include('script.php');
    ?>

    <script>
        
            
    </script>

    </body>
</html>
