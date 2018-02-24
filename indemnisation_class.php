<?php

class Indemnisation {

	/* Attributs */

	/* Nombre de chevaux */
	public $CV;

	/* Distance parcourue */
	public  $DISTANCE;

	public $TAB;


	public function __construct($cv,$d) {

		$this->CV = $cv;
		$this->DISTANCE = $d;

		/* Généaration du tableau avec formule de calcul d'indemnité */
		
		$this->TAB = array (
		
		                            /* -de 5000 km 		       5001  à 20 000km 				       plus de 20 000 */
            array (0.41 *  $this->DISTANCE, (0.245*$this->DISTANCE) + 824, 0.285 * $this->DISTANCE ),           /* 1 CV */
            array (0.41 *  $this->DISTANCE, (0.245*$this->DISTANCE) + 824, 0.285 * $this->DISTANCE ),           /* 2 CV */
            array (0.41 *  $this->DISTANCE, (0.245*$this->DISTANCE) + 824, 0.285 * $this->DISTANCE ),  			/* 3 CV */
			array (0.493 *  $this->DISTANCE, (0.27*$this->DISTANCE) + 1082, 0.332 * $this->DISTANCE ),  		/* 4 CV */
			array (0.543 *  $this->DISTANCE, (0.305*$this->DISTANCE) + 1188, 0.364 * $this->DISTANCE ), 		/*  5CV */
			array (0.568 *  $this->DISTANCE, (0.32*$this->DISTANCE) + 1244, 0.382 * $this->DISTANCE ), 			/* 6 CV */
			array (0.595 *  $this->DISTANCE, (0.337*$this->DISTANCE) + 1288, 0.401* $this->DISTANCE ), 			/* 7 CV */
	
		);
	}
	
	
	public function saisie()
	{
		/* Affiche les informations saisies par l'utilisateur */
		echo "Nombre de chevaux : ".$this->CV."<br> Nombre de kilométre parcouru : ".$this->DISTANCE."<br>";   
	}
	
	
	
	
	public function afficher()
    {
		
		 /* $this->DISTANCE inférieure ou égale à 5000 km */
        if($this->DISTANCE <= 5000)                                                                                                 
        {
			
			 /* Si le nombre de chevaux strictement supérieur à 7  */
            if($this->CV > 7)                                                                                                   
            {
				 /* Affiche l'élement se trouvant à la ligne 6 et la colonne 0 du tableau */
                echo 'Le montant d\'indemnisation est de : '.$this->TAB[6][0].' €';                                                 
            }
            else
            {
				/* Affiche l'élement se trouvant à la ligne nombre de chevaux -1 et la colonne 0 du tableau */
                echo 'Le montant d\'indemnisation est de : '.$this->TAB[$this->CV - 1][0].' €';                                      
            }
        }
		
		 /* $this->DISTANCE entre 5001 et 20 000 km */
        else if ($this->DISTANCE > 5000 AND $this->DISTANCE <= 20000)                                                               
        {
            if($this->CV > 7)
            {
                echo 'Le montant d\'indemnisation est de : '.$this->TAB[6][1].' €';
            }
            else
            {
				 /* Affiche l'élement se trouvant à la ligne nombre de chevaux -1 et la colonne 1 du tableau */
                echo 'Le montant d\'indemnisation est de : '.$this->TAB[$this->CV - 1][1].' €';                                     
            }
        }
		
		/* $this->DISTANCE strictement supérieure à 20 000 km */
        else                                                                                                                          
        {
            if($this->CV > 7)
            {
                echo 'Le montant d\'indemnisation est de : '.$this->TAB[6][2].' €';
            }
            else
            {
			    /* Affiche l'élement se trouvant à la ligne nombre de chevaux -1 et la colonne 2 du tableau */
                echo 'Le montant d\'indemnisation est de : '.$this->TAB[$this->CV - 1][2].' €';                              
            }

        }
    }
}

?>