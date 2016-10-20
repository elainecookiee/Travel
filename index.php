<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="js/active.js"></script> 
    <script type="text/javascript" src="js/script.js"></script> 
    <title>My Travel Inspo</title>
  </head>



  <body>

    <div id="logo">
      <img src="icons/travel-logo.svg" alt="logo"/>
    </div>
    
    <div class="nav">
        <a href='#' id="home" alt="Home Page">HOME</a>
        <a href='#wrapper' id="gal" alt="Gallery">GALLERY</a>
        <a href='#slider2' id="travel" alt="Travel Board">TRAVEL</a>
        <a href='#slider3' id="connect" alt="Connect with me">CONNECT</a>
    </div>




    <div class='slider'>
      <a href="#"><img id="plane" src='images/puff.svg' alt="animated plane graphic"/></a>
    </div>

    <div id='wrapper'>



    <?php
      $items = [];

      $items[0] = "
      <div class='col'>
        <a target='_blank' href='http://www.uwkonja.com/spring-2016.html'><img src='images/grotto.png' width='300' height='200' alt='Tobemory Trip Album'/></a>
        <div class='title'>Tobemory 2016</div>
      </div>
      ";

      $items[1] = "
      <div class='col'>
        <a target='_blank' href='https://www.facebook.com/media/set/?set=a.10157077780780604.1073741839.648500603&type=1&l=f895deb083'><img src='images/barcelona.jpg' width='300' height='200' alt='Europe Trip Album'/></a>
        <div class='title'>Euro Trip 2016</div>
      </div>
      ";

      $items[2] = "
      <div class='col'>
        <a target='_blank' href='https://www.facebook.com/media/set/?set=a.10157077780780604.1073741839.648500603&type=1&l=f895deb083'><img src='images/caribbeans.jpg' width='300' height='200' alt='Caribbeans Trip Album'/></a>
        <div class='title'>Caribbeans Trip 2016</div>
      </div>
      ";

      //Display gallery pictures in a random order
      $divs = array($items[0], $items[1], $items[2]);
      shuffle($divs); //randomizes items in array
      echo implode(" ",$divs); //returns array as a string
    ?>
    </div>



      <script src="js/random.js"></script>
      <div id='slider2'>

        <a href="http://elainetran.me/" target="_blank" alt="My Portfolio site"><img id="person" src="images/person.svg" alt="person graphic"></a>
      </div>



      <div id="slider3">

        <div class="item">
          <h1>About Me</h1>
          <p>Hi there :) I'm Elaine, Grad student in the Interactive Media Management (IMM) Program at Sheridan, UW Alumni in Honours Psychology.</p>
        </div>

        <div class="item">
          <h1>About this Project</h1> 
          <p>Personal travel inspiration board. This is my first website coded using HTML, CSS, Vanilla JS and PHP.</p>
        </div>

        <div class="item">
          <h1>Let's get Connected!</h1>
          <ul class="social">
            <li><a href="mailto:elainetran.tran@gmail.com?Subject=Hello" target="_top" class="icon brighten" alt="Email me"><img src="icons/mail-icon.svg" alt="mail icon"></a></li>
            <li><a href="https://www.facebook.com/elainecookie" target="_blank" class="icon brighten" alt=" My Facebook"><img src="icons/fb-icon.svg" alt="facebook icon"></a></li>
            <li><a href="https://ca.linkedin.com/in/elaine-tran" target="_blank" class="icon brighten" alt="My LinkedIn"><img src="icons/in-icon.svg" alt="linkedIn icon"></a></li>
            <li><a href="https://www.instagram.com/elainecookiee/" target="_blank" class="icon brighten" alt="My Instagram"><img src="icons/ig-icon.svg" alt="instagram icon"></a></li>
          </ul>
        </div>

      </div>


      <footer>
        <div class="copyright">&copy; 2016 Elaine Tran.</div>
      </footer>

  </body>

</html>
