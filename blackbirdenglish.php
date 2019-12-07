<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <title>Blackbird</title>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <style>
    {
      height: 100%;
      overflow: hidden;
      margin: 0;
    }

    #content {
      height: 100%;
    }

    #left {
      float: left;
      width: 50%;
      background: white;
      height: 100%;
      overflow: auto;
      box-sizing: border-box;
      padding: 0.4em;
    }

    #right {
      float: left;
      width: 50%;
      background: rgb(231, 231, 238);
      height: 100%;
      overflow: auto;
      box-sizing: border-box;
      padding: 0.4em;
    }
  </style>
</head>

<!-- ////////////////////////////////////////////////////////////////////////////////////// -->

<body class="grey lighten-3">


  <!-- //////////////////////////////////////// NAVBAR ////////////////////////////////////////////// -->

  <!-- NAVBAR -->
  <nav class="z-depth-0 grey darken-1">
    <div class="nav-wrapper">
      <img src="./Spark_images/Logo/sparkNavlogo2a.png" class="brand-logo">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>


      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li class="logged-in" style="display: none;">
          <a href="english.php" class="grey-text modal-trigger" data-target="modal-home">Home</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="english.php" class="grey-text modal-trigger" data-target="modal-home">Home</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="blackbirdenglish.php" class="grey-text modal-trigger" data-target="modal-home">English</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="blackbird.php" class="grey-text modal-trigger" data-target="modal-home">Español</a>
        </li>

      </ul>
    </div>
  </nav>


   <!-- ////////////////////////////////////////  Movil Side navbar  ////////////////////////////////////////////// -->

   <ul class="sidenav" id="mobile-demo">
    <!-- <li><a href="sass.php">Sass</a></li> -->
    <li><a href="english.php">Home</a></li>
    <li><a href="blackbirdenglish.php">English</a></li>
    <li><a href="blackbird.php">Español</a></li>
    <!-- <li><a href="mobile.php">Mobile</a></li> -->
  </ul>


</head>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->

  <!-- ADMIN ACTIONS -->
  <form class="center-align admin-actions admin" style="margin: 40px auto; max-width: 300px; display: none;">
    <input type="email" placeholder="User email" id="admin-email" required />
    <button class="btn-small yellow darken-2 z-depth-0">Make admin</button>
  </form>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- client info goes in here
         SIGN UP MODAL -->
  <div id="modal-signup" class="modal">
    <div class="modal-content">
      <h4>Registrarse</h4><br />
      <form id="signup-form">
        <div class="input-field">
          <input type="email" id="signup-email" required />
          <label for="signup-email">Correo Electrónico</label>
        </div>
        <div class="input-field">
          <input type="password" id="signup-password" required />
          <label for="signup-password">Elegir Contraseña</label>
        </div>

        <div class="input-field">
          <input type="password" id="signup-verify" required />
          <label for="signup-verify">Verificar Contraseña</label>
        </div>

        <div class="input-field">
          <input type="text" id="signup-bio" required />
          <label for="signup-bio">Nombre de usuario</label>
        </div>

        <button class="btn yellow darken-2 z-depth-0">Registrarse</button>
        <p class="error pink-text center-align"></p>
      </form>
    </div>
  </div>

  <!-- /////////////////////////////////////  IMPORTANT  ///////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!--  //////////////////////////////////////////  photo / grid  //////////////////////////////////////////  -->


  <!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
  <section class="container section logged-out" style="display: none;" id="photo's">

    <!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
    <div class="row">
      <div class="col s12 l4 ">
        <img src="./Spark_images/Black Bird/纹身针-04.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col s12 l6 offset-l1">
        <a href="blackbird.php" </a> <h2 class="white-text text-darken-4">Blackbird</h2>
          <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
            Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
            Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
            Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
            Donec id turpis id diam tincidunt vulputate nec a neque.</p>
        </a>
      </div>
    </div>

    <!-- ////////// fourth ROW ////////// -->
      <!-- beware the size are: "col L4, L7, L6, L5" NOT!!!!!! "col 14, 17, 16 or 15" -->
      <div class="row">
          <div class="col s12 l4 push-l7 offset-l1">
            <img src="./Spark_images/Black Bird/纹身针-05.jpg" alt=""
              class="responsive-img materialboxed">
          </div>
          <div class="col s12 l6 pull-l5 right-align offset-l1">
            <a href="blackbird.php" </a> <h2 class="white-text text-darken-4">Blackbird 2</h2>
              <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
                Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
                Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
                Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
                Donec id turpis id diam tincidunt vulputate nec a neque.</p>
            </a>
          </div>
        </div>

  </section>

  <!-- /////////////////////////////////////  IMPORTANT  ///////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- closing tags -->
  </div>

  </section>

  
      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      </div>

    </div>
  </div>

  </div>

  <!-- //////////////////////////////////////////   parallax  //////////////////////////////////////////   -->


  <div class="parallax-container logged-out" style="display: none;">
    <div class="class parallax">
      <img src="./Spark_images/TrueColor+ Cartriges-STP-T/a4a3ef68-b004-4a08-99e4-3101f26e2fa9.jpg"
        class="responsive-img">
    </div>
  </div>



  <!-- /////////////////////////////////////  IMPORTANT  ///////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- closing tags -->
  </div>
  </section>




  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->



  <!-- ACCOUNT MODAL  -->
  <div id="modal-account" class="modal">
    <div class="modal-content center-align">
      <h4>Detalles de usuario</h4><br />
      <div class="account-details">

      </div>
    </div>
  </div>


  <!-- //////////////////////////////////////////   footer  //////////////////////////////////////////   -->


  <footer class="page-footer grey darken-3">
    <div class="container logged-out" style="display: none;">
      <div class="row">

        <!-- Left column -->
        <div class="col s12 l6">
          <h5>Sobre Nosotros</h5>
          <p>
            Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
            Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
          </p>
          <p>
            Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
            Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
          </p>
        </div>

        <!-- right column -->
        <div class="col s12 l4 offset-l2">
          <h5>connect</h5>
          <ul>
            <li><a href="https://www.facebook.com/SparkTattooSupplies-102818061073974/"
                class="grey-text text-light-3">Facebook</a>
            </li>
            <li><a href="https://twitter.com/AcDelei" class="grey-text text-light-3">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UCHHvdW4kmj_2uZeFGUck_iQ"
                class="grey-text text-light-3">YouTube</a></li>
            <li><a href="https://www.instagram.com/acdelei/" class="grey-text text-light-3">Instagram</a></li>
          </ul>

        </div>


        <!-- Closing tags -->
      </div>
    </div>

    <div class="footer-copyright grey darken-4">

      <div class="container center-align">&copy;2019 Spark Tattoo Supplies</div>

    </div>
  </footer>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- Firebase App -->
  <script src="https://www.gstatic.com/firebasejs/5.7.3/firebase-app.js"></script>
  <!-- Firebase Auth -->
  <script src="https://www.gstatic.com/firebasejs/5.7.3/firebase-auth.js"></script>
  <!-- Firebase firestore -->
  <script src="https://www.gstatic.com/firebasejs/5.7.3/firebase-firestore.js"></script>
  <!-- Firebase functions -->
  <script src="https://www.gstatic.com/firebasejs/5.7.3/firebase-functions.js"></script>


  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <script>
        // Initialize Firebase
        var config = {
      apiKey: "##########",
      authDomain: "",
      databaseURL: "",
      projectId: "############"
    };

    firebase.initializeApp(config);


    // make auth and firestore references
    const auth = firebase.auth();
    const db = firebase.firestore();
    const functions = firebase.functions();

    // update firestore settings
    db.settings({ timestampsInSnapshots: true });

    $(document).ready(function () {

      // sidenav
      $('.sidenav').sidenav();


      // offset images
      $('.materialboxed').materialbox();

      // Parallax image
      $('.parallax').parallax();

      // tabs
      $('.tabs').tabs();

      Datepicker
      $('.datepicker').datepicker({
        // this is an otion you can use in calanders 
        disableWeekends: true
      });

      $('.tooltipped').tooltip();

      $('.scrollspy').scrollSpy();

    });

  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/auth.js"></script>
  <script src="scripts/index.js"></script>

 

</body>

</html>