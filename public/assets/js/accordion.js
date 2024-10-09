document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.accordion-tab');
    const contents = document.querySelectorAll('.accordion-content');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Désactiver tous les onglets et contenus
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));
            
            // Activer l'onglet cliqué et son contenu
            this.classList.add('active');
            document.querySelector(`.accordion-content[data-content="${tabId}"]`).classList.add('active');
        });
    });
});