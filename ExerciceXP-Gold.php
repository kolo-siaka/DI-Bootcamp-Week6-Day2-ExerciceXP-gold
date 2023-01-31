<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice Xp Gold</title>
</head>
<body> <!--Exercice1 -->
      <?php
        $nombre = 6;
        $facto = 1;
        for ($i=1; $i<=$nombre ; $i++) { 
          
          $facto = $facto * $i;
          
         } 
         echo "Le factoriel de {$nombre} est :", $facto ."<br>";

       ?>
       <hr>
       <!--Exercice 2 -->

       <?php 
         
         $etoile = 8;

         for ($i=1; $i <= $etoile ; $i++) { 
         	if ($i == 1) {
         		echo '* <br>';
         	}elseif ($i == 2) {
         		echo '** <br>';
         	}elseif ($i == 3) {
         		echo '*** <br>';
         	}elseif ($i == 4) {
         		echo '**** <br>';
         	}elseif ($i == 5) {
         		echo '***** <br>';
         	}elseif ($i == 6) {
         		echo '****** <br>';
         	}elseif ($i == 7) {
         		echo '******* <br>';
         	}elseif ($i == 8) {
         		echo '******** <br>';
         	}
         	
         }
    
        ?>
        <hr>
   <!--Exercice 3 -->
    <?php 
      
       function century($years='')
       {
       	if (strlen($years) < 4 OR strlen($years) > 4) {
       		 
       		 echo 'Entrez une Année comprise entre Ex : [1000 , 2010]';
       	}else{
       		$siecle = substr($years, 0,2);
       		$int = (int)$siecle;
       		echo 'Nous sommes au ',$int + 1 ;
       	}

       }

       century('20000')

     ?>

</body>
</html>