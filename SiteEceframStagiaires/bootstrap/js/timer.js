const text = document.querySelector('h5');

function getChrono(){

    const now = new Date().getTime();
    const countdownDate = new Date('July 12, 2021, 14:30:03').getTime(); // Saisir la date/heure de votre choix 

    const distanceBase = countdownDate - now;

    const days = Math.floor(distanceBase / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distanceBase % (1000 * 60 * 60 * 24))/ 
    (1000 * 60 * 60))
    const minutes = Math.floor((distanceBase % (1000 * 60 * 60))/ 
    (1000 * 60))
    const seconds = Math.floor((distanceBase % (1000 * 60)) / 1000);

    text.innerText = `${days}j ${hours}h ${minutes}m ${seconds}s ` ;

    if (distanceBase< 0){
        text.innerText = `Fin de la cagnote`;
    }

}


getChrono()

const countdownInterval = setInterval(() => {

    getChrono()

}, 1000);
