<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>
        
<div class="container-fluid">
    <div class="jumbotron text-center">
        <img src="img/perfil.jpg" width="300" height="300">
       
    </div>
</div>

<div class="container-fluid">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <b>¿Quienes somos?</b>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body text-justify">
          El clan Hell's Brothers surgió debido a la amistad creada en <b>Fortnite: Battle Royale</b>, inicialmente comenzó como un pequeño grupo de amigos, 
        pero con el tiempo ha logrado crecer en el número de integrantes y continua en expansión. Los miembros pertenecientes juegan una amplia variedad de juegos como lo son: 
        <b>Call of Duty: Warzone, Halo: The Master Chief Collection, Minecraft, Apex Legends, Fifa, League of Legends, Destiny 2, etc</b>. Si te interesa puedes consultar información sobre los miembros 
        <a href="<?php echo RUTA_MIEMBROS ?>">aquí</a>.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <b>  Misión </b>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-justify">
        Si bien el principal motivo por el cual se creó el clan fue la sana y buena convivencia al jugar, 
        en <b>Team HB</b> busca que los miembros pertenecientes logren darse a conocer de manera individual y/o 
        colectiva en los juegos que sean de su preferencia. 
        Si te interesa puedes seguir nuestras <a href="<?php echo RUTA_CONTACTO ?>">redes sociales</a>.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <b> Visión </b>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body text-justify">
        En <b>Team HB</b> se pretende que los miembros logren participar en diferentes competiciones de manera profesional y 
        así permanecer en un continuo mejoramiento en las habilidades de los integrantes y al mismo tiempo aumentar el reconocimiento del clan.
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <b> Valores</b>
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body text-justify">
        <b>Team HB</b> promueve diferentes tipos de valores en cada uno de sus miembros, aunque los principales son:
        <ul>
            <li>Amistad: Todos y cada uno de los integrantes del clan tiene una amistad relacionada con los demás.</li>
            <li>Respeto: Ningún integrante del clan genera ninguna falta de respeto hacia otro, más allá del juego y la confianza entre ellos. (PD: El que se murió se murió)</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include_once 'plantillas/fin.php';
?>
        
