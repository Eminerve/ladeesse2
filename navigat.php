<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>La Déesse-Navigation</title>
</head>

<body>
	<div class="nav">

		<div id="logo">
			<h1 class="titre1">La Déesse</h1>
		</div>

		<nav>
        <ul>
        		<li><a href="patisserie.php">Pâtisserie</a></li>
            <li><a href="chocolaterie.php">Chocolatrie</a></li>
						<li><a href="confiserie.php">Confiserie</a></li>
            <li><a href="glacerie.php">Glacerie</a></li>
        		<li><a href="apropos.php">À Propos</a></li>
            <li><a href="monde.php">Découvertes</a></li>
      	</ul>
    </nav>

	</div>

  <style>

  @font-face
  {
    font-family: 'Lobster_1.3';
        src: url('fonts/Lobster_1.3.otf');
  }

  @font-face {
        font-family: 'OpenSans';
        src: url('fonts/OpenSans-Light.ttf');
        font-style: normal;
        font-weight: 300;
        font-display: swap;
      }

      @font-face {
        font-family: 'OpenSans';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url('fonts/OpenSans-Regular.ttf');
      }

      @font-face {
        font-family: 'OpenSans';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url('fonts/open-sans-semibold.ttf');
      }

      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        html{
          font-size: 14px;
          font-family: 'OpenSans', halvetica, sans-serif,serif;
        }

  /* -------------------------- Titre ------------------------- */

  .titre1
  {
		font-family: 'Lobster_1.3',serif;
		margin-left: 3rem;
		color: #000;
  }

  /* -------------------------- Header -------------------------- */
  .nav{
    	display: flex;
    	flex-direction: row;
    	width: 100%;
			height: 3rem;
			text-align: center;
			align-items: center;
			justify-content: center;
			margin: auto;
			z-index:1000;
			background-color: #fff;
			box-shadow: 0px 1px 12px #000;
  }

  #logo
  {
    display: flex;
    flex-direction: row;
    flex: 1;
  }

  /* ------------------------ Navigation ------------------------ */

  nav
  {
    display: flex;
    justify-content: flex-start;
    font-weight: 400;
    font-family: 'OpenSans';
  }
  nav ul
  {
      list-style-type: none;
      display: flex;
  }

  nav li
  {
      margin-right: 25px;
  }

  nav a
  {
      font-size: 1rem;
      color: #000;
      padding-bottom: 3px;
      text-decoration: none;
      text-transform: uppercase;
  }

  nav a:hover
  {
  	  border-bottom: 1px solid #000;
  }
  </style>

</body>
</html>
