<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" href="style.css" as="style">
    <link rel="preload" href="script.js" as="script">
    <link rel="stylesheet" href="style.css">


    <title>La Déesse - Pâtisserie</title>
  </head>
  <body>
    <div id="navig">
      <?php include('navigat.php'); ?>
    </div>

    <div id="bienvenue">
      <h1>La Pâtisserie</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br>in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,<br>sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
    </div>

    <section id="volant">
      <div class="base">
        <div class="images">
          <img src="images/killy.gif" alt="photo du gâteau le killy de la deesse">
        </div>
        <div class="polygon1">
          <div class="text">
            <h1>Entremets</h1><br>
            <p>Pour un miximum de fraîcheur, <br>nos entremets changent selon les saisons</p><br>
            <h2 class="prix">35€/le kilo</h2>
          </div>
        </div>
      </div>
    </section>

    <section id="volant">
      <div class="base">

        <div class="polygon1">
          <div class="text">
            <h1>Macarons</h1><br>
            <p>Pour un miximum de fraîcheur, <br>nos entremets changent selon les saisons</p><br>
            <h2 class="prix">1,5€/la pièce</h2>
          </div>
        </div>

        <div class="images">
          <img src="images/macaron.gif" height="300px" alt="photo des macarons de la deesse">
        </div>

      </div>
    </section>

    <section id="volant">
      <div class="base">
        <div class="images">
          <img src="images/killy.gif" alt="photo du gâteau le killy de la deesse">
        </div>
        <div class="polygon1">
          <div class="text">
            <h1>Entremets</h1><br>
            <p>Pour un miximum de fraîcheur, <br>nos entremets changent selon les saisons</p><br>
            <h2 class="prix">35€/le kilo</h2>
          </div>
        </div>
      </div>
    </section>

    <section id="volant">
      <div class="base">

        <div class="polygon1">
          <div class="text">
            <h1>Macarons</h1><br>
            <p>Pour un miximum de fraîcheur, <br>nos entremets changent selon les saisons</p><br>
            <h2 class="prix">1,5€/la pièce</h2>
          </div>
        </div>

        <div class="images">
          <img src="images/macaron.gif" height="300px" alt="photo des macarons de la deesse">
        </div>

      </div>
    </section>

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
  </body>
</html>
