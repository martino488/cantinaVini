Vinili e Vinelli – Wine Management System
L'eccellenza dell'enologia incontra la robustezza del software.

Vinili e Vinelli è una piattaforma E-commerce/Management sviluppata per la gestione e la vendita di vini pregiati. Il progetto integra una logica asincrona per un'esperienza utente fluida e una gestione sicura dei dati lato server.

🚀 Caratteristiche Tecniche
Architettura MVC-lite: Separazione delle logiche di configurazione, gestione dati e visualizzazione.

Carrello Dinamico (AJAX): Implementazione di un sistema di aggiunta prodotti tramite Fetch API e FormData, permettendo l'aggiornamento del contatore in tempo reale senza ricaricamento della pagina.

Persistence Layer: Gestione del carrello tramite sessioni PHP native, garantendo la persistenza dei dati durante la navigazione.

UI/UX Premium: Layout responsivo con estetica "Bordeaux Wine", utilizzo di CSS Grid, Flexbox e componenti interattivi con feedback visivo.

Data Security: Interazione con il DB tramite Prepared Statements (PDO) per la prevenzione di SQL Injection e sanitizzazione degli output contro attacchi XSS.

🛠️ Tech Stack
Backend: PHP 8.x (Session handling, PDO logic).

Frontend: JavaScript (ES6+), HTML5, CSS3 (Custom Variables & Advanced Selectors).

Database: MySQL / MariaDB.

Tools: XAMPP / Apache Environment.

📂 Struttura del Progetto
Plaintext
/vinili-e-vinelli
│
├── config.php          # Configurazione DSN e istanza PDO
├── header.php          # Logica di sessione e Navbar asincrona
├── shop.php            # Vetrina prodotti con data-attributes per JS
├── add.php             # Endpoint API per gestione sessione carrello
├── carrello.php        # Riepilogo ordini con calcolo subtotali e IVA
├── svuota_carrello.php # Script di reset istantaneo della sessione
├── js/
│   └── add.js          # Logica Fetch e manipolazione DOM
└── css/
    ├── shop.css        # Design system e utility classes
    └── carrello.css    # Layout tabelle e formattazione numerica
⚙️ Setup & Configurazione
Database: Eseguire lo script SQL per la creazione della tabella vini (ID, Nome, Anno, Prezzo, Descrizione, Immagine).

Environment: Configurare le costanti di connessione (Host, DB, User, Pass) nel file config.php.

Permissions: Verificare che la directory img/ disponga dei permessi di lettura per la corretta renderizzazione delle etichette.

📝 Roadmap & Sviluppo (Marti's Corner)
Il progetto ha superato la fase di prototipazione core. I prossimi step includono:

[ ] Integrazione di un sistema di checkout con validazione lato server.

[ ] Implementazione di tasti incrementali (+/-) nel carrello con aggiornamento asincrono.

[ ] Area Admin protetta da autenticazione per la gestione dell'inventario.

Rating attuale: 8.5/10 🍷 (Migliorato grazie alla gestione sicura degli ID e al refactoring del carrello).

// AGGIORNAMENTO 
📍 Integrazione Mappa Interattiva
Il progetto utilizza Leaflet.js per geolocalizzare i vini direttamente sulla scheda prodotto.

Tecnologia: Leaflet.js (OpenStreetMap).

Funzionamento: Il sistema recupera le coordinate lat e lon dal database MySQL e le passa al visore JavaScript.

Caratteristiche: * Marker dinamico posizionato sulle coordinate del vigneto.

Popup interattivo con il nome del vino 🍷.

Layout responsivo integrato con CSS Grid
