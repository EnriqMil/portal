<?php include("controlador/cper.php"); ?>
<body>
<link type="text/css" rel="stylesheet" href="vistas/css/styleportal.css">
<script src = "vistas/js/portal.js" type = "text/javascript"/></script>
	<section>
        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="sue(event, 'create')">Crear caso</button>
            <button class="tablinks" onclick="sue(event, 'nuevo_caso')">Nuevo caso</button>
            <button class="tablinks" onclick="sue(event, 'en_juicio')">En el juzgado</button>
            <button class="tablinks" onclick="sue(event, 'sentencia')">Sentencia</button>            
            
            <button class="tablinks" onclick="sue(event, 'apelacion')">Apelacion</button>
            <button class="tablinks" onclick="sue(event, 'ejecutoria')">Ejecutoria</button>
            <button class="tablinks" onclick="sue(event, 'cobrado')">Asuntos cerrados</button>
            <button class="tablinks" onclick="sue(event, 'search_data')">Buscador</button>
            
        </div>
        <!-- Tab content -->
        
        <div id="create" class="tabcontent">
 
          <!-- Accordeon button star here -->
          <button class="accordion">Si quieres crear un nuevo caso presiona aqui</button>
            <div class="panel">
                    
          <!-- Form new case-->
                <div id="newcaseform">
                    <div class="container">
 <!-- Form introduce first case-->
                      <form method='POST' action="#">  
                        <div class="row">
                          <div class="col-25">
                            <label for="plaintiff">Demandante</label>
                          </div>
                          <div class="col-75">
                            <select id="country" name="plaintiff">
                              <option value="my_company">My Compania</option>
                              <option value="other">Other, specificate on subject</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="defendant">Demandado</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="defendant" placeholder="defendant">
                          </div>
                        </div>
						
						<div class="row">
                          <div class="col-25">
                            <label for="cif">Cif</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="cif" name="cif" placeholder="CIF..">
                          </div>
                        </div>
						
                        <div class="row">
                          <div class="col-25">
                            <label for="addressdefendant">Direccion demandado</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="addressdefendant" placeholder="Addres..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="debt">Deuda</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="debt" placeholder="Debt">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="currency">Monedas</label>
                          </div>
                          <div class="col-75">
                            <select id="currency" name="currency">
                              <option value="€">Euros</option>
                              <option value="$">Dollar</option>
                              <option value="BGN">Lev Bulgaro</option>
                              <option value="CYP">Libra chipriota</option>
                              <option value="CZK">Corona checa</option>
                              <option value="EEK">Corona estonia</option>
                              <option value="GBP">Libra esterlina</option>
                              <option value="HUF">Florin hungaro</option>
                              <option value="LVL">Lats leton</option>
                              <option value="LVL">Litas lituano</option>
                              <option value="MTL">Lira maltesa</option>
                              <option value="CYP">Libra chipriota</option>
                              <option value="PLN">Zloties</option>
                              <option value="RON">Leu rumano</option>
                              <option value="SEK">Corona sueca</option>
                              <option value="SKK">Corona eslovaca</option>
                              
                            </select>
                          </div>
                        </div>						
						
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Gastos de reclamación</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="cost" placeholder="Cost">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="feesue">Tasa judicial</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="feesue" name="feesue" placeholder="18 Euros" disabled>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-25">
                            <label for="plaintiffcountry">Juzgado desde el que se reclama</label>
                          </div>
                          <div class="col-75">
                            <select id="country" name="plaintiffcountry">
                              <option value="Polonia">Polonia</option>
                              <option value="Espana">Espana</option>
                              <option value="usa">USA</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="defendantcountry">Juzgado al que se reclama</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="defendantcountry" placeholder="Juzgado..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="subject">Subject</label>
                          </div>
                          <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                          </div>
                        </div>
                        <div class="row">
                        <!-- button submit form-->
                          <input type="submit" name = "submit" value="Crear nuevo caso">
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>       
        
        <script> /*accordion function for tab new case*/
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                }
              });
            }
        </script>
            
        
 		<div id="nuevo_caso" class="tabcontent">
          <h3>Preparando un nuevo caso</h3>
          <p>Remitido ya al abogado. fase que informe que se ha interpuesto la demanda.</p>           
       		
        	<table style="width:100%" id="t01">
              <tr>
                <th>Id</th>
                <th>Contra</th>
                <th>Cuantía</th>
                <th>Desde juzgado</th>
                <th>A juzgado</th>
                <th>Fecha demanda</th>
                <th>Fecha límite demanda</th>
              </tr>
              <?php  if (! empty($dateshowsue)) {
						for($i=0;$i<count($dateshowsue);$i++){ ?>
			  <tr>
               	<td><?php echo $dateshowsue[$i]['id']; ?></td>
               	<td><?php echo $dateshowsue[$i]['defendant'];?></td>
               	<td><?php echo $dateshowsue[$i]['debt']; ?></td>
               	<td><?php echo $dateshowsue[$i]['plaintiffcountry'];?></td>
               	<td><?php echo $dateshowsue[$i]['defendantcountry'];?></td>
	<!-- button submit sue and delete-->
               	<td><form method='POST' action="#"> <input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $dateshowsue[$i]['id']?>"/> <input type="date" name="sueday"><input type="submit" name = "sue" value="Presentada demanda"></form></td>
                <td><form method='POST' action="#"> <input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $dateshowsue[$i]['id']?>"/> <input type="submit" name = "delete" value="Delete"></form></td>
              </tr>
              <?php
				}
              }
              ?>
			</table>
		</div>
		
<!-- Tab content on court, En el juzgado. -->
		<div id="en_juicio" class="tabcontent">
          <h3>En el juzgado</h3>
          <p>Interpuesta ya la demanda, se esta a la espera se dicte sentencia.</p>
          <p>Cuando se dicte sentencia, especificar la fecha, la deuda ganada entre 0 a la cantidad de dueda reclamada</p>
		  <p>y marcar la de tasa judicial ganada o honorarios cuando se haya ganado, si no dejarla sin marcar.</p>
          <table style="width:100%" id="t01">
          	<tr>
                <th>N incidencia</th>
                <th>Contra</th>
                <th>Deuda</th>
                <th>Desde juzgado</th>
                <th>A juzgado</th>
				<th style="width: 180px; color: red;" >Fecha sentencia</th>
                <th style="width: 300px; color: red;">Sentencia</th>
            </tr>
 <!-- Sql information suingdate IS NOT NULL AND judicialdate IS NULL, remember $casos1['id'] and not 1--> 
          	<?php    if (! empty($fasecourthouse)) {
						for($i=0;$i<count($fasecourthouse);$i++){ ?>
              <tr>
               	<td><?php echo $fasecourthouse[$i]['id']?></td>
               	<td><?php echo $fasecourthouse[$i]['defendant']?></td>
               	<td><?php echo $fasecourthouse[$i]['debt'], ' ',$fasecourthouse[$i]['currency']?></td>
               	<td><?php echo $fasecourthouse[$i]['plaintiffcountry']?></td>
               	<td><?php echo $fasecourthouse[$i]['defendantcountry']?></td>
               	<form method='POST' action="#">
               		<td><input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $fasecourthouse[$i]['id']?>"/>
               		 <input type="date" name="decisiondate">
               		 
                	<td><input type="text" name="debtwon" placeholder="Deuda ganada" style="width: 150px;" class="deudastyle"><input type="submit"  name = "decision" value="Guardar"><br>
				     <input type="checkbox" name="fee_win_sue" value= 1>Tasa judicial ganada<br>
               	     <input type="checkbox" name="fee_lawyer" value= 1>Honorarios abogado demandante ganado</td>
  				</form>
   <!-- FALTA CONECTAR LOS CHECKBOX Y MONEY CASE'. -->  	            
              </tr>
              <?php
				}
			 }
			 ?>
          </table>
        </div>

 <!-- Start tab "Sentencia" /$fasedecision = $obj->seldecision2(); --> 
        <div id="sentencia" class="tabcontent">
          <h3>Ya hay una primera sentencia judicial</h3>
          <p>Seleccionar apelacion, si el contrario interpueso demanda contra la sentencia.</p>
          <p>Seleccionar cobro si ya realizo el pago.</p>
          <p>Automaticamente se seleccionara ejecutoria sin en 45 dias no se ha especificado nada en la base de datos.</p>
          <table style="width:100%" id="t01">
			<tr>
                <th>N incidencia</th>
                <th>Contra</th>
                <th>Deuda judicial</th>
                <th>Desde juzgado</th>
                <th>A juzgado</th>
                <th style="width: 230px; color: red;">Siguiente fase</th>
            </tr>
    <!-- Sql information WHERE judicialdate IS NOT NULL AND appeal = 0--> 
          	<?php  if (! empty($fasedecision)) {
						for($i=0;$i<count($fasedecision);$i++){ ?>
			
			
                            
              <tr>
               	<td><?php echo $fasedecision[$i]['id']?></td>
               	<td><?php echo $fasedecision[$i]['defendant']?></td>
               	<td><?php echo $fasedecision[$i]['judicialdebt'], ' ',$fasedecision[$i]['currency']?></td>
               	<td><?php echo $fasedecision[$i]['plaintiffcountry']?></td>
               	<td><?php echo $fasedecision[$i]['defendantcountry']?></td>
               	<form method='POST' action="#">
               	<td> <input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $fasedecision[$i]['id']?>"/>
                     <input type="radio" name="after_judicial" value= 1>Apelacion<br>
				     <input type="radio" name="after_judicial" value= 2>Ejecutar<input type="submit"  name = "radionewfase" onclick="alert('Introducido datos!')"  value="Siguiente fase"><br>
					 <input type="radio" name="after_judicial" value= 2>Cobrado
				</td></form>
              </tr>
              <?php
				}
			 }
			 ?>
          </table>
        </div>   
        
     <!-- Tab content 'apelacion'. -->      
        <div id="apelacion" class="tabcontent">
          <h3>Se ha recurrido la sentencia y se esta a la espera de que se dicte una nueva sentencia</h3>
          <p>Seleccionar la fecha de esta nueva sentencia, Si se gano la tasa judicial, marcarla. .</p>
		   <p>Si se gano los honorarios en apelacion, marcar la casilla.</p>
          <table style="width:100%" id="t01">
			<tr>
                <th>N incidencia</th>
                <th>Contra</th>
                <th>Deuda</th>
                <th>Desde juzgado</th>
                <th>A juzgado</th>
				<th>Fecha sentencia</th>
                <th style="width: 420px; color: red;">Cuantias</th>
				<th>Deshacer</th>
            </tr>
          	<?php if (! empty($faseappeal)) {
					for($i=0;$i<count($faseappeal);$i++){ ?>                            
              <tr>
               	<td><?php echo $faseappeal[$i]['id']?></td>
               	<td><?php echo $faseappeal[$i]['defendant']?></td>
               	<td><?php echo $faseappeal[$i]['judicialdebt'], ' ',$faseappeal[$i]['currency']?></td>
               	<td><?php echo $faseappeal[$i]['plaintiffcountry']?></td>
               	<td><?php echo $faseappeal[$i]['defendantcountry']?></td>
               	<form method='POST' action="#">
               		<td><input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $faseappeal[$i]['id']?>"/>
               		 <input type="date" name="appealdecisiondate">
               		 
                	<td><input type="text" name="money_case" placeholder="Deuda ganada" style="width: 200px;"> <input type="submit"  name = "appealdecision" onclick="alert('Introducido datos!')"  value="Guardar"><br>
				     <input type="checkbox" name="fee_win_sue" value= 1>Tasa judicial ganada<br>
				     <input type="checkbox" name="fee_lawyer" value = 1>Honorarios abogado demandante ganado en primera sentencia<br>
					 <input type="checkbox" name="fee_lawyer_apelacion" >Honorarios abogado demandante ganado en apelacion<br><br>
                     </td>
                   
				</form>
				
 <!-- FALTA CONECTAR LOS CHECKBOX Y MONEY CASE'. -->  				
                
              </tr>
              <?php
				}
			 }
			 ?>
		  
          </table>
        </div>
        
    <!-- Tab content 'execute'. -->      
        <div id="ejecutoria" class="tabcontent">
          <h3>En esta seccion cuando la sentencia es firme pero no ha habido pago todavia</h3>
          <p>Seleccionar ingreso cobro cuando se realize algun pago.</p>
          <table style="width:100%" id="t01">
			<tr>
                <th>N incidencia</th>
                <th>Contra</th>
                
                <th>Desde juzgado</th>
                <th>A juzgado</th>
				<th>Fecha sentencia firme</th>
                <th >Cobros</th>
				<th style="width: 200px; color: red;">Nuevos cobros</th>
				<th style="width: 120px; color: red;">Asunto cerrado</th>
            </tr>
           	<?php if (! empty($faseejecutar)) {
						for($i=0;$i<count($faseejecutar);$i++){ ?>                            
                           
              <tr>
               	<td><?php echo $faseejecutar[$i]['id']?></td>
               	<td><?php echo $faseejecutar[$i]['defendant']?></td>
               	
               	<td><?php echo $faseejecutar[$i]['plaintiffcountry']?></td>
               	<td><?php echo $faseejecutar[$i]['defendantcountry']?></td>
				<td><?php  echo $faseejecutar[$i]['lastdecision']?></td>
				<td><?php echo $faseejecutar[$i]['paydebt'],"/", $faseejecutar[$i]['judicialdebt'], ' ',$faseejecutar[$i]['currency']?></td>
               	<form method='POST' action="#">
               	<td> <input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $faseejecutar[$i]['id']?>"/>
               	     <input type="hidden" id="hiddenid" name = "money_cashflow" value="<?php echo $faseejecutar[$i]['paydebt']?>"/>
               	     <input type="text" name="money_judicial" placeholder="pago" style="width: 80px;" class="deudastyle">
				    <input type="submit"  name = "addpayment" onclick="alert('Introducido cantidades cobradas!')"  value="Cobros">
				</td>
				</form>
				<form method='POST' action="#">
				<td> <input type="hidden" id="hiddenid" name = "hiddenid" value="<?php echo $faseejecutar[$i]['id']?>"/>
				    <input type="submit"  name = "finish" onclick="alert('Asunto cerrado, pasa a historico!')"  value="Fin">
				</td>
				</form>

                
              </tr>
              <?php
				}
			 }
			 ?>
          </table>
        </div>
    <!-- Tab content 'cash'. -->      
        <div id="cobrado" class="tabcontent">
          <h3>Asuntos ya terminados</h3>
          <p>Se especifica las cantidades por las que se condeno y las que se han cobrado.</p>
           <table style="width:100%" id="t01">
			<tr>
                <th style="width: 60px;">Referencia</th>
                <th>Contra</th>
                <th>Desde juzgado</th>
                <th>A juzgado</th>
				<th>Fecha sentencia firme</th>
				<th>Duracion asunto judicial</th>
                <th>Cobros</th>
				
            </tr>
           	<?php if (! empty($faseends)) {
					for($i=0;$i<count($faseends);$i++){ ?>                            
                            
              <tr>
			     
               	<td><?php echo $faseends[$i]['id']?></td>
               	<td><?php echo $faseends[$i]['defendant']?></td>
               	<td><?php echo $faseends[$i]['plaintiffcountry']?></td>
               	<td><?php echo $faseends[$i]['defendantcountry']?></td>
				<td><?php echo $faseends[$i]['lastdecision']?></td>
				<td><?php $fecha_inicial= (strtotime($faseends[$i]['suingdate'])); 
				          $fecha_ultima =(strtotime($faseends[$i]['lastdecision']));
						  $diff =  $fecha_ultima -$fecha_inicial; 
						  echo round($diff / (60 * 60 * 24)),' dias'?></td>
				<td><?php echo $faseends[$i]['paydebt'],"/", $faseends[$i]['judicialdebt'], ' ',$faseends[$i]['currency']?></td>
               	

                
              </tr>
              <?php
				}
			 }
			 ?>
          </table>
        </div>
          
        <!-- Tab content 'cash'. -->      
        <div id="search_data" class="tabcontent">
          <h3>Todos los asuntos</h3>
          <p>Se especifica las cantidades por las que se condeno y las que se han cobrado.</p>
           <table style="width:100%" id="t01">
			<tr>
                <th style="width: 40px;">Ref</th>
                <th>Contra</th>
				<th>Cif</th>
				<th>Direccion</th>
				
                <th>Desde juzgado</th>
                <th>A juzgado</th>
				<th style="width: 160px;">Fecha sentencia firme</th>
				<th>Duracion asunto judicial</th>
                <th>Cobros</th>
				
            </tr>
           	<?php   /*add information from sql and create new table*/
			  foreach($matrizCasos as $casos){?>                            
                            
              <tr>
			     
               	<td><?php echo $casos['id']?></td>
               	<td><?php echo $casos['defendant']?></td>
				<td><?php echo $casos['cifdefendant']?></td>
				<td><?php echo $casos['addressdefendant']?></td>
               	<td><?php echo $casos['plaintiffcountry']?></td>
               	<td><?php echo $casos['defendantcountry']?></td>
				<td><?php echo $casos['lastdecision']?></td>
				<td><?php $fecha_inicial= (strtotime($casos['suingdate'])); 
				          $fecha_ultima =(strtotime($casos['lastdecision']));
						  $diff =  $fecha_ultima -$fecha_inicial; 
						  echo round($diff / (60 * 60 * 24)),' dias'?></td>
				<td><?php echo $casos['paydebt'],"/", $casos['judicialdebt'], ' ',$casos['currency']?></td>
               	

                
              </tr>
              <?php
			 }
			 ?>
          </table>
        </div>

		  
		  
    </section>  
</body>
</html>

