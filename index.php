<!-- prova script da terminale per inserire nome e cognome e farsi salutare -->
<!-- <?php

$nome = $argv[1];
$cognome = $argv[2];

echo 'ciao ' . $nome . ' ' . $cognome;


?> -->

<!-- Si tratta di un censuratore rudimentale: predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso.
Nome repo: php-badwords  -->

<?php

// dichiaro la variabile con una frase;
$frase = "È la tua ultima occasione, se rinunci non ne avrai altre. Pillola azzurra, fine della storia: domani ti sveglierai in camera tua, e crederai a quello che vorrai. Pillola rossa, resti nel paese delle meraviglie, e vedrai quant'è profonda la tana del bianconiglio. Ti sto offrendo solo la verità, ricordalo. Niente di più.";

// recupero la badword con il GET e la salvo in una variabile;
$badword = $_GET['word'];

// dichiaro la variabile che il cui contenuto andrà a sostituire la badword;
$censored = '***';

// ricompongo la frase sostituendo la badword con gli *** di censura;
$frase_censurata = str_replace($badword, $censored, $frase);

// stampo la frase censurata;
echo $frase_censurata;

// dichiaro variabile per determinare la lunghezza della frase;
$frase_lenght = strlen($frase_censurata);

// stampo la lunghezza della frase;
echo '<br/><br/>Lunghezza frase: ' . $frase_lenght . ' caratteri';
?>

<!-- prova creazione git repo con linux -->
