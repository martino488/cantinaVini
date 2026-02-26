document.querySelectorAll('.add').forEach(bottone => {
    bottone.addEventListener('click',function(){
        const idVino = this.getAttribute('data-id');

        let dati = new FormData();
        dati.append('id',idVino);

        fetch('add.php', {
            method : 'POST',
            body: dati
        })
        .then(response => response.text())
        .then(totalePrezzi => {
            document.querySelector('#carrello-count span').innerText = totalePrezzi;
            
                this.innerText = "Aggiunto!";
                setTimeout(()=> {this.innerText = "Aggiungi";},1000);
        })
        .catch(error=>console.error('errore', error));
        
    })

})