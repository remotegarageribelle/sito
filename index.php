<!DOCTYPE html>
<html>
  <head>
    <title>Remote garage ribelle</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/index.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
      body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
  </head>
  <body class="w3-light-grey">
    <div class="w3-content" style="max-width:1400px">
      <header class="w3-container w3-center w3-padding-32"> 
        <h1><b>REMOTE GARAGE RIBELLE</b></h1>
        <p>Benvenuti nel remote garage più ribelle che ci sia</p>
      </header>
      <div class="w3-row">
        <div class="w3-col l8 s12">
          <div class="w3-card-4 w3-margin w3-white">
            <img src="images/silverstone.png" alt="Silverstone" style="width:100%">
            <div class="w3-container">
              <h3><b>GP di Gran Bretagna</b></h3>
              <h5>Silverstone, <span class="w3-opacity">3 luglio 2022</span></h5>
            </div>
            <div class="w3-container">
              <p>Potevamo festeggiare la seconda doppietta stagionale e dare a Carletto l'occasione di allungare su Max e invece...</p>
              <div class="w3-row">
                <div class="w3-col m8 s12">
                  <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                </div>
                <div class="w3-col m4 w3-hide-small">
                  <p><span class="w3-padding-large w3-right"><b>7 agosto 2022</b></span></p>
                </div>
              </div>
            </div>
          </div><hr>
          <div class="w3-card-4 w3-margin w3-white">
            <img src="images/hungaroring.png" style="width:100%">
            <div class="w3-container">
              <h3><b>GP di Ungheria</b></h3>
              <h5>Hungaroring, <span class="w3-opacity">31 luglio 2022</span></h5>
            </div>
            <div class="w3-container">
              <p>Che si sarà inventato il muretto dei campioni per far finire fuori dal podio entrambe le vetture con conseguente vittoria di super Max partito decimo? Se siete curiosi questo è l'articolo che fa al caso vostro</p>
              <div class="w3-row">
                <div class="w3-col m8 s12">
                  <p><button class="w3-button w3-padding-large w3-white w3-border" onclick="window.location.href='Rueda.html'"><b>READ MORE »</b></button></p>
                </div>
                <div class="w3-col m4 w3-hide-small">
                  <p><span class="w3-padding-large w3-right"><b>2 agosto 2022</b></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w3-col l4">
<?php
    $html = file_get_contents("moduli/latbar.html");
    echo $html;
?>
        </div>
      </div><br>
    </div>
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>
  </body>
</html>