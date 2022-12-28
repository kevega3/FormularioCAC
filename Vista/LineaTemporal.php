<section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>
				
					
					<?php 
					
					if($Intro == 1 || $Intro == '1' ){
					?>
						<li onclick="deleteall()"><a id="INTRODUCCION" class="respoIntro" href="#0" data-date="01/01/2000" >INTRODUCCION</a></li>	
					<?php  
						}else{
					?>
					<li onclick="deleteall()"><a id="INTRODUCCION"  href="#0" data-date="01/01/2000" >INTRODUCCION</a></li>	
					<?php 
						}
					?>






					<?php 
					
						if($Report1 == 1 || $Report1 == '1' ){
					?>
						<li  onclick="ActivarIntro()"><a id="btnli1" href="#0" data-date="01/01/2005" class="respo">Almacenamiento</a></li>	
					<?php  
						}else{
					?>
					<li onclick="ActivarIntro()"><a href="#0" id="btnli1" data-date="01/01/2005" class="selected">Almacenamiento</a></li>					
					<?php 
						}
					?>


					<?php 
					
						if($Report2 == 1 || $Report2 == '1' ){
					?>
						<li  onclick="RemoveIntro1()"><a id="btnli2" href="#0" data-date="01/01/2010" class="respo">Arquitectura Em.</a></li>
					<?php  
						}else{
					?>
						<li  onclick="RemoveIntro1()"><a id="btnli2" href="#0" data-date="01/01/2010" >Arquitectura Em.</a></li>
					<?php 
						}
					?>
					

					<?php 
					
						if($Report3 == 1 || $Report3 == '1' ){
					?>
						<li onclick="RemoveIntro2()"><a id="btnli3" href="#0" data-date="01/01/2015" class="respo">Arquitectura de datos</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro2()"><a id="btnli3" href="#0" data-date="01/01/2015" >Arquitectura de datos</a></li>
					<?php 
						}
					?>


<?php 
					
						if($Report4 == 1 || $Report4 == '1' ){
					?>
						<li onclick="RemoveIntro3()"><a id="btnli4" href="#0" data-date="01/01/2020" class="respo">Calidad</a></li> 
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro3()"><a id="btnli4" ref="#0" data-date="01/01/2020">Calidad</a></li> 
					<?php 
						}
					?>
					

					<?php 
						if($Report5 == 1 || $Report5 == '1' ){
					?>
						<li onclick="RemoveIntro4()"><a id="btnli5" href="#0" data-date="01/01/2025" class="respo">Ciberseguridad</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro4()"><a  id="btnli5" href="#0" data-date="01/01/2025">Ciberseguridad</a></li>
					<?php 
						}
					?>
					<?php 
						if($Report6 == 1 || $Report6 == '1' ){
					?>
						<li onclick="RemoveIntro5()"><a id="btnli6" href="#0" data-date="01/01/2030" class="respo">Estrategia de datos</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro5()"><a id="btnli6" href="#0" data-date="01/01/2030">Estrategia de datos</a></li>
					<?php 
						}
					?>


					<?php 
						if($Report7 == 1 || $Report7 == '1' ){
					?>
						<li onclick="RemoveIntro6()"><a id="btnli7" href="#0" data-date="01/01/2035" class="respo">Gestión de datos ma.</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro6()"><a id="btnli7" href="#0" data-date="01/01/2035">Gestión de datos ma.</a></li>
					<?php 
						}
					?>

					<?php 
						if($Report8 == 1 || $Report8 == '1' ){
					?>
						<li onclick="RemoveIntro7()"><a id="btnli8" href="#0" data-date="01/01/2040" class="respo">Gobierno</a></li>
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro7()"><a id="btnli8" href="#0" data-date="01/01/2040">Gobierno</a></li>
					<?php 
						}
					?>


					<?php 
						if($Report9 == 1 || $Report9 == '1' ){
					?>
						<li onclick="RemoveIntro8()"><a id="btnli9" href="#0" data-date="01/01/2045" class="respo">Mejora de Productividad</a></li>
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro8()"><a id="btnli9" href="#0" data-date="01/01/2045">Mejora de Productividad</a></li>
					<?php 
						}
					?>

					<?php 
						if($Report10 == 1 || $Report10 == '1' ){
					?>
					<li onclick="RemoveIntro9()"><a  id="btnli10" href="#0" data-date="01/01/2050" class="respo">Seguridad de información</a></li>
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro9()"><a id="btnli10" href="#0" data-date="01/01/2050">Seguridad de información</a></li>
					<?php 
						}
					?>
					

					
					<?php 
						if($Report11 == 1 || $Report11 == '1' ){
					?>
					<li onclick="RemoveIntro10()"><a id="btnli11" href="#0" data-date="01/01/2055" class="respo">Gestión documental</a></li>
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro10()"><a id="btnli11" href="#0" data-date="01/01/2055">Gestión documental</a></li>
					<?php 
						}
					?>
					
					<?php 
						if($Report12 == 1 || $Report12 == '1' ){
					?>
					<li onclick="RemoveIntro11()"><a id="btnli12" href="#0" data-date="01/01/2060" class="respo">Integracion e interoperabilidad</a></li>
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro11()"><a id="btnli12" href="#0" data-date="01/01/2060">Integracion e interoperabilidad</a></li>
					<?php 
						}
					?>
					
					
					<?php 
						if($Report13 == 1 || $Report13 == '1' ){
					?>
					<li onclick="RemoveIntro12()"><a id="btnli13" href="#0" data-date="01/01/2065" class="respo">Modelos de transformacion</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro12()"><a id="btnli13" href="#0" data-date="01/01/2065">Modelos de transformacion</a></li>
					<?php 
						}
					?>
					

					
					<?php 
						if($Report14 == 1 || $Report14 == '1' ){
					?>
					<li onclick="RemoveIntro13()"><a  id="btnli14" href="#0" data-date="01/01/2070" class="respo">Metadatos</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro13()"><a id="btnli14" href="#0" data-date="01/01/2070" >Metadatos</a></li>
					<?php 
						}
					?>
					
					
					
					<?php 
						if($Report15 == 1 || $Report15 == '1' ){
					?>
					<li onclick="RemoveIntro14()"><a id="btnli15" href="#0" data-date="01/01/2075" class="respo">Almacenamiento y operaciones</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro14()"><a id="btnli15" href="#0" data-date="01/01/2075" >Almacenamiento y operaciones</a></li>
					<?php 
						}
					?>
					
					
					
					
					<?php 
						if($Report16 == 1 || $Report16 == '1' ){
					?>
					
					<li onclick="RemoveIntro15()"><a id="btnli16" href="#0" data-date="01/01/2080" class="respo">Datos maestros y de referencia</a></li>
					<?php  
						}else{
					?>
					<li onclick="RemoveIntro15()"><a id="btnli16" href="#0" data-date="01/01/2080">Datos maestros y de referencia</a></li>
					<?php 
						}
					?>
					
					
					<?php 
						if($Report17 == 1 || $Report17 == '1' ){
					?>
					<li onclick="RemoveIntro16()"><a id="btnli17" href="#0" data-date="01/01/2085" class="respo">Gestion Arquitectura</a></li>
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro16()"><a id="btnli17" href="#0" data-date="01/01/2085">Gestion Arquitectura</a></li>
					<?php 
						}
					?>
					

					<?php 
						if($Report18 == 1 || $Report18 == '1' ){
					?>
					<li onclick="RemoveIntro17()"><a id="btnli18" data-date="01/01/2090" class="respo">Gestión de metadatos</a></li>   
					<?php  
						}else{
					?>
					
					<li onclick="RemoveIntro17()"><a id="btnli18" href="#0" data-date="01/01/2090">Gestión de metadatos</a></li>   
					<?php 
						}
					?>
					
					
					
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->

		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev">Back</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> <!-- .timeline -->
</section>