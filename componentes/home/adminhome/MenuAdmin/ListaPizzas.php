<?php 
require_once '../navar/head.php';
 //require_once '../navar/navar.php';
include_once 'modalpizza.php';
 
include '../adminhome.php';
//include '../adminhome.php';
?>

  <div class="container">
 
      <div class="row d-flex justify-content-around col-md-offset-1 " >
      
    </div>
     
     <br>
        <div class="row d-flex justify-content-around mt-5">
            
            <div class="card col-md-15 col-md-offset-1 bg-light">
            <h2 align="center">Lista De Pizzas</h2>    
                <article class="card-body">
                <button type="submit" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addpizzas">Nueva Pizza</button>   
               
                
<div class="row" >
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
      <!--style="background-image: url('../imGP/15.jpg'); width: 100; height: 100; "-->
      
    <div class="col-sm-offset-1 col-sm-8" >
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_pizzas" class="table table-bordered table-hover " cellspacing="0" width="100%" >
					<thead class="bg-dark text-white" >
						<tr>								
						
                            <th>Nombre</th>	
                            <th>Ingredientes</th>
                            <th>Tamaño</th>	
                            <th>Porciones</th>	
                            <th>Precio</th>
                            <th>Opcion</th>
           
              										
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
    </div>
    
    <?php include_once '../navar/footer.php'; ?>
    <script src="../modelo/datapizza.js"></script>
   