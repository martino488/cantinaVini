🍷 Vinili e Vinelli – Digital Wine Cellar
L'armonia tra il buon vino e il codice pulito
Benvenuti in Vinili e Vinelli, un'applicazione web sviluppata in PHP e MySQL per gestire una collezione di vini con stile e semplicità. Il progetto nasce per unire la passione per l'enologia alla gestione digitale delle scorte.

🚀 Funzionalità Principali
Vetrina Interattiva: Una griglia moderna (CSS Grid) per visualizzare le etichette.

Dettaglio Intelligente: Pagina della cantina con apertura automatica delle descrizioni tramite parametri URL (Settorializzazione).

Gestione Immagini: Sistema di caricamento foto (JPG) con placeholder automatici.

Design Responsivo: Header "Sticky" con effetto vetro sfocato e layout adattabile a smartphone e tablet.

Contatto Diretto: Integrazione mailto per comunicare rapidamente con i fornitori.

🛠️ Tech Stack
Backend: PHP 8.x (utilizzando PDO per connessioni sicure al database).

Database: MySQL.

Frontend: HTML5, CSS3 (Modern Flexbox & Grid).

Sicurezza: Utilizzo di htmlspecialchars() per prevenire attacchi XSS.

📂 Struttura del Progetto
Plaintext
/vinili-e-vinelli
│
├── img/                # Archivio etichette vini
├── config.php          # Connessione al database PDO
├── header.php          # Navbar sticky condivisa
├── index.php           # Gallery dei vini (Vetrina)
├── cantina.php         # Lista dettagliata con descrizioni
├── index.css           # Stili della gallery
└── cantina.css         # Stili specifici della cantina
⚙️ Installazione
Clona la repository.

Importa il database utilizzando la query CREATE TABLE vini (...).

Configura i parametri di accesso in config.php.

Assicurati che la cartella img/ abbia i permessi di scrittura per l'upload.

📝 Note dello Sviluppatore (Marti's Corner)
Questo progetto è in continua evoluzione.

Voto attuale: 8.0/10 🏆

Obiettivo futuro: Implementazione di un sistema di ricerca in tempo reale e autenticazione per l'area admin.

Disclaimer: Nessun programmatore è stato maltrattato durante la stesura del codice, ma diverse bottiglie di Nebbiolo sono state aperte per "testare" l'interfaccia
