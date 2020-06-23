<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" href="style.css" as="style">
    <link rel="preload" href="script.js" as="script">
    <link rel="stylesheet" href="style.css">


    <title>La Déesse - Home</title>
  </head>
  <body>

  <div class="entiere">
    <div id="contener">
        <a href="#navig">
    		<video src="video/chocolat1.mp4" autoplay width="100%" height="100%" muted preload="auto" loop></video>
    		<div class="animate seven">
    			<span>L</span><span>a</span>&nbsp;<span>D</span><span>é</span><span>e</span><span>s</span><span>s</span><span>e</span>
    		</div>
        <div class="scrolling_image">
          <a href="#navig"><img src="images/fleche.gif" alt="images flèche vers le bas"></a>
        </div></a>
    </div>

    <!-- Intégration de la navigation fixe -->
    <div id="navig">
      <?php include('navigat.php'); ?>
    </div>


      <div id="bienvenue">
        <h1>Le culte du Cacao moderne</h1>
        <p>Depuis plus de trente ans nous avons le plaisir de participer à vos moments de bonheur.<br> De la gourmandise au gâteau de mariage, nous sommes à vos cotés pour satisfaire toutes vos envies.</p>
      </div>

      <section class="categories">
        <div class="element patisserie">
          <img src="images/patisserie.png" alt="patisserie pâtisserie la déesse">
          <div class="bouton patisserie">
            <button type="button" name="voir">PÂTISSERIE</button>
          </div>
        </div>
        <div class="element chocolaterie">
          <img src="images/chocolaterie.jpg" alt="chocolat la déesse">
          <div class="bouton chocolaterie">
            <button type="button" name="voir">CHOCOLATERIE</button>
          </div>
        </div>
        <div class="element confiserie">
          <img src="images/confiserie.jpg" alt="confiserie la déesse">
          <div class="bouton confiserie">
            <button type="button" name="voir">CONFISERIE</button>
          </div>
        </div>
        <div class="element glacerie">
          <img src="images/glacerie.jpg" alt="glace la déesse">
          <div class="bouton glacerie">
            <button type="button" name="voir">GLACERIE</button>
          </div>
        </div>
      </section>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("navig");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }

    $(document).ready(function() {
      $('a[href^="#"]').click(function(evt){
        evt.preventDefault();
        var target = $(this).attr('href');
        $('html,body')
    .stop()
    .animate({scrollTop: $(target).offset().top}, 1000);
  });

});
    </script>

    <script>

    <!-- Show on hover -->
    $(document).ready(function(){
      $(".patisserie").hover(function(){
        $(".bouton.patisserie").slideToggle("slow");
      });
      $(".chocolaterie").hover(function(){
        $(".bouton.chocolaterie").slideToggle("slow");
      });
      $(".confiserie").hover(function(){
        $(".bouton.confiserie").slideToggle("slow");
      });
      $(".glacerie").hover(function(){
        $(".bouton.glacerie").slideToggle("slow");
      });
    });
    </script>

  </body>
</html>
