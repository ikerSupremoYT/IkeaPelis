<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/Inicio.css">
  <title>IkeaPelis</title>
  <link rel="stylesheet" href="css/emergente.css">
  <link rel="stylesheet" href="css/buscador.css">
</head>
<body>
  <header>
    <h1>IkeaPelis</h1>
  </header>
  <!-- La ventana emergente -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <div class="modal-content">
      <p>Se recomienda el uso de <a href="https://chromewebstore.google.com/detail/gighmmpiobklfepjocnamgkkbiglidom?hl=es" target="_blank">AdBlock</a> para mejor experiencia sin anuncios</p>
    </div>
  </div>

  <!-- Buscador -->
  <div class="buscador-container">
    <div class="lupa-container" id="lupaContainer">
      <img src="imagenes/lupa.png" alt="Lupa" id="lupa" onclick="mostrarBuscador()">
    </div>
    <div class="campo-buscador" id="campoBuscador">
      <input type="text" id="buscador" placeholder="Buscar por nombre de película">
    </div>
  </div>

  <a href="https://uii.io/ref/Jersuxs"><img src="https://uii.io/img/referral/480x60.png" title="Make short links and earn the biggest money" /></a>

  
  <div class="container" id="peliculasContainer">
    <div class="row">
      <div class="movie" data-nombre="Five Nights At Freddy's">
        <a href="htmls/fnaf.html"><img src="imagenes/fnaf.webp" alt="Five Nights At Freddy's"></a>
        <h2>Five Nights At Freddy's</h2>
      </div>
      <div class="movie" data-nombre="Mario Bros">
        <a href="htmls/MarioBros.html"><img src="imagenes/mario.webp" alt="Mario bros"></a>
        <h2>Mario Bros</h2>
      </div>
      <div class="movie" data-nombre="Bob Esponja">
        <a href="htmls/bob_esponja.html"><img src="imagenes/bob esponja.jpg" alt="Bob Esponja"></a>
        <h2>Bob Esponja</h2>
      </div>
    </div>
    <div class="row">
      <div class="movie" data-nombre="Red">
        <a href="htmls/Red.html"><img src="imagenes/Red.webp" alt="Red"></a>
        <h2>Red</h2>
      </div>
      <div class="movie" data-nombre="SPIDER-MAN NO WAY HOME">
        <a href="htmls/No way home.html"><img src="imagenes/No way home.jpg" alt="SPIDER-MAN NO WAY HOME"></a>
        <h2>SPIDER-MAN NO WAY HOME</h2>
      </div>
      <div class="movie" data-nombre="Elemental">
        <a href="htmls/elemental.html"><img src="imagenes/elemental.webp" alt="Elemental"></a>
        <h2>Elemental</h2>
      </div>
    </div>
<div class="row">
  <div class="movie" data-nombre="Spider-Man: A través del Spider-Verso">
    <a href="htmls/spider_verso.html"><img src="imagenes/MultiverseSpider.webp" alt="Spider-Man: A través del Spider-Verso"></a>
    <h2>Spider-Man: A través del Spider-Verso</h2>
  </div>
  <div class="movie" data-nombre="Barbie">
    <a href="htmls/barbie.html"><img src="imagenes/barbie.webp" alt="Barbie"></a>
    <h2>Barbie</h2>
  </div>
  <div class="movie" data-nombre="Blue Beetle">
    <a href="htmls/BlueBeetle.html"><img src="imagenes/BlueBeetle.jpg" alt="Blue Beetle"></a>
    <h2>Blue Beetle</h2>
  </div>
</div>
<div class="row">
  <div class="movie" data-nombre="Canta 1">
    <a href="htmls/canta1.html"><img src="imagenes/Canta1.jpg" alt="Canta 1"></a>
    <h2>Canta 1</h2>
  </div>
  <div class="movie" data-nombre="Canta 2">
    <a href="htmls/canta2.html"><img src="imagenes/Canta2.jpg" alt="Canta 2"></a>
    <h2>Canta 2</h2>
  </div>
  <div class="movie" data-nombre="Sonic 1">
    <a href="htmls/Sonic1.html"><img src="imagenes/Sonic1.jpg" alt="Sonic 1"></a>
    <h2>Sonic 1</h2>
  </div>
</div>
<div class="row">
  <div class="movie" data-nombre="Sonic 2">
    <a href="htmls/Sonic2.html"><img src="imagenes/Sonic2.webp" alt="Sonic 2"></a>
    <h2>Sonic 2</h2>
  </div>
  <div class="movie" data-nombre="Gato con Botas: El último deseo">
    <a href="htmls/GatoBotasDeseo.html"><img src="imagenes/GatoBotasDeseo.webp" alt="Gato con Botas: El último deseo"></a>
    <h2>Gato con Botas: El último deseo</h2>
  </div>
  <div class="movie" data-nombre="Shazam!">
    <a href="htmls/Shazam.html"><img src="imagenes/Shazam.webp" alt="Shazam!"></a>
    <h2>Shazam!</h2>
  </div>
</div>
<div class="row">
  <div class="movie" data-nombre="Wonka">
    <a href="htmls/Wonka.html"><img src="imagenes/Wonka.jpg" alt="Wonka"></a>
    <h2>Wonka</h2>
  </div>
  <div class="movie" data-nombre="Lightyear">
    <a href="htmls/Lightyear.html"><img src="imagenes/Lightyear.jpg" alt="Lightyear"></a>
    <h2>Lightyear</h2>
  </div>
<div class="movie" data-nombre="Padre no hay más que uno">
  <a href="htmls/Padrenohaymásqueuno.html"><img src="imagenes/Padre no hay más que uno.avif" alt="Padre no hay más que uno"></a>
  <h2>Padre no hay más que uno</h2>
</div>
</div>
<div class="row">
<div class="movie" data-nombre="Padre no hay más que uno 2: La llegada de la suegra">
  <a href="htmls/Padrenohaymásqueuno2.html"><img src="imagenes/padre no hay mas que uno 2.webp" alt="Padre no hay más que uno 2: La llegada de la suegra"></a>
  <h2>Padre no hay más que uno 2: La llegada de la suegra</h2>
</div>
<div class="movie" data-nombre="Padre no hay más que uno 3">
  <a href="htmls/Padrenohaymásqueuno3.html"><img src="imagenes/Padre no hay más que uno 3.jpg" alt="Padre no hay más que uno 3"></a>
  <h2>Padre no hay más que uno 3</h2>
</div>
<div class="movie" data-nombre="A Todo Tren">
  <a href="htmls/ATodoTren.html"><img src="imagenes/ATodoTren.jpg" alt="A Todo Tren"></a>
  <h2>A Todo Tren</h2>
</div>
</div>
<div class="row">
<div class="movie" data-nombre="A Todo Tren 2">
  <a href="htmls/ATodoTren2.html"><img src="imagenes/ATodoTren2.jpg" alt="A Todo Tren 2"></a>
  <h2>A Todo Tren 2</h2>
</div>
</div>
</div>
  <div style="position: relative;"><iframe src="https://publisher.linkvertise.com/cdn/ads/LV-728x90/index.html" frameborder="0" height="90" width="728"></iframe><a href="https://publisher.linkvertise.com/ac/537989" target="_blank" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;"></a></div>
<script src="js/emergente.js"></script>
<script src="js/buscador.js"></script>
</body>
</html>