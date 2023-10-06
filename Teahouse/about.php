<?php
    session_start();

    if(isset($_SESSION["username"])){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css/style.css">
    <link rel="stylesheet" href="css/css.scss">
    <link rel="stylesheet" href="js/java.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Welcome to this site</title>
    
   
  </head>
    <body>
      <header class="header">
        <h2 class="logo"><a href="index.php">Tea House</a></h2>
      <ul class="main-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="store.php">Store</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="profile.php">Profile</a></li>
      </ul>
    </header> 
    <section class="headline">
      <div class="texthover">
          <h1 class="fonts">About Us</h1>
       </div>
     </section>
         
       </div>
       <br>
       <div class="container text-center">    
        <div class="row">
            <div class="container-xxl py-5">
              <div class="container">
                  <div class="row g-5">
                      <div class="col-lg-6">
                          <div class="row g-3">
                              <div class="col-6 text-end">
                                  <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="img/about-1.jpg" alt="">
                                  <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="img/about-3.jpg" alt="">
                              </div>
                              <div class="col-6">
                                  <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="img/about-4.jpg" alt="">
                                  <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="img/about-2.jpg" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                          <div class="section-title">
                              <h1 class="display-6">The success history of TEA House in 25 years</h1>
                          </div>
                          <div class="row g-3 mb-4">
                              <div class="col-sm-4">
                                  <img class="img-fluid bg-white w-100" src="img/about-5.jpg" alt="">
                              </div>
                              <div class="col-sm-8">
                                  <h5>Our tea is one of the most popular drinks in the world</h5>
                                  <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                              </div>
                          </div>
                          <div class="border-top mb-4"></div>
                          <div class="row g-3">
                              <div class="col-sm-8">
                                  <h5>Daily use of a cup of tea is good for your health</h5>
                                  <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                              </div>
                              <div class="col-sm-4">
                                  <img class="img-fluid bg-white w-100" src="img/about-6.jpg" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>  
        </div>
      </div><br>


    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Our Office</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</p>
                  <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                  <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Quick Links</h4>
                  <ul style="list-style-type: none;">
                    <li><a class="Qlinks" href="">About Us</a></li>
                    <li><a class="Qlinks" href="">Contact Us</a></li>
                    <li><a class="Qlinks" href="">Our Services</a></li>
                    <li><a class="Qlinks" href="">Terms & Condition</a></li>
                    <li><a class="Qlinks" href="">Support</a></li>
                  </ul>
              </div>
    
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Newsletter</h4>
                  <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                  <div class="position-relative w-100">
                      <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>
<?php
    }else{
        header("Location: ./register.html");
    }

?>