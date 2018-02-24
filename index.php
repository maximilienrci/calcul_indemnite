<!doctype html>
<html>

    <head>

        <meta charset="utf-8" />
		<link rel="stylesheet" href="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Titre</title>

    </head>


    <body>
	
		<form method="POST" action="">
		
			Nombre de CV : <input type="number" name="cv" ><br>
			Nombre de kilomètre parcouru : <input type="number" name="distance"> <br>
			<input type="submit" name="envoyer" value="Envoyer">
			
		</form>
		
		 <?php

			require_once("indemnisation_class.php");
			if(isset($_POST['envoyer']))
            {
                $cv = $_POST['cv'];
                $distance = $_POST['distance'];
                $indemnisation = new Indemnisation ($cv, $distance);
				$indemnisation -> saisie();
                $indemnisation -> afficher();
            }


		?>

		
    </body>

</html>







