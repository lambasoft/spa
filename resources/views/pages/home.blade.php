
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Spa Advisor</title>


  <!-- FONTS -->
  <link href='//fonts.googleapis.com/css?family=Cabin:400,600|Open+Sans:300,600,400' rel='stylesheet'>

  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link href="css/animate.css/animate.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/app.css" rel="stylesheet">
  <link href="css/home.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="app-layout">

    <header class="container home-page">
      <div class="row">
        <div class="col-md-10">  
          <div class="pull-right">  
            <!-- LOGO ON HEADER -->
            <img class="pull-right" src="assets/logo.png" alt="">
            <div class="account">
              <div class="button pull-right">
                <!-- <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary standard-button">GET STARTED</a> -->
                <a href="spas" class="btn btn-primary standard-button">Get Started</a>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>




    <div class="container">
      <div class="row">
        <div class="pages">
          <div class="col-md-2 fadeInLeft animated">
            <div class="single-page banner">
              <h3 style="color:black">Banner</h3>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-3 col-xs-6 fadeInLeft animated">
                <div class="single-page border-bottom-hover-green">
                  <a href="#">
                    <h3 class="colored-green">SPA</h3>
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-xs-6 fadeInLeft animated ">
                <div class="single-page border-bottom-hover-red">
                  <a href="#">
                    <h3 class="colored-red">WELLNESS</h3>
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-xs-6 fadeInLeft animated">
                <div class="single-page border-bottom-hover-pink">
                  <a href="#">
                    <h3 class="colored-pink">GIFTS</h3>
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-xs-6 fadeInLeft animated">
                <div class="single-page border-bottom-hover-maroon">
                  <a href="#">
                    <h3 class="colored-maroon">JOBS</h3>
                  </a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-xs-6 fadeInRight animated">
                <div class="single-page border-bottom-hover-blue">
                  <a href="#">
                    <h3 class="colored-blue">SUPPLIES</h3>
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-xs-6 fadeInRight animated">
                <div class="single-page border-bottom-hover-purple">
                  <a href="#">
                    <h3 class="colored-purple">MANUALS</h3>
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-xs-6 fadeInRight animated">
                <div class="single-page border-bottom-hover-yellow">
                  <a href="#">
                    <h3 class="colored-yellow">RATE SPA</h3>
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-xs-6 fadeInRight animated">
                <div class="single-page border-bottom-hover-gray">
                  <a href="#">
                    <h3 class="colored-gray">NEWS</h3>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-2 fadeInLeft animated">
            <div class="single-page banner">
              <h3 style="color:black">Banner</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">All Rights Reserved</p>
      </div>
    </footer>

    <div class="container">


    </div>


    @include('modals.signin')

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
  <script src="scripts/scripts.js"></script>
</body>
</html>
