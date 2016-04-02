<!DOCTYPE html>
<html>
<head>
  <title>Contacto</title>
  <meta charset="UTF-8"> 
    	<meta name="viewport" content="width=device-width"/>
    <meta name="description" content="SINADEP SNTE SECCION 32">
    
    <meta name="keyword" content="cursos online para la actualización de profesores agremiados al SNTE Secciòn 32">
    <meta name="author" content="Lord Ivek">
    <link rel="stylesheet" type="text/css" href="../css/botonplegable.css"/>
    
</head>
<body>
<header>    
  <img id="headp" src="/img/bannerhead.png"></img>
  <img id="headm" src="/img/logogold.jpg"></img>

</header>
<section>
  <article>
    <fieldset>
       <ul>
        <li><a href="index.html"><figure class="logredes"><img class="redes" src="../img/boton/Boton_Home.png"/>
        <figcaption>Inicio</figcaption></figure></a></li>
        <li><a  href="https://www.facebook.com/snte.sinadep.secc32?fref=ts"><figure class="logredes"><img class="redes" src="/img/boton/facebook.png"/>
        <figcaption>Página</figcaption></figure> </a></li>
        <li><a href="https://www.facebook.com/Soporte-T%C3%A9cnico-de-Sinadep-Snte-Secci%C3%B3n-32-143014109417518/?fref=ts"><figure class="logredes"><img class="redes" src="/img/boton/facebook.png"/>
        <figcaption>Soporte</figcaption></figure></a></li>
        <li><a href="https://plus.google.com/117128681340923414457"><figure class="logredes"><img class="redes" src="/img/boton/gp.png"/>
        <figcaption>Google Plus</figcaption></figure></a></li> 
        
       </ul>
      
      <?php
        if (!isset($_POST['email'])) {
        ?>
          <form id ="formulario" action="<?=$_SERVER['PHP_SELF']?>" method="post">
           <p><label for="nombre">*Nombre:</label>
              <input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" required></input></p>
              <p><label for="email">*Email:</label>
              <input type="email"  id="email" name="email" placeholder="ejemplo@dondesea.com" required></input></p>
              <p><label for="telefono">Telefono:</label>
              <input type="tel" id="telefono" name="telefono"></input></p>
              <p><label for="fecha">Fecha de ingreso a la Sev:</label>
              <input type="date" id="fecha" name="fecha"></input></p>
              <p><label for="fecha">RFC:</label>
              <input type="text" id="rfc" name="rfc"></input></p>
              <p><label for="asunto">Asunto:</label></p>
              <p><input type="text" id="asunto" name="asunto" placeholder="Escriba su comentario" required></input></p>
              <input id="submit" type="submit" name="enviar"value="ENVIAR"> </input>
          </form>
        <?php
        }else{
          $mensaje="Mensaje del formulario de contacto de SINADEP-SNTE SECCION 32";
          $mensaje.= "\nNombre: ". $_POST['nombre'];
          $mensaje.= "\nEmail: ".$_POST['email'];
          $mensaje.= "\nfecha de nacimiento: ".$_POST['fecha'];
          $mensaje.= "\nTelefono: ". $_POST['telefono'];
          $mensaje.= "\nrfc: ". $_POST['rfc'];
          $mensaje.= "\nAsunto: ".$_POST['asunto'];
          $destino= "sinadep.secc32@gmail.com";
          $remitente = $_POST['email'];
          $asunto = "Mensaje enviado por: ".$_POST['nombre'];
          mail($destino,$asunto,$mensaje,"FROM: $remitente");
        ?>
          <p><strong>Mensaje enviado.</strong></p>
        <?php
        }
      ?>
        
    </fieldset>
  </article>
</section>
<section>
<div  itemscope itemtype="http://">
  <p itemprop="name"><h1>SINADEP SNTE SECCIÒN 32</h1></p>
  <p itemprop="description">
      <h2>Cursos online para profesores agremiados al SNTE sección 32.</h2>
  </p>
  <div  id ="dir" itemprop="address" itemscope itemtype="http://sinadepseccion32.hol.es/envio.php">
    <span itemprop="streetAddress">Calle Saltillo esquina Aguascalientes<p>Col. Progreso Macuiltepetl</p></span>
    <span itemprop="addressLocality">Xalapa</span>
    <span itemprop="addressRegion">Veracruz</span>
    <span itemprop="postalCode">91130</span>
  
  <p>
    Telefono: <span itemprop="telephone">01(228) 1352535</span>
  </p>
  <p>
    Email: <a href="mailto:sinadep.secc32@gmail.com" itemprop="email">sinadep.seccion32@gmail.com</a>
  </p>
  <p>
    Email: <a href="mailto:soportesinadepsecc32@gmail.com" itemprop="email">soportesinadepsecc32@gmail.com</a>
  </p>
  <p>
    Web: <a href="http://sinadepseccion32.hol.es" itemprop="url">http://sinadepseccion32.hol.es</a>
  </p>
  </div>
   <div id="map">
       <h2>¿No sabes como llegar desde la direccion donde te encuentras? <br><mark>No te preocupes, nosotros trazamos tu ruta</mark></h2>
       <a class ="boton" href="map_sinadep.html" class="btn btn-primary btn-large">Da clic</a><br>
        </div>
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d939.9703549091132!2d-96.92593306303026!3d19.546703858539477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x6c314bab939dc201!2sSindicato+Nacional+de+Trabajadores+de+la+Educaci%C3%B3n+Secci%C3%B3n+32!5e0!3m2!1ses-419!2smx!4v1456455632374" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 
  </div>
  </section>
  <footer>
  <figure >
    <img src="/img/logosinadep.png" width="80px" height="100px" itemprop="logo" alt="logo">
    <figcaption><a href="http://systemsivek.com" itemprop="url">By system's Ivek</a></figcaption>
  </figure>
  <p>licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License.</p>
</footer>
</body>
</html>


	