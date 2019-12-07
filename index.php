<?php

 if(isset($_POST['submit'])){

require 'phpmailer/PHPmailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='parsolint@gmail.com';
$mail->Password='Parallax_19';

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
  <!-- <link rel="stylesheet" href="email_form.css" type="text/css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <title>Spark Tattoo Supplies</title>

  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
  <style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}


#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }


#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}


#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

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
      
      <li><a href="english.php">english</a></li>
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
          <h3>Empuñadura de Cartucho Ajustable!</h3>
          <h5 class="light grey-text text-lighten-3">Desechable, 100% Esterilizado, Membrana suave,
           Cartrucho Prime Tattoo.</h5>
        </div>
      </li>

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/7.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Cartucho de Aguja!</h3>
          <h5 class="light grey-text text-lighten-3">Estructura de actualización, Membrana blanda, Acero inoxidable Quirúrgico, <br>
            Paquete esterilizado, plásticos de ingeniería..</h5>
        </div>
      </li>

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/8.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Precise Cartuchos-SPT!</h3>
          <h5 class="light grey-text text-lighten-3">Membrana blanda, acero inoxidable médico, diseño de humanización, <br>
            Paquete de esterilización, servicio OEM.</h5>
        </div>
      </li>

      <li>
        <img src="./Spark_images/Greywash Membrane -SPe/9.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Precise Cartuchos-SPD!</h3>
          <h5 class="light grey-text text-lighten-3">Plásticos de ingeniería médica, Esterilizados por gas EO, Descanso para dedo de silicon
            Descanso, <br>
            Agujas Prime, Punta afilada.</h5>
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
          <a href="spd.php" </a> <h2 class="white-text text-darken-4">Cartuchos de Membrana True Color-SPD</h2>
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
          <a href="stp.php" </a> <h2 class="white-text text-darken-4">Cartuchos True color-STP-T</h2>
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
          <a href="axis.php" </a> <h2 class="white-text text-darken-4">Nuevo Cartucho de Eje Sparks Precise-SPT</h2>
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
          <a href="greywash.php" </a> <h2 class="white-text text-darken-4">Membrana Lavado Gris SPE</h2>
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
          <a href="needles.php" </a> <h2 class="white-text text-darken-4">Agujas</h2>
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
          <a href="blackbird.php" </a> <h2 class="white-text text-darken-4">Black Bird</h2>
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


    <div class="parallax-container logged-out" style="display: none;">
      <div class="class parallax">
        <img src="./Spark_images/Greywash Membrane -SPe/1.jpg" class="responsive-img">
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
            <h2 class="White-text text-light-1">Nuestra mission....</h2>
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
     

          <!-- Navbar -->
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
                        <h1 class="display-4 text-left padding-bottom-1 padding-left-1" style="color:#4aaaa5; padding-left: 5px;">  Contactanos</h1>
                        <h4>Contact us today, and get reply with in 24 hours!</h4>
                        <!-- dividing line -->
                        <hr class="my-4" style="height: 1px ;">

                        <!-- First Name input -->
                        <div class="form-group">
                          <label for="name"></label>
                          <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                          tabindex="1" placeholder="   Nombre.." >
                        </div>

                        <!-- Email input -->
                        <div class="form-group">
                          <label for="exampleFormControlInput1"></label>
                          <input type="text" name="email" class="form-control" id="exampleFormControlInput1"
                          tabindex="2"  placeholder="   nombre@ejemplo.com">
                        </div>

                        <!-- Apellido Paterno input -->
                        <div class="form-group">
                          <label for="telefono"></label>
                          <input type="text" name="phone" class="form-control" id="exampleFormControlInput1"
                          tabindex="3" placeholder="   Telefono..">
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
                         
                          <label for="exampleFormControlTextarea1" style="padding-left: 12px;">  Mensaje</label>
                          
                          <textarea class="form-control" 
                            placeholder="   Escribe aqui tu mensaje.."  type="text" name="message" tabindex="5" rows="20">
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
            <h2 class="white-text text-darken-4">Contáctanos</h2>
            <p class="white-text text-darken-4">Ponemos a su dispoción nuestra información de contacto:</p>


            <h5 class="white-text text-darken-4">Horarios de Atención <i class="material-icons prefix">access_time</i></h5>
            <p class="white-text "> Lunes a Viernes de 10:00 am a 6:00 pm.
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

                    <img src="./Spark_images/Logo/01 Spark brand1.jpeg" class="responsive-img">

                </div>
              </div>

            </form>
          </div>

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
    

      <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
     


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





