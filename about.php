<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:index.php");
}
?>

<!-- <?php echo $_SESSION["username"] ?>
  <a href="logout.php">logout</a> -->

<!-- https://source.unsplash.com/1400x400/?nature,python -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">MAX.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Graphics Designer</a>
                        <a class="dropdown-item" href="#">Web developer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Blog</a>
                    </div>
                </li>
                <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
                <a class="nav-link" href="contact.php">Contact Us</a>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container my-4">
        <div class="row">
            <div class="col-lg-4">
                <center> <img class="bd-placeholder-img rounded-circle img-fluid" width="140" height="140" src="./img/abt01.jpg" alt="">
                    <h2>Max Code</h2>
                    <p>“It is only when they go wrong that machines remind you how powerful they are.”It's not that I'm so smart, it's just that I stay with problems longer. ... Success is a lousy teacher<br>Think Twice, Code once."</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </center>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <center><img class="bd-placeholder-img rounded-circle img-fluid" width="140" height="140" src="./img/abt02.jpg" alt="">
                    <h2>Walter White</h2>
                    <p>Every time I have a programming "Q" and i rly need help, I post it on Reddit and then log into another account and reply to it with an obscenely incorrect answer. Pple don't care about helping others but they love correcting others.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </center>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <center> <img class="bd-placeholder-img rounded-circle img-fluid" width="140" height="140" src="./img/abt03.jpg" alt="">
                    <h2>Sara Willson</h2>
                    <p>"You are more than just a designer, As graphics designer, you are also a problem solver. You should learn to give solutions and not just a design. Your design should not only attract but also give solutions."</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </center>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>

    <div class="container my-6">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">It's all start Maxi Coder. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">“It is only when they go wrong that machines remind you how powerful they are.”It's not that I'm so smart, it's just that I stay with problems longer. ...
                    Success is a lousy teacher.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt1.jpeg" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Technology. <span class="text-muted">How can technology bring us togather.</span></h2>
                <p class="lead">Technology does bring you closer to family, friends and acquaintances as it easily puts us in touch with those we have not communicated with in a long time. For those who live thousands of miles apart from one another, technology has made it easy for people to communicate with ease.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt2.jpeg" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">Technology changed our World. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Modern technology has paved the way for multi-functional devices like the smartwatch and the smartphone. Computers are increasingly faster, more portable, and higher-powered than ever before. With all of these revolutions, technology has also made our lives easier, faster, better, and more fun.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt3.jpeg" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Earphones On World Off. <span class="text-muted">Music is your only friend.</span></h2>
                <p class="lead">Only if my earphone can talk. It will tell you sometimes when i feel incomplete without any reason i found some of my parts in those incomplete songs. And if it will sing... </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt4.jpeg" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">Smart Technology. <span class="text-muted">It's about Smart mob.</span></h2>
                <p class="lead">A smart mob is a group whose coordination and communication abilites have been empowered by digital communication technologies. Smart mobs are particularly.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt5.jpeg" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">History of technology. <span class="text-muted"> It's about traveling.</span></h2>
                <p class="lead">By technologies which assist humans in traveling to places they could not previously reach, and by scientific instruments by which we study nature in... </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt6.jpeg" alt="">
            </div>

        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">Future Technology. <span class="text-muted"> Your future is machines.</span></h2>
                <p class="lead">"Everybody has to be able to participate in a future that they want to live for. That's what technology can do." </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./img/abt7.jpeg" alt="">
            </div>
            

        </div>
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2021-2022 Company, Max_Code. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
 

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>