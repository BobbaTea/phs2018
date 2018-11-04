
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
        content="A Site for you to know your presence  - reported with Artificial Intelligence and Machine Learning">

  <title>preZense</title>

  <!-- Favicon -->
  <link rel="icon" href="../static/img/favicon.png" type="image/x-icon"/>

  <!-- Bootstrap core CSS -->
  <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts -->
  <link href="../static/vendor/fontawesome-free/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="../static/css/device-mockups.min.css">
  <link rel="stylesheet" type="text/css" href="../static/css/agency.min.css">
  <link rel="stylesheet" type="text/css" href="../static/css/style.css">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><b></b>preZense</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <!--suppress CheckTagEmptyBody -->
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#what-we-do">What we do</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="analysis.html">Get Started</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-heading text-uppercase">preZense</div>
      <div id="main">
        <a onclick="gsbutton()" class="btn btn-primary btn-xl invert text-uppercase js-scroll-trigger">Login</a>

      </div>
      <script>
          function gsbutton() {
              document.getElementById('main').innerHTML =
                  '<button style="margin-left: 20px;" class="btn btn-primary btn-xl invert text-uppercase js-scroll-trigger"' +
                  ' href="login.php">Login</button>';
          }
      </script>
    </div>
    <br>
  </div>
</header>

<!-- What we do -->
<section class="bg-light" id="what-we-do">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">What we do?</h2>
        <h3 class="section-subheading text-muted">preZense was made to bring people together through Artificial
          Intelligence.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <!--suppress CheckTagEmptyBody -->
            <i class="blue fas fa-atom"></i>
          </span>
        <h4 class="service-heading">Artificial Intelligence</h4>
        <p class="text-muted">At preZense, we have put together the latest technologies so that everything --
          even
          a something as advanced as Machine Learning is reduced to an easy to use abstraction that
          allows you to get
          information on your preZense at the same time.</p>
      </div>
      <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <!--suppress CheckTagEmptyBody -->
            <i class="fas fa-users green"></i>
          </span>
        <h4 class="service-heading">Connect</h4>
        <p class="text-muted">With preZense, you can get see your presence <b></b> your
          interests. With only a simple click of a button, our Machine Learning algorithms can give
          suggestions
          on what it
          thinks are potentially negative comments.</p>
      </div>
      <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <!--suppress CheckTagEmptyBody -->
            <i class="fas fa-medal gold"></i>
          </span>
        <h4 class="service-heading">Achieve</h4>
        <p class="text-muted">We <b>want <i>you</i></b> to be successful. As such, our easy to use app allows
          you to
          to do what you want when you want. Have a success story that you want to share? If so,
          then message us <u><a
                  class="blue" href="#contact">here</a></u></p>
      </div>
    </div>
  </div>
</section>

<!-- Team -->


<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">Please wait up to 3-4 business days for a response.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Your Name *"
                       required="required"
                       data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Your Email *"
                       required="required"
                       data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                       required="required"
                       data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <!--suppress CheckTagEmptyBody -->
                <textarea class="form-control" id="message" placeholder="Your Message *"
                          required="required"
                          data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-primary btn-xl invert text-uppercase"
                      type="submit">Send
                Message
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="copyright">Copyright &copy; 4Presence 2018</span>
      </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="https://twitter.com" target="_blank">
              <!--suppress CheckTagEmptyBody -->
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://facebook.com" target="_blank">
              <!--suppress CheckTagEmptyBody -->
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://linkedin.com" target="_blank">
              <!--suppress CheckTagEmptyBody -->
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- Keep the below div for spacing -->
      <div class="col-md-4">
        <!-- <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul> -->
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="../static/vendor/jquery/jquery.min.js"></script>
<script src="../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../static/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="../static/js/jqBootstrapValidation.min.js"></script>
<script src="../static/js/contact_me.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../static/js/agency.min.js"></script>

</body>

</html>
