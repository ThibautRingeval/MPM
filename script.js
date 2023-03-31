window.onload = function() {
    let idTache = 1;
  
    function ajouterTache() {
      const tachesContainer = document.querySelector('#taches-container');
  
      // Créer un nouvel élément div pour la nouvelle tâche
      const nouvelleTache = document.createElement('div');
      nouvelleTache.classList.add('col-md-3');
  
      // Définir le contenu HTML de la tâche
      nouvelleTache.innerHTML = `
        <div class="form-group d-flex flex-column">
          <label for="nom${idTache}">Nom de la tâche ${idTache}</label>
          <input type="text" class="form-control" id="nom${idTache}" name="nom${idTache}" required>
          <label for="duree${idTache}">Durée de la tâche ${idTache} (en jours)</label>
          <input type="number" class="form-control" id="duree${idTache}" name="duree${idTache}" required>
          <label for="debut${idTache}">Date de début de la tâche ${idTache}</label>
          <input type="date" class="form-control" id="debut${idTache}" name="debut${idTache}" required>
          <label for="fin${idTache}">Date de fin de la tâche ${idTache}</label>
          <input type="date" class="form-control" id="fin${idTache}" name="fin${idTache}" required>
        </div>
      `;
  
      // Ajouter la nouvelle tâche au conteneur
      tachesContainer.appendChild(nouvelleTache);
  
      // Incrémenter l'id de la prochaine tâche
      idTache++;
    }
  
    const btnAjouterTache = document.querySelector('#btn-ajouter-tache');
    if (btnAjouterTache) {
      btnAjouterTache.addEventListener('click', ajouterTache);
    }
  };
  