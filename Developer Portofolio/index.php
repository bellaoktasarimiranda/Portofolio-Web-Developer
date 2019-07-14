<?php 
  include'aksi.php'; 
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
      <a href="#" class="brand-logo">Web Developer Portofolio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="tuliskeahlian.php">Tulis Keahlian</a></li>
        <li><a href="upload.html">Upload Karya</a></li>
      </ul>
    </div>
  </nav>
   <div class="row">
    <form action="index.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="namaDeveloper" type="text" name="namadevloper" class="validate" autocomplete="off" autofocus="on">
          <label for="namaDeveloper">Nama</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="alamatDeveloper" type="text" name="alamatdevloper" class="validate" autocomplete="off">
          <label for="alamatDeveloper">Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="noHpDeveloper" type="text" name="nohpdevloper" class="validate" autocomplete="off">
          <label for="noHpDeveloper">Nomor Hp</label>
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
                <h5 class="white-text">FRONT-END DEVELOPER</h5>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright KELOMPOK 9
            </div>
           <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <label for="icon_telephone"></label>
        </div>
            <h6 class="white-text">More Info</h6>
             <h6 class="white-text">082217873635</h6>
            </div>
          </div>
        </footer>
        
    </body>
  </html>