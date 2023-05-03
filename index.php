
<?php
include("head.php");
?>


<?php
include("marco-right.php");
?>
   
 <div style="float:left; width:60%; margin:60px auto; padding:1vw">
   <div  style="width: 100%;">     
    <div style="width: 100%; height:100%; margin: auto ; display:inline-block;" >
       <div style=" width:100%; height: 100%; top:0; font-size:20px; text-align:center; float:left;">
        	<h1>¿Quién es Cortez Petter?</h1>
       		 <hr>
             
          <div id="posteo" style="text-align: left; font-size:0.5vw;">
                Posteado por:  Cortez Petter<br>
                Fecha: 2023-05-03 <br>
          </div>
        </div>
    </div>
  </div>
  <div style="width: 100%; height:100%;" >
           <div  style="text-align:justify; font-size: 20px;">
                   <p class="eys-parrafo">Hola, yo soy Petter Kadyr <b> Cortez Mancilla </b>, soy estudiante de la carrea Tecnologias de la Información </p>
                   <p class="eys-parrafo">Estudio en la Universidad Tecnica Luis Vargas Torres de Esmeraldas, la materia que mas me gusta dentro de mi especialidad son las bases de datos, me gusta mucho lo que es realizarlas y a la hora de resolver algun problema que estas tengan y rrealizar sus diversas funciones como lo puede ser buscar ciertos registros de algun tipo ya sea por su ID o número de cedula </p>

   <div id="blog-seccion2"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis estudios</h2> 
    


                   <p class="eys-parrafo">En el bachillerato estudie en la Unidad Educativa Fiscomicional María Auxiliadora en la carrera de informatica y donde consegui mi titulo de Técnico de Servicios Administración de Sistemas y fue aqui donde me empezo a gustar mas sobre esta carrera y por eso la segui eligiendo para poder aprender mas sobre ella</p>
                   <p class="eys-parrafo">Soy un apasionado de la tecnología desde la secundaria, quizás sea por esa capacidad que el conocimiento en estos dos campos puede solucionar muchos problemas de la sociedad, es por eso que desde que terminé mi bachillerato técnico me he propuesto seguir con esta carrera sobre las tecnologias del mundo.</p>
   <div id="blog-seccion3"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mi perfil informático</h2> 
    


                   <p  class="eys-parrafo">Mi primer programa lo hice en lenguaje de Java con IDE Netbeans, también otro lenguaje que he usado es el c++ donde lo utilice por primera vez en el bachillerato y realice una calculadora cientifica tambien trabajo ocacionalmente realizando mantenimoento a computadoras y celulares.</p> 
                   
   <div id="blog-seccion4"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis Hooby</h2> 
    

                   <p   class="eys-parrafo">Me gusta el doporte sobre todo voleibol y atletismo, también los juegos de PC como lo son shooters o mmorpg</p>
       

                   

               <hr>
               <div style=" bottom: 0; margin-bottom: 0;   width:100%; display: inline-block;" >
                  <div style="width: 40%;  float: left;">
                   <a href="#">&#171;   Previo</a>
                  </div>

                  <div style="width: 40%; float: right; text-align: right;">
                   <a href="apendiendo-cpp">Programa para aprender C++ &#187;</a>
                  </div>

                </div>
           </div>
  </div> 

  </div>




<?php
include("marco-left.php")
?>
 
<script >  

 document.title="Cortez Petter"; 
document.getElementById("foto").src="./images/Petter.jpeg";
document.getElementById("elnombre").innerHTML="Cortez Petter";

 document.getElementById("blog-indice").innerHTML="<p><b>Contenido</b></p><hr> <p><a href='#'>inicio</a></p><p><a href='#blog-seccion2'>Estudios</a></p><p><a href='#blog-seccion3'>Conocimiento informático</a></p><p><a href='#blog-seccion4'>Hooby</a></p>";

 document.getElementById("blog-relacionados").innerHTML="<p><b>Temas relacionados:</b></p><hr> <p><a href='eys-kevin.php'>Kevin Aguilar</a></p><p><a href='eys-damaris.php'>Damaris Viallalva</a></p> ";
 </script>
 
<?php
include("foot.php")
?>
