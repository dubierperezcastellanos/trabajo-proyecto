<?php 

$valores            = "";
$caracter_separador = ",";
$total_campos=$_GET['contador'];
echo $total_campos."<br>";
for( $i = 1; $i <= $total_campos; $i ++ )       

        {
                    if (isset($_GET['sintoma'.$i]))
                     {
            			$valores .= $_GET[ 'sintoma'.$i ].$caracter_separador;
            	 
         			 }
            
       }
       $valores = substr ($valores, 0,- 1);

        
        echo $valores;

       include 'class/BD.php';
    
    $nuevo_obj=new BD();
      echo $nuevo_obj->estilos("../clases/ejer1/bootstrap");
      echo $nuevo_obj->leer_campo( $nuevo_obj->consultar($valores),"<th>ID_ENFERMEDAD</th> <th>ENFERMEDAD</th> <th>RECOMENDACIONES</th><th>ID_SINTOMAS</th><th>SINTOMAS</th><th>ID_ESTADISTICAS</th><th>ID_ENFERMEDAD</th><th>ID_SINTOMAS</th>");
 
			 
?>
