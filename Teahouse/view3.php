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
              <h1 class="fonts">Herbal Tea</h1>
           </div>
         </section>
         
       </div>
        <br>
       <h1 style="color: hwb(165 18% 44%);font-size: 50px;">About Herbal Tea</h1>
       <br>
       <p style="color: black; font-size: 20px;">Herbal teas, also known as herbal infusions and less commonly called tisanes, are beverages made from the infusion or decoction of herbs, spices, or other plant material in hot water. Oftentimes herb tea, or the plain term tea, is used as a reference to all sorts of herbal teas. Many herbs are used in herbal medicine.</p>
       <br>

         
       <div class="row1">
        <div class="column1">
          <img src="img/view3.jpg" alt="" style="height: 50%; width:100%">
        </div>
        <div class="column1">
          <img src="img/view3-1.jpg" alt="" style="height: 50%; width:100%">
        </div>
        <div class="column1">
          <img src="img/view3-2.jpg" alt="" style="height: 50%; width:100%">
        </div>
      </div>
      <br>
      <h1 style="color: hwb(165 18% 44%);font-size: 50px;">History</h1>
      <br>
      <p style="color: black; font-size: 20px;">The history of herbal tea goes back to ancient times. The first recorded mention of it is found in an ancient Chinese scholar's book called the "Cha Jiao" which was published in 300 BC. In most parts of China, drinking tea has been a social ritual for centuries.

      In India, herbal teas are deemed as a natural alternative to conventionally grown teas. In society today, most people resort to the use of herbal teas because they are not caffeinated, offer many functional benefits and include a wide variety of flavors and aromas. One of the most popular herbs used is Chamomile which is a flower that belongs to the daisy family. Another herb that has been around for centuries and still finds use in various forms today is Dandelion root tea, also known as pate diable or taraxacum mongolicum. This plant's origin can be traced back to East Asia and the Himalayas.
      <br>
      <p style="color: black;font-size: 20px;"><u>how to grow herbal tea</u></p>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/megEBleqFHA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <br>
      <h1 style="color: hwb(165 18% 44%);font-size: 50px;">Benefits Of Herbal Tea</h1><br>
      <p style="color: black;font-size: 20px;">    Chamomile tea – Helps to reduce menstrual pain and muscle spasms, improves sleep and relaxation, and reduces stress.
        <br>Rooibos – Improves blood pressure and circulation, boosts good cholesterol while lowering bad cholesterol, keeps hair strong and skin healthy, and provides relief from allergies.</p>
      <br>
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