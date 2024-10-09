document.addEventListener('DOMContentLoaded', function() {
    const closeButton = document.querySelector('.close-alert');
    const alertRgpd = document.getElementById('rgpdAlert');

    // Vérifier si l'alerte a déjà été affichée
    if (!localStorage.getItem('rgpdAlertDisplayed')) {
        alertRgpd.style.display = 'block'; // Afficher l'alerte
    }

    closeButton.addEventListener('click', function() {
        alertRgpd.style.display = 'none';
        localStorage.setItem('rgpdAlertDisplayed', 'true'); // Mémoriser que l'alerte a été affichée
    });
});