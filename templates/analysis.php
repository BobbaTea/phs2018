<?php

   include("sessionv.php");
include("");
 if( session_verify()==false){
header('Location: login.html'); 

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <title>Your profile</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="../static/css/a.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="description" content="Let's get started with analyzing your profile!">

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
</head>

<body data-spy="scroll" data-target="#navbar">
<header>

  <div class="navbar-fixed">
    <nav class="black" role="navigation" id="navbar">


      <a href="#" class="brand-logo center">
        <img class="responsive-img" src="../static/img/logo.jpg" width="50" height="50" style="margin-top: 5px;" /></a>
      <a href="#" class="brand-logo right" style="font-size:12px"></a>
    </nav>
  </div>

</header>

<main>
  <section id="#learnmore" class="scrollspy sect">
    <!--   Icon Section   -->
    <div>
      <div class="center  container"><br>
        <h1 class="header center">Your Score: 100</h1>
        <div id="typed-strings">
          <p>Your score is out of <strong>1600</strong>.</p>
          <p>There is <em>a lot</em> that <i>you</i> can <strong>improve</strong> on!</p>
        </div>
        <span id="typed"></span>
        <div class="container">

        </div>
        <br>
        <div class="row">

          <div class="col s12 m4">
            <div class="container">
              <div class="card">

                <div class="card-content">
                  <h5><b>Twitter</b></h5><br>
                  <p>You did not give a Twitter - you do not have a Twitter.</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action blue">
                  <a href="" class="white-text">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="container">
              <div class="card">

                <div class="card-content">
                  <h5><b>Snapchat</b></h5><br>
                  <p>You did not give a snapchat - your snapchat does not exist.</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action orange">
                  <a href="" class="white-text">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="container">
              <div class="card">
                <div class="card-content">
                  <h5><b>Instagram</b></h5><br>
                  <p>You did not give an Instagram - you do not have an Instagram</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action pink">
                  <a href="" class="white-text">Link</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col s12 m4">
            <div class="container">
              <div class="card">

                <div class="card-content">
                  <h5><b>Facebook</b></h5><br>
                  <p>You do not have a Facebook - you didn't give us a FB account.</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action blue darken-4">
                  <a href="" class="white-text">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="container">
              <div class="card">

                <div class="card-content">
                  <h5><b>Website</b></h5><br>
                  <p>You did not give a Website - your Website does not exist.</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action green">
                  <a href="" class="white-text">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="container">
              <div class="card">

                <div class="card-content">
                  <h5><b>Google+</b></h5><br>
                  <p>You have an account, and as such you are on the right path. However, there is still a lot for you to improve as there isn't much content in your current site.</p>
                  <span>Overall Score:</span>
                  <h4>100</h4>
                </div>
                <div class="card-action red">
                  <a href="" class="white-text">Link</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <br>

  </section>
</main>

<footer class="page-footer white">

  <div class="container" style="font-family: Metropolis-Medium,serif; margin-top: -10px">
    4Presence
  </div>
  <br> <br>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script>
  const typed = new Typed('#typed', {
    stringsElement: '#typed-strings'
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    let menu = $('.menu');
    let target = $('#' + menu.attr("data-target"));
    menu.pushpin({});
  });

  // $(".button-collapse").sideNav();
  //
  // $('.button-collapse').sideNav({
  //     menuWidth: 300,
  //     closeOnClick: true
  //   }
  // );


  $(document).ready(function () {
    $('.scrollspy').scrollSpy();
  });
</script>
</body>
</html>
