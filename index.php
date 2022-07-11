<?php

// Richiesta
// Riscrivere questa pagina del sito google
// https://policies.google.com/faq.
// Ci sono diverse domande con relative risposte.
// Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.

$navbar = [
    "Introduzione",
    "Norme sulla privacy",
    "Termini di servizio",
    "Tecnologie",
    "Domande frequenti",
];

$contents = [
    [
        "title" => [
            "tag" => "h2",
            "name" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        ],
        "paragraphs" => [
            "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
            "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
            "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "name" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        ],
        "paragraphs" => [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
            "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.",
            "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "name" => "Perché il mio account è associato a un paese?",
        ],
        "paragraphs" => [
            "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",
            "<ol><li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:<ol><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li><li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol></li><li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li></ol>",
            "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account."
        ]
    ],
    [
        "title" => [
            "tag" => "h3",
            "name" => "Stabilire il paese associato al tuo account",
        ],
        "paragraphs" => [
            "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.",
            "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",
            "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "name" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        ],
        "paragraphs" => [
            "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "name" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        ],
        "paragraphs" => [
            "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
        ]
    ],
];

$footer = [
    "Google",
    "Tutto su Google",
    "Privacy",
    "Termini"
]



?>

<!-- ------------------------------------------------------------------------------------------------ -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid px-4 py-1">
            <a class="navbar-brand">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" height="25">
                <span class="cdTextLogo">Privacy e termini</span>
            </a>
            <div class="d-flex">
                <div class="cdUserPic d-flex justify-content-center align-items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/OOjs_UI_icon_userAvatar.svg" alt="Profile pic">
                </div>
            </div>
        </div>
        <div class="container-fluid px-4 py-1 cdHeaderMenu">
            <div class="d-flex">
                <?php foreach ($navbar as $menuitem) {
                    echo '<a href="#"><span class="pe-5 cdMenuItem">' . $menuitem . '</span></a>';
                } ?>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="container">

        <div class="row py-3">
            <div class="col-8 offset-2">

                <!-- Ciclo ogni sezione -->
                <?php foreach ($contents as $section) { ?>

                    <section>

                        <!-- Ciclo l'array di ogni sezione -->
                        <?php foreach ($section as $key => $value) :

                            // Creo i titoli
                            if ($key === "title") { ?>
                                <<?php echo $value["tag"] ?> class="my-5">
                                    <?php echo $value["name"] ?>
                                </<?php echo $value["tag"] ?>>
                            <?php }

                            // Creo i paragrafi
                            elseif ($key === "paragraphs") {

                                foreach ($value as $paragraph) {
                                    echo '<p class="mb-4">' . $paragraph . '</p>';
                                }; ?>

                            <?php } ?>

                        <?php endforeach; ?>


                    </section>

                <?php } ?>

            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="py-1 bg-secondary bg-opacity-25">
        
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="py-1">
                        <div class="d-flex">
                            <?php foreach ($footer as $menuitem) {
                                echo '<a href="#"><span class="pe-2 cdFooterMenuItem">' . $menuitem . '</span></a>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>

</body>

</html>