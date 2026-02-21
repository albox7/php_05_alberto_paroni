<?php


$numeri = [
	23, 45, 12, 67, 89, 34, 56, 78, 
	91, 33, 22, 57, 49, 62, 18, 74, 
	38, 59, 41, 64, 55, 26, 82, 17
];

$index = 0;


foreach ($numeri as $numero) {
	
	if($numero % 2 == 0) {
		$somma_numeri_pari += $numero; 
		$index++;
	}

}

$media = $somma_numeri_pari / $index;

echo "Somma dei soli numeri pari = " . $somma_numeri_pari . "<br>";
echo "Totale delle cifre pari = " . $index . "<br>";
echo "Calcolo della media = " . $somma_numeri_pari . " / " . $index . "<br>";
echo "Media dei soli numeri pari = " . $media;


?>













