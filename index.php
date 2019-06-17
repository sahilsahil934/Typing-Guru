<!DOCTYPE html>
<html>
    <head>
        <title>Typing Learner</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css" type="text/css">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top">
        <a class="navbar-brand" href="#">Typing Learner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Friends <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link btn btn-outline-dark" href="#login" data-toggle="modal">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-dark" href="#signup" data-toggle="modal">Sign Up</a>
                </li>
            </ul>         
        </div>
    </nav>
    <div class="jumbotron container text-center" id="mainpage">
      <h1 class="white" id="invisible"></h1>
      <p class="whitep" id="improve"></p>
      <p class="whitep" id="speed"></p>
      <a href="#" class="btn btn-dark test">Test my speed</a>
    </div>

    <div class="modal" id="signup" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Sign Up</h3>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div col="col-md-6">
                                <input autocomplete="off" autofocus  class="form-control name" type="text" name="fname" placeholder="First Name" required /> <br>
                            </div>
                            <div col="col-md-6">
                                <input autocomplete="off" class="form-control name" type="text" name="lname" placeholder="Last Name" required /> <br>  
                            </div>
                        </div>                  
                        <input autocomplete="off" class="form-control" type="email" name="email" placeholder="E-mail" required /> <br>
                        <input class="form-control" type="password" name="password" placeholder="Password" required /> <br>                    
                        <input class="form-control" type="password" name="confirmation" placeholder="Again Password" required /> <br>
                        <div class="row">
                            <div class="col-md-3">
                                <input autocomplete="off" autocomplete="off"class="form-control" type="number" min="4" name="age" placeholder="Age" required /> <br>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" id="country" oninput="myFunction()" type="text" name="country" placeholder="Country" required /> <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-success" type="submit" name="insert" value="Sign Up" />
                        <button class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="login" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Log In</h3>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <input autofocus autocomplete="off" class="form-control" type="email" name="email" placeholder="E-mail" required /> <br>
                        <input class="form-control" type="password" name="password" placeholder="Password" required /> <br>    
                    </div>
                    <div class="modal-footer">                
                        <input class="btn btn-success" type="submit" name="insert" value="Log In" />
                        <button class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer bg-dark">
      <div class="container">
        <p id="copyright">TypingLearner.com &copy  
          <?php
            $year = date("Y");
            echo $year;
          ?>
        </p>
      </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>