<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head><title>Conversión</title></head>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
    body {
background: ;
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;
background-size: cover;
background-color: rgba(0, 0, 0, 0.55);

}  
    div{
        position: relative;
    } 
    
</style>
<body background="piña.jpg">
    <h1 style="font-family: 'Orbitron', sans-serif; color:#4D8538 ;" align="center" ><b>EJERCICIOS PHP</b></h1>


        <form action="controlador.php" method="post">
    <div class="row text-center justify-content-center  align-items-center">
    <div class="row">
    <div class="col mb-4">    
    <div class="card border-success text-success">
  <h5 class="card-header">Convertidor de Longitud</h5>
  <div class="card-body">
       
    <label for="long" class="card-title">Introduce cantidad en metros: </label><br>
    <input type="text" class="border-success" name="n1"><br>
           
           <br><input type="radio" name="convert" id="cm" value="cm">
           <label for="cm">CM</label><br>
           
           <input type="radio" name="convert" id="mm" value="mm">
           <label for="mm">MM</label><br>
           
           <input type="radio" name="convert" id="km" value="km">
           <label for="km">KM</label>
           
		<br><input type="submit" class="btn btn-primary border-success bg-success" name="btnAccion" value="Calcular longitud">     
 
  </div>
</div>
    </div>
    </div>
    </div>
        
    <div class="row text-center justify-content-center  align-items-center">
    <div class="row">
    <div class="col mb-4">
    <div class="card text-danger boder-danger">
  <h5 class="card-header">Convertidor de Volumen</h5>
  <div class="card-body">
    <label for="volumen" class="card-title">Introduce cantidad en litros: </label><br>
    <input type="text" class="border-danger" name="n2"><br>
           
           <br><input type="radio" name="convert" id="dc" value="dc">
           <label for="dc">decilitros</label><br>
           
           <input type="radio" name="convert" id="ml" value="ml">
           <label for="ml">mililitros</label><br>
           
		<br><input type="submit" class="btn btn-primary border-danger bg-danger" name="btnAccion" value="Calcular volumen">     
  </div>
</div>
    </div>
    </div>
        </div>
        
   <div class="row text-center justify-content-center  align-items-center">     
    <div class="row">
    <div class="col mb-4">
    <div class="card border-info text-info">
  <h5 class="card-header">Convertidor de Masa</h5>
  <div class="card-body">
    <label for="masa" class="card-title">Introduce cantidad en kilos: </label><br>
    <input type="text" class="border-info" name="n3"><br>
           
           <br><input type="radio" name="convert" id="mg" value="mg">
           <label for="mg">Miligramos</label><br>
           
           <input type="radio" name="convert" id="gr" value="gr">
           <label for="gr">Gramos</label><br>

           
		<br><input type="submit" class="btn btn-primary border-info bg-info" name="btnAccion" value="Calcular masa">     
  </div>
</div>
</div>
</div>
</div> 
    </form>
    
    
    <!-- Resultado-->
    
    <h2 style="font-family: 'Orbitron', sans-serif; color:#EBD03B;" align="center" ><b>Resultado</b></h2>
    
    <div class="row text-center justify-content-center  align-items-center">
    <div class="row">
    <div clas="col mb-4">
        <div class="card border-warning text-warning">
        <div class="card-body">
            <p>El resultado es: </p>

            <?php
        if(isset($cadena)){
            echo $cadena;

        }
        else{
            $cadena='';
        }
        ?>
            
        </div>
        </div>
    </div>
    </div>
    </div>   
    
</body>
</html>