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
              <h1 class="fonts">Black Tea</h1>
           </div>
         </section>
         
       </div>
        <br>
       <h1 style="color: hwb(165 18% 44%);font-size: 50px;">About Black Tea</h1>
       <br>
       <p style="color: black; font-size: 20px;">Black tea, is a type of tea that is more oxidized than oolong, yellow, white and green teas. Black tea is generally stronger in flavour than other teas. All five types are made from leaves of the shrub Camellia sinensis, though Camellia taliensis is also used rarely.</p>
       <br>

         
       <div class="row1">
        <div class="column1">
          <img src="img/view2.jpg" alt="" style="height: 50%; width:100%">
        </div>
        <div class="column1">
          <img src="img/view2-1.jpg" alt="" style="height: 50%; width:100%">
        </div>
        <div class="column1">
          <img src="img/view2-2.jpg" alt="" style="height: 50%; width:100%">
        </div>
      </div>
      <br>
      <h1 style="color: hwb(165 18% 44%);font-size: 50px;">History</h1>
      <br>
      <p style="color: black; font-size: 20px;">The history of black tea can be traced back to China where it was first made. You’ll find that there are many types of black tea, some of which are a blend of black tea with different origins and some more exotic and non-traditional. Let’s explore black tea origins and its journey.

        The Lapsang Souchong is a Chinese black tea, the original black tea and the first to be created, that’s still popular today. Its origins date back to the late 16th century and it’s name come from Lapsang, the high mountains of China’s Fuiyan area, and Souchong refers to small leaf teas.
        
        “Souchong” indicates the leaves plucked, which are the fourth and fifth leaves of the plant. Unlike the top leaves and bud, the black tea leaves don’t hold as many aromatic compounds. The Souchong is roasted in a bamboo basket (honglong) that’s warmed over burning wood. This lends a smoky taste to the tea, which continues to define the Lapsang Souchong tea.
        
        The story goes that in 1875, a man named Hu Yuanlong went up to Fujiyan to learn how to make black tea. He learnt the art and returned home to Qimen to recreate it. Thus was born the popular Keemun tea.
        
        Black tea continued to be popular in China. When the East India Company decided to grow tea in Darjeeling, the gardens were planted with saplings from China. And black tea production began. Around the same time, the British also discovered another species of tea growing in Assam – the Camellia Sinensis Var, a black tea plant. Assamica is another variety that was popularly grown by the local tribes, processed at home and drunk. This variant was stronger than the Chinese tea, had longer leaves, and went on to become a popular base for breakfast teas in the West..</p>
     
      <br>
      <p style="color: black;font-size: 20px;"><u>how to grow black tea</u></p>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/megEBleqFHA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <br>
      <h1 style="color: hwb(165 18% 44%);font-size: 50px;">Benefits Of Black Tea</h1><br>
      <p style="color: black;font-size: 20px;"> Black tea is the most popular type of tea worldwide.<br>
        Benefits of drinking black tea.<br>
        Promotes heart health.<br>
        Reduces the risk of stroke.<br>
        Improves focus.<br>
        Lowers blood sugar levels.<br>
        Decreases the risk of some cancers.<br>
        Lessens the risk of death from all causes..</p>
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