<?php 
$faqs = [
    [
        "domanda" => "Stabilire il paese associato al tuo account",
        "risposta" => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno."
    ],
    [
        "domanda" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        "risposta" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni." 
    ],
    [
        "domanda" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        "risposta" => [
            "La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:",
            "La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali."
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Php faqs</title>
    </head>
    <body>
    <?php foreach( $faqs as $faq ){ ?>
            <h3><?php echo $faq['domanda']; ?></h3>
            <?php if ( !is_array($faq['risposta'])){  ?>
                <p class="par"> <?php echo $faq['risposta']; ?> </p>
            <?php } else {?>
                <ol class="sub_par">
                    <?php foreach ($faq['risposta'] as $subFaq){ ?>
                         <li><?php echo $subFaq ?></li>
                    <?php } ?>
                </ol>
            <?php } ?>
        <?php }?>
    </body>
</html>
