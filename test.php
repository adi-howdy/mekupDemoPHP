<!DOCTYPE html>


<head>
    <title>Makeup Obsession</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans|Source+Serif+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Srisakdi" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md  fixed-top navbar-inverse navbar-dark" id="ftco-navbar">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler  navbar-toggler-right" data-toggle="collapse" data-target="#myTogglerNav" aria-controls="#myTogglerNav"
                    aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <i class="fas fa-cube"></i>The Makeup Obsession</a>
                <section class="collapse navbar-collapse" id="myTogglerNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <!-- <li class="nav-item"><a href="service.html" class="nav-link">Service</a></li> -->
                        <li class="dropdown">
                            <a href=# class="dropdown-toggle text-light service" data-toggle="dropdown">Service
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu sub-menu">
                                <li class="text-light">
                                    <a href="bride.html">Bride & Party Makeup </a>
                                    <li>
                                        <li class="text-light">
                                            <a href="model.html">Models Makeup </a>
                                        </li>
                                        <li class="text-light">
                                            <a href="professional.html">Professional Makeup</a>
                                        </li>
                                        <li class="text-light">
                                            <a href="self.html">Self Makeup</a>
                                        </li>
                            </ul>

                            </li>
                            <li class="nav-item">
                                <a href="register.html" class="nav-link">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.html" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                    </ul>
                </section>
            </div>
        </nav>
    </header>

    <div id="container1">
        <div id="main1">
            <header>
                <h2>Booking Form</h2>
                <p>Please fill up all the information in the form below and once you are registered then our team will contact
                    you via Call</p>
            </header>
            <div id="sub-main">
                <section class="main">
                    <article class="registrationform">
                        <form class="registration form-horizontal" action="'.$_SERVER['PHP_SELF'].'"  method="post">
                            <fieldset id="personalinfo">
                                <legend>Personal Info</legend>

                                <section>
                                    <label class="control-label" for="id">Number of People</label>
                                    <div class="controls">
                                        <input class="form-control" type="number"  name="people" id="people" autofocus placeholder="Number of People">
                                    </div>
                                </section>


                                <section>
                                    <label class="control-label" for="id">Date</label>
                                    <div class="controls">
                                        <input class="form-control" type="date"  name="date" id="date" autofocus placeholder="Date">
                                    </div>
                                </section>

                                

                                
                            </fieldset>
                            <!-- personal info -->
                            <br>
                            <br>
                            <button class="btn " type="submit">Next</button>
                        </form>
                    </article>
                </section>
            </div>
        </div>
    </div>

<footer>
      <div class="container">
        
          <div class="row">
          <div class="col-md-12 text-center">
              <h2 class="footer-title">Contact</h2>
              <div class="location">
	                <span> <i class="fas fa-map-marker-alt"></i></span><span class="text location">: Nadipur Ward no. 1, Pokhara</span><br>
	                <a href="#"><i class="fas fa-phone text-light"> </i><span class="text location">: +977 9849865855</span></a><br>
                  <a href="#"><i class="fas fa-envelope text-light"> </i><span class="text location">: swikritee.shrestha@gmail.com</span></a>  
                  </div>
          </div>
        </div>
        <div class="row">  
            <div class = "col-md-12 text-center"> 
                  <span class = "btn btn-social-icon btn-facebook text-light align-items-center"><a href="https://www.facebook.com/makeupbyswiki/"> <i class="fa fa-facebook fa-lg"></i></a></span>
                  <span class = "btn btn-social-icon btn-instagram text-light align-items-center"><a href="https://www.instagram.com/swikishrestha/?hl=en"><i class="fa fa-instagram fa-lg"></i></a></span>
                  <span class = "btn btn-social-icon btn-twitter text-light align-items-center"><a href="#"><i class="fa fa-twitter fa-lg"></i></a></span>      
            </div>
            </div>
        <div class="row">
          <div class="col-md-12 text-center">       
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
          </div>
        </div>
      </div>
    </footer>



    <!-- loader -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


</body>

</html>
