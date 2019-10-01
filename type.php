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

    <div class="container jumbotron paragraph-field">
        <div class="paragraph">
        <?php

            $sql = "SELECT * from paragraph";
            $result = mysqli_query($conn, $sql);
            $sql = "SELECT COUNT(*) from paragraph";
            $max_count = mysqli_query($conn, $sql);
            $max_count_value = mysqli_fetch_array($max_count);
            
            $random = rand(1, $max_count_value[0]);
            $count = 0;
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
                    
                    $count++;
                    if ($count == $random) {
                    ?><p><?php echo $row['paragraph'] ?> </p>

                <?php
                    }
                }
            }

        ?>
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
