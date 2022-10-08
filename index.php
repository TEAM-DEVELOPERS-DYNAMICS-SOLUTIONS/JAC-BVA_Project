<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@200;400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="dist/css/reset.css" rel="stylesheet" type="text/css">
  <link href="dist/css/structure.css" rel="stylesheet" type="text/css">
  <title>JAC Bella Vista</title>
</head>
  <body>
    <Header class="Cabecera" id="Cabecera">
      <picture class="Cabecera_Logo">
          <source srcset="dist\media\images\index\logo.png" media="(min-width: 600px)">
          <img class="Cabecera_Logo_Imagen" src="dist\media\images\index\logo.png" alt="logo_JAC">
      </picture>
      <picture class="Cabecera_IconoUsuario">
        <img class="Cabecera_IconoUsuario_Imagen" src="dist\media\images\index\usuario.png" alt="usuario">
      </picture> 
      <picture class="Cabecera_IconoMenuDesplegable">
        <img class="Cabecera_IconoMenuDesplegable_Imagen" src="dist\media\images\index\menu desplegable.png" alt="menu">
      </picture> 
      <div class="Cabecera_Texto">
        <p class="Cabecera_Texto_Texto titulo-primario">Bella vista!</p>
        <p class="Cabecera_Texto_Texto titulo-terciario">Ciudadela Sucre Soacha</p>
      </div>
    </Header>
    <section class="Seccion_Donacion" id="Donacion">
      <picture class="Donacion_Imagen">
        <source class="Donacion_Recurso_Imagen" srcset="dist\media\images\index\Preocupada.png" media="(min-width: 600px)">
        <img class="Donacion_Imagen_Imagen" src="dist\media\images\index\Preocupada.png" alt="cultura">
      </picture> 
      <div class="Donacion_Titulo" id="TituloDonacion">
        <h2 class="titulo-secundario">Cultura, Esperanza y Deseo de Prosperar</h2>
      </div>
      <div class="Seccion_Donacion_Texto">
        <p class="Donacion_Texto texto">Somos una comunidad dispuesta a la lucha para ver con prosperidad el cambio, la transicion a un mejor espacio de vivienda y mejor seguridad para todos nosotros.</p>        
        <p class="Donacion_Texto texto">¿Nos ayudas?</p>
        <button class="Seccion_Donacion_Boton Boton Boton-Aporta"><img class="Boton-Aporta_Imagen" src="dist\media\images\index\donar.png" height="20" width="20" alt="donar">Aporta tu granito</button>
      </div>
      </div>
    <div class="Ubicacion">
        <div id="tituloUbicacion">
            <h2>Donde estamos?</h2>
        </div>
        <div id="TextoUbicacion">
            <p> Estamos ubicados en la comuna   de  Ciudadela 
                Sucre, en los  limites de 
                Soacha con Bogota
            </p>
            <button class="Visita"> Ven y Visitanos </button>
        <div class="mapaUbicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7954.3133509669115!2d-74.19004587990541!3d4.5658438367311485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f96e0c056f3%3A0x14289e57890b46f5!2sCiudadela%20Sucre%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1664893511745!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </div>
    </section>
    <body>
    
    <footer class="PiedePagina">
      <div class="PiedePagina_LogoBlanco"></div>
        <picture class="PiedePagina_LogoBlanco_Imagen">
          <source class="PiedePagina_LogoBlanco_Imagen_Recurso" srcset="Dist\media\images\Index\Logo Blanco.png" media="(min-width: 600px)">
          <img class="PiedePagina_LogoBlanco_Imagen_Imagen" src="Dist\media\images\Index\Logo Blanco.png" alt="LogoBlanco" >
        </picture>
      <div class="PiedePagina_LogoTdds">
        <source class="PiedePagina_LogoTdds_Imagen_Recurso" srcset="dist\media\images\Index\Logo TDDS.png" media="(min-width: 600px)">
        <img class="PiedePagina_LogoTdds_Imagen_Imagen" src="dist\media\images\Index\Logo TDDS.png" alt="LogoTdds">
      </div>
      <div class="PiedePagina_Hipervinculos">
        <div class="piedepagina_Hipervinculos_ContendedorTexto">
          <a class="piedepagina_Hipervinculos_link" href="#baner"><p Class="piedepagina_Hipervinculos_ContendedorTexto_texto">Inicio</p></a>
        </div>
        <div class="piedepagina_Hipervinculos_ContendedorTexto">
          <a class="piedepagina_Hipervinculos_link" href="#baner"><p Class="piedepagina_Hipervinculos_ContendedorTexto_texto">¿Quienes Somos?</p></a>
        </div>
        <div class="piedepagina_Hipervinculos_ContendedorTexto">
          <a class="piedepagina_Hipervinculos_link" href="#baner"><p Class="piedepagina_Hipervinculos_ContendedorTexto_texto">Proyectos</p></a>
        </div>
        <div class="piedepagina_Hipervinculos_ContendedorTexto">
          <a class="piedepagina_Hipervinculos_link" href="#baner"><p Class="piedepagina_Hipervinculos_ContendedorTexto_texto">Galeria</p></a>
        </div>
        <div class="piedepagina_Hipervinculos_ContendedorTexto">
          <a class="piedepagina_Hipervinculos_link" href="#baner"><p Class="piedepagina_Hipervinculos_ContendedorTexto_texto">Donaciones</p></a>
        </div>
      </div>
      <footer class="PiedePagina_FinaldePagina">
        <p class="Piedepagina_FinaldePagina_Texto">2022 © - JAC-BVA - Desarrollado por <a class="Piedepagina_FinaldePagina_Hipervinculo" href="">TDDS</p></a>
      </footer>
    </footer>
  </body>
</html>