<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.html');
    exit();
}
if ($_SESSION['admin'] === true) {
    echo "<a href='admin.php'>Pagina di amministrazione</a>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/style.css">
    <title>PWS - <?php echo $_SESSION['email']; ?></title>
</head>

<body>
    <header>
        <h1> Pacchio Web Service </h1>
        <h2>Benvenuto <?php echo $_SESSION['email']; ?></h2>

    </header>
    <p>Questa è la tua pagina personale</p>
    <nav style="text-align: right;">
        <a href="index.php">Home</a>
        <a href="login.html">Login</a>
        <a href="logout.php">Logout</a>
        <a href="servizzi.php">Servizzi</a>
    </nav>
    <br>
    <br>
    <br>
    <article>

        Benvenuti al nostro Web Server

        <br>
        <br>
        <aside style="text-align: center;">
            Inizia a lavorare con PWS oggi stesso<br>
            PWS offre servizi di elaborazione, storage di database, distribuzione di contenuti<br>
            e altre funzionalità, ideali per aiutarti a creare applicazioni sofisticate in modo<br>
            flessibile, scalabile e affidabile<br>
            <a href="servizzi.php">Inizia ad usarlo</a>
        </aside>
        <br>
        <br>
        <section>
            <p>È un piacere averti qui! Siamo felici di offrirti i nostri servizi.</p>
            <p class="warning">Ti ricordiamo che prendere di mira il nostro server non è tollerato.</p>
            <p>Il nostro obiettivo è fornire un'esperienza sicura e affidabile per tutti gli utenti.</p>
            <p>Se hai bisogno di assistenza o hai domande, non esitare a contattarci.</p>
            <p>Grazie per la tua comprensione e collaborazione.</p>
        </section>
    </article>
    <p>
        <br>
        "Benvenuti nel nostro Web Service! Siamo un team di esperti dedicati a fornire soluzioni innovative per le tue esigenze digitali.<br>
        Il nostro servizio offre una vasta gamma di funzionalità e vantaggi che ti aiuteranno a raggiungere i tuoi obiettivi online.<br>
        Con il nostro Web Service, potrai godere di un'esperienza utente intuitiva e user-friendly. Siamo focalizzati sulla facilità d'uso e sull'accessibilità, garantendo che anche gli utenti meno esperti possano trarre vantaggio dai nostri servizi.<br>
        Offriamo una vasta gamma di servizi, tra cui l'archiviazione cloud sicura per i tuoi file sensibili, un potente sistema di filtraggio degli annunci per una navigazione senza interruzioni, un monitoraggio dell'uptime per garantire che il tuo sito web sia sempre online e molto altro ancora.<br>
        La nostra priorità è la sicurezza dei tuoi dati e la protezione della tua privacy. Implementiamo rigorose misure di sicurezza per garantire che le tue informazioni siano al sicuro e rispettiamo rigorosamente le normative sulla privacy.<br>
        Siamo qui per supportarti in ogni fase del tuo percorso digitale. Il nostro team di supporto dedicato è disponibile 24/7 per rispondere alle tue domande e risolvere qualsiasi problema tu possa incontrare.<br>
        Unisciti a noi oggi stesso e scopri come il nostro Web Service può migliorare la tua esperienza online. Siamo pronti ad aiutarti a raggiungere il successo digitale che meriti!"<br>

    </p>
    <footer style="text-align: right;">


        Privacy | Termini di utilizzo del sito | Preferenze cookie | © 2023, Pacchio Web Services, Tutti i diritti riservati.
        <img src="img/pwsLogo.png" alt="PWS Logo" width="100px" height="100px">
    </footer>
</body>

</html>
