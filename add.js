document.querySelectorAll('.add, .remove').forEach(bottone => {
    bottone.addEventListener('click',function(){
        const idVino = this.getAttribute('data-id');

        const azione = this.classList.contains('remove') ? 'remove' : 'add';

        let dati = new FormData();
        dati.append('id',idVino);
        dati.append('action', azione);

        fetch('gestione_carrello.php', {
            method : 'POST',
            body: dati
        })
        .then(response => response.text())
        .then(totalePrezzi => {
            document.querySelector('#carrello-count span').innerText = totalePrezzi;
            
             if(azione === 'add'){
                    this.innerText = "Aggiunto!";
                setTimeout(()=> {this.innerText = "Aggiungi";},1000);
             }    else {
                location.reload();
        }
    })
        .catch(error=>console.error('errore', error));
        
    });

});