<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <title>Greywash Membrane</title>

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
          <a href="greywash english.php" class="grey-text modal-trigger" data-target="modal-home">English</a>
        </li>

        <li class="logged-out" style="display: none;">
          <a href="greywash.php" class="grey-text modal-trigger" data-target="modal-home">Español</a>
        </li>

      </ul>
    </div>
  </nav>


   <!-- ////////////////////////////////////////  Movil Side navbar  ////////////////////////////////////////////// -->

   <ul class="sidenav" id="mobile-demo">
    <!-- <li><a href="sass.php">Sass</a></li> -->
    <li><a href="index.php">Home</a></li>
    <li><a href="greywash english.php">English</a></li>
    <li><a href="greywash.php">Español</a></li>
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
        <img src="./Spark_images/Greywash Membrane -SPe/1. needle cartridge.jpg" alt=""
          class="responsive-img materialboxed">
      </div>
      <div class="col s12 l6 offset-l1">
        <a href="needles.php" </a> <h2 class="grey-text text-darken-4">Greywash Membrane </h2>
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


<!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
<section class="container section logged-out" style="display: none;" id="photo's">

    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////  First Row  //////////////////////////////////////////// -->
  
    <div class="row">

                 <!-- Round Liner -->
            <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="col s12 m6">Round Liner
                <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/10.jpg" alt="" class="responsive-img materialboxed">


                 <!-- collapsible -->
                 <ul class="collapsible">
                    <li>
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


                               <!-- Content -->


                               <tr>
                                 <td>1.- SPE-C1203RL</td>
                                 <td></td>
                                 <td>$18.00</td>
                               </tr>
                               <tr>
                                 <td>2.- SPE-C1205RL</td>
                                 <td></td>
                                 <td>$18.00</td>
                               </tr>
                               <tr>
                                 <td>3.- SPE-C1207RL</td>
                                 <td></td>
                                 <td>$18.50</td>
                               </tr>
                               <tr>
                                 <td>4.- SPE-C1209RL</td>
                                 <td></td>
                                 <td>$18.50</td>
                               </tr>
                               <tr>
                                 <td>5.- SPE-C1211RL</td>
                                 <td></td>
                                 <td>$19.00</td>
                               </tr>
                               <tr>
                                 <td>6.- SPE-C1214RL</td>
                                 <td></td>
                                 <td>$19.00</td>
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
            <div class="col s12 m6">Round Shader
                <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/10.jpg" alt="" class="responsive-img materialboxed">


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
                                 <td>1.- SPE-C1203RS</td>
                                 <td></td>
                                 <td>$18.00</td>
                               </tr>
                               <tr>
                                 <td>2.- SPE-C1205RS</td>
                                 <td></td>
                                 <td>$18.00</td>
                               </tr>
                               <tr>
                                 <td>3.- SPE-C1207RS</td>
                                 <td></td>
                                 <td>$18.50</td>
                               </tr>
                               <tr>
                                 <td>4.- SPE-C1209RS</td>
                                 <td></td>
                                 <td>$18.50</td>
                               </tr>
                               <tr>
                                 <td>5.- SPE-C1211RS</td>
                                 <td></td>
                                 <td>$19.00</td>
                               </tr>
                               <tr>
                                 <td>6.- SPE-C1214RS</td>
                                 <td></td>
                                 <td>$19.00</td>
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
            <div class="col s12 m6">Magnum
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
                                  <td>1.- SPE-C1205M1</td>
                                  <td></td>
                                  <td>$18.00</td>
                                </tr>
                                <tr>
                                  <td>2.- SPE-C1207M1</td>
                                  <td></td>
                                  <td>$18.00</td>
                                </tr>
                                <tr>
                                  <td>3.- SPE-C1209M1</td>
                                  <td></td>
                                  <td>$18.50</td>
                                </tr>
                                <tr>
                                  <td>4.-  SPE-C1211M1</td>
                                  <td></td>
                                  <td>$18.50</td>
                                </tr>
                                <tr>
                                  <td>5.-  SPE-C1213M1</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                  <td>6.- SPE-C1215M1</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                  <td>7.- SPE-C1217M1</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                  <td>8.- SPE-C1219M1</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                    <td>9.- SPE-C1221M1</td>
                                    <td></td>
                                    <td>$20.00</td>
                                  </tr>
                                  <tr>
                                    <td>10.- SPE-C1223M1</td>
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




   


        <!-- ////////////////////////////////////////// Second Row  //////////////////////////////////////////// -->
       <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
       <div class="row">

            <!-- Curved Magnum -->
            <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="col s12 m6">Curved Magnum
                <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/10.jpg" alt="" class="responsive-img materialboxed">


                 <!-- collapsible -->
                 <ul class="collapsible">
                    <li>
                      <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Curved Magnum</div>
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
                                <th>Curved Magnum</th>
                                <th>16pcs/box</th>
                                <th>Item Price</th>
                              </tr>
                    
                            </thead>
                    
                                    <tbody>


                               <!-- Content -->


                               <tr>
                                  <td>1.- SPE-C1205CM</td>
                                  <td></td>
                                  <td>$18.00</td>
                                </tr>
                                <tr>
                                  <td>2.- SPE-C1207CM</td>
                                  <td></td>
                                  <td>$18.00</td>
                                </tr>
                                <tr>
                                  <td>3.- SPE-C1209CM</td>
                                  <td></td>
                                  <td>$18.50</td>
                                </tr>
                                <tr>
                                  <td>4.- SPE-C1211CM</td>
                                  <td></td>
                                  <td>$18.50</td>
                                </tr>
                                <tr>
                                  <td>5.- SPE-C1213CM</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                  <td>6.- SPE-C1215CM</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                  <td>7.- SPE-C1217CM</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                  <td>8.- SPE-C1219CM</td>
                                  <td></td>
                                  <td>$19.00</td>
                                </tr>
                                <tr>
                                    <td>9.- SPE-C1221CM</td>
                                    <td></td>
                                    <td>$20.00</td>
                                  </tr>
                                  <tr>
                                    <td>10.- SPE-C1223CM</td>
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


            

              <!-- Closing div -->
             </div>
     </section>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->

    

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