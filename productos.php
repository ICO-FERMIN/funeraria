<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú con Bootstrap</title>
  <!-- Enlace a Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
      <nav class="navbar navbar-expand-lg " style="background-color: #e08b53;" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://getbootstrap.com/docs/5.3/components/navbar/#how-it-works" style="font-size: 3em;">Ferreteria FerreICO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Mostrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Buscar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Eliminar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Acerca de
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Facebook</a></li>
                      <li><a class="dropdown-item" href="#">Instagram</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">TikTok</a></li>
                    </ul>
                  </li>
          </div>
        </div>
      </nav>
</header>
<hr>

<!-- cuerpo de la pagina -->

  <section class="banner">
    <div >
    </div>
  </section> 

<hr>

<section>
  <div class="left">
      <h1>Galeria</h1>
      <hr>
      <!-- Slider de imagenes -->
      <div class="slider">
        <div class="slides">
            <div class="slide"><img src="img/1.png" alt="Imagen 1"></div>
            <div class="slide"><img src="img/2.jpeg"alt="Imagen 2"></div>
            <div class="slide"><img src="img/3.jpg" alt="Imagen 3"></div>
            <div class="slide"><img src="img/ferreteria-medellin.webp" alt="Imagen 3"></div>
            <div class="slide"><img src="img/31707.jpg" alt="Imagen 3"></div>
            <div class="slide"><img src="img/Ferreteria-1.jpg" alt="Imagen 3"></div>
            <div class="slide"><img src="img/hiz4qh5la5h91.jpg" alt="Imagen 3"></div>
            <div class="slide"><img src="img/Ferreteria.webp" alt="Imagen 3"></div>
            <div class="slide"><img src="img/material.jpg" alt="Imagen 3"></div>
            <div class="slide"><img src="img/unnamed.jpg" alt="Imagen 3"></div>
        </div>
        <div class="dots-container">
            <span class="dot" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
        </div>
    </div>
  </div>
  </div>

  
  
  <div class="right">
      <h1>PRINCIPAL</h1>
      <br>

 <center>
 

 <?php 
include("conexion.php"); 
$link=Conectarse(); 
$result="select * from productos";
?> 

<TABLE>
<caption>Productos y precios</caption>
  <!-- Definir estilos por columna -->
    <colgroup>
    <col class="col1"/>
    <col class="col2"/>
    <col class="col3"/>
    <col class="col1"/>
    <col class="col2"/>
    <col class="col3"/>
    <col class="col1"/>
  </colgroup>
  <!-- Encabezado de la tabla -->
  <thead>
<TR> 
<TD>&nbsp;CODIGO&nbsp;</TD>
<TD>&nbsp;NOMBRE&nbsp;</TD>
<TD>&nbsp;MARCA&nbsp;</TD>
<TD>&nbsp;DESCRIPCION&nbsp;</TD>
<TD>&nbsp;PRECIO&nbsp;</TD>
<TD>&nbsp;STOCK&nbsp;</TD>
<TD>&nbsp;TOTAL&nbsp;</TD>
</TR> 
<?php       
if($consulta = $link->query($result))
{
while($row = $consulta->fetch_assoc()) { 
   printf("<tr>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      </tr>", 
      $row["codigo"],
      $row["nombre"],
      $row["marca"],
      $row["descripcion"],
      $row["precio"],
      $row["stock"],
      $row["total"]);
} 
$consulta->free();
}   
?> 
</table> 


</center>  
  </div>
</section>
<hr>
<footer>

</footer>
  <!-- Enlace a los scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <!--style para imagen de fondo -->

<style>
  .banner{
    background: url('img/ferreteria-especializada.webp');/*SIRVE PARA PONER LA IMAGEN*/
    background-size: cover;/*PARA QUE NO SE REPITA LA IMAGEN*/
    background-position: center;/*CENTRA LA IMAGEN*/
    background-attachment: fixed;/*MANTIENE LA IMAGEN ESTATICA*/
    background-repeat: no-repeat;/*PARA QUE NO SE REPITA LA IMAGEN*/
    height: 50em;/*LA ALTURA DE LA IMAGEN*/
    }
</style>
<!-- Script para sider automatico -->
<script>
  let index = 0;
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  const totalSlides = slides.length;

  function showSlide() {
      index++;
      if (index >= totalSlides) {
          index = 0;
      }

      const slidesContainer = document.querySelector('.slides');
      slidesContainer.style.transform = `translateX(-${index * 100}%)`;

      dots.forEach(dot => dot.classList.remove('actives'));
      dots[index].classList.add('actives');
  }

  function currentSlide(n) {
      index = n;
      const slidesContainer = document.querySelector('.slides');
      slidesContainer.style.transform = `translateX(-${index * 100}%)`;

      dots.forEach(dot => dot.classList.remove('actives'));
      dots[index].classList.add('actives');
  }

  // Inicia el slider automático
  setInterval(showSlide, 1000); // Cambia la imagen cada 3 segundos
</script>
</body>
</html>
