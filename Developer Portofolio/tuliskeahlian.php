<?php 
  include'ahli.php';
 ?>
 <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="materialize.min.js"></script>
    </head>

    <body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">YOUR SKILL</a>
    </div>
  </nav>
   <div class="row">
    <form action="index.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="Database" type="text" name="dtbase" class="validate" autocomplete="off" autofocus="on">
          <label for="Database">Keahlian 1</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="BahasaScripting" type="text" name="bhscipting" class="validate" autocomplete="off">
          <label for="BahasaScripting">Keahlian 2</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="FrontendDeveloper" type="text" name="frontenddevloper" class="validate" autocomplete="off">
          <label for="FrontendDeveloper">Keahlian 3</label>
        </div>
      </div>
       <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>


    
  </div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright KELOMPOK 9
            </div>
          </div>
        </footer>
        
    </body>
  </html>