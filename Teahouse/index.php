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
    <link rel="stylesheet" href="js/java1.js">
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
        <div class="animatetext">
            <section class="headline">
                <div class="content">
                    <h2>Tea House</h2>
                    <h2>Tea House</h2>
                </div>
               
            </section>
        </div>
        <br>
        <br>
       
       
       <div class="container text-center">    
        <h2 class="heads">About Us</h2><br>
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
         
      <div class="container text-center">    
        <h2 class="heads">Our Products</h2><br>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
            <div class="card">
              <img src="img/product-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><u>Green Tea</u></h5>
                <p class="card-text">Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asi.</p>
                  <div class="a">
                      <a href="view1.php" >View More</a>
                  </div>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="img/product-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><u>Black Tea</u></h5>
                <p class="card-text">Black tea, is a type of tea that is more oxidized than oolong, yellow, white and green teas. Black tea is generally stronger in flavour than other teas. All five types are made from leaves of the shrub Camellia sinensis, though Camellia taliensis is also used rarely.</p>
                 <div class="a">
                     <a href="view2.php" >View More</a>
                  </div>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="img/product-3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><u>Herbal Tea</u></h5>
                <p class="card-text">Herbal teas, also known as herbal infusions and less commonly called tisanes, are beverages made from the infusion or decoction of herbs, spices, or other plant material in hot water. Oftentimes herb tea, or the plain term tea, is used as a reference to all sorts of herbal teas. Many herbs are used in herbal medicine.</p>
                 <div class="a">
                     <a href="view3.php" >View More</a>
                 </div>
              </div>
           
           
            </div>
          </div>
        </div>
        </div>
      </div>
      
      <div class="border">
           
            <h2 class="heads">Facts About Tea</h2>
            <p style="color: black;">    According to legend, Emperor Shen Nung discovered tea in 2732 BC. ...
                The Portuguese and Dutch first imported tea into Europe in 1610. ...
                The Buddhist monk Dengyo Daishi is credited for bringing Chinese tea seeds to Japan. ...
                Americans tasted their first iced tea at the 1904 World's Fair in St.</p>
  
     </div>

      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/article.jpg" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <h2 class="fw4">Featured Acticle</h2>
                        <h1 class="heads">The history of tea leaf in the world</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                </div>
            </div>
      </div>

      <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="heads">Online Store</h2>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-1.jpg" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">Nature close tea</h4>
                            <p class="mb-4">Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="heads">₹144.00</h4>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Buy Now</a>
                        <div class="store-overlay">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-2.jpg" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p class="mb-4">Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="heads">₹400.00</h4>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Buy Now</a>
                        <div class="store-overlay">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-3.jpg" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p class="mb-4">Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="heads">₹599.00</h4>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Buy Now</a>
                        <div class="store-overlay">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Our Office</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Polytechnic Gandhinagar</p>
                  <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+9845689995</p>
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