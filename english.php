<?php

 if(isset($_POST['submit'])){

require 'phpmailer/PHPmailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='#############';
$mail->Password='###########';

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress($_POST['email']);
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject='Form Submission:  '.$_POST['subject'];
$mail->Body='<h1 align=center>Name : '.$_POST['name'].'<br>Phone number: '.$_POST['phone'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST[message].'</h1>';


if(!$mail->send()){
  $result="Something went wrong. Please try again!";
}
else{
  $result="Thank you ".$_POST['name']."For contacting us, we'll get back to you soon!";

  // non resubmit form code 
  header("location:email.php");
exit;
}

 }
 
 
 ?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <title>Spark Tattoo Supplies</title>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <style>
    header {

      background: url(Spark_images/Logo/sparkNavlogo.png);
      background-size: cover;
      background-position: center;
      min-height: 600px;
    }

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
 

  <!-- //////////////////////////////////////// NAVBAR ////////////////////////////////////////////// -->

  <nav class="z-depth-0 grey darken-1">
    <div class="nav-wrapper">
      <img src="./Spark_images/Logo/sparkNavlogo2a.png" class="brand-logo">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>


        <ul id="nav-mobile" class="right hide-on-med-and-down">

          <li class="logged-in" style="display: none;">
            <a href="#" class="grey-text modal-trigger" data-target="modal-home">Home</a>
          </li>

          <li class="logged-out" style="display: none;">
            <a href="english.php" class="white-text modal-trigger" data-target="modal-home">English</a>
          </li>

          <li class="logged-out" style="display: none;">
            <a href="index.php" class="white-text modal-trigger" data-target="modal-home">Español</a>
          </li>

       

        </ul>
    </div>
  </nav>

  <!-- ////////////////////////////////////////  Movil Side navbar  ////////////////////////////////////////////// -->

  <ul class="sidenav" id="mobile-demo">
      <!-- <li><a href="sass.php">Sass</a></li> -->
      <li><a href="english.php">English</a></li>
      <li><a href="index.php">Español</a></li>
      <!-- <li><a href="mobile.php">Mobile</a></li> -->
    </ul>


</head>

<!-- ////////////////////////////////////////////////////////////////////////////////////// -->

<body class="grey darken-3">

  <!-- //////////////////////////////////////////   slider  //////////////////////////////////////////   -->

  <div class="slider">
    <ul class="slides">

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/3..jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Adjustable Cartrige Grip!</h3>
          <h5 class="light grey-text text-lighten-3">Disposible, 100% Sterilized, Soft Membrane,
            Prime Tattoo Cartrige.</h5>
        </div>
      </li>

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/7.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Cartrige Needle!</h3>
          <h5 class="light grey-text text-lighten-3">Upgrade Structure, Soft Membrane, Medical Stainless Steel, <br>
            Sterilized Package, Engineering Plastics.</h5>
        </div>
      </li>

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/8.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Precise Cartriges-SPT!</h3>
          <h5 class="light grey-text text-lighten-3">Soft Membrane, Medical Stainless Steel, Humanization Design, <br>
            Sterilization Package, OEM service.</h5>
        </div>
      </li>

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/9.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Precise Cartriges-SPD!</h3>
          <h5 class="light grey-text text-lighten-3">Medical Engineering Plastics, Sterilized By EO gas, Silicone Finger
            Rest, <br>
            Prime Needles, Sharp Tip.</h5>
        </div>
      </li>

    </ul>
  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->

  <!-- ADMIN ACTIONS -->
  <form class="center-align admin-actions admin" style="margin: 40px auto; max-width: 300px; display: none;">
    <input type="email" placeholder="User email" id="admin-email" required />
    <button class="btn-small yellow darken-2 z-depth-0">Make admin</button>
  </form>
  <br><br>
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

<!--  //////////////////////////////////////////  top middle photo //////////////////////////////////////////  -->
  <section class="section logged-out" style="display: none;" id="photo's">
    <div class="row">
      <!-- Imagen de arriba en medio -->
      <div class="col-md-12 center-align offset-l4" style="">
        <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/pic 1.jpg" class="responsive-img"
          class="responsive-img materialboxed logged-out">
      </div>
    </div>
  </section>

    <!--  //////////////////////////////////////////  photo / grid  //////////////////////////////////////////  -->


    <!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
    <section class="container section logged-out" style="display: none;" id="photo's">



      <div class="row">
        <div class="col 12 l4 ">
          <img src="./Spark_images/TrueColor Membrane Cartriges-SPD/1.jpg" alt=""
            class="responsive-img materialboxed logged-out">
        </div>
        <div class="col 12 l6 offset-l1">
          <a href="spdenglish.php" </a> <h2 class="light grey-text text-lighten-3">True Color Membrane Cartriges-SPD</h2>
            <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
              Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
              Donec id turpis id diam tincidunt vulputate nec a neque.</p>
          </a>
        </div>
      </div>


      <!-- ////////// MIDDLE ROW ////////// -->
      <!-- beware the size are: "col L4, L7, L6, L5" NOT!!!!!! "col 14, 17, 16 or 15" -->
      <div class="row">
        <div class="col s12 l4 push-l7 offset-l1">
          <img src="./Spark_images/TrueColor+ Cartriges-STP-T/Pic2.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 pull-l5 right-align offset-l1">
          <a href="stpenglish.php" </a> <h2 class="white-text text-darken-4">True color+ Cartriges-STP-T</h2>
            <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
              Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
              Donec id turpis id diam tincidunt vulputate nec a neque.</p>
          </a>
        </div>
      </div>

      <!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
      <div class="row">
        <div class="col s12 l4 ">
          <img src="./Spark_images/NEw Spark Axis +Precise Cartriges-SPT/969625ad-5280-44a2-9cf3-a70fb2d33b92.jpg"
            alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1">
          <a href="axisenglish.php" </a> <h2 class="white-text text-darken-4">New Sparks Axis Precise Cartriges-SPT</h2>
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
          <img src="./Spark_images/Greywash Membrane -SPe/1. needle cartridge.jpg" alt=""
            class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 pull-l5 right-align offset-l1">
          <a href="greywash english.php" </a> <h2 class="white-text text-darken-4">Greywash Membrane SPe</h2>
            <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
              Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
              Donec id turpis id diam tincidunt vulputate nec a neque.</p>
          </a>
        </div>
      </div>

      <!-- beware the size are: "col L4, L6, L1" NOT!!!!!! "col 14, 16 or 11" -->
      <div class="row">
        <div class="col s12 l4 ">
          <img src="./Spark_images/Needles/needles Thumb.jpeg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1">
          <a href="needlesenglish.php" </a> <h2 class="white-text text-darken-4">Needles</h2>
            <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
              Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
              Donec id turpis id diam tincidunt vulputate nec a neque.</p>
          </a>
        </div>
      </div>

      <!-- beware the size are: "col L4, L7, L6, L5" NOT!!!!!! "col 14, 17, 16 or 15" -->
      <div class="row">
        <div class="col s12 l4 push-l7 offset-l1">
          <img src="./Spark_images/Black Bird/纹身针-04.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 pull-l5 right-align offset-l1">
          <a href="blackbirdenglish.php" </a> <h2 class="white-text text-darken-4">Black Bird</h2>
            <p class="grey-text lighten-3">Sed ut leo nunc. Nulla aliquam eros ex, eget semper nisi ornare vel.
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
              Pellentesque id metus velit. Aliquam cursus tellus ut quam pulvinar semper.
              Donec id turpis id diam tincidunt vulputate nec a neque.</p>
          </a>
        </div>
      </div>

    </section>
    <!--  //////////////////////////////////////////  parallax  //////////////////////////////////////////  -->

<!-- 
    <div class="parallax-container logged-out" style="display: none;">
      <div class="class parallax">
        <img src="./Spark_images/Greywash Membrane -SPe/1.jpg" class="responsive-img">
      </div>
    </div> -->


     <!-- //////////////////////////////////////////   parallax  //////////////////////////////////////////   -->


      <div class="parallax-container logged-out" style="display: none;">
        <div class="class parallax">
          <img src="./Spark_images/Greywash Membrane -SPe/2.jpg" class="responsive-img">
        </div>
      </div>

      <!-- //////////////////////////////////////////   services / tabs  //////////////////////////////////////////   -->
      <!-- //////////////////////////////////////////  Contact us  //////////////////////////////////////////   -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->

      <section class="container section logged-out" style="display: none;" id="services">
        <div class="row">

          <div class="col s12 l4">
            <h2 class="White-text text-light-1">Our mission....</h2>
            <p class="grey-text lighten-3">
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
            </p>

            <p class="grey-text lighten-3">
              Fusce sem massa, auctor et ligula id, tempor ullamcorper purus.
              Aliquam vehicula tortor erat, non maximus ipsum ultricies in.
            </p>
          </div>

   <!-- //////////////////////////////////////////////  Email Contact Form  //////////////////////////////////////////////////////   -->
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
     

          <!-- contact form-->
          <div class="container col s12 l8">
          <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    
            <!-- Content here -->
            
            <div class="row">
              <div class="" style="background-color: white; border-radius: 15px;">

                <!-- contact form -->

                <div class="col-10">
                  <div class="container px-1 py-1 mt-1 mb-1"
                    style="border: darkgrey; border-style: solid; border-width: 4px; border-radius: 15px; width: 100%; margin-bottom: 10px;">

                    <div class="form-group">
                      <form class="px-4 py-3">


                        <!-- Form header -->
                        <h1 class="display-4 text-left padding-bottom-1 padding-left-1" style="color:#4aaaa5; padding-left: 5px;">  Contact us!</h1>
                        <h4>Contact us today, and get reply with in 24 hours!</h4>
                        <!-- dividing line -->
                        <hr class="my-4" style="height: 1px ;">

                        <!-- First Name input -->
                        <div class="form-group">
                          <label for="name"></label>
                          <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                          tabindex="1" placeholder="   Name.." >
                        </div>

                        <!-- Email input -->
                        <div class="form-group">
                          <label for="exampleFormControlInput1"></label>
                          <input type="text" name="email" class="form-control" id="exampleFormControlInput1"
                          tabindex="2"  placeholder="   name@email.com">
                        </div>

                        <!-- Apellido Paterno input -->
                        <div class="form-group">
                          <label for="telefono"></label>
                          <input type="text" name="phone" class="form-control" id="exampleFormControlInput1"
                          tabindex="3" placeholder="   Phone number..">
                        </div>

                        <!-- subject input -->
                        <div class="form-group">
                          <label for="exampleFormControlInput1"></label>
                          <input type="text" name="subject" class="form-control" id="exampleFormControlInput1"
                          tabindex="4"  placeholder="   Subject...">
                        </div>

                        <!-- <br> -->

                        <!-- Email Subject -->
                        <div class="form-group">
                         
                          <label for="exampleFormControlTextarea1" style="padding-left: 12px;">  Message</label>
                          
                          <textarea class="form-control" 
                            placeholder="Message here.."  type="text" name="message" tabindex="5" rows="20">
                          </textarea>
                          <div style="padding-top: 8px; padding-left:12px;">
                        


                              <fieldset>
                              <button name="submit" value= "submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                              </fieldset>
                            </div>
                          <!-- Submit button -->
                          <!-- <input type="submit" class="mt2 mb-2" value="Submit"> -->
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- container3 form closing div -->
                </div>

              </div>

            </div>

          </div>



        </div>

        </div>
        </div>
        <br>
        </div>

        </div>


        <!-- closing tags -->
        </div>

      </section>

      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
      <!-- //////////////////////////////////////////   parallax  //////////////////////////////////////////   -->


      <div class="parallax-container logged-out" style="display: none;">
        <div class="class parallax">
          <img src="./Spark_images/Greywash Membrane -SPe/4.jpg" class="responsive-img">
        </div>
      </div>


      <!-- //////////////////////////////////////////  contact info  //////////////////////////////////////////   -->

      <section class="section container logged-out" style="display: none;" id="contact">

        <div class="row">


          <div class="col s12 l5">
            <h2 class="white-text text-darken-4">Contact us</h2>
            <p class="white-text text-darken-4">Contact Information:</p>

            <!-- <h4 class="white-text text-darken-4">Address <i class="material-icons prefix">location_on</i></h4>
            <p class="white-text "> Padre Mier #1082 colonia centro, Monterrey, N.L.
            64000</p> -->


            <h5 class="white-text text-darken-4">Bussiness hours <i class="material-icons prefix">access_time</i></h5>
            <p class="white-text "> Monday - Friday 10:00 am - 6:00 pm.
            </p>



            <h5 class="white-text text-darken-4">(725)212-9219 <i class="material-icons prefix">call</i></h5>

            <h5 class="white-text text-darken-4">info@sparktattoosupplies.com<i class="material-icons prefix">email</i></h5>


          </div>

            <!-- form section -->
            <div class="col s12 l5 offset-l2">
                <form action="">
    
                  <div class="card">
                    <div class="card-body">
                      <!-- <h3 class="card-title"><u>Google Maps</u></h3> -->
    
                      <!-- Google maps Api -->
    
                      <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
                      <!-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.1440342188534!2d-100.30741255034206!3d25.66651968359991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662be2d2bf89b13%3A0xa6068c6af7da87d2!2sCalle+Padre+Mier+1082%2C+Barrio+Antiguo%2C+Centro%2C+64000+Monterrey%2C+N.L.!5e0!3m2!1sen!2smx!4v1544803420952"
                        frameborder="0" style="border:0; width:100%;height:400px;" allowfullscreen></iframe> -->
    
                        <img src="./Spark_images/Logo/01 Spark brand1.jpeg" class="responsive-img">
    
                    </div>
                  </div>
    
                </form>
              </div>

          <!-- //////////////////////////////////////////   parallax  //////////////////////////////////////////   -->


          <!-- <div class="parallax-container logged-out" style="display: none;">
        <div class="class parallax">
          <img src="." class="responsive-img">
        </div>
      </div> -->

          <!-- closing tags -->
        </div>

      </section>

      <!-- //////////////////////////////////////////   parallax  //////////////////////////////////////////   -->


      <div class="parallax-container logged-out" style="display: none;">
        <div class="class parallax">
          <img src="./Spark_images/Greywash Membrane -SPe/2.jpg" class="responsive-img">
        </div>
      </div>


      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- Solicitud de Apoyo MODAL -->
      <div id="modal-solapp" class="modal">
        <div class="modal-content">
          <h4>Solicitud de Apoyo</h4><br />
          <form id="solapp-form">


            <!-- Como se entero de nosotros  -->

            <!-- First Row -->
            <div class="row">

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span> Instituto Estatal de la Mujer</span>
                  </label>
                </div>
              </div>

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Anuncio Panorámico</span>
                  </label>
                </div>
              </div>

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Recomendación</span>
                  </label>
                </div>
              </div>

            </div>
            <br>


            <!-- Second row -->
            <div class="row">

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Municipio</span>
                  </label>
                </div>
              </div>

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Facebook</span>
                  </label>
                </div>
              </div>

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Periódico</span>
                  </label>
                </div>
              </div>

            </div>


            <!-- Folio -->
            <div class="input-field">
              <input type="text" id="solapp-folio" required />
              <label for="solapp-folio">Folio: </label>
            </div>

            <!-- Fecha -->
            <div class="input-field">
              <input type="date" class="datepicker" id="solapp-fecha" required />
              <label for="solapp-fecha">Fecha de hoy </label>
            </div>
            <!-- Nombre -->
            <div class="input-field">
              <input type="text" id="solapp-nombre" required />
              <label for="solapp-nombre">Nombre: </label>
            </div>

            <!-- Apellido Paterno -->
            <div class="input-field">
              <input type="text" id="solapp-apellidop" required />
              <label for="solapp-apellidop">Apellido Paterno: </label>
            </div>

            <!-- Apellido Materno -->
            <div class="input-field">
              <input type="text" id="solapp-apellidom" required />
              <label for="solapp-apellidom">Apellido Materno: </label>
            </div>


            <!-- Apellido Materno -->
            <div class="input-field">
              <input type="text" id="solapp-lugar" required />
              <label for="solapp-lugar">Lugar de Nacimiento: </label>
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="input-field">
              <input type="date" class="datepicker" id="solapp-dob" required />
              <label for="solapp-dob">Fecha de Nacimiento </label>
            </div>

            <!-- Telefono -->
            <div class="input-field">
              <input type="text" id="solapp-telefono" required />
              <label for="solapp-telefono">Teléfono: </label>
            </div>


            <!-- Correo Electronico -->
            <div class="input-field">
              <input type="email" id="solapp-email" required />
              <label for="solapp-email">Correo Electrónico: </label>
            </div>


            <!-- Domicilio 1 -->
            <div class="input-field">
              <input type="text" id="solapp-domicilio" required />
              <label for="solapp-domicilio">Domicilio 1: </label>
            </div>


            <!-- Domicilio 2 -->
            <div class="input-field">
              <input type="text" id="solapp-domicilio2" />
              <label for="solapp-domicilio2">Domicilio 2: </label>
            </div>

            <!-- Materia -->
            <div class="input-field">
              <input type="text" id="solapp-materia" required />
              <label for="solapp-materia">Materia: </label>
            </div>


            <!-- Asunto -->
            <div class="input-field">
              <input type="text" id="solapp-asunto" required />
              <label for="solapp-asunto">Asunto: </label>
            </div>

            <!-- Juzgado del Proceso -->
            <div class="input-field">
              <input type="text" id="solapp-juzgado" required />
              <label for="solapp-juzgado">Juzgado del Proceso: </label>
            </div>

            <!-- Numero de Expediente -->
            <div class="input-field">
              <input type="text" id="solapp-expediente" required />
              <label for="solapp-expediente">Número de Expediente: </label>
            </div>

            <!-- Breve extracto de los hechos area con notas -->
            <div class="input-field">
              <input type="text" id="solapp-hechos" required />
              <label for="solapp-hechos">Breve extractos de los hechos: </label>
            </div>


            <!-- Tipo de asesoria bubbles -->


            <label>
              <input id="indeterminate-checkbox" type="text" class="col s3" />
              <h3></h3><span>Tipo de Asesoría...</span></h3>
            </label>
            <br>

            <!-- First Row -->
            <div class="row">

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Asesoría única</span>
                  </label>
                </div>
              </div>

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Representación</span>
                  </label>
                </div>
              </div>

              <div class="col s4">
                <div class>
                  <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Canalización</span>
                  </label>
                </div>
              </div>

            </div>
            <br>


            <!-- Dependecia de asesoria -->
            <div class="input-field">
              <input type="text" id="solapp-dependecia" required />
              <label for="solapp-dependecia">Dependencia de asesoría: </label>
            </div>

            <!-- Atendido por -->
            <div class="input-field">
              <input type="text" id="solapp-atendido" required />
              <label for="solapp-atendido">Atendido por: </label>
            </div>

            <!-- Comentarios con area de notas -->

            <button class="btn yellow darken-2 z-depth-0">submit</button>
            <p class="error pink-text center-align"></p>

          </form>
        </div>
      </div>


      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->

      <!-- Speech/busqueda -->
      <div id="modal-speech" class="modal">
        <div class="modal-content">
          <h4>Speech/busqueda</h4><br />
          <form id="speech-form">



            <div class="row">

              <!-- Search form -->
              <div id="content">
                <div id="left">
                  <div class="col s6">
                    <div class>

                      <!-- Folio -->
                      <div class="input-field">
                        <input type="text" id="speech-folio" required />
                        <label for="speech-folio">Folio: </label>
                      </div>

                      <!-- Apellido Paterno -->
                      <div class="input-field">
                        <input type="text" id="speech-apellidop" required />
                        <label for="speech-apellidop">Apellido Paterno: </label>
                      </div>

                      <!-- Telefono -->
                      <div class="input-field">
                        <input type="text" id="speech-telefono" required />
                        <label for="speech-telefono">Teléfono: </label>
                      </div>

                      <!-- Correo Electronico -->
                      <div class="input-field">
                        <input type="email" id="speech-email" required />
                        <label for="speech-email">Correo Electrónico: </label>
                      </div>

                      <!-- Numero de Expediente -->
                      <div class="input-field">
                        <input type="text" id="speech-expediente" required />
                        <label for="speech-expediente">Número de Expediente: </label>
                      </div>

                      <!-- Comentarios con area de notas -->

                      <button class="btn yellow darken-2 z-depth-0">submit</button>
                      <p class="error pink-text center-align"></p>

                      <!-- Div class -->
                    </div>

                    <!-- div col s6 -->
                  </div>

                  <!-- div id left -->
                </div>


                <!-- Speech -->
                <div id="right">
                  <div class="col s6">
                    <div class>


                      <h5>Delei buenos días (tardes).
                        Soy el licenciado (a) __________
                        A sus órdenes en que le podemos ayudar.</h5>

                      <ul>
                        <li> Quiero saber el procedimiento de mi demanda</li>
                        <li> Quiero saber cómo va mi caso.</li>
                        <li> Me comunica con el Lic. Gonzalo</li>
                        <li> Me comunica con el Lic. Tal</li>
                      </ul>

                      <p>
                        <h5>¿Cuál es su nombre? ¿Con quién tengo el gusto?,</h5>
                        <ul>

                          <li>(el Lic. Tal no se encuentra por el momento,
                            esto en caso pregunte por el Lic. Gonzalo y otro Lic. Que sea mencionado).
                          </li>


                          <li>si no aparece por nombre y apellido, pregunte por un numero telefonico, correo, numero de
                            expediente o folio.
                          </li>

                        </ul>
                      </p>

                      <h5>Permítame un momento, enseguida le informo sobre el proceso de su asunto (demanda).</h5>

                      <p> Me dirijo al abogado le comento sobre el cliente, busco el expediente según sea la materia
                        en
                        el lugar correcto,
                        contacto por teléfono, por WhatsApp al grupo e individual, con el fin de tener la
                        información
                        precisa al cual se debe proporcionar.</p>

                      <p>
                        <h5>Informo directamente a nuestro cliente o transfiero la llamada. </h5>
                        Y preferentemente sea la persona que tome la llamada inicial la que proporcione
                        información a
                        nuestro cliente.
                      </p>

                      <h5>NOTA:</h5>

                      <p>Para lo anterior se requiere a todo el personal DELEI que tenga a bien contestar el
                        teléfono
                        siga estrictamente
                        por lo menos el 90% este guion, con los 3 aspectos fundamentales que enseguida se
                        mencionan.
                      </p>

                      <p>
                        <h5>1.- ACTITUD POSITIVA:</h5> hablar en presente y afirmativo, contestar en pleno
                        positivismo,
                        entusiasta, feliz,
                        dinámico, fluido, con cortesía y amabilidad.
                      </p>

                      <p>
                        <h5>2.- SEGURIDAD:</h5> debo confiar en lo que estoy diciendo y aceptarme.
                      </p>

                      <p>
                        <h5>3.- MEMORIZACION:</h5>
                        Aprender el guion correctamente para la recepción de cualquier llamada y dar
                        oportunamente,
                        amablemente y profesional al requerimiento de nuestro cliente.
                      </p>

                      <p>
                        <h5>4.- ACTUACION:</h5>
                        Con base a nuestro modelo comercial de venta por asesoría y nuestro aliado vende como
                        Hollywood,
                        todo el personal debe memorizar y actuar lo que el guion dice con el conocimiento de que
                        todos
                        los que trabajamos en DELEI somos actores protagonistas tal y como lo vemos en la pantalla
                        grande
                        por las grandes empresas cinematográficas.
                      </p>

                      <p>
                        <h5>5.- INICIATIVA Y DISPONIBILIDAD:</h5> tal vez no sea el experto ni haya logrado un alto
                        nivel
                        académico en mi preparación, pero deseo superación personal y una mejora continua en mi
                        vida.
                        Con solo estar disponible para todo caso que se requiera o tipo de trabajo a realizar,
                        teniendo iniciativa estaré contribuyendo un alto nivel a mi persona y a la empresa para
                        bien
                        de manera
                        profesional, sin que sea una persona altamente preparada académicamente.
                        QUE SE ESPERA DE MI?? Memorizar el guion, vivirlo y actuarlo.
                      </p>

                      <!-- Div class -->
                    </div>

                    <!-- div class col s6b -->
                  </div>

                  <!-- Div ID right -->
                </div>

                <!-- Closing div de content de arriba   -->
              </div>

              <!-- Div class row de arriba   -->
            </div>



          </form>
        </div>
      </div>


      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- LOGIN MODAL -->
      <div id="modal-login" class="modal">
        <div class="modal-content">
          <h4>Iniciar Sesión</h4><br />
          <form id="login-form">
            <div class="input-field">
              <input type="email" id="login-email" required />
              <label for="login-email">Correo Electrónico</label>
            </div>
            <div class="input-field">
              <input type="password" id="login-password" required />
              <label for="login-password">Su Contraseña</label>
            </div>
            <button class="btn yellow darken-2 z-depth-0">Iniciar sesión</button>
            <p class="error pink-text center-align"></p>
          </form>
        </div>
      </div>


      <!-- ACCOUNT MODAL  -->
      <div id="modal-account" class="modal">
        <div class="modal-content center-align">
          <h4>Detalles de usuario</h4><br />
          <div class="account-details">

            <!-- Account details popup -->
            <ul>

              <h5>Folio: </h5>
              <h5>Numero de expediente: </h5>


              <!-- Info de contacto -->
              <h5>Nombre: </h5>
              <h5>Appellido: </h5>
              <h5>Telefono: </h5>
              <h5>Correo: </h5>

              <!-- Dirrecion -->
              <h5>Dirrecion 1: </h5>
              <h5>Dirrecion 2: </h5>
              <h5>Ciudad: </h5>
              <h5>Estado: </h5>
              <h5>Codigo: </h5>

              <!-- Info del caso -->
              <h5>Materia: </h5>
              <h5>Asunto: </h5>
              <h5>Juzgado: </h5>
              <h5>Tipo de Assesoria: </h5>
              <h5>Atendido por: </h5>
            </ul>


          </div>
        </div>
      </div>

      <!-- //////////////////////////////////////// tabs section ////////////////////////////////////////////// -->
      <!-- tabs section -->

      <body class="container logged-in">
        <h3 class="logged-in">Dashboard</h3>
        <div class="row">
          <div class="col s12 logged-in">
            <ul class="tabs logged-in">
              <li class="tab col s3 logged-in"><a href="#inbox">Inbox</a></li>
              <li class="tab col s3 logged-in"><a class="active" href="#unread">
                  Speech de llamadas</a></li>
              <li class="tab col s3 logged-in"><a href="#outbox">
                  Outbox (Disabled)</a></li>
              <li class="tab col s3 logged-in"><a href="#sent">Sent</a></li>
            </ul>
          </div>

          <div id="inbox" class="col s12 logged-in">Inbox</div>
          <div id="unread" class="col s12 logged-in">Unread</div>
          <div id="outbox" class="col s12 logged-in">Outbox (Disabled)</div>
          <div id="sent" class="col s12 logged-in">Sent</div>
        </div>
      </body>

      <!-- tabs section 2 -->

      <body class="container loggedin">
        <div class="row">
          <div class="col s12 logged-in">
            <ul class="tabs logged-in">
              <li class="tab col s2 logged-in">
                <a href="#tab1">tab1</a>
              </li>
              <li class="tab col s2 logged-in">
                <a href="#tab2">tab2</a>
              </li>
              <li class="tab col s2 logged-in">
                <a href="#tab3">tab3</a>
              </li>
              <li class="tab col s2 logged-in">
                <a href="#tab4">tab4</a>
              </li>
              <li class="tab col s2 logged-in">
                <a href="#tab5">tab5</a>
              </li>
              <li class="tab col s2 logged-in">
                <a href="#tab6">tab6</a>
              </li>
            </ul>

            <div id="tab1" class="col s12 logged-in">tab1</div>
            <div id="tab2" class="col s12 logged-in">tab2</div>
            <div id="tab3" class="col s12 logged-in">tab3</div>
            <div id="tab4" class="col s12 logged-in">tab4</div>
            <div id="tab5" class="col s12 logged-in">tab5</div>
            <div id="tab6" class="col s12 logged-in">tab6</div>


          </div>
        </div>
      </body>


      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- CREATE Note -->
      <div id="modal-create" class="modal">
        <div class="modal-content">
          <h4>Crear Nota</h4><br />
          <form id="create-form">
            <div class="input-field">
              <input type="text" id="title" required>
              <label for="title">Nombre de Asesor y fecha</label>
            </div>
            <div class="input-field">
              <textarea id="content" class="materialize-textarea" required></textarea>
              <label for="content">Escriba nota Aquí</label>
            </div>
            <button class="btn yellow darken-2 z-depth-0">Crear</button>
          </form>
        </div>
      </div>


      <!-- //////////////////////////////////////////   footer  //////////////////////////////////////////   -->


      <footer class="page-footer grey darken-3">
        <div class="container logged-out" style="display: none;">
          <div class="row">

            <!-- Left column -->
            <div class="col s12 l6">
              <h5>About Us..</h5>
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

          <div class="container center-align">&copy;2019 Spark Tattoo Supply</div>

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

          //collapsible
      $('.collapsible').collapsible();

          // offset images
          $('.materialboxed').materialbox();

          // Parallax image
          $('.parallax').parallax();

          // tabs
          $('.tabs').tabs();

          // slider
          $('.slider').slider();

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

      php

</body>

</html>