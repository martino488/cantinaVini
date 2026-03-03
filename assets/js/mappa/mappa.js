
document.addEventListener('DOMContentLoaded', function () {
    if (typeof coordVino != 'undefined') {
        var map = L.map('map').setView(coordVino, 13);

        L.tileLayer('https://title.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker(coordVino).addTo(map)
            .bindPopup("zona di produzione")
            .openPopup();
    } else {
        console.error("messaggio di errore");
    }
})

