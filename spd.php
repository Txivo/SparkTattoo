<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <title>True Color Membrane SPD</title>

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
          <a href="#" class="grey-text modal-trigger" data-target="modal-home">Home</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="index.php" class="grey-text modal-trigger" data-target="modal-home">Home</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="spdenglish.php" class="grey-text modal-trigger" data-target="modal-home">English</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="spd.php" class="grey-text modal-trigger" data-target="modal-home">Español</a>
        </li>

      </ul>
    </div>
  </nav>

   <!-- ////////////////////////////////////////  Movil Side navbar  ////////////////////////////////////////////// -->

   <ul class="sidenav" id="mobile-demo">
    <!-- <li><a href="sass.php">Sass</a></li> -->
    <li><a href="index.php">Home</a></li>
    <li><a href="spdenglish.php">English</a></li>
    <li><a href="spd.php">Español</a></li>
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
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/pic 1.jpg" alt=""
          class="responsive-img materialboxed">
      </div>
      <div class="col s12 l6 offset-l1">
        <a href="" </a> <h2 class="grey-text text-darken-4">True Color Membrane Cartridges SPD</h2>
          <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
            Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
            Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
            Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
            Donec id turpis id diam tincidunt vulputate nec a neque.</p>
        </a>
      </div>

      <!-- /////////////////////////////////////  IMPORTANT  ///////////////////////////////////////////////// -->
      <!-- closing tags -->
    </div>

  </section>



  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <!--  //////////////////////////////////////////  photo / grid test  //////////////////////////////////////////  -->


  <!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
  <section class="container section logged-out" style="display: none;" id="photo's">

    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////  First Row  //////////////////////////////////////////// -->

    <div class="row">

      <!-- /////////////////////////////////////////  Round Liner  ///////////////////////////////////////////// -->
      <div class="col s12 m4">Round Liner
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/1 2.jpg" alt="" class="responsive-img materialboxed">

        <!-- collapsible -->
        <ul class="collapsible">
          <li>

            <!-- Name of collapsible -->
            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Round Liner</div>
            <div class="collapsible-body"><span>


                <!-- Content table -->
                <table>
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th></th>
                    </tr>

                    <tr>
                      <th>Round Liner</th>
                      <th>16pcs/box</th>
                      <th>Item Price</th>
                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>1.- SPD-C1401RL</td>
                      <td></td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>2.- SPD-C1203RL</td>
                      <td>SPD-C1003RL</td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>3.- SPD-C1205RL</td>
                      <td>SPD-C1005RL</td>
                      <td>$18.00</td>
                    </tr>

                    <tr>
                      <td>4.- SPD-C1207RL</td>
                      <td>SPD-C1007RL</td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>5.- SPD-C1209RL</td>
                      <td>SPD-C1009RL</td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>6.- SPD-C1211RL</td>
                      <td>SPD-C1011RL</td>
                      <td>$19.00</td>
                    </tr>

                    <tr>
                      <td>7.- SPD-C1214RL</td>
                      <td>SPD-C1014RL</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>8.- SPD-C1218RL</td>
                      <td></td>
                      <td>$20.00</td>
                    </tr>

                    <br>
                  </tbody>
                </table>
              </span></div>
          </li>
        </ul>

      </div>


      <!-- Round Shader -->
      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="col s12 m4">Round Shader
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/11.jpg" alt="" class="responsive-img materialboxed">


        <!-- collapsible -->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Round Shader</div>
            <div class="collapsible-body"><span>

                <!-- Content table -->
                <table>
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th></th>
                    </tr>

                    <tr>
                      <th>Round Shader</th>
                      <th>16pcs/box</th>
                      <th>Item Price</th>
                    </tr>

                  </thead>

                  <tbody>


                    <!-- Content -->

                    <tr>
                      <td>1.- SPD-C1203RS</td>
                      <td></td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>2.- SPD-C1205RS</td>
                      <td></td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>3.- SPD-C1207RS</td>
                      <td></td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>4.- SPD-C1209RS</td>
                      <td></td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>5.- SPD-C1211RS</td>
                      <td></td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>6.- SPD-C1214RS</td>
                      <td></td>
                      <td>$19.00</td>
                    </tr>

                    <tr>
                      <td>7.- SPD-C1218RS</td>
                      <td></td>
                      <td>$20.00</td>
                    </tr>



                    <br>
                  </tbody>
                </table>


              </span></div>
          </li>
        </ul>

      </div>

      <!-- Magnum -->
      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="col s12 m4">Magnum
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/10.jpg" alt="" class="responsive-img materialboxed">


        <!-- collapsible -->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Magnum</div>
            <div class="collapsible-body"><span>

                <!-- Content table -->
                <table>
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th></th>
                    </tr>

                    <tr>
                      <th>Magnum</th>
                      <th>16pcs/box</th>
                      <th>Item Price</th>
                    </tr>

                  </thead>

                  <tbody>

                    <!-- Content -->
                    <tr>
                      <td>1.- SPD-C1205M1</td>
                      <td>SPD-C1005M1</td>
                      <td>$20.00</td>
                    </tr>
                    <tr>
                      <td>2.- SPD-C1207M1</td>
                      <td>SPD-C1007M1</td>
                      <td>$21.00</td>
                    </tr>
                    <tr>
                      <td>3.- SPD-C1209M1</td>
                      <td>SPD-C1009M1</td>
                      <td>$21.00</td>
                    </tr>

                    <tr>
                      <td>4.- SPD-C1211M1</td>
                      <td>SPD-C1011M1</td>
                      <td>$22.00</td>
                    </tr>
                    <tr>
                      <td>5.- SPD-C1213M1</td>
                      <td>SPD-C1013M1</td>
                      <td>$22.00</td>
                    </tr>
                    <tr>
                      <td>6.- SPD-C1215M1</td>
                      <td>SPD-C1015M1</td>
                      <td>$22.00</td>
                    </tr>

                    <tr>
                      <td>7.- SPD-C1217M1</td>
                      <td>SPD-C1017M1</td>
                      <td>$23.00</td>
                    </tr>
                    <tr>
                      <td>8.- SPD-C1219M1</td>
                      <td>SPD-C1019M1</td>
                      <td>$23.00</td>
                    </tr>



                    <br>
                  </tbody>
                </table>


              </span></div>
          </li>
        </ul>

      </div>


    </div>


    <!-- ////////////////////////////////////////// Second Row  //////////////////////////////////////////// -->
    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="row">


      <!-- Curve Magnum -->
      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="col s12 m4">Curve Magnum
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/1 2.jpg" alt="" class="responsive-img materialboxed">

        <!-- collapsible -->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Curve Magnum</div>
            <div class="collapsible-body"><span>

                <!-- Content table -->
                <table>
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th></th>
                    </tr>

                    <tr>
                      <th>Curve Magnum</th>
                      <th>16pcs/box</th>
                      <th>Item Price</th>
                    </tr>

                  </thead>

                  <tbody>


                    <!-- Content -->

                    <tr>
                      <td>1.- SPD-C1205CM</td>
                      <td>SPD-C1005CM</td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>2.- SPD-C1207CM</td>
                      <td>SPD-C1007CM</td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>3.- SPD-C1209CM</td>
                      <td>SPD-C1009CM</td>
                      <td>$18.50</td>
                    </tr>

                    <tr>
                      <td>4.- SPD-C1211CM</td>
                      <td>SPD-C1011CM</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>5.- SPD-C1213CM</td>
                      <td>SPD-C1013CM</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>6.- SPD-C1215CM</td>
                      <td>SPD-C1015CM</td>
                      <td>$19.00</td>
                    </tr>

                    <tr>
                      <td>7.- SPD-C1217CM</td>
                      <td>SPD-C1017CM</td>
                      <td>$20.00</td>
                    </tr>
                    <tr>
                      <td>8.- SPD-C1219CM</td>
                      <td>SPD-C1019CM</td>
                      <td>$20.00</td>


                      <br>
                  </tbody>
                </table>


              </span></div>
          </li>
        </ul>

      </div>

      <!-- Open Magnum -->
      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="col s12 m4">Open Magnum
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/11.jpg" alt="" class="responsive-img materialboxed">


        <!-- collapsible -->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Open Magnum</div>
            <div class="collapsible-body"><span>

                <!-- Content table -->
                <table>
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th></th>
                    </tr>

                    <tr>
                      <th>Open Magnum</th>
                      <th>16pcs/box</th>
                      <th>Item Price</th>
                    </tr>

                  </thead>

                  <tbody>

                    <!-- Content -->

                    <tr>
                      <td>1.- SPD-OC1205M1</td>
                      <td>SPD-OC1005M1</td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>2.- SPD-OC1207M1</td>
                      <td>SPD-OC1007M1</td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>3.- SPD-OC1209M1</td>
                      <td>SPD-OC1009M1</td>
                      <td>$18.50</td>
                    </tr>

                    <tr>
                      <td>4.- SPD-OC1211M1</td>
                      <td>SPD-OC1011M1</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>5.- SPD-OC1213M1</td>
                      <td>SPD-OC1013M1</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>6.- SPD-OC1215M1</td>
                      <td>SPD-OC1015M1</td>
                      <td>$19.00</td>
                    </tr>

                    <tr>
                      <td>7.- SPD-OC1217M1</td>
                      <td>SPD-OC1017M1</td>
                      <td>$20.00</td>
                    </tr>
                    <tr>
                      <td>8.- SPD-OC1219M1</td>
                      <td>SPD-OC1019M1</td>
                      <td>$20.00</td>
                    </tr>
                    <td>9.- SPD-OC1221M1</td>
                    <td>SPD-OC1021M1</td>
                    <td>$21.00</td>
                    </tr>
                    <td>10.- SPD-OC1223M1</td>
                    <td>SPD-OC1023M1</td>
                    <td>$21.00</td>
                    </tr>
                    <td>11.- </td>
                    <td>SPD-OC1025M1</td>
                    <td>$22.00</td>
                    </tr>
                    <td>12.- </td>
                    <td>SPD-OC1027M1</td>
                    <td>$23.00</td>
                    </tr>

                    <br>
                  </tbody>
                </table>


              </span></div>
          </li>
        </ul>

      </div>

      <!-- Open Curved Magnum -->
      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="col s12 m4">Open Curved Magnum
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/10.jpg" alt="" class="responsive-img materialboxed">


        <!-- collapsible -->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Open Curved Magnum</div>
            <div class="collapsible-body"><span>

                <!-- Content table -->
                <table>
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th></th>
                    </tr>

                    <tr>
                      <th>Open Curved Magnum</th>
                      <th>16pcs/box</th>
                      <th>Item Price</th>
                    </tr>

                  </thead>

                  <tbody>

                    <!-- Content -->

                    <tr>
                      <td>1.- SPD-OC1205CM</td>
                      <td>SPD-OC1005CM</td>
                      <td>$18.00</td>
                    </tr>
                    <tr>
                      <td>2.- SPD-OC1207CM</td>
                      <td>SPD-OC1007CM</td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>3.- SPD-OC1209CM</td>
                      <td>SPD-OC1009CM</td>
                      <td>$18.50</td>
                    </tr>
                    <tr>
                      <td>4.- SPD-OC1211CM</td>
                      <td>SPD-OC1011CM</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>5.- SPD-OC1213CM</td>
                      <td>SPD-OC1013CM</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>6.- SPD-OC1215CM</td>
                      <td>SPD-OC1015CM</td>
                      <td>$19.00</td>
                    </tr>
                    <tr>
                      <td>7.- SPD-OC1217CM</td>
                      <td>SPD-OC1017CM</td>
                      <td>$20.00</td>
                    </tr>
                    <tr>
                      <td>8.- SPD-OC1219CM</td>
                      <td>SPD-OC1019CM</td>
                      <td>$20.00</td>
                    </tr>
                    <td>9.- SPD-OC1221CM</td>
                    <td>SPD-OC1021CM</td>
                    <td>$21.00</td>
                    </tr>
                    <td>10.- SPD-OC1223CM</td>
                    <td>SPD-OC1023CM</td>
                    <td>$21.00</td>
                    </tr>
                    <td>11.- </td>
                    <td>SPD-OC1025CM</td>
                    <td>$22.00</td>
                    </tr>
                    <td>12.- </td>
                    <td>SPD-OC1027CM</td>
                    <td>$23.00</td>
                    </tr>

                    <br>
                  </tbody>
                </table>

              </span></div>
          </li>
        </ul>

      </div>


    </div>



  </section>




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
      apiKey: "AIzaSyCJCXcrNZ7tqIt_CUu1pp8tMwBIJtrW1o8",
      authDomain: "deleiphone-b0f98.firebaseapp.com",
      databaseURL: "https://deleiphone-b0f98.firebaseio.com",
      projectId: "deleiphone-b0f98"
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

      //collapsible
      $('.collapsible').collapsible();

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