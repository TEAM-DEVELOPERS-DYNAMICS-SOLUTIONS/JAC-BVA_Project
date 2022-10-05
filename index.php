<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@200;400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <title>Document</title>
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
      <div class="Cabecera_texto">
        <p class="Texto" >Bella vista!</p>
        <p class="Texto" >Ciudadela Sucre Soacha</p>
      </div>
    </Header>
    <section class="Seccion_Donacion" id="Donacion">
      <picture class="Donacion_Imagen">
        <source class="Donacion_Recurso_Imagen" srcset="dist\media\images\index\Preocupada.png" media="(min-width: 600px)">
        <img class="Donacion_Imagen_Imagen" src="dist\media\images\index\Preocupada.png" alt="cultura">
      </picture> 
      <div class="Donacion_Titulo" id="TituloDonacion">
        <h2 class="Titulo2">Cultura, Esperanza y Deseo de Prosperar</h2>
      </div>
      <div class="Seccion_Donacion_Texto">
        <p class="Donacion_Texto Texto">Somos una comunidad dispuesta a la lucha para ver con prosperidad el cambio, la transicion a un mejor espacio de vivienda y mejor seguridad para todos nosotros.</p>        
        <p class="Donacion_Texto Textos">¿Nos ayudas?</p>
        <button class="Seccion_Donacion_Boton Boton Boton-Aporta"><img class="Boton-Aporta_Imagen" src="dist\media\images\index\donar.png" height="20" width="20" alt="donar">Aporta tu granito</button>
      </div>
    </section>
  </body>
</html>