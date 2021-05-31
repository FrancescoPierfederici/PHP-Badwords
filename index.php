
<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php

$paragrafo="Mi chiamo Robert Neville, sono un sopravvissuto che vive a New York. Sto trasmettendo su tutte le frequenze in onde medie. Sarò al porto di South Street tutti i giorni, a mezzogiorno quando il sole è più alto nel cielo. Se ci siete, se c'è qualcuno da qualche parte, posso offrire cibo, posso offrire riparo, posso offrire protezione. Se c'è qualcuno, chiunque sia, ti prego non sei solo. La lunghezza della stringa è: ";


echo $paragrafo. " " .strlen($paragrafo) ;
// strlen mi da la lunghezza delle stringhe

$badword= $_GET["badword"];

//ora con la querystring ? la inserisco nell'url insieme a badword= ...inserisco poi la parola che voglio censurare con tre asterischi

// ["badword"] sta per il nome 
echo "<br>";

$newword= str_replace($badword,"***",$paragrafo);
// str_replace mi sostituisce la prima stringa con la seconda stringa nella terza variabile 

echo " ". $newword." ".strlen($newword);

?>