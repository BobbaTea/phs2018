
<?php
   include("sessionv.php");
   if( session_verify()==false){
header('Location: login.php'); 
}else
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Your profile</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="../static/css/a.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="description" content="Let's get started with analyzing your profile!">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

  <!-- algolia -->
  <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch.min.css">-->
  <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch-theme-algolia.min.css">-->
  <!--<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4"></script>-->
</head>

<body data-spy="scroll" data-target="#navbar">
<header>

  <div class="navbar-fixed">
    <nav class="black" role="navigation" id="navbar">


      <a href="#" class="brand-logo center">
        <img class="responsive-img" src="../static/img/logo1.jpg" width="50" height="50"
             style="margin-top: 5px;"/></a>
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
                  <img src="../static/img/reddit.png" width="150" height="150">
                  <h5><b>Reddit</b></h5><br>

                  <p>You don't have a Reddit account, go make one!</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action orange">
                  <a href="" class="white-text">Coming Soon!</a>
                </div>
              </div>
            </div>
          </div>


          <div class="col s12 m4">
            <div class="container">
              <div class="card">

                <div class="card-content">
                  <img src="../static/img/twitter.png" width="150" height="150">
                  <h5><b>Twitter</b></h5><br>
                  <p>You did not give a Twitter - you do not have a Twitter.</p>
                  <span>Overall Score:</span>
                  <h4>0</h4>
                </div>
                <div class="card-action blue">
                  <form action="twitter.php" method="POST">
                    <input type="text" name="username" placeholder="Username"><br><br>
                    <input type="submit"
                       class="z-depth-5 btn-large waves-effect waves-light btn-floating btn-large"
                       style="width: 75%;" name="Analyze">
                  </form>
                  <a href="" class="white-text"></a>
                </div>
              </div>
            </div>
          </div>


          <div class="row">

            <div class="col s12 m4">
              <div class="container">
                <div class="card left">

                  <div class="card-content">
                    <img src="../static/img/facebook.png" width="150" height="150">
                    <h5><b>Facebook</b></h5><br>
                    <p>You do not have a Facebook - you didn't give us a FB account.</p>
                    <span>Overall Score:</span>
                    <h4>0</h4>
                  </div>
                  <div class="card-action darken-4" style="background-color: #3A4DA4;">
                    <a href="" class="white-text">Coming Soon!</a>
                  </div>
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

<div class="fixed-action-btn">
  <a href="chatbot.html" class="z-depth-5 btn-large waves-effect waves-light btn-floating btn-large green lighten-1">
    <i class="large material-icons">chat</i> </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>


<footer class="page-footer white">

  <div class="container" style="font-family: Metropolis-Medium,serif; margin-top: -10px">
    4Presence
  </div>
  <br> <br>
</footer>

<script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
<script src="app.js"></script>

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
